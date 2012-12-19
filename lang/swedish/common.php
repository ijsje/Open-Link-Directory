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

//common strings
define("TITLE_LABEL", "Titel");
define("CATEGORY_LABEL", "Kategori");
define("CAPTCHA_LABEL", "Captcha");
define("URL_LABEL", "URL");
define("LINK_DESCRIPTION_LABEL", "L&auml;nk Beskrivning");
define("CATEGORY_DESCRIPTION_LABEL", "Kategori Beskrivning");
define("NAME_LABEL", "Namn");
define("EMAIL_LABEL", "E-post");
define("EDIT_LABEL", "&Auml;ndra");
define("ACCEPT_LABEL", "Godk&auml;nn");
define("UNACCEPT_LABEL", "Unaccept");
define("MOVE_LABEL", "Flytta");
define("DELETE_LABEL", "Ta bort");
define("NAVIGATION_LABEL", "Navigering");
define("HOME_LABEL", "Hem");
define("SUBMIT_LINK_LABEL", "F&ouml;resl&aring; en l&auml;nk");
define("SUGGEST_CATEGORY_LABEL", "F&ouml;resl&aring; en kategori");
define("SEARCH_LABEL", "S&ouml;k");

//For include/functions.php
define("RECIPROCAL_NOT_FROM_SAME_DOMAIN", "Tillbakal&auml;nkens address m&aring;ste komma fr&aring;n samma dom&auml;n");
define("NO_RECIPROCAL_FOUND", "Ingen tillbakal&auml;nk hittades p&aring; denna l&auml;nkadress: ");
define("URL_COULD_NOT_BE_LOADED", "Kunde inte ladda denna l&auml;nkaddress: ");

//for the admin_menu
define("ACCEPT_CATEGORIES_LABEL", "Acceptera Kategorier");
define("ACCEPT_LINKS_TITLE", "Acceptera l&auml;nkar");
define("BROWSE", "Bl&auml;ddra");
define("LINKS_LABEL", "L&auml;nkar");
define("CATEGORIES_LABEL", "Kategorier");
define("INFORMATION_LABEL", "Information");
define("OPTION_LABEL", "Inst&auml;llningar");
define("CENSORING", "Censur");
define("IP_BANNING", "IP Kontroll");
define("TEMPLATES_TITLE", "Teman");
define("ADMIN_MENU", "Administrationsmeny");
define("DIRECTORY_MANAGEMENT", "Katalogshantering");
define("GENERAL_LABEL", "Generellt");
define("PLUGINS_LABEL", "Plugins");

//for ip banning
define("CENSORED_WORD_IS_NOTHING", "Du har inte angivit n&aring;got tecken eller ord f&ouml;r censurering");
define("YOU_MUST_SELECT_AN_IP", "Du m&aring;ste v&auml;lja en IP adress");
define("IP_ALLREADY_BANNED", "Den IP adress du hade t&auml;nkt att bannlysa &auml;r redan bannlyst");
define("IP_BANNED_QOUTE", "Du &auml;r bannlyst!");
define("NEW_IP_BAN", "Bannlys ett nytt IP nummer");
define("ADD_A_BAN", "L&auml;gg till");
define("IP_NUMBER", "IP Adress");
define("MANAGE_BANS", "Hantera bannlysningar");
define("UNBAN_IP", "Upph&auml;v en bannlysning av IP adress");
define("SELECT_IP_TO_UNBAN", "V&auml;lj IP address f&ouml;r den anv&auml;ndare vars bannlysning du vill upph&auml;va.");
define("UNBAN", "Upph&auml;v bannlysning");
define("INFO", "Information");
define("NO_IP_BANS", "Inga IP adresser &auml;r f&ouml;r n&auml;rvarande bannlysta");

//for plugins
define("PLUGIN_DOES_NOT_EXIST", "Inkopplingen existerar ej");
define("PLUGIN_NOT_SELECTED", "Ingen inkoppling var vald");

//for adding
define("ADD_LABEL", "L&auml;gg till");
define("ADD_LINK_LABEL", "L&auml;gg till l&auml;nk");
define("ADD_CATEGORY_LABEL", "L&auml;gg till Kategori");

//for pagination
define("NEXT_PAGE", "N&auml;sta sida");
define("PREVIOUS_PAGE", "F&ouml;rra sidan");

//for admin_categories.php
define("PROPOSED_CATEGORY_NAME", "F&ouml;reslaget kategorinamn");
define("PROPOSED_TITLE", "F&ouml;reslagen titel");
define("PROPOSED_CATEGORY_DESCRIPTION", "F&ouml;reslagen kategori beskrivning");
define("PROPOSED_DESCRIPTION_LABEL", "F&ouml;reslagen beskrivning");
define("ACCEPT", "Accept");
define("MODIFIE_CATEGORIES", "Modifiera kategorier");
define("SELECT_CATEGORY", "V&auml;lj namnet av den kategori du &ouml;nskar &auml;ndra.");
define("DELETE_CATEGORY", "Ta bort en kategori");
define("DELETE_CATEGORY_LABEL", "Kategori f&ouml;r borttagning");
define("DELETE_CATEGORY_SELECT_LABEL", "V&auml;lj den kategori du vill ta bort.");
define("DELETE_BUTTON", "Ta bort");
define("NO_CATEGORIES_HERE", "Det finns inga kategorier h&auml;r");

//for admin_information.php
define("WELCOME_LABEL", "V&auml;lkommen");
define("WELCOME_MESSAGE", "V&auml;lkommen till OpenLDs administrationspanel. H&auml;r nedan finns en kort lista med f&ouml;rslag p&aring; vad du kan g&ouml;ra:");
define("MODERATE_CATEGORIES_AND_LINKS", "administrera kategorier och l&auml;nkar.");
define("SET_OPTIONS_AND_PREFERENCES", "&auml;ndra inst&auml;llningar.");
define("CONTROL_PERMISSIONS", "kontrollera r&auml;ttigheter.");
define("BAN_IPS", "bannlysa IP addresser.");
define("LIMIT_SPAM", "begr&auml;nsa o&ouml;nskad information genom att filtrera ord.");
define("SOFTWARE_INFO", "Information om mjukvara");
define("OPENLD_VERSION_LABEL", "OpenLD version");
define("SERVER_INFORMATION", "Information om server");
define("SERVER_NAME_LABEL", "Namn: ");
define("SERVER_SOFTWARE_LABEL", "Mjukvara: ");
define("SERVER_PROTOCOLL_LABEL", "Protokoll: ");
define("SCRIPT_ENVIRONMENT_LABEL", "PHP Milj&ouml;");
define("OS_LABEL", "Operativsystem:");
define("PHP_LABEL", "PHP: ");
define("DATABASE_LABEL", "Databas");
define("ROWS_LABEL", "Rader: ");
define("SIZE_LABEL", "Storlek: ");
define("ACCELERATOR_LABEL", "Accelerator: ");

//for admin_accept_links.php
define("APPROVED_LINKS_LABEL", "Godk&auml;nda l&auml;nkar");

//for admin_login.php
define("INCORRECT_PASSWORD_ERROR", "Ditt anv&auml;ndarnamn var korrekt, men ditt l&ouml;senord var inkorrekt.");
define("INCORRECT_USERNAME_ERROR", "Ditt l&ouml;senord var korrekt, men ditt anv&auml;ndarnamn var inkorrekt.");
define("USERNAME_AND_PASSWORD_INCORRECT", "Ditt anv&auml;ndarnamn och l&ouml;senord var inkorrekt.");
define("LOGIN_TITLE", "Logga in till administrationspanelen");
define("USERNAME_LABEL", "Anv&auml;ndarnamn");
define("PASSWORD_LABEL", "L&ouml;senord");
define("FORGOT_PASSWORD", "Gl&ouml;mt l&ouml;senord");
define("SEND_NEW_PASSWORD", "Skicka ett nytt l&ouml;senord");
define("PASSWORD_SENT", "Kontoinformation har skickats till din e-post");
define("FORGOT_MAIL", "Klicka p&aring; l&auml;nken nedanf&ouml;r om du vill ha ett nytt l&ouml;senord");
define("MAIL_NOT_FOUND_IN_DB", "Vi kan inte hitta en e-postaddress i databasen som matchar den du fyllde i");
define("NEW_PASSWORD", "Nytt l&ouml;senord");

//for move..
define("MOVE_LINK_LABEL", "Flytta l&auml;nk");
define("MOVE_CATEGORY_LABEL", "Flytta kategori");
define("MOVE_TO", "Flytta till");

//text in admin_options.php
define("ADMIN_LABEL", "Admin");
define("ADMIN_USERNAME_LABEL", "Anv&auml;ndarnamn f&ouml;r administration");
define("ADMIN_PASSWORD_LABEL", "L&ouml;senord f&ouml;r administration");
define("ADMIN_EMAIL_LABEL", "E-post f&ouml;r administration");
define("CENTRAL_FEATURES", "Vanliga inst&auml;llningar");
define("DESCRIPTION_LABEL", "Beskrivning");
define("DOMAIN_LABEL", "L&auml;nkaddress");
define("LANGUAGE_LABEL", "Spr&aring;k");
define("LINK_TYPES_LABEL", "L&auml;nksorter");
define("RECIPROCAL_LINKS_LABEL", "Tillbakal&auml;nkar");
define("REGULAR_LINKS_LABEL", "Regulj&auml;ra l&auml;nkar");
define("DISPLAY_LABEL", "Utseende");
define("LINKS_SORT_BY_LABEL", "Sortera l&auml;nkar efter");
define("CATEGORIES_SORT_BY_LABEL", "Sortera kategorier efter");
define("TITLE_REVERSED", "Titel, bakl&auml;nges");
define("DESCRIPTION_REVERSED", "Beskrivning, bakl&auml;nges");
define("DATE_LABEL", "Datum");
define("DATE_REVERSED", "Datum, bakl&auml;nges");
define("RECIPROCAL_URL", "Tillbakal&auml;nk");
define("RECIPROCAL_URL_DESC", "Tillbakal&auml;nk, bakl&auml;nges");
define("URL", "L&auml;nkadress");
define("URL_REVERSED", "L&auml;nkadress bakl&auml;nges");
define("CATEGORY_COLUMNS_DESCRIPTION", "Kategorikolumner");
define("LINKS_PER_PAGE", "L&auml;nkar per sida");
define("INPUT_CONTROL", "Inmatningskontroll");
define("MAXIMUM_LINK_DESCRIPTION", "Maximal beskrivning av l&auml;nkar");
define("MINIMUM_LINK_DESCRIPTION", "Minimal beskrivning av l&auml;nkar");
define("MAXIMUM_CATEGORY_DESCRIPTION", "Maximal beskrivning av kategorier");
define("MINIMUM_CATEGORY_DESCRIPTION", "Minimal beskrivning av kategorier");
define("SAVE_BUTTON", "Spara &auml;ndringar");
define("DISABLE_EXTENSIONS_LABEL", "St&auml;ng av utbyggnader");
define("ENABLE_GZIP_LABEL", "M&ouml;jligg&ouml;r gzip kompression");
define("HIDE_ADMIN_BUTTON", "G&ouml;m administrationsknappen");
define("DENY_INDEX_PAGE_SUBMISSIONS", "F&ouml;rbjud framsidel&auml;nkar");
define("DISPLAY_UNACCEPTED_LINKS", "Visa oaccepterade l&auml;nkar");
define("OPEN_LINKS_IN_NEW_WINDOWS", "&Ouml;ppna l&auml;nkar i nytt f&ouml;nster");
define("SEARCH_RESULTS_PER_PAGE", "S&ouml;kresultat per sida");

// for the template
define("TEMPLATE_SUBMIT", "Spara");
define("CHOSE_TEMPLATE", "V&auml;lj mallar");
define("NO_TEMPLATES_WERE_FOUND", "Inga mallar hittades");
define("DIRECTORY_LABEL", "Katalog");
define("THUMBNAIL_PREVIEW", "F&ouml;rhandsvisning");
//editing template
define("FILE_LABEL", "File");
define("PERMISSION_LABEL", "Permission");
define("NOT_WRITEABLE", "Not writeable");
define("IS_WRITEABLE", "Writeable");
define("EDIT_TEMPLATE", "Edit template");

//for admin_words.php
define("DOUBLE_ADD", "<br>Du har redan ett liknande icke &ouml;nskv&auml;rt ord i databasen");
define("NO_INPUT_WORD", "<br>Du beh&ouml;ver s&auml;tta in ett ord att censurera");
define("NO_ID_FOUND", "<br>Detta id finns inte i databasen");
define("MORE_THAN_ONE_ID_FOUND", "<br>Viktigt fel: Mer &auml;n ett id hittades i databasen");
define("EDIT_CENSORED_NOT_FOUND", "Du gl&ouml;mde att s&auml;tta in ett ord f&ouml;r censurering");
define("NO_BANNED_WORDS", "Det finns inga bannlysta ord");
define("UPDATE", "Uppdatera");
define("REMOVE", "Ta bort");
define("ACTION", "Val");
define("BAN_WORDS", "Bannlys ord");
define("NEW_CENSORED_WORD", "Nytt censurerat ord");
define("CENSORED_WORD", "Censurerade ord");
define("REPLACE_WITH", "Ers&auml;tt med");
define("EDIT_DELETE_BANNED_WORDS", "&Auml;ndra/Ta bort bannlysta ord");

//for categories.php
define("NO_SUBCATEGORIES_FOUND", "Inga underkategorier hittades i denna kategori.");

//for edit category and link
define("EDIT_CATEGORY_LABEL", "&Auml;ndra kategori");
define("EDIT_LINK_LABEL", "&Auml;ndra l&auml;nk");

//for the footer
define("POWERED_BY", "Powered by");

//for warnings
define("WRONG_CAPTCHA", "Wrong captcha inserted");
define("NO_TITLE_AT_ALL", "Ingen titel ifylldes.");
define("TITLE_TOO_LONG", "Den ifyllda titeln &auml;r f&ouml;r l&aring;ng.");
define("TITLE_TOO_SHORT", "Den ifyllda titeln &auml;r f&ouml;r kort.");
define("ILLEGAL_WORDS_WITHIN_TITLE", "Du har inkluderat ett eller flera icke &ouml;nskv&auml;rda ord i titeln.");
define("TITLE_ALREADY_THERE", "Det finns redan en likadan titel.");
define("NO_DESCRIPTION_AT_ALL", "Ingen beskrivning ifylldes.");
define("DESCRIPTION_TOO_LONG", "Den ifyllda beskrivningen &auml;r f&ouml;r l&aring;ng.");
define("DESCRIPTION_TOO_SHORT", "Den ifyllda beskrivningen &auml;r f&ouml;r kort.");
define("ILLEGAL_WORDS_WITHIN_DESCRIPTION", "Du har inkluderat ett eller flera icke &ouml;nskv&auml;rda ord i beskrivningen");
define("NAME_TOO_LONG", "Det ifyllda namnet &auml;r f&ouml;r l&aring;ngt.");
define("NAME_TOO_SHORT", "Det ifyllda namnet &auml;r f&ouml;r kort.");
define("ILLEGAL_WORDS_WITHIN_NAME", "Du har inkluderat ett eller flera icke &ouml;nskv&auml;rda ord i namnf&auml;ltet.");
define("EMAIL_TOO_LONG", "Den ifyllda e-postadressen &auml;r f&ouml;r l&aring;ng.");
define("EMAIL_TOO_SHORT", "Den ifyllda e-postadressen &auml;r f&ouml;r kort.");
define("ILLEGAL_WORDS_WITHIN_EMAIL", "Du har inkluderat ett eller flera icke &ouml;nskv&auml;rda ord i e-post f&auml;ltet.");
define("URL_TOO_LONG", "Den ifyllda l&auml;nkadressen &auml;r f&ouml;r l&aring;ng.");
define("URL_TOO_SHORT", "Den ifyllda l&auml;nkadressen &auml;r f&ouml;r kort.");
define("ILLEGAL_WORDS_WITHIN_URL", "Du har inkluderat ett eller flera icke &ouml;nskv&auml;rda ord i l&auml;nkadressen.");
define("URL_ALLREADY_THERE", "Det finns redan en likadan l&auml;nkadress.");
define("NO_RECIPROCAL_URL_AT_ALL", "Ingen adress f&ouml;r tillbakal&auml;nk ifylldes.");
define("RECIPROCAL_URL_TOO_LONG", "Den ifyllda adressen f&ouml;r tillbakal&auml;nk &auml;r f&ouml;r l&aring;ng.");
define("RECIPROCAL_URL_TOO_SHORT", "Den ifyllda adressen f&ouml;r tillbakal&auml;nk &auml;r f&ouml;r kort.");
define("ILLEGAL_WORDS_WITHIN_RECIPROCAL_URL", "Du har inkluderat ett eller flera icke &ouml;nskv&auml;rda ord i adressen f&ouml;r tillbakal&auml;nken.");
define("RECIPROCAL_NOT_ALLOWED_BUT_CHOSED", "Tillbakal&auml;nks alternativet &auml;r ej till&aring;tet, men valdes &auml;nd&aring;.");
define("NOT_CORRECT_IP_ADDRESS", "IP adressen &auml;r inkorrekt.");
define("NO_USERNAME_AT_ALL", "Inget anv&auml;ndarnamn ifylldes");
define("TOO_LONG_USERNAME", "Det ifyllda anv&auml;ndarnamnet &auml;r f&ouml;r l&aring;ngt.");
define("TOO_SHORT_USERNAME", "Det ifyllda anv&auml;ndarnamnet &auml;r f&ouml;r kort.");
define("NO_PASSWORD_AT_ALL", "Inget l&ouml;senord skrevs in.");
define("TOO_LONG_PASSWORD", "Det ifyllda l&ouml;senordet &auml;r f&ouml;r l&aring;ngt");
define("TOO_SHORT_PASSWORD", "Det ifyllda l&ouml;senordet &auml;r f&ouml;r kort");
define("NO_MINIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "Inget minimum v&auml;rde f&ouml;r l&auml;nkbeskrivning skrevs in.");
define("MINIMUM_ALLOWED_LINK_DESCRIPTION", "Du f&aring;r endast fylla i siffror i f&auml;ltet f&ouml;r minimal l&auml;nkbeskrivning.");
define("NO_MAXIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "Inget maximum v&auml;rde f&ouml;r l&auml;nkbeskrivning skrevs in.");
define("MAXIMUM_ALLOWED_LINK_DESCRIPTION", "Du f&aring;r endast fylla i siffror i f&auml;ltet f&ouml;r maximal l&auml;nkbeskrivning.");
define("NO_MINIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "Inget minimum v&auml;rde f&ouml;r kategoribeskrivning skrevs in.");
define("MIN_CAT_DESC_NOT_NUMERIC", "Du f&aring;r endast fylla i siffror i f&auml;ltet f&ouml;r minimal kategoribeskrivning.");
define("NO_MAXIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "Inget maximum v&auml;rde f&ouml;r kategoribeskrivning skrevs in.");
define("MAX_CAT_DESC_NOT_NUMERIC", "Du f&aring;r endast fylla i siffror i f&auml;ltet f&ouml;r maximal l&auml;nkbeskrivning.");
define("MINIMUM_LINK_DESCRIPTION_BIGGER_THAN_MAXIMUM", "V&auml;rdet f&ouml;r den minimala l&auml;nkbeskrivningen &auml;r st&ouml;rre &auml;n det f&ouml;r f&ouml;r den maximala l&auml;nkbeskrivningen.");
define("MINIMUM_CAT_DESCRIPTION_BIGGER_THAN_MAXIMUM", "V&auml;rdet f&ouml;r den minimala kategoribeskrivningen &auml;r st&ouml;rre &auml;n det f&ouml;r f&ouml;r den maximala kategoribeskrivningen.");
define("LINKS_PER_PAGE_NOT_NUMERIC", "V&auml;rdet f&ouml;r l&auml;nkar per sida f&aring;r endast inneh&aring;lla siffror.");
define("NO_LINKS_PER_PAGE_AT_ALL", "F&auml;ltet f&ouml;r l&auml;nkar per sida &auml;r ej ifyllt.");
define("NO_COLUMN_NUMBER_AT_ALL", "Inget kolumnv&auml;rde fylldes i.");
define("COLUMN_NUMBER_IS_NOT_A_NUMBER", "Kolumnv&auml;rdet m&aring;ste vara numeriskt.");
define("NO_SORT_OPTION_AT_ALL", "Inget sorteringsalternativ fylldes i.");
define("SORT_OPTION_TOO_LONG", "Det ifyllda sorteringsalternativet &auml;r f&ouml;r l&aring;ngt.");
define("SORT_OPTION_TOO_SHORT", "Det ifyllda sorteringsalternativet &auml;r f&ouml;r kort.");
define("NO_LANGUAGE_AT_ALL", "Du m&aring;ste v&auml;lja ett spr&aring;k.");
define("LANGUAGE_TOO_LONG", "Det valda spr&aring;ket &auml;r f&ouml;r l&aring;ngt.");
define("LANGUAGE_TOO_SHORT", "Det valda spr&aring;ket &auml;r f&ouml;r kort.");
define("PASSWORD_EQUALS_USERNAME", "L&ouml;senordet och anv&auml;ndarnamnet f&aring;r inte vara identiska.");
define("NO_LINKTYPE_AT_ALL", "Ingen l&auml;nktyp valdes.");
define("REGULAR_NOT_ALLOWED_BUT_CHOSED", "Det regulj&auml;ra alternativet &auml;r inte till&aring;tet, men valt.");
define("NO_CATEGORY_SELECTED", "Ingen kategori valdes.");
define("CATEGORY_ID_NOT_A_NUMBER", "Kategorins id &auml;r inget nummer.");
define("CATEGORY_ID_NOT_IN_DB", "Kategorins id existerar inte i databasen.");
define("INVALID_URL_FORMAT", "L&auml;nkformatet &auml;r inkorrekt.");
define("BAD_REQUEST", "Ov&auml;ntat fel");
define("ZLIB_NOT_ENABLED", "Du m&aring;ste ha tillg&aring;ng till zlib f&ouml;r att kunna anv&auml;nda gzip kompression. N&aring;gon s&aring;dan tillg&aring;ng har ej hittats.");
define("INDEX_PAGE_NOT_OPEN_FOR_SUBMISSION", "Framsidan &auml;r ej &ouml;ppen f&ouml;r submitteringar");
define("SEARCH_OPTION_WARNING", "S&ouml;kresultats f&auml;ltet m&aring;ste ha ett numerisk v&auml;rde");

//for links.php
define("NO_LINKS_HERE", "Det finns inga l&auml;nkar h&auml;r");
define("SUBMITTED_LABEL", "F&ouml;reslagen: ");

//for search
define("NO_MATCHES", "Ingen tr&auml;ff hittades");
define("MAKE_A_SEARCH", "S&ouml;k");
define("SEARCH_FOR", "S&ouml;k efter");
define("SEARCH_IN", "S&ouml;k i");
define("SORT_BY", "Sortera efter");
define("ALL", "Alla");
define("ALPHABETICAL_LABEL", "Alphabetiskt");
define("ALPHABETICAL_REVERSED", "Alphabetskt, omv&auml;nd");
define("NEWEST_FIRST", "Nyaste f&ouml;rst");
define("OLDEST_FIRST", "&Auml;ldst f&ouml;rst");
define("SERCHED_FOR_LABEL", "S&ouml;kte efter");

//for submit.php
define("SUBMIT_SUCCESS", "Grattis! Din l&auml;nk &auml;r f&ouml;reslagen.");
define("SUBMIT_NAME_LABEL", "Ditt namn:");
define("SUBMIT_A_LINK", "F&ouml;resl&aring; en l&auml;nk");
define("REGULAR_LINK", "Regulj&auml;r l&auml;nk");
define("RECIPROCAL_LINK", "Tillbakal&auml;nk");
define("RECIPROCAL_URL_LABEL",  "Adress till tillbakal&auml;nk");
define("CLOSED_FOR_SUBMISSIONS", "Vi tar inte emot l&auml;nkf&ouml;rslag just nu");
define("PAYMENT_CANCELLED", "Betalningen avbr&ouml;ts");
define("PROCESSING_PAYMENT", "Betalning hanteras...");
define("PROCESSING_PAYMENT_DESCRIPTION", "Din order hanteras, v&auml;nta...");



//for suggest.php
define("SUGGEST_A_CATEGORY", "F&ouml;resl&aring; en kategori");
define("SUBMIT_SUCCESS_CATEGORY", "Grattis! Din kategori &auml;r f&ouml;reslagen.");

//for extensions
define("EXTENSIONS_LABEL", "Utbyggnader");
define("EDIT_EXTENSIONS", "&Auml;ndra utbyggnader");
define("AVAILABLE_EXTENSIONS_FOR_INSTALL", "Tillg&auml;ngliga utbyggnader");
define("NO_INSTALLED_EXTENSIONS", "Det finns just nu inga installerade utbyggnader");
define("NO_EXTENSIONS_FOR_INSTALL", "Det finns inga utbyggnader f&ouml;r installation");
define("SIMPLE_LABEL", "Enkel");
define("FREE_LABEL", "Fri");

define("EDIT_EXTENSION", "Redigera utbyggnad");
define("HOOKS", "Krokar");

//extension errors
define("EXTENSION_ROOT_ERROR", "Rotelementet extension saknas eller är felaktigt ifyllt.");
define("EXTENSION_ID_ERROR", "Elementet extension/id saknas eller är felaktigt ifyllt.");
define("EXTENSION_ID_ERROR2", "Elementet extension/id matchar inte med extensionens mappnamn.");
define("EXTENSION_TITLE_ERROR", "Elementet extension/title saknas eller är felaktigt ifyllt.");
define("EXTENSION_VERSION_ERROR", "Elementet extension/version saknas eller är felaktigt ifyllt.");
define("EXTENSION_DESCRIPTION_ERROR", "Elementet extension/description saknas eller är felaktigt ifyllt.");
define("EXTENSION_AUTHOR_ERROR", "Elementet extension/author saknas eller är felaktigt ifyllt.");
define("EXTENSION_HOOKS_ERROR", "Elementet extension/hooks saknas eller är felaktigt ifyllt.");
define("EXTENSION_HOOKS_HOOK_ERROR", "Elementet extension/hooks/hook saknas eller är felaktigt ifyllt.");
define("EXTENSION_HOOKS_HOOK_ERROR2", "Elementet extension/hooks/hook saknar attributen 'id'.");

define("EXTENSION_PERMISSION_WARNING", "F&ouml;r att kunna redigera utbyggnaden, så b&ouml;r du s&auml;tta filr&auml;ttigheterna f&ouml;r %s till " .get_filepermission(true). ".");
define("EXTENSION_FILE_NOT_FOUND", "Fel: %s hittades inte");
define("EXTENSION_ALLREADY_INSTALLED", "Fel: utbyggnaden %s &auml;r redan installerad");
define("EXTENSIONS_DISABLED", "Extensionerna &auml;r avst&auml;ngda. Du m&aring;ste g&aring; till Admin->Otions och s&auml;tta p&aring; dem igen.");

//new defines
define("POSITION_NOT_A_NUMBER", "Du m&aring;ste fylla i ett nummer");
define("HARD_BAN", "skr&auml;pst&auml;mpel");
define("SEARCH_TYPE", "S&ouml;ktyp");
define("VERSION_LABEL", "Version");
define("AUTHOR_LABEL", "Skapare");
define("INSTALL_LABEL", "Instalera");
define("UNINSTALL_LABEL", "Avinstallera");
define("ID_LABEL", "ID");
define("DETAILS_LABEL", "Detaljer");
define("SUBCATEGORIES", "Underkategorier");
define("SPONSORED_LINKS", "Sponsrade l&auml;nkar");
define("PAID_LINKS", "Betalda l&auml;nkar");
define("SPONSOR_LINK", "Sponsrad l&auml;nk");
define("PAID_LINK", "Betald l&auml;nk");
define("LOG_OUT", "Logga ut");
define("PRICE_LABEL", "Pris");
define("CURRENCY_LABEL", "Valuta");
define("NOT_PAID", "Obetald");
define("IS_PAYMENT_PENDING", "Betalning mottagen");
define("INVALID_EMAIL", "E-post adressen var inkorrekt.");
define("WRONG_PASSWORD_CONFIRMATION", "Det ifyllda l&ouml;senordet matchar inte det omskrivna");
define("CHANGE_PASSWORD_LABEL", "Byt l&ouml;senord");
define("ENTER_NEW_PASSWORD", "Fyll i ett nytt l&ouml;senord");
define("RETYPE_PASSWORD", "Skriv om l&ouml;senord");
define("SAVE_PASSWORD_BUTTON", "Spara louml;senord");
define("PASSWORD_HAS_BEEN_CHANGED", " - Ditt l&ouml;senord har &auml;ndrats");
define("ACCOUNT_LABEL", "Konto");
define("SHOW_PHP_INFO", "Visa PHP info");
define("SEF_REWRITE_LABEL", "Omskrivningslager");
define("INDEX_PAGE", "Framsida");

//Page generation
define("PAGE_GENERATED_IN", "Sidan skapades p&aring;");
define("SECONDS", " Sekunder");
