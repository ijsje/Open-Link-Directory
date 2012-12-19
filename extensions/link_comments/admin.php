<?php
if(isset($_GET['delete_comment']))
{
	$query = array(
		'DELETE' => 'comments',
		'WHERE' => 'id=' .intval($_GET['delete_comment'])
	);
	$db->query_build($query) or error(__FILE__, __LINE__);
}
elseif(isset($_POST['edit_comment_sql']))
{
	//currently no error to transform
	if(/*$error->transform()*/ true)
	{
		$query = array(
			'UPDATE' => 'comments',
			'SET' => 
				(
					$settings['use_comment_titles'] == 'Y' ?
					'title="' .$db->escape($_POST['edit_comment_title']). '", ' : ''
				). 
				'description="' .$db->escape($_POST['edit_comment_title']). 
				'", name="' .$db->escape($_POST['edit_comment_name']). '", '.
				//(
					//$settings['use_comment_rating'] != '0' ? 
					//'rating="' .$db->escape($_POST['edit_comment_rating']). '", ' : ''
				//). 
				'ip="' .$db->escape($_POST['edit_comment_ip']). 
				'", link_id=' .intval($_POST['edit_comment_link_id']),
			'WHERE' => 'id=' .intval($_POST['edit_comment_sql'])
		);
		$db->query_build($query) or error(__FILE__, __LINE__);
	}
	else
		$_REQUEST['edit_comment'] = intval($_POST['edit_comment_sql']);
}
elseif(isset($_GET['accept_comment']))
{
	$query = array(
		'UPDATE' => 'comments',
		'SET' => 'active=1',
		'WHERE' => 'id=' .intval($_GET['accept_comment'])
	);
	$db->query_build($query) or error(__FILE__, __LINE__);
}
elseif(isset($_GET['unaccept_comment']))
{
	$query = array(
		'UPDATE' => 'comments',
		'SET' => 'active=0',
		'WHERE' => 'id=' .intval($_GET['unaccept_comment'])
	);
	$db->query_build($query) or error(__FILE__, __LINE__);
}


//display content
if(isset($_REQUEST['edit_comment'])) { 
	$query = array(
		'SELECT' => 'title, description, name, ip, link_id',
		'FROM' => 'comments',
		'WHERE' => 'id=' .intval($_REQUEST['edit_comment'])
	);

	$result = $db->query_build($query) or error(__FILE__, __LINE__);
	if($db->num_rows($result) == 0)
		error("No comment row was selected", __FILE__, __LINE__);
	$result = $db->fetch_row($result);

	require OPENLD_ROOT. 'extensions/link_comments/admin_display_comment.php';
}
elseif(isset($_REQUEST['reported_comments']))
{
	$query = array(
		'SELECT' => 'c.id AS id,
			l.title AS link_text,
			c.title AS title,
			c.description AS comment,
			c.ip AS ip,
			c.name AS name,
			c.date_submitted AS date,
			c.active AS active',
		'FROM' => 'comments_votes AS v',
		'JOINS' => array(
			array(
				'LEFT JOIN' => 'comments AS c',
				'ON' => 'v.comment_id=c.id'
			),
			array(
				'LEFT JOIN' => 'links AS l',
				'ON' => 'c.link_id=l.id'
			),
		),
		'WHERE' => 'v.rating=-1',
		'ORDER BY' => 'c.id DESC'
	);

	$comments_sql = $db->query_build($query) or error(__FILE__, __LINE__);

	//paginate comments
	$req_page = isset($_REQUEST['reported_comments']) ? (is_numeric($_REQUEST['reported_comments']) ? $_REQUEST['reported_comments'] : '1') : '1';

	$comments_per_page = 20;
	$start_limit = $comments_per_page * ($req_page-1);
	$query['LIMIT'] = $start_limit. ','. $comments_per_page;
	$comments_sql_limit = $db->query_build($query) or error(__FILE__, __LINE__);

	$page_number = isset($_REQUEST['reported_comments']) ? intval($_REQUEST['reported_comments']) : '1';
	$num_rows = $db->num_rows($comments_sql);
	$num_pages = ceil($num_rows / $comments_per_page);
	$pages_string = paginate($num_pages, $page_number, 'admin_plugins.php?extension=link_comments&amp;reported_comments=#p');

	require OPENLD_ROOT. 'extensions/link_comments/admin_display_reported_comments.php';
}
else
{
	$query = array(
		'SELECT' => 'l.url AS url,
			l.title AS link_text,
			c.title AS title,
			c.id AS id,
			c.description AS comment,
			c.name AS name,
			c.date_submitted AS date,
			c.active AS active',
		'FROM' => 'comments AS c',
		'JOINS' => array(
			array(
				'LEFT JOIN' => 'links AS l',
				'ON' => 'c.link_id=l.id'
			)
		),
		'ORDER BY' => 'c.id DESC'
	);
	$comments_sql = $db->query_build($query) or error(__FILE__, __LINE__);

	//paginate comments
	$req_page = isset($_REQUEST['page']) ? (is_numeric($_REQUEST['page']) ? $_REQUEST['page'] : '1') : '1';

	$comments_per_page = 20;
	$start_limit = $comments_per_page * ($req_page-1);
	$query['LIMIT'] = $start_limit. ','. $comments_per_page;
	$comments_sql_limit = $db->query_build($query) or error(__FILE__, __LINE__);

	$page_number = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : '1';
	$num_rows = $db->num_rows($comments_sql);
	$num_pages = ceil($num_rows / $comments_per_page);
	$pages_string = paginate($num_pages, $page_number, 'admin_plugins.php?extension=link_comments&amp;page=#p');

	switch($settings['use_comment_rating'])
	{
		case '-2' : 
		case '1-2' : 
		case '5-2' : 
		case '10-2' : 
			$edit_reportet = '<br /><br /><a href="admin_plugins.php?extension=link_comments&amp;reported_comments=1">Edit reported comments</a>';
			break;
		default : 
			$edit_reportet = '';
	}

	require 'extensions/link_comments/admin_display_index.php';
}