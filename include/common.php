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

// Make sure PHP reports errors ASAP
error_reporting(E_ALL);

// Enable DEBUG mode by removing // from the following line
//define('OPENLD_DEBUG', 1);
define('OPENLD_VERSION', "1.2.32");

// This displays all executed queries in the page footer.
// define('OPENLD_SHOW_QUERIES', 1);

// Force POSIX locale to preventing functions like strtolower to mess up the UTF code
setlocale(LC_CTYPE, 'C'); 

if (!defined('OPENLD_ROOT'))
	exit('The constant OPENLD_ROOT must be defined and point to a valid OPENLDBB installation root directory.');

// Load the functions script - needs to load before use of redirect()
require OPENLD_ROOT.'include/functions.php';

// Open the config file
if (file_exists(OPENLD_ROOT.'files/config.php'))
	require OPENLD_ROOT. "files/config.php";
else
	redirect("install/index.php");

//this will fix doubleslash issues for some people
$_SERVER['PHP_SELF'] = str_replace('//', '/', $_SERVER['PHP_SELF']);

// Load DB abstraction layer and connect
require OPENLD_ROOT.'include/dblayer/common_db.php';

// Load bans
if (file_exists(OPENLD_ROOT.'cache/cache_bans.php'))
	include OPENLD_ROOT.'cache/cache_bans.php';
	
require OPENLD_ROOT.'include/cache.php';
if(!defined('OPENLD_BANS_LOADED'))
{
	generate_bans_cache();
	require OPENLD_ROOT.'cache/cache_bans.php';
}

if($openld_bans != null)
	foreach($openld_bans as $bans)
		if($bans === $_SERVER['REMOTE_ADDR'])
			exit(IP_BANNED_QOUTE);

// Load hooks
if (file_exists(OPENLD_ROOT.'cache/cache_hooks.php'))
	include OPENLD_ROOT.'cache/cache_hooks.php';

if (!defined('OPENLD_HOOKS_LOADED'))
{
	generate_hooks_cache();
	require OPENLD_ROOT.'cache/cache_hooks.php';
}

// Load cached settings
if (file_exists(OPENLD_ROOT.'cache/cache_settings.php'))
	include OPENLD_ROOT.'cache/cache_settings.php';

if (!defined('OPENLD_CONFIG_LOADED'))
{
	generate_settings_cache();
	require OPENLD_ROOT.'cache/cache_settings.php';
}

// Enable output buffering
// Buffering feature cannot be active if active if zlib.output_compression is turned on!
if (!defined('OPENLD_DISABLE_BUFFERING'))
{
	if(extension_loaded('zlib'))
	{
		// zlib.output_compression can be returned in an integer OR boolean
		if (
			(is_integer(ini_get("zlib.output_compression")) && ini_get("zlib.output_compression") == 0)
			||
			(is_bool(ini_get("zlib.output_compression")) && !ini_get("zlib.output_compression"))
		)
		{
			// For some very odd reason, "Norton Internet Security" unsets this
			$_SERVER['HTTP_ACCEPT_ENCODING'] = isset($_SERVER['HTTP_ACCEPT_ENCODING']) ? $_SERVER['HTTP_ACCEPT_ENCODING'] : '';

			// Should we use gzip output compression?
			if ($settings['gzip'] == 'Y' && function_exists('ob_gzhandler') && (strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') !== false || strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'deflate') !== false))
				ob_start('ob_gzhandler');
			else
				ob_start();
		}
		// Else
		// Nothing is supposed to happen here since zlib.output_compression is on and takes care of the compression
		// ob_start(); is therefore not supposed to be here
	}
	else
		ob_start();
}

define('OPENLD_IF_ACTIVE_LINKS', (($settings['display_unaccepted_links'] == 'N') ? ' AND active=1' : ''));
define('OPENLD_IF_ACTIVE_CATS', (($settings['display_unaccepted_categories'] == 'N') ? ' AND active=1' : ''));
require(OPENLD_ROOT. 'include/form_validator_class.php');

// Attempt to load the common language file
if (file_exists(OPENLD_ROOT.'lang/'.$settings['language'].'/common.php'))
	require OPENLD_ROOT.'lang/'.$settings['language'].'/common.php';
else
	error('There is no valid language pack installed. Please install a language', __FILE__, __LINE__);

// Reverse the effect of register_globals, good for security reasons
if (@ini_get('register_globals'))
	openld_unregister_globals();

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

// Start a transaction
$db->start_transaction();

// Check if we are to display a maintenance message
//if ($OPENLD_config['o_maintenance'] && $OPENLD_user['g_id'] > OPENLD_ADMIN && !defined('OPENLD_TURN_OFF_MAINT'))
//	maintenance_message();
