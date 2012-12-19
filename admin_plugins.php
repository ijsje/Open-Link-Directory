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
require OPENLD_ROOT.'admin_header.php';

($hook = get_hook('admin_plugins_before_if')) ? eval($hook) : null;
if(isset($_GET['plugin']))
{
	if(is_file(OPENLD_ROOT.'plugins/'.$_GET['plugin'].'/index.php'))
	{
		($hook = get_hook('admin_plugins_before_get_plugin')) ? eval($hook) : null;
		require OPENLD_ROOT.'plugins/'.$_GET['plugin'].'/index.php';
		($hook = get_hook('admin_plugins_after_get_plugin')) ? eval($hook) : null;
	}
	else
	{
		error(PLUGIN_DOES_NOT_EXIST);
		($hook = get_hook('admin_plugins_plugin_not_exist')) ? eval($hook) : null;
	}
}
elseif(isset($_REQUEST['extension']))
	$page = '../../extensions/' .$_REQUEST['extension']. '/admin.php';
else
{
	error(PLUGIN_NOT_SELECTED);
	($hook = get_hook('admin_plugins_plugin_not_selected')) ? eval($hook) : null;
}
($hook = get_hook('admin_plugins_after_if')) ? eval($hook) : null;

require OPENLD_ROOT.'admin_footer.php';