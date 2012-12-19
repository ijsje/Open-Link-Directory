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

session_start();
define('OPENLD_ROOT', './');
require(OPENLD_ROOT. "header.php");

($hook = get_hook('admin_login_before_check_if')) ? eval($hook) : null;
if(isset($_POST['username']))
{
	if($settings['admin_username'] == $_POST['username'] && $settings['admin_password'] == openld_hash($_POST['password']))
	{
		//declare two session variables and assign them
		$_SESSION['user_name'] = $_POST['username'];
		redirect($settings['domain']."/admin_information.php");
	}
	else
	{
		if($settings['admin_username'] != $_POST['username'] && $settings['admin_password'] == openld_hash($_POST['password']))
			$error_login = INCORRECT_USERNAME_ERROR;
		elseif($settings['admin_username'] == $_POST['username'] && $settings['admin_password'] != openld_hash($_POST['password']))
			$error_login = INCORRECT_PASSWORD_ERROR;
		elseif($settings['admin_username'] != $_POST['username'] && $settings['admin_password'] != openld_hash($_POST['password']))
			$error_login = USERNAME_AND_PASSWORD_INCORRECT;
		else
			error("Of some unknown reason, you can't login.");
	}
}
($hook = get_hook('admin_login_after_check_if')) ? eval($hook) : null;

$page = "admin/admin_login.php";

/*
 *  We need to include the admin template path, since this file is in the admin theme folder.
 *  In order to do so, we have to create a unique footer
 */

//<footer>
$queries = defined("OPENLD_SHOW_QUERIES") ? display_saved_queries(2) : '';
$page_generation = defined("OPENLD_DEBUG") ? PAGE_GENERATED_IN. strval(round(microtime_float() - $time_start, 2)). SECONDS : '';

require OPENLD_ROOT .'themes/' .$settings['admin_template_path']. 'admin/admin_header.php';
require OPENLD_ROOT .'themes/' .$settings['admin_template_path']. $page;
require OPENLD_ROOT .'themes/' .$settings['admin_template_path']. 'admin/admin_footer.php';
//</footer>

function send_password_email()
{
	global $settings;
	if($settings['email'] == $_REQUEST['email'])
		$send_to = array('username' => $settings['admin_username'], 'email' => $settings['email'], 'password' => $settings['admin_password']);

	if(isset($send_to))
	{
		mail($_REQUEST['email'], "Your account details", USERNAME_LABEL. ":" .$send_to['username']. "\n\n" .FORGOT_MAIL. "\n" .$settings['domain']. "/admin_login.php?action=forgot&user=" .$send_to['username']. "&old_pw=". $send_to['password'] , "From: your@directory.com");
		echo PASSWORD_SENT;
	}
	else
		echo MAIL_NOT_FOUND_IN_DB;
}

function get_new_password()
{
	global $settings;

	if($settings['admin_username'] == $_REQUEST['user'] && $settings['admin_password'] == $_REQUEST['old_pw'])
	{
		$new_password = random_key(8, true);
		$query = array(
			'UPDATE' => 'settings',
			'SET' => 'value="' .openld_hash($new_password). '"',
			'WHERE' => 'title="admin_password"'
		);
		($hook = get_hook('admin_login_get_password_settings_sql')) ? eval($hook) : null;
		$db->query_build($query);
		generate_settings_cache();
		echo NEW_PASSWORD. ":" .$new_password;
	}
	else error("Invalid password request");
}
