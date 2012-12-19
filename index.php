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
require OPENLD_ROOT.'header.php';

$page = 'index.php';
($hook = get_hook('index_default_page')) ? eval($hook) : null; //don't load default index if there's no need

if($page == 'index.php')
{
	//set the gets
	$req_id = isset($_GET['id']) ? $_GET['id'] : 0;
	$req_cat = isset($_GET['category']) ? $_GET['category'] : 'root';
	$req_page = isset($_GET['page']) ? $_GET['page'] : '1';

	//Get category description and perhaps also other info
	$query = array(
		'SELECT' => 'description',
		'FROM' => 'categories',
		'WHERE' => 'id='.intval($req_id)
	);
	($hook = get_hook('category_sql')) ? eval($hook) : null;
	$category_result = $db->query_build($query) or error(__FILE__, __LINE__);
	$category_result = $db->fetch_row($category_result);

	if($category_result[0] != '')
		$meta_description = $category_result[0];

	//Dig for categories
	$query = array(
		'SELECT' => 'id, title',
		'FROM' => 'categories',
		'WHERE' => 'father_id='.intval($req_id). OPENLD_IF_ACTIVE_CATS,
		'ORDER BY' => $settings['categories_sorting_by']
	);
	($hook = get_hook('categories_sql')) ? eval($hook) : null;
	$categories_result = $db->query_build($query) or error(__FILE__, __LINE__);

	//Dig for links
	$query = $limit_query = array(
		'SELECT' => '*',
		'FROM' => 'links',
		'WHERE' => 'category_id=' .intval($req_id). ' AND payment_status<>"no"' .OPENLD_IF_ACTIVE_LINKS
	);
	($hook = get_hook('index_links_sql')) ? eval($hook) : null;
	$link_result = $db->query_build($query) or error("can't dig links", __FILE__, __LINE__);
	
	//Limit data
	$link_limit = $settings['number_of_links_per_page'];
	$limit_query['ORDER BY'] = 'type DESC, ' .$settings['links_sorting_by'];
	$limit_query['LIMIT'] = $link_limit * ($req_page-1). ', ' .$link_limit;

	($hook = get_hook('index_links_sql_limit')) ? eval($hook) : null;
	$link_result_limit = $db->query_build($limit_query) or error("can't dig links with result_limit", __FILE__, __LINE__);
}

($hook = get_hook('index_head_page')) ? eval($hook) : null;

require OPENLD_ROOT.'footer.php';
