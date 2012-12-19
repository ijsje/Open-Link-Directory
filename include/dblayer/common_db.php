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


// Make sure no one attempts to run this script "directly"
if (!defined('OPENLD_ROOT'))
	exit("You tried to reach this file directly, which should be impossible");


// Load the appropriate DB layer class
switch ($db_type)
{
	case 'mysql':
		require OPENLD_ROOT.'include/dblayer/mysql.php';
		break;
	
	case 'mysql_innodb':
		require FORUM_ROOT.'include/dblayer/mysql_innodb.php';
		break;

	case 'mysqli':
		require OPENLD_ROOT.'include/dblayer/mysqli.php';
		break;
	
	case 'mysqli_innodb':
		require OPENLD_ROOT.'include/dblayer/mysqli_innodb.php';
		break;

	case 'pgsql':
		require OPENLD_ROOT.'include/dblayer/pgsql.php';
		break;

	case 'sqlite':
		require OPENLD_ROOT.'include/dblayer/sqlite.php';
		break;

	default:
		error('\''.$db_type.'\' is not a valid database type. ', __FILE__, __LINE__);
		break;
}


// Create the database adapter object (and open/connect to/select db)
$db = new DBLayer($db_host, $db_username, $db_password, $db_name, $db_prefix, false);
