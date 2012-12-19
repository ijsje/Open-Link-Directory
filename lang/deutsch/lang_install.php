<?php

/***********************************************************************

  Copyright (C) 2006-2009  Anders Persson (anders_persson@home.se)

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

define("NO_USERNAME_AT_ALL", "Bitte geben Sie einen Benutzernamen ein.");
define("TOO_LONG_USERNAME", "Der Benutzernamen ist zu lang.");
define("TOO_SHORT_USERNAME", "Der Benutzernamen ist zu kurz.");
define("NO_PASSWORD_AT_ALL", "Es wurde kein Passwort eingegeben.");
define("TOO_LONG_PASSWORD", "Das Passwort ist zu lang..");
define("TOO_SHORT_PASSWORD", "Das Passwort ist zu kurz.");
define("EMAIL_TOO_LONG", "Die E-mail-Adresse ist zu lang.");
define("EMAIL_TOO_SHORT", "Die E-mail-Adresse ist zu kurz.");
define("ILLEGAL_WORDS_WITHIN_EMAIL", "Sie haben verbotene Woerter in der E-mail-Adresse.");
define("NO_TITLE_AT_ALL", "Bitte geben Sie einen Titel ein.");
define("TITLE_TOO_LONG", "Der eingegebene Titel ist zu lang.");
define("TITLE_TOO_SHORT", "Der eingegebene Titel ist zu kurz.");
define("NO_DESCRIPTION_AT_ALL", "Bitte geben Sie eine Beschreibun ein.");
define("DESCRIPTION_TOO_LONG", "Die Beschreibun ist zu lang.");
define("DESCRIPTION_TOO_SHORT", "Die Beschreibun ist zu kurz.");
define("URL_TOO_LONG", "Die URL ist zu kurz.");
define("URL_TOO_SHORT", "Die URL ist zu kurz.");
define("ILLEGAL_WORDS_WITHIN_URL", "Sie haben verbotene Woerter in der URL.");
define("INVALID_URL_FORMAT", "Die URL ist ungültig.");

define("PERMISSION_DESCRIPTION", "Bitte setzen Sie die Rechte der folgenden Dateien auf 755.");
define("CHMOD_LABEL", "Rechte");
define("CHMOD_WARNING", "Sie müssen Sie die Rechte der folgenden Dateien auf 755 setzen.");
define("PERMISSION_NOT_CONTINUE", "Sie müssen Sie die Rechte ändern bevor Sie weitermachen können.");

define("EXTENSION_ERROR", "Der Datenbanktyp war nicht richtig");
define("HOST_ERROR", "Der Host ist nicht richtig");
define("NAME_ERROR", "Der Datenbankname war nicht richtig");
define("USERNAME_ERROR", "Der Benutzername war nicht richtig");
define("PASSWORD_ERROR", "Das Passwort war nicht richtig");
define("PREFIX_ERROR", "Das Prefix  war nicht richtig");
define("PASSWORD_EQUALS_Benutzername", "Das Password darf nicht wie der Benutzername lauten.");

define("LOCAL_SETTINGS", "Datenbank Einstellungen");
define("OVERVIEW_TABLE_OBJECT", "Object");
define("OVERVIEW_TABLE_PREFERENCE", "Einstellung");
define("OVERVIEW_TABLE_DATABASE", "Datenbank Applikation");
define("OVERVIEW_TABLE_HOST", "Host");
define("OVERVIEW_TABLE_NAME", "Name der Datenbank");
define("OVERVIEW_TABLE_USERNAME", "Benutzername der Datenbank");
define("OVERVIEW_TABLE_PASSWORD", "Password der Datenbank");
define("OVERVIEW_TABLE_PREFIX", "Prefix");
define("CONFIG_NOT_FOUND", "Das Konfigurations-file wurde nicht gefunden"); // not sure if its still in use
define("DATBASE_ALLREADY_INSTALLED", "Datenbank ist installiert, entfernen Sie den /install Ordner zur Sicherheit");
define("WRONG_PHP_VERSION", "Die haben die PHP Version ".PHP_VERSION.". OpenLD benoetigt mindestens PHP 4.3.0 um richtig zu laufen - bitte upgraden bevor Sie weitermachen.");
define("NO_VALID_DB_SELECTED", "Es wurde keine gueltige Datenbank ausgewaehlt");
define("INSTALL_OPENLD", "Install OpenLD");
define("LICENSE", "Lizens");
define("SET_YOUR_OPTIONS", "Optionen einstellen");
define("ADMIN_USERNAME", "Admin Benutzername");
define("ADMIN_PASSWORD", "Admin Passwort");
define("ADMIN_EMAIL", "Admin Email");
define("SITE_TITLE", "Seiten Title");
define("SITE_DESCRIPTION", "Seiten Beschreibung");
define("SITE_DOMAIN", "URL");
define("CONTINUE_", "Weiter"); // cannot be just CONTINUE because of type/method conflict

define("FINISH_DESCRIPTION", "Gratulation! OpenLD wurde installiert. Bitte folgen Sie den Instuktionen um die Installation zu vervollstaendigen.");
define("OPENLD_IS_INSTALLED", "Ihr OpenLD Directory ist installiert!");
define("DELETE_INSTALL_FOLDER_MESSAGE", "Bitte loeschen Sie den /install Ordner zur Sicherheit.");
define("GOTO_DIRECTORY_INDEX", "Zum Start des Verzeichnisses");

define("INSTALLATION", "Installation");
define("CONFIGURATIONS", "Konfiguration");
//define("PREFERENCES", "Preferences");
define("FINISH", "Ende");

define("TITLE_PHASE", "OPENLD Installation - ");

//for the footer
define("POWERED_BY", "Powered by");

//Page generation
define("PAGE_GENERATED_IN", "Page generated in ");
define("SECONDS", " Seconds");
