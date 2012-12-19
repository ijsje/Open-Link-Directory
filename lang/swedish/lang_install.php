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

define("NO_USERNAME_AT_ALL", "No username was inserted. You must insert a username.");
define("TOO_LONG_USERNAME", "The username was too long.");
define("TOO_SHORT_USERNAME", "The username was too short.");
define("NO_PASSWORD_AT_ALL", "No password was inserted. You must insert a password.");
define("TOO_LONG_PASSWORD", "The inserted password is too long.");
define("TOO_SHORT_PASSWORD", "The inserted password is too short.");
define("EMAIL_TOO_LONG", "The inserted email is too long.");
define("EMAIL_TOO_SHORT", "The inserted email is too short.");
define("ILLEGAL_WORDS_WITHIN_EMAIL", "You have included forbidden words within the email.");
define("NO_TITLE_AT_ALL", "No title was inserted. You must insert a title.");
define("TITLE_TOO_LONG", "The inserted title is too long.");
define("TITLE_TOO_SHORT", "The inserted title is too short.");
define("NO_DESCRIPTION_AT_ALL", "No description was inserted. You must insert a description.");
define("DESCRIPTION_TOO_LONG", "The inserted description is too long.");
define("DESCRIPTION_TOO_SHORT", "The inserted description is too short.");
define("URL_TOO_LONG", "The inserted url is too long.");
define("URL_TOO_SHORT", "The inserted url is too short.");
define("ILLEGAL_WORDS_WITHIN_URL", "You have included forbidden words within the url.");
define("INVALID_URL_FORMAT", "The URL format is invalid");

define("PERMISSION_DESCRIPTION", "Kontrollera att filr&auml;ttigheterna &auml;r satta till 755 f&ouml;r f&ouml;ljande filer.");
define("CHMOD_LABEL", "R&auml;ttigheter");
define("CHMOD_WARNING", "Du m&aring;ste &auml;ndra alla filr&auml;ttigheter till 755");
define("PERMISSION_NOT_CONTINUE", "Du m&aring;ste &auml;ndra filr&auml;ttigheter innan du forts&auml;tter");

define("EXTENSION_ERROR", "Fel databastyp valdes");
define("HOST_ERROR", "Hosten var inte korrekt ifylld");
define("NAME_ERROR", "Databasnamnet var inte korrekt ifyllt");
define("USERNAME_ERROR", "Anv&auml;ndarnamnet var inte korrekt ifyllt");
define("PASSWORD_ERROR", "L&ouml;senordet var inte korrekt ifyllt");
define("PREFIX_ERROR", "Du har inte fyllt i prefixet korrekt");
define("PASSWORD_EQUALS_USERNAME", "L&ouml;senordet och anv&auml;ndarnamnet f&aring;r inte vara identiska.");

define("LOCAL_SETTINGS", "Databasinst&auml;llningar");
define("OVERVIEW_TABLE_OBJECT", "Objekt");
define("OVERVIEW_TABLE_PREFERENCE", "Inst&auml;llning");
define("OVERVIEW_TABLE_DATABASE", "Databasprogram");
define("OVERVIEW_TABLE_HOST", "Host");
define("OVERVIEW_TABLE_NAME", "Name p&aring; Databas");
define("OVERVIEW_TABLE_USERNAME", "Anv&auml;ndarnamn f&ouml;r Databas");
define("OVERVIEW_TABLE_PASSWORD", "L&ouml;senord f&ouml;r Databas");
define("OVERVIEW_TABLE_PREFIX", "Prefix");
define("CONFIG_NOT_FOUND", "Configurationsfilen hittades inte."); // not sure if its still in use
define("DATBASE_ALLREADY_INSTALLED", "Databasen &auml;r redan installerad, ta bort /install mappen f&ouml;r s&auml;kerhets skull");
define("WRONG_PHP_VERSION", "Du k&ouml;r denna PHP version: ".PHP_VERSION.". OpenLD kr&auml;ver PHP 4.3.0 eller mer f&ouml;r att kunna fungera. Du m&aring;ste uppgradera din PHP installation innan du kan forts&auml;tta.");
define("NO_VALID_DB_SELECTED", "Ingen giltig databas har valts");
define("INSTALL_OPENLD", "Installera OpenLD");
define("LICENSE", "Licens");
define("SET_YOUR_OPTIONS", "V&auml;lj inst&auml;llningar");
define("ADMIN_USERNAME", "Administrations Anv&auml;ndarnamn");
define("ADMIN_PASSWORD", "Administrations L&ouml;senord");
define("ADMIN_EMAIL", "Administrations E-post");
define("SITE_TITLE", "Webbplatstitel");
define("SITE_DESCRIPTION", "Webbplatsbeskrivning");
define("SITE_DOMAIN", "Adress");
define("CONTINUE_", "Forts&auml;tt"); // cannot be just CONTINUE because of type/method conflict

define("FINISH_DESCRIPTION", "Grattis! OpenLD har nu installerats.");
define("OPENLD_IS_INSTALLED", "OpenLD &auml;r installerad");
define("DELETE_INSTALL_FOLDER_MESSAGE", "Du b&ouml;r ta bort denna installationsmapp.");
define("GOTO_DIRECTORY_INDEX", "G&aring; till katalogsindex");

define("INSTALLATION", "Installation");
define("CONFIGURATIONS", "Konfiguration");
//define("PREFERENCES", "Preferences");
define("FINISH", "Klart");

define("TITLE_PHASE", "OPENLD Installation - ");

//for the footer
define("POWERED_BY", "Powered by");

//Page generation
define("PAGE_GENERATED_IN", "Sidan skapades p&aring;");
define("SECONDS", " Sekunder");
