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
require("header.php");

$req_page = isset($_GET['page']) ? intval($_GET['page']) : '1';

($hook = get_hook('search_before_input_check')) ? eval($hook) : null;
if(isset($_GET['term']))
{
	$_GET = openld_trim_array($_GET);

	if($_GET['search_type'] == 'categories')
	{
		$s_from = 'categories';
		$s_active = OPENLD_IF_ACTIVE_CATS;
	}
	else
	{
		$s_from = 'links';
		$s_active = OPENLD_IF_ACTIVE_LINKS;
	}

	$query = array(
		'SELECT' => '*',
		'FROM' => $s_from
	);
	
	if($_GET['search_in'] == 'title' || $_GET['search_in'] == 'description')
		$query['WHERE'] = $db->escape($_GET['search_in']). " LIKE '%" .$db->escape($_GET['term']). "%'". $s_active;

	switch($_GET['sort_by'])
	{
		case "alphabetical" : $query['ORDER BY'] = $db->escape($_GET['search_in']); break;
		case "alphabetical_reversed" : $query['ORDER BY'] = $db->escape($_GET['search_in']). " DESC"; break;
		case "newest_first" : $query['ORDER BY'] = 'id DESC'; break;
		case "oldest_first" : $query['ORDER BY'] = 'id ASC'; break;
	}
	
	// Search query
	$start_limit = $settings['number_of_search_results_per_page'] * ($req_page - 1);


	($hook = get_hook('search_before_sql')) ? eval($hook) : null;


	$query_limit = $query;
	$query_limit['LIMIT'] = $start_limit.", ". $settings['number_of_search_results_per_page'];

	($hook = get_hook('search_sql')) ? eval($hook) : null; //for both $sql_string_limit and $search_results
	$sql_string_limit = $db->query_build($query_limit) or error("Couldn't run the search query sql_string_num", __FILE__, __LINE__);
	$search_results = $db->query_build($query) or error("Couldn't run the search query", __FILE__, __LINE__);
	($hook = get_hook('search_after_sql')) ? eval($hook) : null;

	//link_pagination() cannot be used, since it relies on the $settings['number_of_links_per_page'] setting
	$num_rows = $db->num_rows($search_results);
	$num_pages = ceil($num_rows / $settings['number_of_search_results_per_page']);
	$pagination = paginate($num_pages, $req_page, openld_link('search_page', se_search($_GET)));
}

$page = 'search.php';
($hook = get_hook('search_before_page')) ? eval($hook) : null;
require("footer.php");