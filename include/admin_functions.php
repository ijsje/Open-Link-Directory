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

//Make sure no one tries to access this file directly
if(!defined("OPENLD_ROOT"))
	error("You are not allowed to access this file directly", __FILE__, __LINE__);

$openld_url['page'] = "&amp;page=#1";


/**********

Now we are gonna do some edit.
The main reason I do them here in the admin_function.php page instead of
separate is because these functions are simple and can be implemented within pages
and still display the active category in the sidebar

**********/


//delete functions ready
function delete_category($id)
{
	global $db;
	//get all subcategories
	$categories = array(0 => $id);
	while(count($categories) > 0)
	{
		$current_id = array_pop($categories);

		$query = array(
			'DELETE' => 'links',
			'WHERE' => 'category_id=' .intval($current_id)
		);
		($hook = get_hook('admin_functions_delete_category_remove_links')) ? eval($hook) : null;
		$db->query_build($query) or error ("Couldn't delete links where category_id=".$current_id, __FILE__, __LINE__);

		$query = array(
			'DELETE' => 'categories',
			'WHERE' => 'id=' .intval($current_id)
		);
		($hook = get_hook('admin_functions_delete_category_remove_categories')) ? eval($hook) : null;
		$db->query_build($query) or error ("Couldn't delete categories where id=".$current_id, __FILE__, __LINE__);

		//Keep the loop alive
		$query = array(
			'SELECT' => 'id',
			'FROM' => 'categories',
			'WHERE' => 'father_id=' .intval($current_id)
		);
		($hook = get_hook('admin_functions_delete_category_select_categories')) ? eval($hook) : null;
		$results = $db->query_build($query) or error("Couldn't make the delete-select where id=".$current_id, __FILE__, __LINE__);
		while($rows = $db->fetch_assoc($results))
			$categories[] = $rows['id'];
	}
}


function delete_link($id)
{
	global $db;

	$query = array(
		'DELETE' => 'links',
		'WHERE' => 'id=' .intval($id)
	);
	($hook = get_hook('admin_functions_delete_link_before_sql')) ? eval($hook) : null;
	$db->query_build($query) or error("Couldn't delete link", __FILE__, __LINE__);
	($hook = get_hook('admin_functions_delete_link_after_sql')) ? eval($hook) : null;
}


function edit_a_category($category_id, $page, $id)
{
	global $db, $error;

	//$error->check_category_title($_POST['edit_cat_title'] = check_if_null($_POST['edit_cat_title']), check_if_null($id));
	$error->check_category_id(check_if_null($id));
	$error->check_category_id(check_if_null($_POST['new_id']));

	($hook = get_hook('admin_functions_edit_a_category_check')) ? eval($hook) : null;
	if($error->transform_error())
	{
		$query = array(
			'UPDATE' => 'categories',
			'SET' => 'title="' .$db->escape($_POST['edit_cat_title']). '", description="' .$db->escape($_POST['edit_cat_description']). '", father_id="' .intval($_POST['new_id']). '"',
			'WHERE' => 'id=' .intval($id)
		);
		($hook = get_hook('admin_functions_edit_a_category_before_sql')) ? eval($hook) : null;
		$db->query_build($query) or error(__FILE__, __LINE__);
		($hook = get_hook('admin_functions_edit_a_category_after_sql')) ? eval($hook) : null;
	}
	else
	{
		($hook = get_hook('admin_functions_edit_a_category_before_return')) ? eval($hook) : null;
		$_REQUEST['edit_cat'] = $id;
		($hook = get_hook('admin_functions_edit_a_category_after_return')) ? eval($hook) : null;
	}
}


function edit_a_link($category_id, $page, $id)
{
	global $db, $error;

	//$error->check_link_title($_POST['link_title'] = check_if_null($_POST['link_title']));
	//$error->check_link_name(check_if_null($_POST['name_title']));
	//$error->check_link_email(check_if_null($_POST['email_title']));
	//Admin should not be forced to enter an email/name
	$error->check_url($_POST['link_url'] = check_if_null($_POST['link_url'])); //should not be check_url since it will then be impossible to update without changing the current url
	//Admin should not be forced to enter a description
	//$error->check_link_description(check_if_null($_POST['link_description']));

	//print to SQL
	($hook = get_hook('admin_functions_edit_a_link_check')) ? eval($hook) : null;
	if($error->transform_error())
	{
		$_POST['payment_pending'] = (isset($_POST['payment_pending']) || $_POST['link_type'] == 'a' || $_POST['link_type'] == 'b') ? 'ok' : 'no';

		$query = array(
			'UPDATE' => 'links',
			'SET' => 'title="' .$db->escape($_POST['link_title']). '",
				description="' .$db->escape($_POST['link_description']). '",
				email="' .$db->escape($_POST['email_title']). '",
				name="' .$db->escape($_POST['name_title']). '",
				url="' .$db->escape($_POST['link_url']). '",
				type="' .$db->escape($_POST['link_type']). '",
				category_id="' .$db->escape($_POST['new_cat_id']). '",
				payment_status="' .$_POST['payment_pending']. '",
				reciprocal_url="' .$db->escape($_POST['reciprocal_url']). '"',
			'WHERE' => 'id=' .intval($id)
		);
		($hook = get_hook('admin_functions_edit_a_link_before_sql')) ? eval($hook) : null;
		$db->query_build($query) or error(__FILE__, __LINE__);
		($hook = get_hook('admin_functions_edit_a_link_after_sql')) ? eval($hook) : null;
	}
	else
	{
		($hook = get_hook('admin_functions_edit_a_link_before_return')) ? eval($hook) : null;
		$_REQUEST['edit_link'] = $id;
		($hook = get_hook('admin_functions_edit_a_link_after_return')) ? eval($hook) : null;
	}
}


function move_link($category_id, $page, $id, $to_parent)
{
	global $error;
	$error->check_link_category_id(check_if_null($id));
	$error->check_link_category_id(check_if_null($to_parent));
	($hook = get_hook('admin_functions_move_link_check')) ? eval($hook) : null;
	if($error->transform_error())
	{
		global $db;
		$query = array(
			'UPDATE' => 'links',
			'SET' => 'category_id=' .intval($to_parent),
			'WHERE' => 'id=' .intval($id)
		);
		($hook = get_hook('admin_functions_move_link_before_sql')) ? eval($hook) : null;
		$db->query_build($query) or error("Couldn't move links", __FILE__, __LINE__);
		($hook = get_hook('admin_functions_move_link_after_sql')) ? eval($hook) : null; //delete this hooks that appears after query_build?
	}
	else
	{
		($hook = get_hook('admin_functions_move_link_before_return')) ? eval($hook) : null;
		$_REQUEST['move_link'] = $id;
		($hook = get_hook('admin_functions_move_link_after_return')) ? eval($hook) : null;
	}
}


function move_category($category_id, $page, $id, $to_parent)
{
	global $error;
	$error->check_category_id(check_if_null($id));
	$error->check_category_id(check_if_null($to_parent));
	($hook = get_hook('admin_functions_move_category_check')) ? eval($hook) : null;
	if($error->transform_error())
	{
		global $db;
		$query = array(
			'UPDATE' => 'categories',
			'SET' => 'father_id=' .intval($to_parent),
			'WHERE' => 'id=' .intval($id)
		);
		($hook = get_hook('admin_functions_move_category_before_sql')) ? eval($hook) : null;
		$db->query_build($query) or error("Couldn't move categories", __FILE__, __LINE__);
		($hook = get_hook('admin_functions_move_category_after_sql')) ? eval($hook) : null;
	}
	else
	{
		($hook = get_hook('admin_functions_move_category_before_return')) ? eval($hook) : null;
		$_REQUEST['move_cat'] = $id;
		($hook = get_hook('admin_functions_move_category_after_return')) ? eval($hook) : null;
	}
}


//Accept functions
function accept_link($id)
{
	global $db;

	$query = array(
		'UPDATE' => 'links',
		'SET' => 'active=1',
		'WHERE' => 'id=' .intval($id)
	);
	($hook = get_hook('admin_functions_accept_link_before_sql')) ? eval($hook) : null;
	$db->query_build($query) or error("Couldn't accept link", __FILE__, __LINE__);
	($hook = get_hook('admin_functions_accept_link_after_sql')) ? eval($hook) : null;
}


function accept_category($id)
{
	global $db;
	$query = array(
		'UPDATE' => 'categories',
		'SET' => 'active=1',
		'WHERE' => 'id=' .intval($id)
	);
	($hook = get_hook('admin_functions_accept_category_before_sql')) ? eval($hook) : null;
	$db->query_build($query) or error("Couldn't accept category", __FILE__, __LINE__);
	($hook = get_hook('admin_functions_accept_category_after_sql')) ? eval($hook) : null;
}


//Unaccept functions
function unaccept_link($id)
{
	global $db;
	$query = array(
		'UPDATE' => 'links',
		'SET' => 'active=0',
		'WHERE' => 'id='. intval($id)
	);
	($hook = get_hook('admin_functions_unaccept_link_before_sql')) ? eval($hook) : null;
	$db->query_build($query) or error("Couldn't unaccept link", __FILE__, __LINE__);
}


function unaccept_category($id)
{
	global $db;
	$query = array(
		'UPDATE' => 'categories',
		'SET' => 'active=0',
		'WHERE' => 'id=' .intval($id)
	);
	($hook = get_hook('admin_functions_unaccept_category_before_sql')) ? eval($hook) : null;
	$db->query_build($query) or error("Couldn't unaccept category", __FILE__, __LINE__);
}


function add_a_link($category_id)
{
	global $db, $error;

	//$error->check_link_title($_POST['link_title'] = check_if_null($_POST['link_title']));
	$error->check_url($_POST['link_url'] = check_if_null($_POST['link_url']));
	//Admin should not be forced to enter a description
	//$error->check_link_description(check_if_null($_POST['link_description']));
	($hook = get_hook('admin_functions_add_a_link_check')) ? eval($hook) : null;
	if($error->transform_error())
	{
		$query = array(
			'INSERT' => 'name, email, title, url, description, active, category_id, ip, date_submitted, payment_status, type',
			'INTO' => 'links',
			'VALUES' => '"", "", "' .$db->escape($_POST['link_title']). '", "' .$db->escape($_POST['link_url']). '", "' .$db->escape($_POST['link_description']). '", 1, ' .intval($category_id). ', "", NOW(), "admin", "a"'
		);
		($hook = get_hook('admin_functions_add_a_link_before_sql')) ? eval($hook) : null;
		$db->query_build($query) or error(__FILE__, __LINE__);
		($hook = get_hook('admin_functions_add_a_link_after_sql')) ? eval($hook) : null;
	}
	else
	{
		($hook = get_hook('admin_functions_add_a_link_before_return')) ? eval($hook) : null;
		$_REQUEST['add_link'] = $category_id;
		($hook = get_hook('admin_functions_add_a_link_after_return')) ? eval($hook) : null;
	}
}


function add_a_category($category_id)
{
	global $db, $error;
	//$error->check_category_title($_REQUEST['category_title'] = check_if_null($_REQUEST['category_title']), check_if_null($category_id));
	//Admin should not be forced to enter a description
	//$error->check_category_description(check_if_null($_REQUEST['category_description']));
	$error->check_category_id(check_if_null($category_id));
	($hook = get_hook('admin_functions_add_a_category_check')) ? eval($hook) : null;
	if($error->transform_error())
	{
		$query = array(
			'INSERT' => 'title, description, active, father_id, created',
			'INTO' => 'categories',
			'VALUES' => '"' .$db->escape($_REQUEST['category_title']). '", "'
				.$db->escape($_REQUEST['category_description']). '",1, '
				.intval($category_id). ', NOW()'
		);
		($hook = get_hook('admin_functions_add_a_category_before_sql')) ? eval($hook) : null;
		$db->query_build($query) or error(__FILE__, __LINE__);
		($hook = get_hook('admin_functions_add_a_category_after_sql')) ? eval($hook) : null;
	}
	else
	{
		($hook = get_hook('admin_functions_add_a_category_before_return')) ? eval($hook) : null;
		$_REQUEST['add_cat'] = $category_id;
		($hook = get_hook('admin_functions_add_a_category_after_return')) ? eval($hook) : null;
	}
}


function change_link_position($link_id, $new_pos)
{
	global $error;
	$error->check_link_id($link_id);
	$error->numeric_control('pos_warning', $new_pos, POSITION_NOT_A_NUMBER);
	($hook = get_hook('admin_functions_change_link_position_check')) ? eval($hook) : null;
	if($error->transform_error())
	{
		$query = array(
			'UPDATE' => 'links',
			'SET' => 'position=' .intval($new_pos),
			'WHERE' => 'id=' .intval($link_id)
		);
		($hook = get_hook('admin_functions_change_link_position_before_sql')) ? eval($hook) : null;
		$db->query_build($query) or error(__FILE__, __LINE__);
		($hook = get_hook('admin_functions_change_link_position_after_sql')) ? eval($hook) : null;
	}
	else
		error("Error when changing link position.. $error = " .var_export($error), __FILE__, __LINE__);
}


function change_category_position($cat_id, $new_pos)
{
	global $db, $error;
	$error->check_category_id($cat_id);
	$error->numeric_control('pos_warning', $new_pos, POSITION_NOT_A_NUMBER);
	($hook = get_hook('admin_functions_change_category_position_check')) ? eval($hook) : null;
	if($error->transform_error())
	{
		$query = array(
			'UPDATE' => 'categories',
			'SET' => 'position=' .intval($new_pos),
			'WHERE' => 'id=' .intval($cat_id)
		);
		($hook = get_hook('admin_functions_change_category_position_before_sql')) ? eval($hook) : null;
		$db->query_build($query) or error(__FILE__, __LINE__);
		($hook = get_hook('admin_functions_change_category_position_after_sql')) ? eval($hook) : null;
	}
	else
		error("Error when changing category position.. $error = " .var_export($error), __FILE__, __LINE__);
}
