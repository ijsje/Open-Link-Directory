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

define("NO_USERNAME_AT_ALL", "username is missing");
define("TOO_LONG_USERNAME", "the inserted username is longer than allowed");
define("TOO_SHORT_USERNAME", "the inserted username is shorter than allowed");
define("NO_PASSWORD_AT_ALL", "password is missing");
define("TOO_LONG_PASSWORD", "the inserted password is longer than allowed");
define("TOO_SHORT_PASSWORD", "the inserted password is shorter than allowed");
define("EMAIL_TOO_LONG", "the inserted email longer than allowed");
define("EMAIL_TOO_SHORT", "the inserted email shorter than allowed");
//define("ILLEGAL_WORDS_WITHIN_EMAIL", "you have included forbidden words within the email");
define("NO_TITLE_AT_ALL", "title is missing");
define("TITLE_TOO_LONG", "The inserted title is longer than allowed");
define("TITLE_TOO_SHORT", "The inserted title is shorter than allowed.");
define("NO_DESCRIPTION_AT_ALL", "description is missing");
define("DESCRIPTION_TOO_LONG", "The inserted description is longer than allowed.");
define("DESCRIPTION_TOO_SHORT", "The inserted description is shorter than allowed.");
define("URL_TOO_LONG", "the inserted url is longer than allowed");
define("URL_TOO_SHORT", "the inserted url is shorter than allowed");
define("INVALID_URL_FORMAT", "the URL format is invalid");

define("PERMISSION_DESCRIPTION", "Ensure that permissions are set to 755 for the following files below.");
define("CHMOD_LABEL", "Permissions");
define("CHMOD_WARNING", "you need to set the file permissions to 755");
define("PERMISSION_NOT_CONTINUE", "you need to change file permissions before you can continue");

define("EXTENSION_ERROR", "the database type was not filled in correctly");
define("HOST_ERROR", "the host was not filled in correctly");
define("NAME_ERROR", "the database name was not filled in correctly");
define("USERNAME_ERROR", "the username was not filled in correctly");
define("PASSWORD_ERROR", "the password was not filled in correctly");
define("PREFIX_ERROR", "the prefix was not filled in correctly");
define("PASSWORD_EQUALS_USERNAME", "password must not be the same as the username.");

define("LOCAL_SETTINGS", "Database Settings");
define("OVERVIEW_TABLE_OBJECT", "Object");
define("OVERVIEW_TABLE_PREFERENCE", "Preference");
define("OVERVIEW_TABLE_DATABASE", "Database Application");
define("OVERVIEW_TABLE_HOST", "Host");
define("OVERVIEW_TABLE_NAME", "Name of Database");
define("OVERVIEW_TABLE_USERNAME", "Username for Database");
define("OVERVIEW_TABLE_PASSWORD", "Password for Database");
define("OVERVIEW_TABLE_PREFIX", "Prefix");
define("CONFIG_NOT_FOUND", "the config file was not found"); // not sure if its still in use
define("DATBASE_ALLREADY_INSTALLED", "OpenLD have already been installed, remove the /install folder for increased security");
define("WRONG_PHP_VERSION", "You are running PHP version ".PHP_VERSION.". OpenLD requires at least PHP 4.3.0 to run properly. You must upgrade your PHP installation before you can continue.");
define("NO_VALID_DB_SELECTED", "no valid database was selected");
define("INSTALL_OPENLD", "Install OpenLD");
define("LICENSE", "License");
define("SET_YOUR_OPTIONS", "Set your options");
define("ADMIN_USERNAME", "Admins Username");
define("ADMIN_PASSWORD", "Admins Password");
define("ADMIN_EMAIL", "Admins Email");
define("SITE_TITLE", "Site Title");
define("SITE_DESCRIPTION", "Site Description");
define("SITE_DOMAIN", "URL");
define("CONTINUE_", "Continue"); // cannot be just CONTINUE because of type/method conflict

define("FINISH_DESCRIPTION", "Congratulations! OpenLD has been successfully installed. Please follow the instructions below to finalize the installation.");
define("OPENLD_IS_INSTALLED", "Your OpenLD directory is installed!");
define("DELETE_INSTALL_FOLDER_MESSAGE", "You should now delete the whole install directory for security reasons.");
define("GOTO_DIRECTORY_INDEX", "Go to directory index");

define("INSTALLATION", "Installation");
define("CONFIGURATIONS", "Configurations");
//define("PREFERENCES", "Preferences");
define("FINISH", "Finish");

define("TITLE_PHASE", "OPENLD Installation - ");

//for the footer
define("POWERED_BY", "Powered by");

//Page generation
define("PAGE_GENERATED_IN", "Page generated in ");
define("SECONDS", " Seconds");