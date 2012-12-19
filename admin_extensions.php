<?php
/***********************************************************************

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

define('OPENLD_ROOT', './');
require OPENLD_ROOT.'admin_header.php';
require OPENLD_ROOT.'include/xml.php';

function get_ext_title($ext_file)
{
	$ext_data = xml_to_array(@file_get_contents(OPENLD_ROOT.'extensions/'.$ext_file.'/extension.xml'));
	$manifest_errors = validate_manifest($ext_data, $ext_file);
	return empty($manifest_errors) ? openld_htmlspecialchars($ext_data['extension']['title']) : $ext_file;
}


if (isset($_REQUEST['install']))
{
	install_extension($_REQUEST['install']);
	//reffresh page, in order to avoid $db error when Browser->Back after chmoding
	redirect($settings['domain']."/admin_extensions.php");
}
elseif (isset($_REQUEST['uninstall']))
{
	uninstall_extension($_REQUEST['uninstall']);
	//reffresh page, in order to avoid $db error when Browser->Back after chmoding
	redirect($settings['domain']."/admin_extensions.php");
}
elseif(isset($_REQUEST['id_edit']))
{
	$_REQUEST['hooks'] = str_replace('\n', '\n\t\t', $_REQUEST['hooks']);


$ext_texta = '<?xml version="1.0" encoding="UTF-8"?>

<extension>
	<id>' .$_REQUEST['id_edit']. '</id>
	<title>' .$_REQUEST['title']. '</title>
	<version>' .$_REQUEST['version']. '</version>
	<author>' .$_REQUEST['author']. '</author>
	<description>' .$_REQUEST['description']. '</description>
	<hooks>'
		.$_REQUEST['hooks'].
	'</hooks>
</extension>';


	($hook = get_hook('admin_extensions_edit_file_simple')) ? eval($hook) : null;
	$fh = @fopen(OPENLD_ROOT.'extensions/' .$_REQUEST['the_ext_file']. '/extension.xml', 'wb');

	if (!$fh)
		error('Unable to write the selected extension file. Please make sure PHP has write access to the file "'.OPENLD_ROOT.'extensions/' .$_REQUEST['the_ext_file']. '/extension.xml"', __FILE__, __LINE__);

	fwrite($fh, $ext_texta);
	fclose($fh);

	refresh_extension($_REQUEST['id_edit']);
}
elseif(isset($_REQUEST['the_ext_file_free']))
{
	($hook = get_hook('admin_extensions_edit_file_free')) ? eval($hook) : null;
	$fh = @fopen(OPENLD_ROOT.'extensions/' .$_REQUEST['the_ext_file_free']. '/extension.xml', 'wb');

	if (!$fh)
		error('Unable to write the selected extension file. Please make sure PHP has write access to the file "'.OPENLD_ROOT.'extensions/' .$_REQUEST['the_ext_file']. '/extension.xml"', __FILE__, __LINE__);

	fwrite($fh, $_REQUEST['free_edit']);
	fclose($fh);

	refresh_extension($_REQUEST['the_ext_file_free']);
}

//get extensions
$query = array(
	'SELECT' => '*',
	'FROM' => 'extensions',
	'ORDER BY' => 'title'
);
($hook = get_hook('admin_extensions_sql')) ? eval($hook) : null;
$result = $db->query_build($query) or error('Unable to fetch installed extensions', __FILE__, __LINE__);

$page = 'admin/admin_extensions.php';
require OPENLD_ROOT.'admin_footer.php';
