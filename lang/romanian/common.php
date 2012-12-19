<?php
/***********************************************************************

  Copyright (C) 2002-2006  Rickard Andersson (rickard@punbb.org)
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


//strings comune
define("TITLE_LABEL", "Titlu");
define("CATEGORY_LABEL", "categorie");
define("CAPTCHA_LABEL", "Captcha");
define("URL_LABEL", "URL");
define("LINK_DESCRIPTION_LABEL", "Link Descriere");
define("CATEGORY_DESCRIPTION_LABEL", "Descrierea categoriei");
define("NAME_LABEL", "Nume");
define("EMAIL_LABEL", "Email");
define("EDIT_LABEL", "Edit");
define("ACCEPT_LABEL", "Accept");
define("UNACCEPT_LABEL", "Unaccept");
define("MOVE_LABEL", "Move");
define("DELETE_LABEL", "Sterge");
define("NAVIGATION_LABEL", "Navigation");
define("HOME_LABEL", "Home");
define("SUBMIT_LINK_LABEL", "Trimite un link");
define("SUGGEST_CATEGORY_LABEL", "Sugereaza o categorie");
define("SEARCH_LABEL", "Cauta");

//Pentru include / functions.php
define("RECIPROCAL_NOT_FROM_SAME_DOMAIN", "URL-ul reciproc trebuie sa provina din acelasi domeniu ca link-ul URL-ul");
define("NO_RECIPROCAL_FOUND", "nici o legatura reciproca a fost gasit la adresa URL reciproc:");
define("URL_COULD_NOT_BE_LOADED", "nu a putut încarca URL-ul reciproc:");

//pentru admin_menu
define("ACCEPT_CATEGORIES_LABEL", "categorii");
define("ACCEPT_LINKS_TITLE", "Accept link-uri");
define("BROWSE", "Browse");
define("LINKS_LABEL", "Links");
define("CATEGORIES_LABEL", "Categorii");
define("INFORMATION_LABEL", "Information");
define("OPTION_LABEL", "Optiuni");
define("CENSORING", "cenzurate");
define("IP_BANNING", "IP Banning");
define("TEMPLATES_TITLE", "Teme");
define("ADMIN_MENU", "Admin Menu");
define("DIRECTORY_MANAGEMENT", "Directory Management");
define("GENERAL_LABEL", "General");
define("PLUGINS_LABEL", "Plugin-uri");

//IP pentru interzicerea
define("CENSORED_WORD_IS_NOTHING", "nu ai facut ceva pentru a introduce cenzura");
define("YOU_MUST_SELECT_AN_IP", "trebuie sa selectati o adresa IP");
define("IP_ALLREADY_BANNED", "IP selectat este deja interzis");
define("IP_BANNED_QOUTE", "Tu sunt interzise!");
define("NEW_IP_BAN", "New IP ban");
define("ADD_A_BAN", "Adauga un ban");
define("IP_NUMBER", "IP Number");
define("MANAGE_BANS", "Administreaza interdictii");
define("UNBAN_IP", "Unban IP");
define("SELECT_IP_TO_UNBAN", "Selectati IP a utilizatorului pe care doriti sa deblocati");
define("UNBAN", "Unban");
define("INFO", "Info");
define("NO_IP_BANS", "Nu IP-uri sunt interzise înca");

//pentru plugin-uri
define("PLUGIN_DOES_NOT_EXIST", "plug-in nu exista");
define("PLUGIN_NOT_SELECTED", "a fost selectat nici un plug-in");

//pentru adaugarea de
define("ADD_LABEL", "Add");
define("ADD_LINK_LABEL", "Adaugati un link");
define("ADD_CATEGORY_LABEL", "Adaugati o categorie");

//pentru paginare
define("NEXT_PAGE", "Next Page");
define("PREVIOUS_PAGE", "Previous Page");

//pentru admin_categories.php
//define("PROPOSED_CATEGORY_NAME", "numele propus categorie");
//define("PROPOSED_TITLE", "titlu propuse, modifica, dupa cum doriti");
//define("PROPOSED_CATEGORY_DESCRIPTION", "Descrierea categoriei");
//define("PROPOSED_DESCRIPTION_LABEL", "Descrierea. Editare, dupa cum doriti");
define("ACCEPT", "Accept");
define("MODIFIE_CATEGORIES", "categorii Modify");
define("SELECT_CATEGORY", "Selectati numele de categoria pe care doriti sa le editati");
define("DELETE_CATEGORY", "sterge o categorie");
define("DELETE_CATEGORY_LABEL", "Categorie trebuie sa fie eliminata");
define("DELETE_CATEGORY_SELECT_LABEL", "Selectati numele de categoria pe care doriti sa stergeti");
define("DELETE_BUTTON", "Sterge");
define("NO_CATEGORIES_HERE", "Nu exista categorii de aici");

//pentru admin_information.php
define("WELCOME_LABEL", "Bine ati venit");
define("WELCOME_MESSAGE", "Bine ati venit la administrarea OpenLD panoul de control. Aici este o lista de câteva lucruri pe care le puteti face:");
define("MODERATE_CATEGORIES_AND_LINKS", "moderata si categoriile de link-uri");
define("SET_OPTIONS_AND_PREFERENCES", "a seta optiuni si preferintele");
define("CONTROL_PERMISSIONS", "controlul permisiuni");
define("BAN_IPS", "interdictia de IP-uri");
define("LIMIT_SPAM", "spam-limita de a cenzura de text");
define("SOFTWARE_INFO", "Software-ul de informatii");
define("OPENLD_VERSION_LABEL", "OpenLD versiune");
define("SERVER_INFORMATION", "Server Information");
define("SERVER_NAME_LABEL", "Nume:");
define("SERVER_SOFTWARE_LABEL", "Software-ul:");
define("SERVER_PROTOCOLL_LABEL", "Protocolul de la:");
define("SCRIPT_ENVIRONMENT_LABEL", "Script Mediu");
define("OS_LABEL", "sistem de operare:");
define("PHP_LABEL", "PHP:");
define("DATABASE_LABEL", "Baza de date");
define("ROWS_LABEL", "rânduri:");
define("SIZE_LABEL", "Dimensiune:");
define("ACCELERATOR_LABEL", "Accelerator:");

//pentru admin_accept_links.php
define("APPROVED_LINKS_LABEL", "link-uri Aprobat");


define("INCORRECT_PASSWORD_ERROR", "corecta nume, dar cu parola gresita");
define("INCORRECT_USERNAME_ERROR", "parola corecta, dar cu numele de utilizator rau");
define("USERNAME_AND_PASSWORD_INCORRECT", "numele de utilizator si parola a fost incorecta");
define("LOGIN_TITLE", "Login pentru a Panoul Administratorului");
define("USERNAME_LABEL", "Nume de utilizator");
define("PASSWORD_LABEL", "Password");
define("FORGOT_PASSWORD", "Ati uitat parola");
define("SEND_NEW_PASSWORD", "Trimite parola noua");
define("PASSWORD_SENT", "Informatiile dvs. de cont au fost trimise la adresa dvs. de e-mail");
define("FORGOT_MAIL", "Click pe link-ul de mai jos pentru a obtine o noua parola");
define("MAIL_NOT_FOUND_IN_DB", "e-mail-ati inserat nu a putut fi gasit în baza de date");
define("NEW_PASSWORD", "New Password");

//pentru a muta ..
define("MOVE_LINK_LABEL", "Move link");
define("MOVE_CATEGORY_LABEL", "Move categorie");
define("MOVE_TO", "Mutare pentru a");

//text în admin_options.php
define("ADMIN_LABEL", "Admin");
define("ADMIN_USERNAME_LABEL", "Admin nume de utilizator");
define("ADMIN_PASSWORD_LABEL", "Admin Password");
define("ADMIN_EMAIL_LABEL", "Admin e-mail");
define("CENTRAL_FEATURES", "Central caracteristici");
define("DESCRIPTION_LABEL", "Descriere");
define("DOMAIN_LABEL", "URL");
define("LANGUAGE_LABEL", "Limba");
define("LINK_TYPES_LABEL", "tipuri de link");
define("RECIPROCAL_LINKS_LABEL", "link-uri reciproce");
define("REGULAR_LINKS_LABEL", "link-uri Regular");
define("DISPLAY_LABEL", "Display");
define("LINKS_SORT_BY_LABEL", "Link-uri sortate dupa");
define("CATEGORIES_SORT_BY_LABEL", "Categorii sortate dupa");
define("TITLE_REVERSED", "Titlu invers");
define("DESCRIPTION_REVERSED", "Descriere inversata");
define("DATE_LABEL", "Data");
define("DATE_REVERSED", "Data inversata");
define("RECIPROCAL_URL", "Reciprocal URL-ul");
define("RECIPROCAL_URL_DESC", "Reciprocal URL-ul inversat");
define("URL", "URL");
define("URL_REVERSED", "URL-ul inversat");
define("CATEGORY_COLUMNS_DESCRIPTION", "coloane categorie");
define("LINKS_PER_PAGE", "Link-uri pe pagina");
define("INPUT_CONTROL", "intrare de control");
define("MAXIMUM_LINK_DESCRIPTION", "descriere maxima");
define("MINIMUM_LINK_DESCRIPTION", "descriere minime");
define("MAXIMUM_CATEGORY_DESCRIPTION", "descriere maxima");
define("MINIMUM_CATEGORY_DESCRIPTION", "descriere minime");
define("SAVE_BUTTON", "Salvati modificarile");
define("DISABLE_EXTENSIONS_LABEL", "extensii nu fi de acord");
define("ENABLE_GZIP_LABEL", "Activeaza de compresie gzip");
define("HIDE_ADMIN_BUTTON", "Hide admin butonul");
define("DENY_INDEX_PAGE_SUBMISSIONS", "Deny link-uri Front Page");
define("DISPLAY_UNACCEPTED_LINKS", "link-uri neacceptate de afisare");
define("OPEN_LINKS_IN_NEW_WINDOWS", "link-uri deschida în ferestre noi");
define("SEARCH_RESULTS_PER_PAGE", "Rezultatele cautarii pe pagina");

//pentru teme
define("TEMPLATE_SUBMIT", "Folositi aceasta tema");
define("CHOSE_TEMPLATE", "teme Selectati");
define("NO_TEMPLATES_WERE_FOUND", "Nu teme gasit");
define("DIRECTORY_LABEL", "Director");
define("THUMBNAIL_PREVIEW", "Preview");
//teme de editare
define("FILE_LABEL", "File");
define("PERMISSION_LABEL", "Permission");
define("NOT_WRITEABLE", "Nu inscriptibile");
define("IS_WRITEABLE", "writeable");
define("EDIT_TEMPLATE", "Editare sablon");

//pentru admin_words.php
define("DOUBLE_ADD", "<br> acest text este deja cenzurat");
define("NO_INPUT_WORD", "<br> aveti nevoie pentru a insera text pentru a cenzura");
define("NO_ID_FOUND", "<br>the id was not found in the database");
define("MORE_THAN_ONE_ID_FOUND", "<br> grava eroare! Mai mult de un ID-ul a fost gasit în baza de date. Raportati acest eroare aici: http://sourceforge.net/tracker/?group_id=181014&atid=895496");
define("EDIT_CENSORED_NOT_FOUND", "nici un text a fost introdus pentru a cenzura");
define("NO_BANNED_WORDS", "Nu exista în prezent nici un text cenzurat");
define("UPDATE", "Update");
define("REMOVR", "Sterge");
define("ACTION", "actiune");
define("BAN_WORDS", "Adaugati text pentru a cenzura");
define("NEW_CENSORED_WORD", "New cenzurate de text");
define("CENSORED_WORD", "text Censored");
define("REPLACE_WITH", "Înlocuieste cu");
define("EDIT_DELETE_BANNED_WORDS", "Editare cenzurate de text");

//pentru categories.php
define("NO_SUBCATEGORIES_FOUND", "Nu exista nici subcategorii aceasta categorie");

//pentru a edita categorie si link-ul
define("EDIT_CATEGORY_LABEL", "Editare categorie");
define("EDIT_LINK_LABEL", "Editeaza Link");

//pentru notele de subsol
define("POWERED_BY", "Powered by");

//pentru avertismente
define("WRONG_CAPTCHA", "Wrong captcha inserted");
define("NO_TITLE_AT_ALL", "titlu lipseste");
define("TITLE_TOO_LONG", "titlul introdus este mai lung decât este permis");
define("TITLE_TOO_SHORT", "titlul introdus este mai mica de permis");
define("ILLEGAL_WORDS_WITHIN_TITLE", "the inserted title includes censored text");
define("TITLE_ALREADY_THERE", "exista deja un titlu similare");
define("NO_DESCRIPTION_AT_ALL", "Descrierea lipseste");
define("DESCRIPTION_TOO_LONG", "Descriere introdusa este mai mare decât este permis");
define("DESCRIPTION_TOO_SHORT", "Descriere introdusa este mai mica de permis");
define("ILLEGAL_WORDS_WITHIN_DESCRIPTION", "Descriere introdusa include textul cenzurat");
define("NAME_TOO_LONG", "numele introdus este mai lung decât este permis");
define("NAME_TOO_SHORT", "numele introdus este mai scurta decât permis");
define("ILLEGAL_WORDS_WITHIN_NAME", "numele de insereaza include textul cenzurat");
define("EMAIL_TOO_LONG", "e-mail introdusa este mai lung decât este permis");
define("EMAIL_TOO_SHORT", "the inserted email is shorter than allowed");
define("ILLEGAL_WORDS_WITHIN_EMAIL", "e-mail introdusa include textul cenzurat");
define("URL_TOO_LONG", "URL-ul introdus este mai lung decât este permis");
define("URL_TOO_SHORT", "URL-ul introdus este mai mica de permis");
define("ILLEGAL_WORDS_WITHIN_URL", "URL-ul introdus include textul cenzurat");
define("URL_ALLREADY_THERE", "exista deja un URL similare");
define("NO_RECIPROCAL_URL_AT_ALL", "URL-ul reciproce lipseste");
define("RECIPROCAL_URL_TOO_LONG", "URL-ul introdus de reciprocitate este mai lung decât este permis");
define("RECIPROCAL_URL_TOO_SHORT", "URL-ul introdus de reciprocitate este mai mica de permis");
define("ILLEGAL_WORDS_WITHIN_RECIPROCAL_URL", "insereaza reciproce include textul cenzurat");
define("RECIPROCAL_NOT_ALLOWED_BUT_CHOSED", "nu optiunea reciproce este avilable");
define("NOT_CORRECT_IP_ADDRESS", "introduce adresa IP este incorecta");
define("NO_USERNAME_AT_ALL", "lipseste numele de utilizator");
define("TOO_LONG_USERNAME", "numele de utilizator introdus este mai lung decât este permis");
define("TOO_SHORT_USERNAME", "numele de utilizator introdus este mai scurta decât permis");
define("NO_PASSWORD_AT_ALL", "parola este lipsa");
define("TOO_LONG_PASSWORD", "parola introdusa este mai lung decât este permis");
define("TOO_SHORT_PASSWORD", "parola introdusa este mai mica de permis");
define("NO_MINIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "Descrierea minim de link-ul lipseste");
define("MINIMUM_ALLOWED_LINK_DESCRIPTION", "Descriere introdusa minime de link-ul nu a fost numeric");
define("NO_MAXIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "Descrierea maxim de link-ul lipseste");
define("MAXIMUM_ALLOWED_LINK_DESCRIPTION", "introduce maxim de descriere link-ul nu a fost numeric");
define("NO_MINIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "Descrierea minim categoria lipseste");
define("MIN_CAT_DESC_NOT_NUMERIC", "Descriere introdusa minime de categorie nu a fost numeric");
define("NO_MAXIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "Descrierea maxim de categoria lipseste");
define("MAX_CAT_DESC_NOT_NUMERIC", "introduce maxim de descriere categorie nu a fost numeric");
define("MINIMUM_LINK_DESCRIPTION_BIGGER_THAN_MAXIMUM", "Descriere introdusa minim de link-ul trebuie sa fie mai mici decât pe link-ul descriere maxim");
define("MINIMUM_CAT_DESCRIPTION_BIGGER_THAN_MAXIMUM", "Descriere introdusa minime categorie trebuie sa fie mai mici decât descrierea categoriei maxim");
define("LINKS_PER_PAGE_NOT_NUMERIC", "link-uri inserate pe pagina nu a fost numeric");
define("NO_LINKS_PER_PAGE_AT_ALL", "numarul de link-uri pe pagina lipseste");
define("NO_COLUMN_NUMBER_AT_ALL", "numarul de coloane lipseste");
define("COLUMN_NUMBER_IS_NOT_A_NUMBER", "valoarea introdusa pentru numarul de coloane nu a fost numeric");
define("NO_SORT_OPTION_AT_ALL", "un fel optiune este lipseste");
define("SORT_OPTION_TOO_LONG", "introduc optiunea de sortare este mai lung decât este permis");
define("SORT_OPTION_TOO_SHORT", "introduc optiunea de sortare este mai scurta decât permis");
define("NO_LANGUAGE_AT_ALL", "limba optiune este lipseste");
define("LANGUAGE_TOO_LONG", "the selected language is longer than allowed");
define("LANGUAGE_TOO_SHORT", "limba selectata este mai scurta decât permis"); //<---|^- aceasta este util?
define("PASSWORD_EQUALS_USERNAME", "Parola trebuie sa fie diferita de numele de utilizator");
define("NO_LINKTYPE_AT_ALL", "link-ul de tip optiune este lipseste");
define("REGULAR_NOT_ALLOWED_BUT_CHOSED", "nu regulate optiunea este disponibila");
define("NO_CATEGORY_SELECTED", "nici o categorie a fost selectat");
define("CATEGORY_ID_NOT_A_NUMBER", "ID-ul categorie nu este un numar de");
define("CATEGORY_ID_NOT_IN_DB", "Id-ul categoriei nu exista");
define("INVALID_URL_FORMAT", "formatul URL-ul este invalid");
define("BAD_REQUEST", "Bad request");
define("ZLIB_NOT_ENABLED", "trebuie sa aveti acces la zlib în scopul de a utiliza de compresie gzip");
define("INDEX_PAGE_NOT_OPEN_FOR_SUBMISSION", "nu prima pagina este deschis pentru depuneri");
define("SEARCH_OPTION_WARNING", "rezultate câmpul de cautare necesita input numeric");


define("NO_LINKS_HERE", "Nu exista link-uri aici");
define("SUBMITTED_LABEL", "Inscrisa:");

//pentru cautare
define("NO_MATCHES", "NICI UN REZULTAT GASIT");
define("MAKE_A_SEARCH", "A face o cautare");
define("SEARCH_FOR", "Cauta");
define("SEARCH_IN", "Cauta in");
define("SORT_BY", "Sortare dupa");
define("ALL", "All");
define("ALPHABETICAL_LABEL", "alfabetica");
define("ALPHABETICAL_REVERSED", "Alfabetic inversata");
define("NEWEST_FIRST", "Cele mai noi");
define("OLDEST_FIRST", "vechi");
define("SERCHED_FOR_LABEL", "Cautat pentru");

//pentru submit.php
define("SUBMIT_SUCCESS", "link-ul a fost prezentat cu succes");
define("SUBMIT_NAME_LABEL", "Numele of You / compania / organizatia dumneavoastra / Your Group:"); //elimina aceasta eticheta
define("SUBMIT_A_LINK", "Trimite un link");
define("REGULAR_LINK", "leaga în mod regulat");
define("RECIPROCAL_LINK", "Link reciproc");
define("RECIPROCAL_URL_LABEL", "Reciprocal URL-ul");
define("CLOSED_FOR_SUBMISSIONS", "director este în prezent închisa pentru depuneri");
define("PAYMENT_CANCELLED", "de plata au fost anulate");
define("PROCESSING_PAYMENT", "Prelucrarea de plata ...");
define("PROCESSING_PAYMENT_DESCRIPTION", "Va rugam sa asteptati, pentru dumneavoastra este în curs de procesare ...");

//pentru suggest.php
define("SUGGEST_A_CATEGORY", "Sugereaza o categorie");
define("SUBMIT_SUCCESS_CATEGORY", "sugestia au fost realizate cu succes");

//pentru extensii
define("EXTENSIONS_LABEL", "Extensii");
define("EDIT_EXTENSIONS", "Editare Extensii");
define("AVAILABLE_EXTENSIONS_FOR_INSTALL", "Extensii disponibile");

define("NO_EXTENSIONS_FOR_INSTALL", "Nu exista nici o prelungire disponibile pentru a instala");

define("FREE_LABEL", "Free");
//erori de prelungire
define("EXTENSION_ROOT_ERROR", "root element de prelungire este incorect sau lipseste");
define("EXTENSION_ID_ERROR", "element de prelungire / ID-ul este incorect sau lipseste");
define("EXTENSION_ID_ERROR2", "element de prelungire / ID-ul nu se potriveste cu extensia de nume de dosar");

define("EXTENSION_VERSION_ERROR", "element de prelungire / versiune este incorect sau lipseste");
define("EXTENSION_DESCRIPTION_ERROR", "element de prelungire / Descrierea este incorect sau lipseste");
define("EXTENSION_AUTHOR_ERROR", "element de prelungire / autor este incorect sau lipseste");
define("EXTENSION_HOOKS_ERROR", "element de prelungire / cârlige este incorect sau lipseste");
define("EXTENSION_HOOKS_HOOK_ERROR", "element de prelungire / cârlige / cârlig sunt malformate sau lipsesc");
define("EXTENSION_HOOKS_HOOK_ERROR2", "element de prelungire / cârlige / cârlig lipsesc un atribut 'id'");
define("EDIT_EXTENSION", "Editare Extension");
define("HOOKS", "crosete");
define("EXTENSION_PERMISSION_WARNING", "trebuie sa modificati permisiunile în fisierul:%s la " .get_filepermission(true). ", în scopul de a edita on-line");
define("EXTENSION_FILE_NOT_FOUND", "%s nu a putut fi gasit");
define("EXTENSION_ALLREADY_INSTALLED", "extensie %s este deja instalat");
define("EXTENSIONS_DISABLED", "Extensii este dezactivat. Trebuie sa mergi la Admin-> Otions si schimbarile extensii-preferinta cu handicap înainte de a extensiile instalate pot produce efecte.");

//new defineste

define("HARD_BAN", "Ban de text");
define("SEARCH_TYPE", "tip Cauta");
define("VERSION_LABEL", "Version");
define("AUTHOR_LABEL", "Autor");
define("INSTALL_LABEL", "Install");
define("UNINSTALL_LABEL", "Uninstall");
define("ID_LABEL", "ID");
define("DETAILS_LABEL", "Detalii");
define("SUBCATEGORIES", "Subcategories");
define("SPONSORED_LINKS", "Link-uri sponsorizate");
define("PAID_LINKS", "Paid Links");
define("SPONSOR_LINK", "Link sponsorizat");
define("PAID_LINK", "Link platite");
define("LOG_OUT", "Log Out");
define("PRICE_LABEL", "pret");
define("CURRENCY_LABEL", "valuta");
define("NOT_PAID", "plata pâna");
define("IS_PAYMENT_PENDING", "plata a primit");
define("INVALID_EMAIL", "introduce adresa de e-mail a fost invalid");
define("WRONG_PASSWORD_CONFIRMATION", "parola introdusa nu se potriveste cu dumneavoastra de confirmare");
define("CHANGE_PASSWORD_LABEL", "Change password");
define("ENTER_NEW_PASSWORD", "Introduceti o parola noua");
define("RETYPE_PASSWORD", "Reintroduceti parola");
define("SAVE_PASSWORD_BUTTON", "Save Password");
define("PASSWORD_HAS_BEEN_CHANGED", "- parola dvs. a fost schimbat");
define("ACCOUNT_LABEL", "cont");
define("SHOW_PHP_INFO", "Arata info");
define("SEF_REWRITE_LABEL", "Rewrite Layer");
define("INDEX_PAGE", "Prima pagina");

//generarea de start,
define("PAGE_GENERATED_IN", "Pagina generata in");
define("SECONDS", "Seconds");
?>