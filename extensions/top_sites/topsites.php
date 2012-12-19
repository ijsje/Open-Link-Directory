<?php
$topsite_sql = $topsite_sql_limit = array(
	'SELECT' => 'id, title, url, description, date_submitted, hits',
	'FROM' => 'links',
	'WHERE' => 'hits>0',
	'ORDER BY' => 'hits DESC, date_submitted DESC'
);
$topsite_sql = $db->query_build($topsite_sql) or error(__FILE__, __LINE__);

$req_page = isset($_GET['page']) ? $_GET['page'] : 1;

//number of links per page
$link_limit = 20;

$topsite_sql_limit['ORDER BY'] = 'hits DESC, date_submitted DESC';
$topsite_sql_limit['LIMIT'] = $link_limit * (intval($req_page)-1). ', ' .$link_limit;
$topsite_sql_limit = $db->query_build($topsite_sql_limit) or error(__FILE__, __LINE__);

//pagination
$num_rows = $db->num_rows($topsite_sql);
$num_pages = ceil($num_rows / $link_limit);
$pagination = paginate($num_pages, $req_page, 'index.php?display=topsites&amp;page=#p');

require ext_theme_include('top_sites', 'topsite_html.php');