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


function microtime_float()
{
	list($usec, $sec) = explode(" ", microtime());
	return ((float)$usec + (float)$sec);
}


function have_db()
{
	if(function_exists('mysql_connect') || function_exists('mysqli_connect') || 
		function_exists('pg_connect') || function_exists('sqlite_open'))
		return true;
	else
		return false;
}


function is_correct_file_permission($filename)
{
	if(is_array($filename))
		return array_walk($filename, 'is_correct_file_permission');
	else
		return is_writable($filename);
}

$time_start = microtime_float();

$settings['language'] = "english";

// The root-control
define('OPENLD_ROOT', '../');

// Debug mode should allways be on in the installation
define('OPENLD_DEBUG', 1);

// Make sure OpenLD isn't already installed
if (file_exists(OPENLD_ROOT.'files/config.php'))
	exit('The files/config.php file already exists which means that OpenLD is already installed. For a new installation, remove the config.php file from the files/ folder');

//this will fix doubleslash issues for some people
$_SERVER['PHP_SELF'] = str_replace('//', '/', $_SERVER['PHP_SELF']);

// Load functions for installing default extensions
require OPENLD_ROOT. 'include/cache.php';
require OPENLD_ROOT. 'include/xml.php';

// Load other functions
require OPENLD_ROOT. 'include/functions.php';
require OPENLD_ROOT. 'include/form_validator_class.php';

// Reverse the effect of register_globals, good for security reasons
if (@ini_get('register_globals'))
	openld_unregister_globals();

// Make sure PHP reports all errors except E_NOTICE. OPENLD supports E_ALL, but a lot of scripts it may interact with, do not.
error_reporting(E_ALL);

//set template path as default since there's no existing settings that can catch a template folder
$settings['template_path'] = "default/";

// Load the install language file
require OPENLD_ROOT.'lang/'. $settings['language']. '/lang_install.php';


//Throw out people with wrong PHP version
if (!function_exists('version_compare') || version_compare(PHP_VERSION, '4.3.0', '<'))
	exit(WRONG_PHP_VERSION);


// Magic quotes are deprecated as of 5.3.0 and removed in 6.0.0
if (version_compare(PHP_VERSION, '5.3.0', '<'))
{
	// Turn off magic_quotes_runtime
	if (get_magic_quotes_runtime())
		set_magic_quotes_runtime(0);

	// Strip slashes from GET/POST/COOKIE (if magic_quotes_gpc is enabled)
	if (get_magic_quotes_gpc())
	{
		function stripslashes_array($array)
		{
			return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array);
		}

		$_GET = stripslashes_array($_GET);
		$_POST = stripslashes_array($_POST);
		$_COOKIE = stripslashes_array($_COOKIE);
	}
}


$success = true;
if(isset($_POST['license']) || isset($_POST['permissions']))
{
	$permission_files = array('../', '../cache', '../files');
	$permission = array();

	if(is_correct_file_permission($permission_files) && isset($_POST['permissions']) &&$_POST['permissions'] == CONTINUE_)
		$page = 'configurations.php';
	else
	{
		foreach($permission_files as $perm_file)
		{
			if(is_correct_file_permission($perm_file))
				$permission[$perm_file] = 'ok';
			else
			{
				@chmod($perm_file, get_filepermission());
				if(is_correct_file_permission($perm_file))
					$permission[$perm_file] = 'ok';
				else
				{
					$permission[$perm_file] = '<b>' .CHMOD_WARNING. '</b>';
					$success = false;
				}
			}
		}
		$page = 'permissions.php';
	}
}
elseif(isset($_POST['configurations']))
{
	$_POST['admin_username'] = openld_trim($_POST['admin_username']);
	$_POST['admin_password'] = openld_trim($_POST['admin_password']);
	$_POST['admin_email'] = strtolower(openld_trim($_POST['admin_email']));
	$_POST['site_title'] = openld_trim($_POST['site_title']);
	$_POST['site_description'] = openld_trim($_POST['site_description']);
	$error->check_new_username_vs_password(check_if_null($_POST['admin_username']), check_if_null($_POST['admin_password']));
	$error->check_email(check_if_null($_POST['admin_email']), false);
	//$error->check_admin_title(check_if_null($_POST['site_title']));
	//$error->check_admin_description(check_if_null($_POST['site_description']));
	$error->check_site_path(check_if_null($_POST['site_domain']));
	$error->string_control('ext_error', check_if_null($_POST['db_extension']), EXTENSION_ERROR);
	$error->string_control('host_error', check_if_null($_POST['db_host']), HOST_ERROR);
	$error->string_control('name_error', check_if_null($_POST['db_name']), NAME_ERROR);
	$error->string_control('username_error', check_if_null($_POST['db_username']), USERNAME_ERROR);
	$error->string_control('password_error', check_if_null($_POST['db_password']), PASSWORD_ERROR);
	$error->string_control('prefix_error', check_if_null($_POST['db_prefix']), PREFIX_ERROR);


	switch($_POST['db_extension'])
	{
		case 'mysqli':
		case 'mysqli_innodb':
			if (!function_exists('mysqli_connect'))
				$error->set_warning('ext_error', NO_VALID_DB_SELECTED);
			break;
		case 'mysql':
		case 'mysql_innodb':
			if (!function_exists('mysql_connect'))
				$error->set_warning('ext_error', NO_VALID_DB_SELECTED);
			break;
		case 'sqlite':
			if (!function_exists('sqlite_open'))
				$error->set_warning('ext_error', NO_VALID_DB_SELECTED);
			break;
		case 'pgsql':
			if (!function_exists('pg_connect'))
				$error->set_warning('ext_error', NO_VALID_DB_SELECTED);
			break;
		default: return false;
	}


	if($error->transform_error())
	{
		$fh = @fopen(OPENLD_ROOT.'files/config.php', 'wb');
		if (!$fh)
			error('Unable to write files/config.php file. Please make sure PHP has write access to files/config.php', __FILE__, __LINE__);
		fwrite($fh, '<?php'."\n\n\$db_type = '".$_POST['db_extension']."';\n\$db_host = '" .$_POST['db_host']. "';\n\$db_name = '" .$_POST['db_name']. "';\n\$db_username = '" .$_POST['db_username']. "';\n\$db_password = '" .$_POST['db_password']. "';\n\$db_prefix = '" .$_POST['db_prefix']. "';\n\n".'?>');
		fclose($fh);

		require OPENLD_ROOT.'files/config.php';
		require OPENLD_ROOT.'include/dblayer/common_db.php';

		//Everything is correct
		require("install_sql.php");
		$page ='finish.php';
	}
	else
		$page = 'configurations.php';
}
else
	$page = 'license.php';

require(OPENLD_ROOT .'themes/default/install/header.php');
require(OPENLD_ROOT .'themes/default/install/'. $page);
require(OPENLD_ROOT .'themes/default/install/footer.php');
