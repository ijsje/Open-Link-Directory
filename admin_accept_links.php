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

$req_page = isset($_REQUEST['page']) ? (is_numeric($_REQUEST['page']) ? $_REQUEST['page'] : '1') : '1';
$req_id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '0';
$req_cat = isset($_REQUEST['category']) ? $_REQUEST['category'] : '';

//SQL Operations
if(isset($_REQUEST['delete_link']))
	delete_link($_REQUEST['delete_link']);
elseif(isset($_REQUEST['move_link_sql']))
	move_link(0, $req_page, $_REQUEST['move_link_sql'], $_REQUEST['to_new_parent']);
elseif(isset($_REQUEST['edit_link_sql']))
	edit_a_link(0, $req_page, $_REQUEST['edit_link_sql']);
elseif(isset($_REQUEST['accept_link']))
	accept_link($_REQUEST['accept_link']);
($hook = get_hook('admin_accept_links_after_sql_ops')) ? eval($hook) : null;

$query = array(
	'SELECT' => '*',
	'FROM' => 'links',
	'WHERE' => 'active=0'
);
($hook = get_hook('admin_accept_links_sql')) ? eval($hook) : null;
$result = $db->query_build($query)or error("can't dig links", __FILE__, __LINE__);

$start_limit = $settings['number_of_links_per_page'] * ((intval($req_page) > 0) ? intval($req_page)-1 : 0);
$query['ORDER BY'] = 'type DESC, ' .$settings['links_sorting_by'];
$query['LIMIT'] = $start_limit. ", " .$settings['number_of_links_per_page'];
($hook = get_hook('admin_accept_links_sql_limit')) ? eval($hook) : null;
$result_limit = $db->query_build($query)or error("can't dig links with result_limit", __FILE__, __LINE__);

$page = 'admin/admin_accept_links.php';
require OPENLD_ROOT.'admin_footer.php';
