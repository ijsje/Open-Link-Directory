<?php

/***********************************************************************

  Copyright (C) 2002-2006  Rickard Andersson (rickard@punbb.org)
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
  Translated into german by Susann Wasikowski, www.tipps-archiv.de

************************************************************************/

//common strings
define("TITLE_LABEL", "Titel");
define("CATEGORY_LABEL", "Kategorie");
define("CAPTCHA_LABEL", "Captcha");
define("URL_LABEL", "URL");
define("LINK_DESCRIPTION_LABEL", "Beschreibung der Website");
define("CATEGORY_DESCRIPTION_LABEL", "Beschreibung der Kategorie");
define("NAME_LABEL", "Name");
define("EMAIL_LABEL", "eMail");
define("EDIT_LABEL", "Editieren");
define("ACCEPT_LABEL", "Annehmen");
define("UNACCEPT_LABEL", "Inakzeptabel");
define("MOVE_LABEL", "Verschieben");
define("DELETE_LABEL", "L&ouml;schen");
define("NAVIGATION_LABEL", "Navigation");
define("HOME_LABEL", "Home");
define("SUBMIT_LINK_LABEL", "URL vorschlagen");
define("SUGGEST_CATEGORY_LABEL", "Neue Kategorie vorschlagen");
define("SEARCH_LABEL", "Suchen");

//For include/functions.php
define("RECIPROCAL_NOT_FROM_SAME_DOMAIN", "Die URL muss von derselben Domain stammen!");
define("NO_RECIPROCAL_FOUND", "Es wurde kein Back-Link unter der URL gefunden: ");
define("URL_COULD_NOT_BE_LOADED", "Die URL konnte nicht geladen werden: ");

//for the admin_menu
define("ACCEPT_CATEGORIES_LABEL", "Kategorien annehmen");
define("ACCEPT_LINKS_TITLE", "Links annehmen");
define("BROWSE", "Kategorie Browser");
define("LINKS_LABEL", "Links");
define("CATEGORIES_LABEL", "Kategorien");
define("INFORMATION_LABEL", "Information");
define("OPTION_LABEL", "Optionen");
define("CENSORING", "Zensur");
define("IP_BANNING", "IP Banning");
define("TEMPLATES_TITLE", "Themes");
define("ADMIN_MENU", "Admin Men&uuml;");
define("DIRECTORY_MANAGEMENT", "Verzeichnis Management");
define("GENERAL_LABEL", "Allgemeines");
define("PLUGINS_LABEL", "Plugins");

//for ip banning
define("CENSORED_WORD_IS_NOTHING", "Sie haben kein Wort eingetragen");
define("YOU_MUST_SELECT_AN_IP", "Sie m&uuml;ssen eine IP angeben");
define("IP_ALLREADY_BANNED", "Die IP wird bereits gebannt");
define("IP_BANNED_QOUTE", "Sorry, aber Sie werden gebannt!");
define("NEW_IP_BAN", "Neuer IP Bann");
define("ADD_A_BAN", "Neuen Bann hinzuf&uuml;gen");
define("IP_NUMBER", "IP Adresse");
define("MANAGE_BANS", "Banns verwalten");
define("UNBAN_IP", "IP-Bann aufheben");
define("SELECT_IP_TO_UNBAN", "W&auml;hlen Sie die IP-Adresse aus die sie entsperren m&ouml;chten.");
define("UNBAN", "Bann aufheben");
define("INFO", "Info");
define("NO_IP_BANS", "Keine IPs im Bann derzeit");

//for plugins
define("PLUGIN_DOES_NOT_EXIST", "Das Plugin gibt es nicht");
define("PLUGIN_NOT_SELECTED", "Kein Plugin ausgew&auml;hlt");

//for adding
define("ADD_LABEL", "Hinzuf&uuml;gen");
define("ADD_LINK_LABEL", "Link hinzuf&uuml;gen");
define("ADD_CATEGORY_LABEL", "Kategorie hinzuf&uuml;gen");

//for pagination
define("NEXT_PAGE", "N&auml;chste Seite");
define("PREVIOUS_PAGE", "Vorhergehende Seite");

//for admin_categories.php
define("PROPOSED_CATEGORY_NAME", "Vorgeschlagener Kategorienname");
define("PROPOSED_TITLE", "Vorgeschlagener Titel - bei Bedarf editieren.");
define("PROPOSED_CATEGORY_DESCRIPTION", "Beschreibung der Kategorie");
define("PROPOSED_DESCRIPTION_LABEL", "Beschreibung");
define("ACCEPT", "Annehmen");
define("MODIFIE_CATEGORIES", "Kategorien ab&auml;ndern");
define("SELECT_CATEGORY", "W&auml;hlen Sie den Namen der Kategorie aus, die Sie &auml;ndern m&ouml;chten.");
define("DELETE_CATEGORY", "Kategorie l&ouml;schen");
define("DELETE_CATEGORY_LABEL", "Kategorie, die gel&ouml;scht werden soll");
define("DELETE_CATEGORY_SELECT_LABEL", "Bitte w&auml;hlen Sie den Namen der Kategorie aud, die gel&ouml;scht werden soll.");
define("DELETE_BUTTON", "L&ouml;scen");
define("NO_CATEGORIES_HERE", "Keine Kategorien vorhanden.");

//for admin_information.php
define("WELCOME_LABEL", "Willkommen");
define("WELCOME_MESSAGE", "Willkommen zum OpenLD Administrations-Manager. Folgende M&ouml;glichkeiten haben Sie:");
define("MODERATE_CATEGORIES_AND_LINKS", "Kategorien und Links verwalten.");
define("SET_OPTIONS_AND_PREFERENCES", "Options und Voreinstellungen &auml;ndern.");
define("CONTROL_PERMISSIONS", "Rechte verwalten.");
define("BAN_IPS", "IPs bannen.");
define("LIMIT_SPAM", "Spam durch Zensur reduzieren.");
define("SOFTWARE_INFO", "Software Informationen");
define("OPENLD_VERSION_LABEL", "OpenLD Version");
define("SERVER_INFORMATION", "Server Informationen");
define("SERVER_NAME_LABEL", "Name: ");
define("SERVER_SOFTWARE_LABEL", "Software: ");
define("SERVER_PROTOCOLL_LABEL", "Protokoll: ");
define("SCRIPT_ENVIRONMENT_LABEL", "Script Environment");
define("OS_LABEL", "Betriebsystem:");
define("PHP_LABEL", "PHP: ");
define("DATABASE_LABEL", "Datenbank");
define("ROWS_LABEL", "Reihen: ");
define("SIZE_LABEL", "Gr&ouml;sse: ");
define("ACCELERATOR_LABEL", "Accelerator: ");

//for admin_accept_links.php
define("APPROVED_LINKS_LABEL", "Gepr&uuml;fte links");

//for admin_login.php
define("INCORRECT_PASSWORD_ERROR", "Falsches Passwort.");
define("INCORRECT_USERNAME_ERROR", "Falscher Benutzername.");
define("USERNAME_AND_PASSWORD_INCORRECT", "Benutzername und Passwort sind falsch.");
define("LOGIN_TITLE", "Einloggen zur Admin-Oberfl&auml;che");
define("USERNAME_LABEL", "Benutzername");
define("PASSWORD_LABEL", "Passwort");
define("FORGOT_PASSWORD", "Passwort vergessen");
define("SEND_NEW_PASSWORD", "Neues Passwort anfordern");
define("PASSWORD_SENT", "Die Kontodaten wurden Ihnen zugeschickt.");
define("FORGOT_MAIL", "Klicken Sie auf den unten stehenden Link, wenn Sie ein neues Passwort erzeugen m&ouml;chten.");
define("MAIL_NOT_FOUND_IN_DB", "Die eMail-Adresse konnte nicht gefunden werden.");
define("NEW_PASSWORD", "Neues Passwort");

//for move..
define("MOVE_LINK_LABEL", "Link verschieben");
define("MOVE_CATEGORY_LABEL", "Kategorie verschieben");
define("MOVE_TO", "Verschieben nach");

//text in admin_options.php
define("ADMIN_LABEL", "Admin");
define("ADMIN_USERNAME_LABEL", "Admin Benutzername");
define("ADMIN_PASSWORD_LABEL", "Admin Passwort");
define("ADMIN_EMAIL_LABEL", "Admin eMail");
define("CENTRAL_FEATURES", "Grundlegendes");
define("DESCRIPTION_LABEL", "Beschreibung");

define("DOMAIN_LABEL", "URL");
define("LANGUAGE_LABEL", "Sprache");
define("LINK_TYPES_LABEL", "Link-Arten");
define("RECIPROCAL_LINKS_LABEL", "Zur&uuml;ck-Links");
define("REGULAR_LINKS_LABEL", "Einfache Links");
define("DISPLAY_LABEL", "Anzeige");
define("LINKS_SORT_BY_LABEL", "Links sortiert nach");
define("CATEGORIES_SORT_BY_LABEL", "Kategorien sortiert nach");
define("TITLE_REVERSED", "Titel aufgehoben ");
define("DESCRIPTION_REVERSED", "Beschreibung aufgehoben ");
define("DATE_LABEL", "Datum");
define("DATE_REVERSED", "Datum aufgehoben");
define("RECIPROCAL_URL", "URL f&uuml;r Zur&uuml;ck-Links");
define("RECIPROCAL_URL_DESC", "URL f&uuml;r Zur&uuml;ck-Links aufgehoben");
define("URL", "URL");
define("URL_REVERSED", "URL reversed");
define("CATEGORY_COLUMNS_DESCRIPTION", "Anzahl der Kategorienspalten");
define("LINKS_PER_PAGE", "Links pro Seite");
define("INPUT_CONTROL", "Input control");
define("MAXIMUM_LINK_DESCRIPTION", "Links max description");
define("MINIMUM_LINK_DESCRIPTION", "Links min description");
define("MAXIMUM_CATEGORY_DESCRIPTION", "Categories max description");
define("MINIMUM_CATEGORY_DESCRIPTION", "Categories min description");
define("SAVE_BUTTON", "Passwort speichern");
define("DISABLE_EXTENSIONS_LABEL", "Disable extensions");
define("ENABLE_GZIP_LABEL", "Enable gzip compression");
define("HIDE_ADMIN_BUTTON", "Admin Link im Frontend verstecken");
define("DENY_INDEX_PAGE_SUBMISSIONS", "Deny front page links");
define("DISPLAY_UNACCEPTED_LINKS", "Display unaccepted links");
define("OPEN_LINKS_IN_NEW_WINDOWS", "Links im neuen Fenster &ouml;ffnen");
define("SEARCH_RESULTS_PER_PAGE", "Suchergebnisse pro Seite");

// for the template
define("TEMPLATE_SUBMIT", "Set as template");
define("CHOSE_TEMPLATE", "Choose a template");
define("NO_TEMPLATES_WERE_FOUND", "No templates were found");
define("DIRECTORY_LABEL", "Directory");
define("THUMBNAIL_PREVIEW", "Preview");
//editing template
define("FILE_LABEL", "File");
define("PERMISSION_LABEL", "Permission");
define("NOT_WRITEABLE", "Not writeable");
define("IS_WRITEABLE", "Writeable");
define("EDIT_TEMPLATE", "Edit template");

//for admin_words.php
define("DOUBLE_ADD", "<br>You already have a similar spamword in your db");
define("NO_INPUT_WORD", "<br>You need to insert a word to censor");
define("NO_ID_FOUND", "<br>The id was not found in the database");
define("MORE_THAN_ONE_ID_FOUND", "<br>Serious error: More than one id was found in the database");
define("EDIT_CENSORED_NOT_FOUND", "You forgot to insert a word to censor");
define("NO_BANNED_WORDS", "There are no banned words in this directory");
define("UPDATE", "Update");
define("REMOVE", "Remove");
define("ACTION", "Action");
define("BAN_WORDS", "Ban words");
define("NEW_CENSORED_WORD", "New censored word");
define("CENSORED_WORD", "Censored word");
define("REPLACE_WITH", "Replace with");
define("EDIT_DELETE_BANNED_WORDS", "Edit/Delete banned words");

//for categories.php
define("NO_SUBCATEGORIES_FOUND", "Keine Unterkategorien vorhanden.");

//for edit category and link
define("EDIT_CATEGORY_LABEL", "Edit Kategorie");
define("EDIT_LINK_LABEL", "Edit Link");

//for the footer
define("POWERED_BY", "Powered by");

//for warnings
define("WRONG_CAPTCHA", "Wrong captcha inserted");
define("NO_TITLE_AT_ALL", "Sie haben keinen Titel eingegeben!");
define("TITLE_TOO_LONG", "Der Titel ist zu lang.");
define("TITLE_TOO_SHORT", "Der Titel ist zu kurz.");
define("ILLEGAL_WORDS_WITHIN_TITLE", "Sie haben verbotene W&ouml;rter im Titel eingegeben.");
define("TITLE_ALREADY_THERE", "Es existiert bereits ein &auml;hnlicher Titel.");
define("NO_DESCRIPTION_AT_ALL", "Sie haben Beschreibung Titel eingegebenn.");
define("DESCRIPTION_TOO_LONG", "Die Beschreibung ist zu lang.");
define("DESCRIPTION_TOO_SHORT", "Die Beschreibung ist zu kurz.");
define("ILLEGAL_WORDS_WITHIN_DESCRIPTION", "Sie haben verbotene W&ouml;rter in der Beschreibung eingegeben.");
define("NAME_TOO_LONG", "Der Name ist zu lang.");
define("NAME_TOO_SHORT", "Der Name ist zu kurz.");
define("ILLEGAL_WORDS_WITHIN_NAME", "Sie haben verbotene W&ouml;rter im Namen eingegeben.");
define("EMAIL_TOO_LONG", "Die eMail-Adresse ist zu lang.");
define("EMAIL_TOO_SHORT", "Die eMail-Adresse ist zu kurz.");
define("ILLEGAL_WORDS_WITHIN_EMAIL", "Sie haben verbotene W&ouml;rter in der eMail-Adresse eingegeben.");
define("URL_TOO_LONG", "Die URL ist zu lang.");
define("URL_TOO_SHORT", "Die URL ist zu kurz.");
define("ILLEGAL_WORDS_WITHIN_URL", "Sie haben verbotene W&ouml;rter in der URL eingegeben.");
define("URL_ALLREADY_THERE", "Es gibt bereits eione &auml;hnliche URL.");
define("NO_RECIPROCAL_URL_AT_ALL", "Sie haben keine reciproke URL angegeben.");
define("RECIPROCAL_URL_TOO_LONG", "Die reciproke URL ist zu lang.");
define("RECIPROCAL_URL_TOO_SHORT", "Die reciproke URL ist zu kurz.");
define("ILLEGAL_WORDS_WITHIN_RECIPROCAL_URL", "Sie haben verbotene W&ouml;rter in der reciproken URL.");
define("RECIPROCAL_NOT_ALLOWED_BUT_CHOSED", "Die Reziprok-Option ist nicht erlaubt, wurde aber gew&auml;hlt.");
define("NOT_CORRECT_IP_ADDRESS", "Die IP Adresse ist nicht richtig.");
define("NO_USERNAME_AT_ALL", "Sie haben keinen Benutzernamen eingegeben.");
define("TOO_LONG_USERNAME", "Der Benutzernamen ist zu lang.");
define("TOO_SHORT_USERNAME", "Der Benutzernamen ist zu kurz.");
define("NO_PASSWORD_AT_ALL", "Sie haben kein Passwort eingegeben.");
define("TOO_LONG_PASSWORD", "Das Passwort ist zu lang.");
define("TOO_SHORT_PASSWORD", "Das Passwort ist zu kurz.");
define("NO_MINIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "Es wurde kein Minimum f&uuml;r die Link-Beschreibung festgelegt.");
define("MINIMUM_ALLOWED_LINK_DESCRIPTION", "Das Minimum f&uuml;r die Link-Beschreibung war keine Zahl.");
define("NO_MAXIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "Es wurde kein Maximum f&uuml;r die Link-Beschreibung festgelegt.");
define("MAXIMUM_ALLOWED_LINK_DESCRIPTION", "Das Maximum f&uuml;r die Link-Beschreibung war keine Zahl.");
define("NO_MINIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "Es wurde kein Minimum f&uuml;r die Kategorien-Beschreibung festgelegt.");
define("MIN_CAT_DESC_NOT_NUMERIC", "Das Minimum f&uuml;r die Kategorien-Beschreibung war keine Zahl.");
define("NO_MAXIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "Es wurde kein Maximum f&uuml;r die Kategorien-Beschreibung festgelegt.");
define("MAX_CAT_DESC_NOT_NUMERIC", "Das Maximum f&uuml;r die Kategorien-Beschreibung war keine Zahl.");
define("MINIMUM_LINK_DESCRIPTION_BIGGER_THAN_MAXIMUM", "Das Minimum f&uuml;r die Link-Beschreibung ist gr&ouml;sser als das Maximum.");
define("MINIMUM_CAT_DESCRIPTION_BIGGER_THAN_MAXIMUM", "Das Minimum f&uuml;r die Kategorien-Beschreibung ist gr&ouml;sser als das Maximum.");
define("LINKS_PER_PAGE_NOT_NUMERIC", "Bei Links pro Seite haben Sie keine Zahl eingegeben.");
define("NO_LINKS_PER_PAGE_AT_ALL", "Bitte geben Sie die Anzahl der Links pro Seite an.");
define("NO_COLUMN_NUMBER_AT_ALL", "Bitte legen Sie die Anzahl der Spalten fest.");
define("COLUMN_NUMBER_IS_NOT_A_NUMBER", "Die Anzahl der Spalten ist keine Zahl");
define("NO_SORT_OPTION_AT_ALL", "Bitte legen Sie eine Sortierreihenfolge fest.");
define("SORT_OPTION_TOO_LONG", "Die Sortierreihenfolge ist zu lang.");
define("SORT_OPTION_TOO_SHORT", "Die Sortierreihenfolge ist zu kurz.");
define("NO_LANGUAGE_AT_ALL", "Sie haben keine Sprache eingegeben.");
define("LANGUAGE_TOO_LONG", "Die ausgew&auml;hlte Sprache ist zu lang."); // <------|<
define("LANGUAGE_TOO_SHORT", "Die ausgew&auml;hlte Sprache ist zu kurz."); // <---|^- is this useful?
define("PASSWORD_EQUALS_USERNAME", "Das Password darf nicht identisch mit dem Benutzernamen sein.");
define("NO_LINKTYPE_AT_ALL", "Sie haben keinen Linktyp angegeben.");
define("REGULAR_NOT_ALLOWED_BUT_CHOSED", "Die gew&auml;hlte Option ist nicht erlaubt.");
define("NO_CATEGORY_SELECTED", "Keine Kategorie ausgew&auml;hlt.");
define("CATEGORY_ID_NOT_A_NUMBER", "Die Kategorien-ID ist keine Zahl.");
define("CATEGORY_ID_NOT_IN_DB", "Die Kategorien-ID gibt es nicht.");
define("INVALID_URL_FORMAT", "Das URL-Format ist ung&uuml;ltig");
define("BAD_REQUEST", "Ung&uuml;ltige Anfrage");
define("ZLIB_NOT_ENABLED", "Sie ben&ouml;tigen Zugang zur zlib, um die gzip Kompression zu benutzen.");
define("INDEX_PAGE_NOT_OPEN_FOR_SUBMISSION", "Front page is not open for submissions");
define("SEARCH_OPTION_WARNING", "Search results field requires numerical input");

//for links.php
define("NO_LINKS_HERE", "Keine Links vorhanden");
define("SUBMITTED_LABEL", "Submitted: ");

//for search
define("NO_MATCHES", "Keine Treffer gefunden");
define("MAKE_A_SEARCH", "Suchen");
define("SEARCH_FOR", "Suchen nach");
define("SEARCH_IN", "Suchen in");
define("SORT_BY", "Sortieren nach");
define("ALL", "Alle");
define("ALPHABETICAL_LABEL", "Alphabetisch");
define("ALPHABETICAL_REVERSED", "Alphabetisch r&uuml;ckw&auml;rts");
define("NEWEST_FIRST", "Neuestes zuerst");
define("OLDEST_FIRST", "&Auml;ltestes zuerst");
define("SERCHED_FOR_LABEL", "Suchergebnisse f&uuml;r");

//for submit.php
define("SUBMIT_SUCCESS", "Gl&uuml;ckwunsch! Ihr link ist im Verzeichnis und wird nun gepr&uuml;ft.");
define("SUBMIT_NAME_LABEL", "Name Ihrer Firma/Gruppe:");
define("SUBMIT_A_LINK", "Link abschicken");
define("REGULAR_LINK", "Standard Link");
define("RECIPROCAL_LINK", "Backlink");
define("RECIPROCAL_URL_LABEL",  "Backlink URL");
define("CLOSED_FOR_SUBMISSIONS", "Das Verzeichnis erlaubt keine neuen Eintr&auml;ge");
define("PAYMENT_CANCELLED", "Die Zahlung wurde storniert");
define("PROCESSING_PAYMENT", "Zahlung wird verarbeitet...");
define("PROCESSING_PAYMENT_DESCRIPTION", "Bitte warten Sie, Ihre Bestellung wird bearbeitet...");

//for suggest.php
define("SUGGEST_A_CATEGORY", "Kategorie vorschlagen");
define("SUBMIT_SUCCESS_CATEGORY", "Gl&uuml;ckwunsch! Ihre Kategorie wurde eingetragen.");

//for extensions
define("EXTENSIONS_LABEL", "Extensions");
define("EDIT_EXTENSIONS", "Extensions &auml;ndern ");
define("AVAILABLE_EXTENSIONS_FOR_INSTALL", "Verf&uuml;gbare Extensions");
define("NO_INSTALLED_EXTENSIONS", "Es sind im Moment keine Extensions installiert");
define("NO_EXTENSIONS_FOR_INSTALL", "Es sind keine extensions verf&uuml;gbar zum installieren");
define("SIMPLE_LABEL", "Simple");
define("FREE_LABEL", "Free");
//extension errors
define("EXTENSION_ROOT_ERROR", "Root element extension ist fehlerhaft oder nicht vorhanden.");
define("EXTENSION_ID_ERROR", "Element extension/id ist fehlerhaft oder nicht vorhanden.");
define("EXTENSION_ID_ERROR2", "Element extension/id passt nicht zum Namen des Verzeichnisses.");
define("EXTENSION_TITLE_ERROR", "Element extension/title ist fehlerhaft oder nicht vorhanden.");
define("EXTENSION_VERSION_ERROR", "Element extension/version ist fehlerhaft oder nicht vorhanden.");
define("EXTENSION_DESCRIPTION_ERROR", "Element extension/description ist fehlerhaft oder nicht vorhanden.");
define("EXTENSION_AUTHOR_ERROR", "Element extension/author ist fehlerhaft oder nicht vorhanden.");
define("EXTENSION_HOOKS_ERROR", "Element extension/hooks ist fehlerhaft oder nicht vorhanden.");
define("EXTENSION_HOOKS_HOOK_ERROR", "Element extension/hooks/hook sind fehlerhaft oder nicht vorhanden.");
define("EXTENSION_HOOKS_HOOK_ERROR2", "Element extension/hooks/hook fehlt ein attribute 'id'.");
define("EDIT_EXTENSION", "Edit Extension");
define("HOOKS", "Hooks");
define("EXTENSION_PERMISSION_WARNING", "You must change permissions in the file: %s to 755 in order to edit it online.");
define("EXTENSION_FILE_NOT_FOUND", "Fehler: %s nicht gefunden");
define("EXTENSION_ALLREADY_INSTALLED", "Fehler: Die extension %s ist schon installiert");
define("EXTENSIONS_DISABLED", "Extensions is disabled. You must go to Admin->Otions and change the extensions-disabled preference before installed extensions can take effect.");

//new defines
define("POSITION_NOT_A_NUMBER", "Die Position, die Sie vorgeschlagen haben, ist ung&uuml;ltig");
define("HARD_BAN", "Als Spam behandeln");
define("SEARCH_TYPE", "Suchart");
define("VERSION_LABEL", "Version");
define("AUTHOR_LABEL", "Autor");
define("INSTALL_LABEL", "Installieren");
define("UNINSTALL_LABEL", "Deinstallieren");
define("ID_LABEL", "ID");
define("DETAILS_LABEL", "Details");
define("SUBCATEGORIES", "Unter-Kategorien");
define("SPONSORED_LINKS", "Gesponserte Links");
define("PAID_LINKS", "Bezahlte Links");
define("SPONSOR_LINK", "Gesponserter Link");
define("PAID_LINK", "Bezahlter Link");
define("LOG_OUT", "Logout");
define("PRICE_LABEL", "Preis");
define("CURRENCY_LABEL", "W&auml;hrung");
define("NOT_PAID", "noch nicht bezahlt");

define("IS_PAYMENT_PENDING", "Payment received");
define("INVALID_EMAIL", "Die eMail ist ung&uuml;ltig.");
define("WRONG_PASSWORD_CONFIRMATION", "Das eingegebene Passwort entspricht nicht dem Kontrolleintrag");
define("CHANGE_PASSWORD_LABEL", "Passwort &auml;ndern");
define("ENTER_NEW_PASSWORD", "Bitte neues Passwort eingeben");
define("RETYPE_PASSWORD", "Passwort wiederholen");
define("SAVE_PASSWORD_BUTTON", "Passwort speichern");
define("PASSWORD_HAS_BEEN_CHANGED", " - Ihr Passwort wurde ge&auml;ndert");
define("ACCOUNT_LABEL", "Account");
define("SHOW_PHP_INFO", "Infos anzeigen");
define("SEF_REWRITE_LABEL", "Rewrite Layer");
define("INDEX_PAGE", "Index page");

//Page generation
define("PAGE_GENERATED_IN", "Seite erstellt in ");
define("SECONDS", " Sekunden");
