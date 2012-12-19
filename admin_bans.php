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

($hook = get_hook('admin_bans_before_input_check')) ? eval($hook) : null;
//handle input..
if(isset($_POST['add_ban']))
{
	$error->check_new_ip_ban(check_if_null($_POST['ban_ip']));
	($hook = get_hook('admin_bans_add_ban_check')) ? eval($hook) : null;
	if($error->transform_error()) //works now
	{
		$query = array(
			'INSERT' => 'ip',
			'INTO' => 'ip_bans',
			'VALUES' => '"' .$db->escape($_POST['ban_ip']). '"'
		);
		($hook = get_hook('admin_bans_add_ban_before_sql')) ? eval($hook) : null;
		$db->query_build($query) or error(__FILE__, __LINE__);
		generate_bans_cache();
	}
}
elseif(isset($_POST['remove_ban']) && isset($_POST['unban']))
{
	$error->numeric_control('remove_ban_error', $_POST['unban'], YOU_MUST_SELECT_AN_IP);
	($hook = get_hook('admin_bans_remove_ban_check')) ? eval($hook) : null;
	if($error->transform_error())
	{
		$query = array(
			'DELETE' => 'ip_bans',
			'WHERE' => 'id=' .intval($_POST['unban'])
		);
		($hook = get_hook('admin_bans_remove_ban_before_sql')) ? eval($hook) : null;
		$db->query_build($query) or error(print_r($query), __FILE__, __LINE__);
		generate_bans_cache();
	}
}
($hook = get_hook('admin_bans_after_input_check')) ? eval($hook) : null;


$page = 'admin/admin_bans.php';
require OPENLD_ROOT.'admin_footer.php';
