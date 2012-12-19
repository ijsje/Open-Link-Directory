<?php 
/***********************************************************************

  Copyright (C) 2006  Rickard Andersson (rickard@punbb.org)
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
require OPENLD_ROOT.'admin_header.php';

//currency array
$currency = array(
	'USD' => 'US Dollar',
	'CAD' => 'Canadian Dollar',
	'EUR' => 'EU Euros',
	'GBP' => 'British Pound',
	'JPY' => 'Japanese Yen',
	'AUD' => 'Australian Dollar',
	'CHF' => 'Swiss Franc',
	'NOK' => 'Norwegian Kroner',
	'SEK' => 'Swedish Kronor',
	'PLN' => 'Polish Zloty',
	'HUF' => 'Hungarian Forint',
	'CZK' => 'Czech Koruna',
	'SGD' => 'Singapore Dollar',
	'NZD' => 'New Zealand Dollar',
);

($hook = get_hook('admin_options_before_input_check')) ? eval($hook) : null;
if(!empty($_POST) && (!isset($_POST['password']) || !isset($_POST['confirm_new_password'])))
{
	$_POST = openld_trim_array($_POST);
	$_POST['reciprocal_links'] = isset($_POST['reciprocal_links']) ? 'Y' : 'N';
	$_POST['regular_links'] = isset($_POST['regular_links']) ? 'Y' : 'N';
	$_POST['paid_links'] = isset($_POST['paid_links']) ? 'Y' : 'N';
	$_POST['sponsored_links'] = isset($_POST['sponsored_links']) ? 'Y' : 'N';
	$_POST['disable_extensions'] = isset($_POST['disable_extensions']) ? 'Y' : 'N';
	$_POST['gzip'] = isset($_POST['gzip']) ? 'Y' : 'N';
	$_POST['hide_admin_button'] = isset($_POST['hide_admin_button']) ? 'Y' : 'N';
	$_POST['deny_index_page_submissions'] = isset($_POST['deny_index_page_submissions']) ? 'Y' : 'N';
	$_POST['display_unaccepted_links'] = isset($_POST['display_unaccepted_links']) ? 'Y' : 'N';
	$_POST['open_links_in_new_windows'] = isset($_POST['open_links_in_new_windows']) ? 'Y' : 'N';

	// Make sure that base_url doesn't end with a slash
	$_POST['domain_name_or_path'] = remove_last_slash($_POST['domain_name_or_path']);
	
	$error->check_email($_POST['admin_email'] = check_if_null($_POST['admin_email']));
	//$error->check_admin_title(check_if_null($_POST['admin_title']));
	//Admin should not be forced to enter a description
	//$error->check_admin_description(check_if_null($_POST['site_description']));
	$error->check_site_path(check_if_null($_POST['domain_name_or_path']));
	$error->check_language_preference(check_if_null($_POST['language']));
	$error->check_links_sorted_by(check_if_null($_POST['links_sorted_by']));
	$error->check_column_number(check_if_null($_POST['number_of_columns']));
	$error->check_links_per_page(check_if_null($_POST['links_per_page']));
	$error->numeric_control('search_volume_warning', check_if_null($_POST['number_of_search_results_per_page']), SEARCH_OPTION_WARNING);
	$error->check_maximum_vs_minimum_link_description(
		check_if_null($_POST['admin_max_description__link']), 
		check_if_null($_POST['admin_min_description__link'])
	);
	$error->check_maximum_vs_minimum_category_description(
		check_if_null($_POST['admin_max_description_category']),
		check_if_null($_POST['admin_min_description_category'])
	);
	($hook = get_hook('admin_options_check')) ? eval($hook) : null;
	// now.. print out the SQL
	if($error->transform_error())
	{
		($hook = get_hook('admin_options_before_insert_sql')) ? eval($hook) : null;

		if($_POST['rewrite_scheme'] !== 'off')
		{
			//we need the $dot_htaccess of the selected seflayer, which will later be inserted.
			require OPENLD_ROOT. 'include/seflayer/' .$_POST['rewrite_scheme']. '.php';

			($hook = get_hook('admin_options_rewrite')) ? eval($hook) : null;

			$fh = @fopen(OPENLD_ROOT.'.htaccess', 'wb');
			if (!$fh)
				error("Couldn't edit .htaccess.. check permissions in the root directory");

			fwrite($fh, $dot_htaccess);
			fclose($fh);
		}
		elseif($_POST['rewrite_scheme'] == 'off' && file_exists(OPENLD_ROOT.'.htaccess'))
			if(!unlink(OPENLD_ROOT.'.htaccess'))
				error("Couldn't delete the .htaccess file");
		
		$config = array(
			'admin_username' => $db->escape($_POST['admin_username']),
			'email' => $db->escape($_POST['admin_email']),
			'title' => $db->escape($_POST['admin_title']),
			'description' => $db->escape($_POST['site_description']),
			'domain' => $db->escape($_POST['domain_name_or_path']),
			'language' => $db->escape($_POST['language']),
			'rewrite_layer' => $db->escape($_POST['rewrite_scheme']),
			'reciprocal_links_option' => $db->escape($_POST['reciprocal_links']),
			'reciprocal_url_option' => $db->escape($_POST['reciprocal_url']),
			'regular_links_option' => $db->escape($_POST['regular_links']),
			'paid_links_option' => $db->escape($_POST['paid_links']),
			'paid_price_option' => $db->escape($_POST['paid_price']),
			'paid_curr_option' => $db->escape($_POST['paid_curr']),
			'paid_account_option' => $db->escape($_POST['paid_account']),
			'sponsor_links_option' => $db->escape($_POST['sponsored_links']),
			'sponsor_price_option' => $db->escape($_POST['sponsor_price']),
			'sponsor_curr_option' => $db->escape($_POST['sponsor_curr']),
			'sponsor_account_option' => $db->escape($_POST['sponsor_account']),
			'links_sorting_by' => $db->escape($_POST['links_sorted_by']),
			'categories_sorting_by' => $db->escape($_POST['categories_sorted_by']),
			'number_of_colums' => intval($_POST['number_of_columns']),
			'number_of_links_per_page' => intval($_POST['links_per_page']),
			'link_description_max_length' => intval($_POST['admin_max_description__link']),
			'link_description_min_length' => intval($_POST['admin_min_description__link']),
			'category_description_max_length' => intval($_POST['admin_max_description_category']),
			'category_description_min_length' => intval($_POST['admin_min_description_category']),
			'disable_extensions' => $db->escape($_POST['disable_extensions']),
			'gzip' => $db->escape($_POST['disable_extensions']),
			'hide_admin_button' => $db->escape($_POST['hide_admin_button']),
			'deny_index_page_submissions' => $db->escape($_POST['deny_index_page_submissions']),
			'display_unaccepted_links' => $db->escape($_POST['display_unaccepted_links']),
			'open_links_in_new_windows' => $db->escape($_POST['open_links_in_new_windows']),
			'number_of_search_results_per_page' => $db->escape($_POST['number_of_search_results_per_page'])
		);
		($hook = get_hook('admin_options_while_update')) ? eval($hook) : null;
		while(list($conf_name, $conf_value) = @each($config))
		{
			$query = array(
				'UPDATE' => 'settings',
				'SET' => 'value="' .$conf_value. '"',
				'WHERE' => 'title="' .$conf_name. '"'
			);
			($hook = get_hook('admin_options_sql')) ? eval($hook) : null;
			$db->query_build($query) or error("name: " .$conf_name. " value: " .$conf_name, __FILE__, __LINE__);

			/****
				ADD A SETTING, can be useful for db upgrades.
			*****
			if($db->affected_rows() == 0)
			{
				$query = array(
					'INSERT' => 'title, value',
					'INTO' => 'settings',
					'VALUES' => '"' .$conf_name. '", "' .$conf_value. '"'
				); 
				$db->query_build($query) or error(__FILE__, __LINE__);
			}
			****/
		}
		generate_settings_cache();
		($hook = get_hook('admin_options_after_insert_sql')) ? eval($hook) : null;
		redirect($settings['domain']."/admin_options.php");
	}
	else
	{
		//some value was probably incorrect
		($hook = get_hook('admin_options_if_error')) ? eval($hook) : null;
	}
}
elseif((isset($_POST['password']) || isset($_POST['confirm_new_password'])))
{
	if($_POST['password'] == $_POST['confirm_new_password'])
		$error->check_new_password($_POST['password']);
	else
		$error->set_warning('retype_warning', WRONG_PASSWORD_CONFIRMATION);

	if($error->transform_error())
	{
		$query = array(
			'UPDATE' => 'settings',
			'SET' => 'value="'. openld_hash($_POST['password']). '"',
			'WHERE' => 'title="admin_password"'
		);
		($hook = get_hook('admin_options_update_password_sql')) ? eval($hook) : null;
		$db->query_build($query) or error(__FILE__, __LINE__);
		generate_settings_cache();
	}
	else
		$back_to_form = true;
}
//else: print "the option form is empty";

($hook = get_hook('admin_options_after_input_check')) ? eval($hook) : null;

$page = 'admin/admin_options.php';
require OPENLD_ROOT.'admin_footer.php';
