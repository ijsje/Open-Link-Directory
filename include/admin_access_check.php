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

//Make sure no one tries to access this file directly
if(!defined("OPENLD_ROOT"))
	error("You are not allowed to access this file directly", __FILE__, __LINE__);

if(!isset($_SESSION))
	session_start();

if (!isset($_SESSION['user_name']) || ($settings['admin_username'] != $_SESSION['user_name'])) 
	redirect($settings['domain']."/admin_login.php");
