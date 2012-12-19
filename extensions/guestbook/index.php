<?php
//operations
$submit_success = '';

//insert comments
if(isset($_REQUEST['com_name']) && isset($_REQUEST['com_description']))
{
	if($settings['guestbook_allow_comments'] == 'Y')
	{
		$error->check_name(check_if_null($_REQUEST['com_name']), true);
		$error->check_description(check_if_null($_REQUEST['com_description']), $settings['guestbook_max_comment_description'], 5, true);

		if($settings['guestbook_use_antispam'] !== 'N' && $_SESSION['captcha'] !== openld_hash($_REQUEST['captcha']))
			$error->set_warning('captcha_warning', 'Wrong captcha inserted');

		if($settings['guestbook_links_within_comments'] == 'N' && strstr($_REQUEST['com_description'], 'http://') == true || strstr($_REQUEST['com_description'], 'https://') == true)
			$error->set_warning('description_warning', 'Links is not allowed within comments');

		if($error->transform_error())
		{
			$sql = array(
				'INSERT' => ($settings['guestbook_use_comment_titles']=='Y' ? 'title, ' : '').
					'description,
					name,
					ip',
				'INTO' => 'guestbook_comments',
				'VALUES' => ($settings['guestbook_use_comment_titles']=='Y' ? '"' .$_REQUEST['com_title']. '", ' : '').'"'
					.$db->escape($_REQUEST['com_description']). '", "'
					.$db->escape($_REQUEST['com_name']). '", "'
					.$db->escape($_SERVER['REMOTE_ADDR']). '"'
			);
			$db->query_build($sql) or error(__FILE__, __LINE__);

			$submit_success = 'Comment was added'. ($settings['guestbook_display_unaccepted_comments']=='N' ? ' and is waiting for approval' : '');
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
		'FROM' => 'guestbook_votes',
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
		elseif($settings['guestbook_use_comment_rating'] == '5' || $settings['guestbook_use_comment_rating'] == '5-2')
			$_REQUEST['score'] = $_REQUEST['score']*2;


		$query = array(
			'INSERT' => 'comment_id, rating, ip',
			'INTO' => 'guestbook_votes',
			'VALUES' => intval($_REQUEST['rate']). ',' .intval($_REQUEST['score']). ',"' .$db->escape($_SERVER['REMOTE_ADDR']). '"'
		);
		$db->query_build($query) or error("Could not use insert sql for votes", __FILE__, __LINE__);
	}
}


//collect all display sql
$query = array(
	'SELECT' => ($settings['guestbook_use_comment_titles']=='Y' ? 'title, ' : '').
		'description,
		name,
		date_submitted,
		id,
		ip',
	'FROM' => 'guestbook_comments',
	'ORDER BY' => $settings['guestbook_comments_sorted_by']
);

if($settings['guestbook_display_unaccepted_comments'] == 'N')
	$query['WHERE'] = 'active=1';

$comments_sql = $db->query_build($query) or error(__FILE__, __LINE__);



//display comments
if($db->num_rows($comments_sql) > 0)
{
	//paginate comments
	$start_limit = $settings['guestbook_comments_per_page'] * (isset($_REQUEST['page']) ? intval($_REQUEST['page'])-1 : 0);
	$query['LIMIT'] = $start_limit. ','. $settings['guestbook_comments_per_page'];
	$comments_sql_limit = $db->query_build($query) or error("Could not build coment limit sql", __FILE__, __LINE__);
	$page_number = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : '1';
	$num_rows = $db->num_rows($comments_sql);
	$num_pages = ceil($num_rows / $settings['guestbook_comments_per_page']);
	$pages_string = paginate($num_pages, $page_number, 'index.php?display=guestbook&amp;page=#p');
	
	require OPENLD_ROOT. '/extensions/guestbook/vote_html.php';
	$vh = new Vote_HTML(($settings['guestbook_use_comment_rating']=='N' ? false : true));
}

require ext_theme_include('guestbook', 'guestbook.php');