<?php 
/***********************************************************************

  Copyright (C) 2006  Rickard Andersson (rickard@punbb.org)
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

// Get the database system version
$db_version = $db->get_version();

// Collect some additional info about MySQL
if ($db_type == 'mysql' || $db_type == 'mysqli')
{
	$db_version = 'MySQL '.$db_version;

	// Calculate total db size/row count
	$result = $db->query('SHOW TABLE STATUS FROM `'.$db_name.'` LIKE \''.$db->prefix.'%\'') or error('Unable to fetch table status', __FILE__, __LINE__);

	$total_records = $total_size = 0;
	while ($status = $db->fetch_assoc($result))
	{
		$total_records += $status['Rows'];
		$total_size += $status['Data_length'] + $status['Index_length'];
	}

	$total_size = $total_size / 1024;

	if ($total_size > 1024)
		$total_size = round($total_size / 1024, 2).' MB';
	else
		$total_size = round($total_size, 2).' KB';
}

// Check for the existance of various PHP opcode caches/optimizers
if (function_exists('mmcache'))
	$php_accelerator = '<a href="http://turck-mmcache.sourceforge.net/">Turck MMCache</a>';
else if (isset($_PHPA))
	$php_accelerator = '<a href="http://www.php-accelerator.co.uk/">ionCube PHP Accelerator</a>';
else if (ini_get('apc.enabled'))
	$php_accelerator ='<a href="http://www.php.net/apc/">Alternative PHP Cache (APC)</a>';
else if (ini_get('zend_optimizer.optimization_level'))
	$php_accelerator = '<a href="http://www.zend.com/products/zend_optimizer/">Zend Optimizer</a>';
else if (ini_get('eaccelerator.enable'))
	$php_accelerator = '<a href="http://eaccelerator.net/">eAccelerator</a>';
else if (ini_get('xcache.cacher'))
	$php_accelerator = '<a href="http://trac.lighttpd.net/xcache/">XCache</a>';
else
	$php_accelerator = 'N/A';

($hook = get_hook('admin_information_before_action_if')) ? eval($hook) : null;
if(isset($_GET['action']))
	exit(phpinfo());

$page = 'admin/admin_information.php';
require OPENLD_ROOT.'admin_footer.php';
