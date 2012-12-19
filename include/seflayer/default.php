<?php

$dot_htaccess = 'Options +FollowSymlinks
RewriteEngine On

RewriteRule ^(.+)-([0-9]+)$ index.php?id=$2&category=$1
RewriteRule ^(.+)-([0-9]+)/([0-9]+)$ index.php?id=$2&category=$1&page=$3

RewriteRule ^(.+)/(.+)/(.+)/(.+)-search$ search.php?term=$1&search_in=$2&sort_by=$3&search_type=$4
RewriteRule ^(.+)/(.+)/(.+)/(.+)-search/([0-9]+)$ search.php?term=$1&search_in=$2&sort_by=$3&search_type=$4&page=$5

RewriteRule ^(.+)-([0-9]+)-suggest$ suggest_category.php?id=$2&category=$1
RewriteRule ^(.+)-([0-9]+)-submit$ submit.php?cat_id=$2&category=$1';

$openld_url = array(
	'suggest' => '#2-#1-suggest',
	'submit' => '#2-#1-submit',
	'index_cat' => '#2-#1',
	'search' => '#1/#2/#3/#4-search',
	'index_cat_page' => '#2-#1/#p',
	'search_page' => '#1/#2/#3/#4-search/#p'
);


function se_suggest($arg_array)
{
	if(isset($arg_array['id']) && isset($arg_array['category']))
		return array($arg_array['id'], str_replace(' ', '-', $arg_array['category']));

	global $openld_url;
	$openld_url['suggest'] = 'suggest_category.php';
	return null;
}


function se_submit($arg_array)
{
	if(isset($arg_array['id']) && isset($arg_array['category']))
		return array($arg_array['id'], str_replace(' ', '-', $arg_array['category']));

	global $openld_url;
	$openld_url['submit'] = 'submit.php';
	return null;
}


function se_index_cat($arg_array)
{
	if(isset($arg_array['id']) && isset($arg_array['title']))
		return array($arg_array['id'], str_replace(' ', '-', $arg_array['title']));

	global $openld_url;
	$openld_url['index_cat'] = 'index.php';
	return null;
}


function se_search($arg_array)
{
	global $db;
	$arg_array = $db->escape_array($arg_array);

	if(isset($arg_array['term']) && isset($arg_array['search_in']) && isset($arg_array['sort_by']) && isset($arg_array['search_type']))
		return array($arg_array['term'], $arg_array['search_in'], $arg_array['sort_by'], $arg_array['search_type']);

	global $openld_url;
	$openld_url['search'] = 'search.php';
	return null;
}