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

($hook = get_hook('admin_footer_header')) ? eval($hook) : null;

$queries = defined("OPENLD_SHOW_QUERIES") ? display_saved_queries(2) : '';
$page_generation = defined("OPENLD_DEBUG") ? PAGE_GENERATED_IN. strval(round(microtime_float() - $time_start, 2)). SECONDS : '';

require OPENLD_ROOT .'themes/' .$settings['admin_template_path']. 'admin/admin_header.php';
require OPENLD_ROOT .'themes/' .$settings['admin_template_path']. 'admin/admin_menu.php';
require OPENLD_ROOT .'themes/' .$settings['admin_template_path']. $page;
require OPENLD_ROOT .'themes/' .$settings['admin_template_path']. 'admin/admin_footer.php';

($hook = get_hook('admin_footer_footer')) ? eval($hook) : null;
