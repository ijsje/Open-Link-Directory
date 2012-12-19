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

($hook = get_hook('admin_browse_before_sql_input_check')) ? eval($hook) : null;

//SQL Operations
if(isset($_REQUEST['delete']))
	delete_category($_REQUEST['delete']);
elseif(isset($_REQUEST['delete_link']))
	delete_link($_REQUEST['delete_link']);
elseif(isset($_REQUEST['move_cat_sql']))
	move_category($req_id, $req_page, $_REQUEST['move_cat_sql'], $_REQUEST['to_new_parent']);
elseif(isset($_REQUEST['move_link_sql']))
	move_link($req_id, $req_page, $_REQUEST['move_link_sql'], $_REQUEST['to_new_parent']);
elseif(isset($_REQUEST['edit_cat_sql']))
	edit_a_category($req_id, $req_page, $_REQUEST['cat_id']);
elseif(isset($_REQUEST['edit_link_sql']))
	edit_a_link($req_id, $req_page, $_REQUEST['edit_link_sql']);
elseif(isset($_REQUEST['add_a_link']))
	add_a_link($req_id);
elseif(isset($_REQUEST['add_a_category']))
	add_a_category($req_id);
elseif(isset($_REQUEST['unaccept']))
	unaccept_category($_REQUEST['unaccept']);
elseif(isset($_REQUEST['unaccept_link']))
	unaccept_link($_REQUEST['unaccept_link']);

($hook = get_hook('admin_browse_after_sql_ops')) ? eval($hook) : null;

//Now Dig for categories which content we will display later
$query = array(
	'SELECT' => 'id, title, description',
	'FROM' => 'categories',
	'WHERE' => 'father_id=' .intval($req_id). OPENLD_IF_ACTIVE_CATS
);
($hook = get_hook('admin_browse_categories_sql_parent')) ? eval($hook) : null;
$categories_result = $db->query_build($query) or error(__FILE__, __LINE__);

//Dig for links
$query = array(
	'SELECT' => '*',
	'FROM' => 'links',
	'WHERE' => 'category_id=' .$req_id. OPENLD_IF_ACTIVE_LINKS
);
($hook = get_hook('admin_browse_sql_categories')) ? eval($hook) : null;
$links_result = $db->query_build($query)or error("can't dig links", __FILE__, __LINE__);

$start_limit = $settings['number_of_links_per_page'] * ((intval($req_page) > 0) ? intval($req_page)-1 : 0);
$query['ORDER BY'] = 'type DESC, "' .$settings['links_sorting_by']. '"';
$query['LIMIT'] = $start_limit. ', ' .$settings['number_of_links_per_page'];
($hook = get_hook('admin_browse_sql_limit_categories')) ? eval($hook) : null; //bad hook-name
$result_limit = $db->query_build($query)or error("can't dig links with result_limit", __FILE__, __LINE__);


$page = 'admin/admin_browse.php';
require OPENLD_ROOT.'admin_footer.php';
