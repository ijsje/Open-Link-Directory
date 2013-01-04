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
	
	$cache = new CacheGenerator($db);
	$cache->array_name('$openld_bans');
	$cache->cache_file('cache_bans');
	$cache->file_start_content('define(\'OPENLD_BANS_LOADED\', 1);');
	$cache->query(array(
		'SELECT' => 'id, ip',
		'FROM' => 'ip_bans'
	));
	$cache->start();
}


// Generate the hooks cache PHP script
function generate_hooks_cache()
{
	global $db, $openld_hooks;
	
	$cache = new CacheGenerator($db);
	$cache->array_name('$openld_hooks');
	$cache->cache_file('cache_hooks');
	$cache->file_start_content('define(\'OPENLD_HOOKS_LOADED\', 1);');
	$cache->query(array(
		'SELECT' => 'id, code',
		'FROM' => 'extension_hooks',
		'ORDER BY' => 'installed'
	));
	$cache->start();
}


//Generate settings cache
function generate_settings_cache()
{
	global $db, $settings;
	
	$cache = new CacheGenerator($db);
	$cache->array_name('$settings');
	$cache->cache_file('cache_settings');
	$cache->file_start_content('define(\'OPENLD_CONFIG_LOADED\', 1);');
	$cache->query(array(
		'SELECT' => 'title, value',
		'FROM' => 'settings'
	));
	$cache->start();
}