<?php
/***********************************************************************

  Copyright (C) 2006-2010  Anders Persson (anders_persson@home.se)

  OpenLD is free software; you can redistribute it and/or
  modify it under the terms of the GNU General Public License
  as published by the Free Software Foundation; either version 2
  of the License, or (at your option) any later version.

  OpenLD is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

************************************************************************/

define('OPENLD_ROOT', './');
require OPENLD_ROOT. 'header.php';
require OPENLD_ROOT. 'include/paylayer/common_pay.php';

//Is used in template and must be declared in order to not generate any error
$success_message = "";

($hook = get_hook('submit_before_payment_check')) ? eval($hook) : null;
//payment processing
if(isset($_GET['action']))
{
	switch($_GET['action'])
	{
		case 'ipn': 
			$pay = new MoneyLayer();
			if ($pay->validate_payment())
			{
				//payment is validated.. we could also email the owner(use the hook for that)
				$query = array(
					'UPDATE' => 'links',
					'SET' => 'payment_status="ok"',
					'WHERE' => 'id='. intval($_GET['id'])
				);
				($hook = get_hook('submit_payment_sql_confirmed')) ? eval($hook) : null;
				$db->query_build($query) or error(__FILE__ ,__LINE__);
				($hook = get_hook('submit_insert_sql_payment_validated')) ? eval($hook) : null; //add an extra db-query
				$f = @fopen(OPENLD_ROOT.'files/success.txt', 'wb');
				fwrite($f, "Success");
				fclose($f);

				//restore the category location, in case of multiple links is going to be submitted in the same category
				$query = array(
					'SELECT' => 'category_id',
					'FROM' => 'links',
					'WHERE' => 'id='. intval($_GET['id'])
				);
				$quer = $db->query_build($query) or error(__FILE__, __LINE__);
				$quer = $db->fetch_row($quer);
				$_GET['cat_id'] = $quer[0];
			}
			else
				$pay->print_log();
			break;
		case 'cancel':
			$success_message = PAYMENT_CANCELLED; break;
		case 'success': 
			$success_message = SUBMIT_SUCCESS; break;
	}
}

($hook = get_hook('submit_before_input_check')) ? eval($hook) : null;
if(!empty($_POST) && (isset($_POST['title']) || isset($_POST['url'])))
{
	$_GET['cat_id'] = (isset($_REQUEST['cat_id']) && is_numeric($_REQUEST['cat_id'])) ? $_REQUEST['cat_id'] : 0;

	$_POST = openld_trim_array($_POST);
	$_REQUEST = openld_trim_array($_REQUEST);
	$_POST['url'] = remove_last_slash($_POST['url']);
	
	if($settings['reciprocal_links_option']=='Y' && $_POST['linktype'] == 'reciprocal')
		$error->check_linktype(check_if_null($_POST['linktype']), $_POST['reciprocal_url']=check_if_null($_POST['reciprocal_url']), check_if_null($_POST['url']));
	else
		$error->check_linktype(check_if_null($_POST['linktype']), null, check_if_null($_POST['url']));

	$error->check_link_email($_POST['email'] = check_if_null($_POST['email']));
	$error->check_name($_POST['name'] = check_if_null($_POST['name']));
	$error->check_link_title($_POST['title'] = check_if_null($_POST['title']));
	$error->check_link_description($_POST['description'] = check_if_null($_POST['description']));
	$error->check_link_url($_POST['url'] = check_if_null($_POST['url']));
	$error->check_link_category_id(check_if_null($_POST['cat_id']));
	
	$if_reciprocal_column_name = ($settings['reciprocal_links_option']=='Y' && $_POST['linktype'] == 'reciprocal') ? ', reciprocal_url' : ''; //goes into the DB.. no lang variable
	$if_reciprocal_column_value = ($settings['reciprocal_links_option']=='Y' && $_POST['linktype'] == 'reciprocal') ? ', '."'".$db->escape($_POST['reciprocal_url'])."'" : ''; //goes into the DB.. no lang variable
	
	//and print to sql
	$if_active_by_default = 0;
	
	($hook = get_hook('submit_input_control')) ? eval($hook) : null;
	if($error->transform_error())
	{
		switch($_POST['linktype'])
		{
			case 'regular' : 
				if($settings['regular_links_option']=='Y') 
					$_POST['linktype']='a'; 
				else
					error("Regular links not supported"); //hacker attempt
				break;
			case 'reciprocal' : 
				if($settings['reciprocal_links_option']=='Y')
					$_POST['linktype']='b'; 
				else
					error("Reciprocal links not supported"); //hacker attempt
				break;
			case 'paid' :
				if($settings['paid_links_option']=='Y')
					$_POST['linktype']='c';
				else
					error("Paid links not supported"); //hacker attempt
				break;
			case 'sponsor' : 
				if($settings['sponsor_links_option']=='Y') 
					$_POST['linktype']='d';
				else
					error("Sponsored links not supported"); //hacker attempt
				break;
			default : error("Link type not supported"); //hacker attempt
		}

		if($_POST['linktype'] == 'c' || $_POST['linktype'] == 'd')
		{
			//Order is successfull, but hasn't yet been confirmed by paypal.. We can let the user to believe that the payment is paid
			
			$query = array(
				'INSERT' => 'name, email, title, url, description, active, category_id, ip, date_submitted, type, payment_status',
				'INTO' => 'links',
				'VALUES' => '"' .$db->escape($_POST['name']). '", "'.$db->escape($_POST['email']).'", "'.$db->escape($_POST['title']).'","'.$db->escape($_POST['url']). '","' .$db->escape($_POST['description']). '", ' .$if_active_by_default. ', ' .intval($_POST['cat_id']). ', "'. $db->escape($_SERVER['REMOTE_ADDR']). '", NOW(), "' .$db->escape($_POST['linktype']). '", "no"'
			);
			($hook = get_hook('submit_payment_sql_insert')) ? eval($hook) : null;
			$db->query_build($query) or error("Writing submit information to database was impossible", __FILE__ ,__LINE__);
			
			($hook = get_hook('submit_insert_sql_payment_successed')) ? eval($hook) : null; //add an extra db-query

			$query = array(
				'SELECT' => 'id',
				'FROM' => 'links',
				'WHERE' => 'email="' .$db->escape($_POST['email']). '" AND title="'. $db->escape($_POST['title']). '" AND category_id="' .intval($_POST['cat_id']). '"'
			);
			($hook = get_hook('submit_payment_sql_select')) ? eval($hook) : null;
			$quer = $db->query_build($query) or error(__FILE__, __LINE__);
			$quer = $db->fetch_row($quer);

			$send_payment = new MoneyLayer();
			$send_payment->add_fields(array(
				'rm' => '2',
				'cmd' => '_xclick',
				'currency_code' => (($_POST['linktype'] == 'c') ? $settings['paid_curr_option'] : $settings['sponsor_curr_option']),
				'business' => (($_POST['linktype'] == 'c') ? $settings['paid_account_option'] : $settings['sponsor_account_option']),
				'return' => $settings['domain']. '/submit.php?action=success&id='. strval($quer[0]),
				'cancel_return' => $settings['domain']. '/submit.php?action=cancel&id='. strval($quer[0]),
				'notify_url' => $settings['domain']. '/submit.php?action=ipn&id='. strval($quer[0]),
				'item_name' => (($_POST['linktype'] == 'c') ? PAID_LINK : SPONSOR_LINK). ': ' .$_POST['url']. '(' .$settings['domain']. ')',
				'amount' => (($_POST['linktype']=='d') ? $settings['sponsor_price_option'] : $settings['paid_price_option']) //dollars.. should be editable from the admin panel
			));

			exit('<html><head><title>'. PROCESSING_PAYMENT .'</title></head><body onLoad="document.form.submit();"><center><h3>' .PROCESSING_PAYMENT_DESCRIPTION. '</h3></center><form method="form" name="form" action="'.$send_payment->form_url.'">' .$send_payment->get_form(). '</form></body></html>');
		}
		else
		{
			$query = array(
				'INSERT' => 'name, email, title, url, description, active, category_id, ip, date_submitted, type, payment_status' .$if_reciprocal_column_name,
				'INTO' => 'links',
				'VALUES' => '"' .$db->escape($_POST['name']). '", "' .$db->escape($_POST['email']). '", "' .$db->escape($_POST['title']). '","' .$db->escape($_POST['url']). '", "' .$db->escape($_POST['description']). '", '.$if_active_by_default. ', ' .intval($_POST['cat_id']) .', "'. $db->escape($_SERVER['REMOTE_ADDR']). '", NOW()' .$if_reciprocal_column_value. ', "' .$db->escape($_POST['linktype']). '", "free"'
			);
			($hook = get_hook('submit_sql')) ? eval($hook) : null;
			$db->query_build($query) or error("Writing submit information to database was impossible", __FILE__ ,__LINE__);
			$success_message = SUBMIT_SUCCESS;
			($hook = get_hook('submit_insert_sql')) ? eval($hook) : null; //add an extra db-query
		}
	}
	elseif($error->transform_error() == false)
		($hook = get_hook('submit_input_control_failed')) ? eval($hook) : null;
}

$page = "submit.php";
($hook = get_hook('submit_before_page')) ? eval($hook) : null;
require OPENLD_ROOT.'footer.php';