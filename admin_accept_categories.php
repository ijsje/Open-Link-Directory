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

//SQL Operations
if(isset($_REQUEST['delete']))
	delete_category($_REQUEST['delete']);
elseif(isset($_REQUEST['move_cat_sql']))
	move_category(0, $req_page, $_REQUEST['move_cat_sql'], $_REQUEST['to_new_parent']);
elseif(isset($_REQUEST['edit_cat_sql']))
	edit_a_category(0, $req_page, $_REQUEST['cat_id']);
elseif(isset($_REQUEST['accept_category']))
	accept_category($_REQUEST['accept_category']);

$query = array(
	'SELECT' => 'id, title, description, father_id',
	'FROM' => 'categories',
	'WHERE' => 'active=0'
);
($hook = get_hook('admin_accept_categories_sql')) ? eval($hook) : null;
$categories_result = $db->query_build($query) or error("can't dig categories", __FILE__, __LINE__);

$start_limit = $settings['number_of_links_per_page'] * ((intval($req_page) > 0) ? intval($req_page)-1 : 0);
$query['ORDER BY'] = $settings['categories_sorting_by'];
$query['LIMIT'] = $start_limit.', '. $settings['number_of_links_per_page'];

($hook = get_hook('admin_accept_categories_sql_limit')) ? eval($hook) : null;
$result_limit = $db->query_build($query) or error("can't dig categories with result_limit", __FILE__, __LINE__);


$page = 'admin/admin_accept_categories.php';
require OPENLD_ROOT.'admin_footer.php';
