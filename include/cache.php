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

//Make sure no one tries to access this file directly
if(!defined("OPENLD_ROOT"))
	error("You are not allowed to access this file directly", __FILE__, __LINE__);


//Generate banned IPs cache
function generate_bans_cache()
{
	global $db, $openld_bans;
	$openld_bans = array();

	$query = array(
		'SELECT' => 'id, ip',
		'FROM' => 'ip_bans'
	);
	$result = $db->query_build($query, false, true) or error("Could not get IPs", __FILE__, __LINE__);
	while ($cur_ban = $db->fetch_assoc($result))
		$openld_bans[$cur_ban['id']] = $cur_ban['ip'];

	// Output hooks as PHP code
	$fh = @fopen(OPENLD_ROOT.'cache/cache_bans.php', 'wb');
	if (!$fh)
		error('Unable to write hooks cache file to cache directory. Please make sure PHP has write access to the directory \'cache\'', __FILE__, __LINE__);

	fwrite($fh, '<?php'."\n\n".'define(\'OPENLD_BANS_LOADED\', 1);'."\n\n".'$openld_bans = '.var_export($openld_bans, true).';'."\n\n".'?>');

	fclose($fh);
}


// Generate the hooks cache PHP script
function generate_hooks_cache()
{
	global $db, $openld_hooks;
	$openld_hooks = array();
	// Get the hooks from the DB
	$output = array();

	$query = array(
		'SELECT' => 'id, code',
		'FROM' => 'extension_hooks',
		'ORDER BY' => 'installed'
	);
	$result = $db->query_build($query, false, true) or error('Unable to fetch extension hooks', __FILE__, __LINE__);

	while ($cur_hook = $db->fetch_assoc($result))
		$output[$cur_hook['id']][] = $cur_hook['code'];

	// Output hooks as PHP code
	$fh = @fopen(OPENLD_ROOT.'cache/cache_hooks.php', 'wb');
	if (!$fh)
		error('Unable to write hooks cache file to cache directory. Please make sure PHP has write access to the directory \'cache\'', __FILE__, __LINE__);

	fwrite($fh, '<?php'."\n\n".'define(\'OPENLD_HOOKS_LOADED\', 1);'."\n\n".'$openld_hooks = '.var_export($output, true).';'."\n\n".'?>');

	fclose($fh);
}


//Generate settings cache
function generate_settings_cache()
{
	global $db, $settings;
	$settings=array();
	//Output as php code
	$query = array(
		'SELECT' => 'title, value',
		'FROM' => 'settings'
	);
	$result = $db->query_build($query, false, true) or error('Unable to fetch directory settings', __FILE__, __LINE__);

	while ($cur_config_item = $db->fetch_row($result))
		$settings[$cur_config_item[0]] = $cur_config_item[1];

	// Output config as PHP code
	$fh = @fopen(OPENLD_ROOT.'cache/cache_settings.php', 'wb');
	if (!$fh)
		error('Unable to write configuration cache file to cache directory. Please make sure PHP has write access to the directory \'cache\'', __FILE__, __LINE__);

	fwrite($fh, '<?php'."\n\n".'define(\'OPENLD_CONFIG_LOADED\', 1);'."\n\n".'$settings = '.var_export($settings, true).';'."\n\n".'?>');

	fclose($fh);
}