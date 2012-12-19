<?php
//operations
$submit_success = '';

//insert comments
if(isset($_REQUEST['com_name']) && isset($_REQUEST['com_description']))
{
	if($settings['allow_comments'] == 'Y')
	{
		$error->check_name(check_if_null($_REQUEST['com_name']), true);
		$error->check_description(check_if_null($_REQUEST['com_description']), $settings['max_comment_description'], 5, true);

		if($settings['use_antispam'] !== 'N' && $_SESSION['captcha'] !== openld_hash($_REQUEST['captcha']))
			$error->set_warning('captcha_warning', 'Wrong captcha inserted');

		if($settings['links_within_comments'] == 'N' && strstr($_REQUEST['com_description'], 'http://') == true || strstr($_REQUEST['com_description'], 'https://') == true)
			$error->set_warning('description_warning', 'Links is not allowed within comments');

		if($error->transform_error())
		{
			$sql = array(
				'INSERT' => ($settings['use_comment_titles']=='Y' ? 'title, ' : '').
					'description,
					name,
					ip,
					link_id',
				'INTO' => 'comments',
				'VALUES' => ($settings['use_comment_titles']=='Y' ? '"' .$_REQUEST['com_title']. '", ' : '').'"'
					.$db->escape($_REQUEST['com_description']). '", "'
					.$db->escape($_REQUEST['com_name']). '", "'
					.$db->escape($_SERVER['REMOTE_ADDR']). '",'
					.intval($_REQUEST['link_id'])
			);
			$db->query_build($sql) or error(__FILE__, __LINE__);

			$submit_success = 'Comment was added'. ($settings['display_unaccepted_comments']=='N' ? ' and is waiting for approval' : '');
		}
	}
	else
		error('Comments are not allowed at the moment');
}


//insert rating
if(isset($_REQUEST['rate']) && isset($_REQUEST['score']))
{
	//check if the voter is unique
	$query = array(
		'SELECT' => 'ip',
		'FROM' => 'comments_votes',
		'WHERE' => 'comment_id=' .$_REQUEST['rate']. ' AND ip="' .$db->escape($_SERVER['REMOTE_ADDR']). '"'
	);
	$ip_sql = $db->query_build($query) or error(__FILE__, __LINE__);
	if($db->num_rows($ip_sql) != 0)
		$error->set_warning($_REQUEST['comments'].'vote_error', 'you can only vote once');
	else
	{
		if($_REQUEST['score'] == 'report')
			$_REQUEST['score'] = -1;
		elseif($_REQUEST['score'] == 'bad')
			$_REQUEST['score'] = 1;
		elseif($_REQUEST['score'] == 'good')
			$_REQUEST['score'] = 10;
		elseif($settings['use_comment_rating'] == '5' || $settings['use_comment_rating'] == '5-2')
			$_REQUEST['score'] = $_REQUEST['score']*2;


		$query = array(
			'INSERT' => 'comment_id, rating, ip',
			'INTO' => 'comments_votes',
			'VALUES' => intval($_REQUEST['rate']). ',' .intval($_REQUEST['score']). ',"' .$db->escape($_SERVER['REMOTE_ADDR']). '"'
		);
		$db->query_build($query) or error("Could not use insert sql for votes", __FILE__, __LINE__);
	}
}


//collect all display sql
//detail sql
$query = array(
	'SELECT' => 'l.title,
		l.description,
		l.name,
		l.date_submitted,
		l.category_id,
		l.url,
		c.title',
	'FROM' => 'links AS l',
	'JOINS' => array(
		array(
			'INNER JOIN' => 'categories AS c',
			'ON' => 'l.category_id=c.id'
		)
	),
	'WHERE' => 'l.id=' .intval($_REQUEST['comments']). 
		(($settings['display_unaccepted_links'] == 'N') ? ' AND l.active=1' : '')
);
$detail_sql = $db->query_build($query) or error("Could not the link joined with it's category", __FILE__, __LINE__);
$details = $db->fetch_row($detail_sql);


$query = array(
	'SELECT' => ($settings['use_comment_titles']=='Y' ? 'title, ' : '').
		'description,
		name,
		date_submitted,
		id,
		ip',
	'FROM' => 'comments',
	'WHERE' => 'link_id=' .intval($_REQUEST['comments']).
		($settings['display_unaccepted_comments'] == 'N' ? ' AND active=1' : ''),
	'ORDER BY' => $settings['comments_sorted_by']
);
$comments_sql = $db->query_build($query) or error(__FILE__, __LINE__);



//display comments
if($db->num_rows($comments_sql) > 0)
{
	//paginate comments
	$start_limit = $settings['comments_per_page'] * (isset($_REQUEST['page']) ? intval($_REQUEST['page'])-1 : 0);
	$query['LIMIT'] = $start_limit. ','. $settings['comments_per_page'];
	$comments_sql_limit = $db->query_build($query) or error("Could not build coment limit sql", __FILE__, __LINE__);
	$page_number = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : '1';
	$num_rows = $db->num_rows($comments_sql);
	$num_pages = ceil($num_rows / $settings['comments_per_page']);
	$pages_string = paginate($num_pages, $page_number, 'index.php?comments=' .$_REQUEST['comments']. '&amp;page=#p');
	
	require OPENLD_ROOT. '/extensions/link_comments/vote_html.php';
	$vh = new Vote_HTML(($settings['use_comment_rating']=='N' ? false : true));
}

require ext_theme_include('link_comments', 'comments.php');