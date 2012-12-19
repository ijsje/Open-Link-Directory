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

require(OPENLD_ROOT. "header.php");

($hook = get_hook('suggest_category_before_input_check')) ? eval($hook) : null;
if(!empty($_POST))
{
	$id = (isset($_POST['id']) && is_numeric($_POST['id'])) ? $_POST['id'] : 0;
	$_POST = openld_trim_array($_POST);
	$error->check_category_title($_POST['title'] = check_if_null($_POST['title']), check_if_null($id));
	$error->check_category_description($_POST['description'] = check_if_null($_POST['description']));

	//and print to sql
	$if_active_by_default = 0;
	($hook = get_hook('suggest_category_input_control')) ? eval($hook) : null;
	
	if($error->transform_error())
	{
		$query = array(
			'INSERT' => 'title, description, active, father_id, created',
			'INTO' => 'categories',
			'VALUES' => '"' .$db->escape($_POST['title']). '", "' .$db->escape($_POST['description']). '", ' .$if_active_by_default. ', '.intval($id) .', NOW()'
		);
		($hook = get_hook('suggest_sql')) ? eval($hook) : null;
		$db->query_build($query) or error("Writing suggest category information to database was impossible", __FILE__ ,__LINE__);
	}
}

$page = "suggest_category.php";
($hook = get_hook('suggest_category_before_page')) ? eval($hook) : null;
require("footer.php");