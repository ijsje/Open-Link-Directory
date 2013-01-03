<?php

/***********************************************************************

  Copyright (C) 2006  Rickard Andersson (rickard@punbb.org)
  Copyright (C) 2006-2010  Anders Persson (anders_persson@home.se)
  Copyright (C) 2004-2005 NetCreated, Inc.(move_select_array())

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


/*
 * A full implementation of a more object oriented way of getting
 * filepaths to extensions would brake every extension included
 * and therefore require a major code update
 * */

function ext_lang($ext_name)
{
	global $settings;

	$ext_file = new ExtensionPath();
	$ext_file->set_lang($settings['language']);
	$ext_file->set_name($ext_name);
	$path = $ext_file->get_language_filepath();
	
	if($path)
		require $path;
	else
		error("language file is missing for extension ". $ext_name);
}


function ext_theme_include($ext_name, $short_path)
{
	global $settings, $db;
	$ext_path = new ExtensionPaths();
	$ext_path->set_name($ext_name);
	$ext_path->set_short_path($short_path);
	
	if(substr($short_path, 0, 6) == 'admin/')
	{
		$ext_path->set_admin_theme_folder($settings['admin_template_path']);
		$path = $ext_path->get_admin_theme_filepath();
		if($path)
			return $path;
		else
			error("admin-theme and extension-admin-theme file is missing for extension ". $ext_name);
	}
	else
	{
		$ext_path->set_theme_folder($settings['template_path']);
		$path = $ext_path->get_theme_filepath();
		if($path)
			return $path;
		else
			error("theme and extension-theme file is missing for extension ". $ext_name);
	}
}


function ext_theme_page($ext_name, $short_path)
{
	global $page, $settings, $db;
	$page = ExtensionPaths::get_theme_page_filepath(ext_theme_include($ext_name, $short_path));
	return true;
}


function get_filepermission($short_string=false)
{
	if($short_string)
		return '777';
	else
		return 0777;
}


function checkbox_checked($Y_OR_N)
{
	if($Y_OR_N == 'Y')
		return 'checked="checked"';
	else
		return "";
}


//extension functions.. plugins should be able to install/uninstall extensions
function install_extension($folder_name)
{
	global $db, $settings;
	$id = preg_replace('/[^a-zA-Z_]/', '', $folder_name);

	// Parse extension.xml into an array and validate it
	$ext_data = xml_to_array(@file_get_contents(OPENLD_ROOT.'extensions/'.$id.'/extension.xml'));
	$errors = validate_manifest($ext_data, $id);

	if (!empty($errors))
		error(var_export($errors, true), __FILE__, __LINE__);

	$new_uninstall_code = (isset($ext_data['extension']['uninstall']) && trim($ext_data['extension']['uninstall']) != '') ? '\''.$db->escape(trim($ext_data['extension']['uninstall'])).'\'' : 'NULL';

	// Is this a fresh install or an upgrade?
	$query = array(
		'SELECT' => 'version',
		'FROM' => 'extensions',
		'WHERE' => 'id="' .$db->escape($id). '"'
	);
	($hook = get_hook('functions_install_extension_sql_select_extensions')) ? eval($hook) : null;
	$result = $db->query_build($query) or error('Unable to fetch extension', __FILE__, __LINE__);
	if ($db->num_rows($result))
	{
		// $cur_version will be available to the extension install routine (to facilitate extension upgrades)
		$cur_version = $db->result($result);

		// Run the author supplied install code
		if (isset($ext_data['extension']['install']) && trim($ext_data['extension']['install']) != '')
			eval($ext_data['extension']['install']);

		$query = array(
			'UPDATE ' => 'extensions',
			'SET' => 'title="' .$db->escape($ext_data['extension']['title']). '", 
				version="'.$db->escape($ext_data['extension']['version']).'", 
				description="'.$db->escape($ext_data['extension']['description']).'", 
				author="'.$db->escape($ext_data['extension']['author']).'", uninstall='.$new_uninstall_code,
			'WHERE' => 'extension_id="' .$db->escape($id). '"'
		);
		($hook = get_hook('functions_install_extension_sql_update_extensions')) ? eval($hook) : null;
		$db->query_build($query) or error('Unable to update extension', __FILE__, __LINE__);

		$query = array(
			'DELETE' => 'extension_hooks',
			'WHERE' => 'extension_id="' .$db->escape($id). '"'
		);
		($hook = get_hook('functions_install_extension_sql_update_extension_hooks')) ? eval($hook) : null;
		$db->query_build($query) or error('Unable to delete extension hooks', __FILE__, __LINE__);
	}
	else
	{
		// Run the author supplied install code
		if (isset($ext_data['extension']['install']) && trim($ext_data['extension']['install']) != '')
			eval($ext_data['extension']['install']);

		$query = array(
			'INSERT' => 'id, title, version, description, author, uninstall',
			'INTO' => 'extensions',
			'VALUES' => '"' .$db->escape($ext_data['extension']['id']). '", "'
				.$db->escape($ext_data['extension']['title']). '", "'
				.$db->escape($ext_data['extension']['version']). '", "'
				.$db->escape($ext_data['extension']['description']). '", "'
				.$db->escape($ext_data['extension']['author']). '", '
				.$new_uninstall_code
		);
		//Room for possible extension hook
		$db->query_build($query) or error('Unable to create extension', __FILE__, __LINE__);
	}

	// Now insert the hooks
	$hooks = $ext_data['extension']['hooks']['hook'];
	if (!is_array(current($hooks)))
		$hooks = array($hooks);

	foreach ($hooks as $hook)
	{
		$query = array(
			'INSERT' => 'id, extension_id, code, installed',
			'INTO' => 'extension_hooks',
			'VALUES' => '"' .$db->escape(trim($hook['attributes']['id'])). '", "' .$db->escape($id). '",
				"' .$db->escape(trim($hook['content'])).'", '.time()
		);
		($hook = get_hook('functions_install_extension_sql_insert_extension_hooks')) ? eval($hook) : null;
		$db->query_build($query) or error('Unable to create extension hook', __FILE__, __LINE__);
	}

	generate_hooks_cache();	
}


function uninstall_extension($folder_name)
{
	global $db, $settings;

	// Get the uninstall code and run it
	$query = array(
		'SELECT' => 'uninstall',
		'FROM' => 'extensions',
		'WHERE' => 'id="' .$db->escape($folder_name). '"'
	);
	($hook = get_hook('functions_uninstall_extension_sql_select_extensions')) ? eval($hook) : null;
	$result = $db->query_build($query) or error('Unable to fetch extension', __FILE__, __LINE__);
	if (!$db->num_rows($result))
		error("No row", __FILE__, __LINE__);

	eval($db->result($result));

	// Now delete the extension and its hooks from the db
	$query = array(
		'DELETE' => 'extension_hooks',
		'WHERE' => 'extension_id="' .$db->escape($folder_name). '"'
	);
	($hook = get_hook('functions_uninstall_extension_sql_delete_extension_hooks')) ? eval($hook) : null;
	$db->query_build($query) or error('Unable to delete extension hooks', __FILE__, __LINE__);

	$query = array(
		'DELETE' => 'extensions',
		'WHERE' => 'id="' .$db->escape($folder_name). '"'
	);
	($hook = get_hook('functions_uninstall_extension_sql_delete_extensions')) ? eval($hook) : null;
	$db->query_build($query) or error('Unable to delete extension', __FILE__, __LINE__);

	generate_hooks_cache();
}


//refresh sql if it's allready installed
function refresh_extension($id)
{
	global $db;

	$query = array(
		'SELECT' => 'id',
		'FROM' => 'extensions',
		'WHERE' => 'id="' .$id. '"'
	);
	//hook space
	$install_check = $db->query_build($query) or error(__FILE__, __LINE__);
	$installed = ($db->num_rows($install_check) == 1) ? true : false;

	if($installed === true)
	{
		uninstall_extension($id);
		install_extension($id);
	}
}


function display_saved_queries($round_time)
{
	global $db;
	$saved_queries = $db->get_saved_queries();
	$queries_string = '';
	foreach($saved_queries as $query)
		$queries_string = "<br />Query: ".$query[0]." Time: ".round($query[1], $round_time);
	return $queries_string;
}


//error function for common_db
function error()
{
	global $settings;
	
	//see punbb's rewrite.php for use of FORUM_HTTP_RESPONSE_CODE_SET(OPENLD_HTTP_RESPONSE_CODE_SET)!
	if (!headers_sent())
	{
		// if no HTTP responce code is set we send 503
		if (!defined('OPENLD_HTTP_RESPONSE_CODE_SET'))
			header('HTTP/1.1 503 Service Temporarily Unavailable');
		header('Content-type: text/html; charset=utf-8');
	}

	/*
		Parse input parameters. Possible function signatures:
		error('Error message.');
		error(__FILE__, __LINE__);
		error('Error message.', __FILE__, __LINE__);
	*/
	$num_args = func_num_args();
	if ($num_args == 3)
	{
		$message = func_get_arg(0);
		$file = func_get_arg(1);
		$line = func_get_arg(2);
	}
	else if ($num_args == 2)
	{
		$file = func_get_arg(0);
		$line = func_get_arg(1);
	}
	else if ($num_args == 1)
		$message = func_get_arg(0);

	
	// Set a default title if the there's no title in settings (installation etc)
	if (empty($settings))
	{
		$settings['title'] = 'OpenLD';
		$settings['gzip'] = 'N';
	}

	if (!defined('OPENLD_DISABLE_BUFFERING'))
	{
		if(extension_loaded('zlib'))
		{
		// zlib.output_compression can be returned in an integer OR boolean
		if (
			(is_integer(ini_get("zlib.output_compression")) && ini_get("zlib.output_compression") == 0)
			||
			(is_bool(ini_get("zlib.output_compression")) && !ini_get("zlib.output_compression"))
		)
		{
				// For some very odd reason, "Norton Internet Security" unsets this
				$_SERVER['HTTP_ACCEPT_ENCODING'] = isset($_SERVER['HTTP_ACCEPT_ENCODING']) ? $_SERVER['HTTP_ACCEPT_ENCODING'] : '';

				// Should we use gzip output compression?
				if ($settings['gzip'] == 'Y' && function_exists('ob_gzhandler') && (strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip') !== false || strpos($_SERVER['HTTP_ACCEPT_ENCODING'], 'deflate') !== false))
				{
					// Empty output buffer and stop buffering
					@ob_end_clean();

					// "Restart" output buffering if we are using ob_gzhandler (since the gzip header is already sent)
					ob_start('ob_gzhandler');
				}
				else
				{
					// Empty output buffer and stop buffering
					@ob_end_clean();

					// "Restart" output buffering
					ob_start();
				}
			}
			// Else
			// Nothing is supposed to happen here since zlib.output_compression is on and takes care of the compression
			// @ob_end_clean(); and ob_start(); is therefore not supposed to be here
		}
		else
		{
			// Empty output buffer and stop buffering
			@ob_end_clean();

			// "Restart" output buffering
			ob_start();
		}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo htmlspecialchars($settings['title']) ?> - Error</title>
<style type="text/css">
<!--
body {margin: 10% 20% auto 20%; font: normal 62.5% Verdana, Arial, Helvetica, sans-serif}
#Open_LDbb-error {border: 1px solid #B84623}
h1 {margin: 0; color: #fff; background-color: #b84623; padding: 0.4em 1em; font-size: 1em}
h1 span {font-size: 1.2em}
#Open_LDbb-error div.errormessage {padding: 1em 1em 0.1em 1em; background-color: #f7f7f7}
#Open_LDbb-error p {padding: 0 0 1em 0; margin: 0;font-size: 1.1em}
#Open_LDbb-error p span {display: block}
-->
</style>
</head>
<body>

<div id="Open_LDbb-error">
	<h1 id="Open_LDbb-maintitle"><span>An error was encountered</span></h1>
	<div class="errormessage">
<?php

	if (isset($message))
		echo '<p>'.$message.'</p>'."\n";

	if ($num_args > 1)
	{
		if (defined('OPENLD_DEBUG'))
		{
			if (isset($file) && isset($line))
				echo '<p><em>The error occurred on line '.$line.' in '.$file.'</em></p>'."\n";

			$db_error = isset($GLOBALS['db']) ? $GLOBALS['db']->error() : array();
			if (!empty($db_error['error_msg']))
			{
				echo '<p><strong>Database reported:</strong> '.openld_htmlspecialchars($db_error['error_msg']).(($db_error['error_no']) ? ' (Errno: '.$db_error['error_no'].')' : '').'.</p>'."\n";

				if ($db_error['error_sql'] != '')
					echo '<p><strong>Failed query:</strong> <code>'.openld_htmlspecialchars($db_error['error_sql']).'</code></p>'."\n";
			}
		}
		else
			echo '<p><strong>Note:</strong> For detailed error information (necessary for troubleshooting), enable "DEBUG mode". To enable "DEBUG mode", open up the file config.php in a text editor, add a line that looks like "define(\'OPENLD_DEBUG\', 1);" (without the quotation marks), and re-upload the file. Once you\'ve solved the problem, it is recommended that "DEBUG mode" be turned off again (just remove the line from the file and re-upload it).</p>
				<p><strong>Report bug:</strong> If you believe that this error is due to a bug in the core of OpenLD, then you can <a href="http://sourceforge.net/tracker/?func=add&group_id=181014&atid=895496">file a bugreport</a> or just <a href="http://openld.org/forum/viewforum.php?forum_id=17">report the bug in the forum</a>.</p>'."\n";
	}

?>
	</div>
</div>

</body>
</html>
<?php

	// If a database connection was established (before this error) we close it
	if (isset($GLOBALS['db']))
		$GLOBALS['db']->close();

	exit;
}


// Return all code blocks that hook into $hook_id
function get_hook($hook_id)
{
	global $openld_hooks, $settings;
	// now we also need to implement extension disabling in the option page
	return ($settings['disable_extensions'] == 'N') && isset($openld_hooks[$hook_id]) ? implode("\n", $openld_hooks[$hook_id]) : false;
}


// Replace censored words in $text
function censor_words(&$text)
{
	global $db;

	$query = array(
		'SELECT' => 'spam_word, replace_word, ban_type',
		'FROM' => 'illegal_words'
	);
	($hook = get_hook('functions_censor_words_sql')) ? eval($hook) : null;
	$result = $db->query_build($query) or error('Unable to fetch censor word list', __FILE__, __LINE__);
	$tbw = true;

	while($words = $db->fetch_assoc($result))
	{
		if(strstr($text, $words['spam_word']))
		{
			if($words['ban_type']=='T')
				$tbw = false;
			else
				$text = str_replace($words['spam_word'], $words['replace_word'], $text);
		}
	}
	
	return $tbw;
}


// Generate a string with numbered links (for multipage scripts)
function paginate($num_pages, $cur_page, $link_to)
{
	global $openld_url;

	$pages = array();
	$link_to_all = false;

	// If $cur_page == -1, we link to all pages (currently not implemented)
	if ($cur_page == -1)
	{
		$cur_page = 1;
		$link_to_all = true;
	}

	if ($num_pages <= 1)
		$pages = array('<strong>1</strong>');
	else
	{
		$page_prefix='#p';

		// Add a previous page link
		if ($num_pages > 1 && $cur_page > 1)
			$pages[] = '<a class="prev" href="' .str_replace($page_prefix, ($cur_page - 1), $link_to). '">' .PREVIOUS_PAGE. '</a>&#160;';
		if ($cur_page > 3)
		{
			$pages[] = '<a href="' .str_replace($page_prefix, 1, $link_to). '">1</a>';

			if ($cur_page > 5)
				$pages[] = '&#8230;';
		}

		for ($current = ($cur_page == 5) ? $cur_page - 3 : $cur_page - 2, $stop = ($cur_page + 4 == $num_pages) ? $cur_page + 4 : $cur_page + 3; $current < $stop; ++$current)
		{
			if ($current < 1 || $current > $num_pages)
				continue;
			else if ($current != $cur_page || $link_to_all)
				$pages[] = '<a href="' .str_replace($page_prefix, $current, $link_to). '">' .$current. '</a>';
			else
				$pages[] = '<strong>' .$current. '</strong>';
		}

		if ($cur_page <= ($num_pages-3))
		{
			if ($cur_page != ($num_pages-3) && $cur_page != ($num_pages-4))
				$pages[] = '&#8230;';

			$pages[] = '<a href="' .str_replace($page_prefix, $num_pages, $link_to). '">' .$num_pages. '</a>';
		}

		// Add a next page link
		if ($num_pages > 1 && !$link_to_all && $cur_page < $num_pages)
			$pages[] = '&#160;<a class="next" href="' .str_replace($page_prefix, ($cur_page + 1), $link_to). '">'.NEXT_PAGE.'</a>';
	}

	$pages = implode(' ', $pages);

	if($pages == "<strong>1</strong>")
		$pages="";

	return $pages;
}


function url_exists($url)
{
	$handle = @fopen($url, "r");
	if ($handle === false)
		return false;
	fclose($handle);
	return true;
}


function reciprocal_check($url, $from_url)
{
	global $settings;

	if(!stristr($url, $from_url))
		return RECIPROCAL_NOT_FROM_SAME_DOMAIN;

	if (url_exists($url))
	{
		$page = join("", file($url));
		if(stristr($page, $settings['reciprocal_url_option'])==false)
			return NO_RECIPROCAL_FOUND. $url;
	}
	else
		return URL_COULD_NOT_BE_LOADED. $url;

	return false; //false means successfull in this case
}


//move functions
//move_select_array() with some code originally from PHPLD.. see copyright notice above
function move_select_array($id, $not_id=-1, $active_id="active=1 AND ", $deny_pref_mode = 0)
{
	global $db, $settings;
	static $cats;

	if(($deny_pref_mode == 1 && $settings['deny_index_page_submissions'] == 'N') || $deny_pref_mode == 0)
	{
		$cats[0] = array('id' => '0', 'title' => INDEX_PAGE);
		$sep_remove=0;
	}
	else
		$sep_remove=1;


	$separator = "-";
	static $level = 0;
	
	$query = array(
		'SELECT' => 'id, title',
		'FROM' => 'categories',
		'WHERE' => $db->escape($active_id). 'id<>' .intval($not_id). ' AND father_id=' .intval($id),
		'ORDER BY' => $settings['categories_sorting_by']
	);
	($hook = get_hook('functions_move_select_array')) ? eval($hook) : null;
	$results = $db->query_build($query) or error("not_id was ".$not_id, __FILE__, __LINE__);

	$level++;
	while($row = $db->fetch_assoc($results))
	{
		$cats[] = array('id' => strval($row['id']), 'title' => str_repeat($separator, $level - $sep_remove). $row['title']);
		move_select_array($row['id'], $not_id, $active_id);
	}
	$level--;

	return $cats;
}


function openld_htmlspecialchars($str)
{
	($hook = get_hook('function_openld_htmlspecialchars')) ? eval($hook) : null;
	return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}


function openld_hash($str)
{
	if (function_exists('sha1'))	// Only in PHP 4.3.0+
		return sha1($str);
	else if (function_exists('mhash'))	// Only if Mhash library is loaded
		return bin2hex(mhash(MHASH_SHA1, $str));
	else
		return md5($str);
}


function openld_trim($str)
{
	return trim($str);
}


function openld_trim_array($array)
{
	return is_array($array) ? array_map('openld_trim_array', $array) : openld_trim($array);
}


// Unset any variables instantiated as a result of register_globals being enabled
function openld_unregister_globals()
{
	$register_globals = @ini_get('register_globals');
	if ($register_globals === "" || $register_globals === "0" || strtolower($register_globals === "off"))
		return;
	
	// Prevent script.php?GLOBALS[foo]=bar
	if (isset($_REQUEST['GLOBALS']) || isset($_FILES['GLOBALS']))
		exit('I\'ll have a steak sandwich and... a steak sandwich.');

	// Variables that shouldn't be unset
	$no_unset = array('GLOBALS', '_GET', '_POST', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');

	// Remove elements in $GLOBALS that are present in any of the superglobals
	$input = array_merge($_GET, $_POST, $_COOKIE, $_SERVER, $_ENV, $_FILES, isset($_SESSION) && is_array($_SESSION) ? $_SESSION : array());
	foreach ($input as $k => $v)
	{
		if (!in_array($k, $no_unset) && isset($GLOBALS[$k]))
		{
			unset($GLOBALS[$k]);
			unset($GLOBALS[$k]);	// Double unset to circumvent the zend_hash_del_key_or_index hole in PHP <4.4.3 and <5.1.4
		}
	}
}


//An UTF-8 compatible version of strlen
function openld_strlen($str)
{
	return strlen(utf8_decode($str));
}


//to make less pagination in the template files
function link_pagination($sql_rows, $page, $link, $link_array = null)
{
	global $db, $settings;
	$num_rows = $db->num_rows($sql_rows);
	$num_pages = ceil($num_rows / $settings['number_of_links_per_page']);
	return paginate($num_pages, $page, (is_null($link_array) ? $link : openld_link($link, $link_array)));
}


//standard alternative to header
function redirect($url)
{
	header("Location:".$url);

	//It is possible for hackers to configure their browsers to ignore header().
	//Avoid it by exit
	exit('Error: It seems that your browser ignore redirects');
}


//Clean up urls and avoid duplicates
function remove_last_slash($url)
{
	return ((substr($url, -1) == '/') ? substr($url, 0, -1) : $url);
}


//generate a random string
function random_key($len, $readable = false, $hash = false)
{
	$key = '';

	if ($hash)
		$key = substr(sha1(uniqid(rand(), true)), 0, $len);
	else if ($readable)
	{
		$chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

		for ($i = 0; $i < $len; ++$i)
			$key .= substr($chars, (mt_rand() % strlen($chars)), 1);
	}
	else
	{
		for ($i = 0; $i < $len; ++$i)
			$key .= chr(mt_rand(33, 126));
	}

	return $key;
}


function openld_is_file($file, $ext = 'php')
{
	$short_filename = substr($file, (strrpos($file, '/')+1), strrpos($file, '/'));
	return ((substr($short_filename, 0, 1) !== '~') && (strstr($short_filename, $ext) == $ext) && is_file($file));
}


function openld_is_dir($file)
{
	$short_filename = substr($file, (strrpos($file, '/')+1), strrpos($file, '/'));
	return ((substr($short_filename, 0, 1) !== '.') && is_dir($file));
}


/*not in use anymore, but quite practical.
function get_currency_sign($currency, $default_sign = '$')
{
	switch($currency)
	{
		case  'USD': $curr_sign = '$'; break;
		case  'GBP': $curr_sign = '£'; break;
		case  'EUR': $curr_sign = '€'; break;
		default : $curr_sign = $default_sign; break;
	}

	return $curr_sign;
} */


//Some currencies have the currency sign to the right and others to the left
function price_with_currency($price, $currency, $default_sign = '$')
{
	switch($currency)
	{
		case  'USD': $price_text = '$'. $price; break;
		case  'GBP': $price_text = '£'. $price; break;
		case  'EUR': $price_text = '€'. $price; break;
		default : $curr_sign = $price. $default_sign; break;
	}
	return $price_text;
}

//------------------------------------------------------------------------
//start template-functions in order to remove code lines in the template..
//------------------------------------------------------------------------


function display_navbar($id, $url = null)
{
	global $db;
	$path_string = "";
	
	while($id != 0)
	{
		$query = array(
			'SELECT' => 'title, father_id, id, description',
			'FROM' => 'categories',
			'WHERE' => 'id='. intval($id). OPENLD_IF_ACTIVE_CATS
		);
		($hook = get_hook('navigation_sql')) ? eval($hook) : null;
		$result = $db->query_build($query) or error(__FILE__, __LINE__);
		if($db->num_rows($result) == 0)
		{
			$path_string = ' - no result' .$path_string;
			$id = 0;
		}
		else
		{
			$therow = $db->fetch_row($result);

			//to complement fetch_row's lack of functionality
			$therow['title'] = $therow[0];
			$therow['father_id'] = $therow[1];
			$therow['id'] = $therow[2];
			$therow['description'] = $therow[3];

			if($url == null)
				$link_url = openld_link('index_cat', se_index_cat($therow));
			else
				$link_url = $url. '?id='. $therow['id'];

			$path_string = ' - <a href="' .$link_url. '">' .$therow['title']. '</a>' .$path_string;
			$id = $therow['father_id']; // pick the father_id from the db
		}
		($hook = get_hook('categories_path_navigation_cell')) ? eval($hook) : null;
	}

	return $path_string;
}


//------------------------------------------------------------------------
//end  template-functions
//------------------------------------------------------------------------
