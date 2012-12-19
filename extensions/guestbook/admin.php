<?php
if(isset($_GET['delete_comment']))
{
	$query = array(
		'DELETE' => 'guestbook_comments',
		'WHERE' => 'id=' .intval($_GET['delete_comment'])
	);
	$db->query_build($query) or error(__FILE__, __LINE__);
}
elseif(isset($_POST['edit_comment_sql']))
{
	//currently no error to transform
	if(/*$error->transform()*/true)
	{
		$query = array(
			'UPDATE' => 'guestbook_comments',
			'SET' => 
				(
					$settings['guestbook_use_comment_titles'] == 'Y' ?
					'title="' .$db->escape($_POST['edit_comment_title']). '", ' : ''
				). 
				'description="' .$db->escape($_POST['edit_comment_description']). 
				'", name="' .$db->escape($_POST['edit_comment_name']). '", '.
				/*(
					$settings['guestbook_use_comment_rating'] != 'N' ? 
					'rating="' .$db->escape($_POST['edit_comment_rating']). '", ' : ''
				)*/ 
				'ip="' .$db->escape($_POST['edit_comment_ip']). 
				'"',
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
		'UPDATE' => 'guestbook_comments',
		'SET' => 'active=1',
		'WHERE' => 'id=' .intval($_GET['accept_comment'])
	);
	$db->query_build($query) or error(__FILE__, __LINE__);
}
elseif(isset($_GET['unaccept_comment']))
{
	$query = array(
		'UPDATE' => 'guestbook_comments',
		'SET' => 'active=0',
		'WHERE' => 'id=' .intval($_GET['unaccept_comment'])
	);
	$db->query_build($query) or error(__FILE__, __LINE__);
}


//display content
if(isset($_REQUEST['edit_comment'])) { 
	$query = array(
		'SELECT' => 'title, description, name, ip',
		'FROM' => 'guestbook_comments',
		'WHERE' => 'id=' .intval($_REQUEST['edit_comment'])
	);

	$result = $db->query_build($query) or error(__FILE__, __LINE__);
	if($db->num_rows($result) == 0)
		error("No comment row was selected", __FILE__, __LINE__);
	$result = $db->fetch_row($result);

	require ext_theme_include('guestbook', 'admin/edit_comment.php');
}
elseif(isset($_REQUEST['reported_comments']))
{
	$query = array(
		'SELECT' => 'c.id AS id,
			c.title AS title,
			c.description AS comment,
			c.ip AS ip,
			c.name AS name,
			c.date_submitted AS date,
			c.active AS active',
		'FROM' => 'guestbook_votes AS v',
		'JOINS' => array(
			array(
				'LEFT JOIN' => 'guestbook_comments AS c',
				'ON' => 'v.comment_id=c.id'
			)
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
	$pages_string = paginate($num_pages, $page_number, 'admin_plugins.php?extension=guestbook&amp;reported_comments=#p');

	require ext_theme_include('guestbook', 'admin/edit_reportet_comment.php');
}
else
{
	$query = array(
		'SELECT' => 'title,
			id,
			description AS comment,
			name,
			date_submitted AS date,
			active AS active',
		'FROM' => 'guestbook_comments',
		'ORDER BY' => 'id DESC'
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
	$pages_string = paginate($num_pages, $page_number, 'admin_plugins.php?extension=guestbook&amp;page=#p');

	switch($settings['guestbook_use_comment_rating'])
	{
		case '-2' : 
		case '1-2' : 
		case '5-2' : 
		case '10-2' : 
			$edit_reported = '<br /><br /><a href="admin_plugins.php?extension=guestbook&amp;reported_comments=1">Edit reported comments</a>';
			break;
		default :
			$edit_reported = '';
	} 

	require ext_theme_include('guestbook', 'admin/admin_edit.php');
}