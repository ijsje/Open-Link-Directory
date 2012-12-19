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

//scandir isn't available in PHP4, so lets create the function if it doeasn't exist
if(!function_exists('scandir'))
{
	function scandir($dir, $sortorder = 0)
	{
		if(is_dir($dir))
		{
			$files = array();
			$dirlist = opendir($dir);

			while(($file = readdir($dirlist)) !== false)
				$files[] = $file;

			closedir($dirlist);


			($sortorder == 0) ? sort($files) : rsort($files);

			return $files;
		}
		else
			return false;
	}
}


function hier_file_list($dir, $path = '')
{
	static $hier_i = 0;
	$filenames = array();

	$directories = opendir(OPENLD_ROOT. $dir .$path);
	while (false !== ($file = readdir($directories)))
	{
		if(is_dir(OPENLD_ROOT .$dir. $path. "/".$file) && substr($file, 0, 1) != '.')
		{
			$filenames = array_merge($filenames, hier_file_list($dir, $path. "/" .$file));
		}
		elseif(is_file(OPENLD_ROOT .$dir. $path. "/".$file))
		{
			$filenames[$hier_i] = array('filename', 'permission', 'id');

			$filenames[$hier_i]['filename'] = $path. '/'. $file;

			if(!is_writable($filenames[$hier_i]['filename']))
				@chmod($filenames[$hier_i]['filename'], get_filepermission());

			$filenames[$hier_i]['permission'] = (is_writable(OPENLD_ROOT .$filenames[$hier_i]['filename']) ? IS_WRITEABLE : NOT_WRITEABLE);

			$filenames[$hier_i]['id'] = $hier_i;

			$hier_i++;
		}
	}

	return $filenames;
}

//Catching input
($hook = get_hook('admin_template_before_input_check')) ? eval($hook) : null;
if((isset($_POST['template']) && is_dir(OPENLD_ROOT. 'themes/' .$_POST['template'])) || (isset($_POST['admin_template']) && is_dir(OPENLD_ROOT. 'themes/' .$_POST['admin_template'])))
{
	if(isset($_POST['template']))
	{
		$query = array(
			'UPDATE' => 'settings',
			'SET' => 'value="' .$db->escape($_POST['template']). '"',
			'WHERE' => 'title="template_path"'
		);
		($hook = get_hook('admin_template_sql')) ? eval($hook) : null;
		$db->query_build($query) or error("Couldn't switch theme", __FILE__, __LINE__);
	}

	if(isset($_POST['admin_template']))
	{
		$query = array(
			'UPDATE' => 'settings',
			'SET' => 'value="' .$db->escape($_POST['admin_template']). '"',
			'WHERE' => 'title="admin_template_path"'
		);
		($hook = get_hook('admin_admin_template_sql')) ? eval($hook) : null;
		$db->query_build($query) or error("Couldn't switch theme", __FILE__, __LINE__);

		/****
			ADD A SETTING
		*****
		if($db->affected_rows() == 0)
		{
			$query = array(
				'INSERT' => 'title, value',
				'INTO' => 'settings',
				'VALUES' => '"admin_template_path", "' .$db->escape($_POST['admin_template']). '"'
			);
			$db->query_build($query) or error(__FILE__, __LINE__);
		}
		****/
	}

	generate_settings_cache();
}
($hook = get_hook('admin_template_after_input_check')) ? eval($hook) : null;

if(isset($_REQUEST['edit']) || isset($_REQUEST['edit_file']) || isset($_REQUEST['remove_file']))
{
	if(isset($_REQUEST['edit']))
		$edit = $_REQUEST['edit'];
	elseif(isset($_REQUEST['template']))
		$edit = $_REQUEST['template'];

	$f_names = hier_file_list('themes/' .$edit);
	//handle file manipulation actions
	if(isset($_REQUEST['edited_link']))
	{
		$fh = @fopen(OPENLD_ROOT.'themes/' .$edit. '/' .$f_names[$_REQUEST['id']]['filename'], 'wb');
		if (!$fh)
			error('Unable to write the selected theme file. Please make sure PHP has write access to the file', __FILE__, __LINE__);

		fwrite($fh, $_REQUEST['filetext']);
		fclose($fh);
	}
	elseif(isset($_REQUEST['remove_file']))
	{
		unlink(OPENLD_ROOT.'themes/' .$edit. '/' .$f_names[$_REQUEST['remove_file']]['filename']);

		//must refresh the file list
		$f_names = hier_file_list('themes/' .$edit);
	}
}
else
{
	$scandirs = scandir(OPENLD_ROOT. "themes/");
	//get all template folders
	foreach($scandirs as $diro)
		if(is_dir(OPENLD_ROOT. "themes/".$diro) && substr($diro, 0, 1) != '.')
		{
			$real_dirs[] = $diro;
			if(is_dir(OPENLD_ROOT. "themes/".$diro."/admin"))
				$admin_dirs[$diro] = true;
			else
				$admin_dirs[$diro] = false;
		}
}



$page = 'admin/admin_template.php';
require OPENLD_ROOT.'admin_footer.php';
