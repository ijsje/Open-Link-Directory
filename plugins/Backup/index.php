<?php
$query = array(
	'SELECT' => '*',
	'FROM' => 'categories'
);
$categories_sql = $db->query_build($query) or error(__FILE__, __LINE__);

$query = array(
	'SELECT' => '*',
	'FROM' => 'links'
);
$links_sql = $db->query_build($query) or error(__FILE__, __LINE__);

$page = '../../plugins/Backup/backup.php';
