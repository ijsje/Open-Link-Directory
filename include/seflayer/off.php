<?php

// Regular urls
$openld_url['suggest'] = 'suggest_category.php?id=#1';
$openld_url['submit'] = 'submit.php?cat_id=#1';
$openld_url['index_cat'] = 'index.php?id=#1';
$openld_url['search'] = 'search.php?term=#1&amp;search_in=#2&amp;sort_by=#3&amp;search_type=#4';
$openld_url['index_cat_page'] = 'index.php?id=#1&amp;page=#p';
$openld_url['search_page'] = 'search.php?term=#1&amp;search_in=#2&amp;sort_by=#3&amp;search_type=#4&amp;page=#p';


function se_suggest($arg_array)
{
	if(isset($arg_array['id']))
		return $arg_array['id'];

	global $openld_url;
	$openld_url['suggest'] = 'suggest_category.php';
	return null;
}


function se_submit($arg_array)
{
	if(isset($arg_array['id']))
		return $arg_array['id'];

	global $openld_url;
	$openld_url['submit'] = 'submit.php';
	return null;
}


function se_index_cat($arg_array)
{
	return $arg_array['id'];
}


function se_search($arg_array)
{
	global $db;
	$arg_array = $db->escape_array($arg_array);
	return array($arg_array['term'], $arg_array['search_in'], $arg_array['sort_by'], $arg_array['search_type']);
}
