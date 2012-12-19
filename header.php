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

function microtime_float()
{
	list($usec, $sec) = explode(" ", microtime());
	return ((float)$usec + (float)$sec);
}
$time_start = microtime_float();
require (OPENLD_ROOT.'include/common.php');
require OPENLD_ROOT. 'include/se_friendly.php';

($hook = get_hook('header_top_hook')) ? eval($hook) : null;

$submit_id = openld_link('submit', se_submit($_GET)); 
$suggest_id = openld_link('suggest', se_suggest($_GET));

$meta_description = $settings['description']; // is set to category decription in index.php
$head_title = ((isset($_GET['category']) && $_GET['category'] !== 'root') ? $settings['title']. ' - ' .$_GET['category'] : $settings['title']);
