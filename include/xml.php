<?php
/***********************************************************************

  Copyright (C) 2002-2006  Rickard Andersson (rickard@punbb.org)
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

//Make sure no one tries to access this file directly
if(!defined("OPENLD_ROOT"))
	error("You are not allowed to access this file directly", __FILE__, __LINE__);


// Parse XML data into an array
function xml_to_array($raw_xml)
{
	$xml_parser = xml_parser_create();
	xml_parser_set_option($xml_parser, XML_OPTION_CASE_FOLDING, 0);
	xml_parser_set_option($xml_parser, XML_OPTION_SKIP_WHITE, 0);
	xml_parse_into_struct($xml_parser, $raw_xml, $vals);
	xml_parser_free($xml_parser);

	$_tmp = '';
	foreach ($vals as $xml_elem)
	{
		$x_tag = $xml_elem['tag'];
		$x_level = $xml_elem['level'];
		$x_type = $xml_elem['type'];

		if ($x_level != 1 && $x_type == 'close')
		{
			if (isset($multi_key[$x_tag][$x_level]))
				$multi_key[$x_tag][$x_level] = 1;
			else
				$multi_key[$x_tag][$x_level] = 0;
		}

		if ($x_level != 1 && $x_type == 'complete')
		{
			if ($_tmp == $x_tag)
				$multi_key[$x_tag][$x_level] = 1;

			$_tmp = $x_tag;
		}
	}

	foreach ($vals as $xml_elem)
	{
		$x_tag = $xml_elem['tag'];
		$x_level = $xml_elem['level'];
		$x_type = $xml_elem['type'];

		if ($x_type == 'open')
			$level[$x_level] = $x_tag;

		$start_level = 1;
		$php_stmt = '$xml_array';
		if ($x_type == 'close' && $x_level != 1)
			$multi_key[$x_tag][$x_level]++;

		while($start_level < $x_level)
		{
			$php_stmt .= '[$level['.$start_level.']]';
			if (isset($multi_key[$level[$start_level]][$start_level]) && $multi_key[$level[$start_level]][$start_level])
				$php_stmt .= '['.($multi_key[$level[$start_level]][$start_level]-1).']';

			++$start_level;
		}

		$add = '';
		if (isset($multi_key[$x_tag][$x_level]) && $multi_key[$x_tag][$x_level] && ($x_type == 'open' || $x_type == 'complete'))
		{
			if (!isset($multi_key2[$x_tag][$x_level]))
				$multi_key2[$x_tag][$x_level] = 0;
			else
				$multi_key2[$x_tag][$x_level]++;

			$add = '['.$multi_key2[$x_tag][$x_level].']';
		}

		if (isset($xml_elem['value']) && trim($xml_elem['value']) != '' && !array_key_exists('attributes', $xml_elem))
		{
			if ($x_type == 'open')
				$php_stmt_main = $php_stmt.'[$x_type]'.$add.'[\'content\'] = $xml_elem[\'value\'];';
			else
				$php_stmt_main = $php_stmt.'[$x_tag]'.$add.' = $xml_elem[\'value\'];';

			eval($php_stmt_main);
		}

		if (array_key_exists('attributes', $xml_elem))
		{
			if (isset($xml_elem['value']))
			{
				$php_stmt_main = $php_stmt.'[$x_tag]'.$add.'[\'content\'] = $xml_elem[\'value\'];';
				eval($php_stmt_main);
			}

			foreach ($xml_elem['attributes'] as $key=>$value)
			{
				$php_stmt_att=$php_stmt.'[$x_tag]'.$add.'[\'attributes\'][$key] = $value;';
				eval($php_stmt_att);
			}
		}
	}

	return isset($xml_array) ? $xml_array : array();
}


// Validate the syntax of an extension manifest file
function validate_manifest($xml_array, $folder_name)
{
	$errors = array();

	if (!isset($xml_array['extension']) || !is_array($xml_array['extension']))
		$errors[] = EXTENSION_ROOT_ERROR;
	else
	{
		$ext = $xml_array['extension'];
		if (!isset($ext['id']) || $ext['id'] == "")
			$errors[] = EXTENSION_ID_ERROR;
		if ($ext['id'] != $folder_name)
			$errors[] = EXTENSION_ID_ERROR2;
		if (!isset($ext['title']) || $ext['title'] == "")
			$errors[] = EXTENSION_TITLE_ERROR;
		if (!isset($ext['version']) || $ext['version'] == "")
			$errors[] = EXTENSION_VERSION_ERROR;
		if (!isset($ext['description']) || $ext['description'] == "")
			$errors[] = EXTENSION_DESCRIPTION_ERROR;
		if (!isset($ext['author']) || $ext['author'] == "")
			$errors[] = EXTENSION_AUTHOR_ERROR;
		if (!isset($ext['hooks']) || !is_array($ext['hooks']))
			$errors[] = EXTENSION_HOOKS_ERROR;
		else
		{
			$hooks = $ext['hooks'];
			if (!isset($hooks['hook']) || !is_array($hooks['hook']))
				$errors[] = EXTENSION_HOOKS_HOOK_ERROR;
			else
			{
				$hooks = $hooks['hook'];
				if (!is_array(current($hooks)))
					$hooks = array($hooks);

				foreach ($hooks as $hook)
				{
					if (!isset($hook['content']) || $hook['content'] == "")
						$errors[] = EXTENSION_HOOKS_HOOK_ERROR;
					if (!isset($hook['attributes']['id']) || $hook['attributes']['id'] == "")
						$errors[] = EXTENSION_HOOKS_HOOK_ERROR2;
				}
			}
		}
	}

	return $errors;
}
