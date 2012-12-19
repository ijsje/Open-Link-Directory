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


//common strings
define("TITLE_LABEL", "Tytul");
define("CATEGORY_LABEL", "Category");
define("CAPTCHA_LABEL", "Captcha");
define("URL_LABEL", "URL");
define("LINK_DESCRIPTION_LABEL", "Opis Link");
define("CATEGORY_DESCRIPTION_LABEL", "Kategoria Opis");
define("NAME_LABEL", "Imie");
define("EMAIL_LABEL", "email");
define("EDIT_LABEL", "Edycja");
define("ACCEPT_LABEL", "Accept");
define("UNACCEPT_LABEL", "Unaccept");
define("MOVE_LABEL", "Move");
define("DELETE_LABEL", "Usun");
define("NAVIGATION_LABEL", "Navigation");
define("HOME_LABEL", "Home");
define("SUBMIT_LINK_LABEL", "Wyslij link");
define("SUGGEST_CATEGORY_LABEL", "Zaproponuj kategorie");
define("SEARCH_LABEL", "Szukaj");

//W include / functions.php
define("RECIPROCAL_NOT_FROM_SAME_DOMAIN", "wzajemne url musza pochodzic z tej samej domeny, adres URL");
define("NO_RECIPROCAL_FOUND", "nie wzajemne powiazania zostala znaleziona na wzajemne url");
define("URL_COULD_NOT_BE_LOADED", "Nie mozna zaladowac wzajemnych url");

//dla admin_menu
define("ACCEPT_CATEGORIES_LABEL", "Accept kategorie");
define("ACCEPT_LINKS_TITLE", "Akceptuj linki");
define("BROWSE", "Ludzie");
define("LINKS_LABEL", "linki");
define("CATEGORIES_LABEL", "Kategorie");
define("INFORMATION_LABEL", "Informacje");
define("OPTION_LABEL", "Opcje");
define("CENSORING", "Cenzura");
define("IP_BANNING", "Zakaz IP");
define("TEMPLATES_TITLE", "Tematy");
define("ADMIN_MENU", "menu Administrator");
define("DIRECTORY_MANAGEMENT", "Directory Management");
define("GENERAL_LABEL", "General");
define("PLUGINS_LABEL", "wtyczek");

//ip zakazu
define("CENSORED_WORD_IS_NOTHING", "nie, mozna bylo wlozyc cos do cenzora");
define("YOU_MUST_SELECT_AN_IP", "nalezy wybrac IP");
define("IP_ALLREADY_BANNED", "wybranych IP jest juz zakazana");
define("IP_BANNED_QOUTE", "Jestes zakazane!");
define("NEW_IP_BAN", "Nowe zakaz IP");
define("ADD_A_BAN", "Dodaj zakaz");
define("IP_NUMBER", "Numer IP");
define("MANAGE_BANS", "zakaz Zarzadzanie");
define("UNBAN_IP", "Unban IP");
define("SELECT_IP_TO_UNBAN", "Wybierz adres IP uzytkownika, którego chcesz unban");
define("UNBAN", "Unban");
define("INFO", "Info");
define("NO_IP_BANS", "No IP sa blokowane jeszcze");

//dla wtyczek
define("PLUGIN_DOES_NOT_EXIST", "wtyczki nie istnieje");
define("PLUGIN_NOT_SELECTED", "Brak wtyczki zostal wybrany");

//za dodanie
define("ADD_LABEL", "Dodaj");
define("ADD_LINK_LABEL", "Dodaj link");
define("ADD_CATEGORY_LABEL", "Dodaj kategorie");

//dla paginacja
define("NEXT_PAGE", "Next Page");
define("PREVIOUS_PAGE", "Poprzednia strona");

//dla admin_categories.php
//define("PROPOSED_CATEGORY_NAME", "Propozycja nazwy kategorii");
//define("PROPOSED_TITLE", "Proponowany tytul, edytowac jak chcesz");
//define("PROPOSED_CATEGORY_DESCRIPTION", "Kategoria Opis");
//define("PROPOSED_DESCRIPTION_LABEL", "opis. Edytuj, jak chcesz");
define("ACCEPT", "Accept");
define("MODIFIE_CATEGORIES", "kategorie Modyfikuj");
define("SELECT_CATEGORY", "Wybierz nazwe kategorii, która chcesz edytowac");
define("DELETE_CATEGORY", "Usun kategorie");
define("DELETE_CATEGORY_LABEL", "Kategoria byc usuniete");
define("DELETE_CATEGORY_SELECT_LABEL", "Wybierz nazwe kategorii, która chcesz usunac");
define("DELETE_BUTTON", "Usun");
define("NO_CATEGORIES_HERE", "Nie ma tu kategorii");

//dla admin_information.php
define("WELCOME_LABEL", "Witaj");
define("WELCOME_MESSAGE", "Zapraszamy do administracji panelu sterowania OpenLD. Oto lista kilku rzeczy mozna zrobic:");
define("MODERATE_CATEGORIES_AND_LINKS", "umiarkowane kategorie i linki");
define("SET_OPTIONS_AND_PREFERENCES", "ustawiania opcji i preferencji");
define("CONTROL_PERMISSIONS", "Uprawnienia kontrolne");
define("BAN_IPS", "zakaz IP");
define("LIMIT_SPAM", "spam ograniczyc przez cenzure tekst");
define("SOFTWARE_INFO", "Software");
define("OPENLD_VERSION_LABEL", "Wersja OpenLD");
define("SERVER_INFORMATION", "informacje Server");
define("SERVER_NAME_LABEL", "Imie");
define("SERVER_SOFTWARE_LABEL", "Oprogramowanie");
define("SERVER_PROTOCOLL_LABEL", "Protokól");
define("SCRIPT_ENVIRONMENT_LABEL", "Script Srodowisko");
define("OS_LABEL", "System operacyjny");
define("PHP_LABEL", "PHP");
define("DATABASE_LABEL", "Database");
define("ROWS_LABEL", "Wiersze");
define("SIZE_LABEL", "Rozmiar:");
define("ACCELERATOR_LABEL", "Accelerator");


define("APPROVED_LINKS_LABEL", "Zatwierdzony linki");

//dla admin_login.php
define("INCORRECT_PASSWORD_ERROR", "poprawny login ale zle haslo");
define("INCORRECT_USERNAME_ERROR", "poprawne haslo, ale przy zlej username");
define("USERNAME_AND_PASSWORD_INCORRECT", "nazwe uzytkownika i haslo sa niepoprawne");
define("LOGIN_TITLE", "Zaloguj sie do panelu administracyjnego");
define("USERNAME_LABEL", "Nazwa uzytkownika");
define("PASSWORD_LABEL", "Haslo");
define("FORGOT_PASSWORD", "Zapomnialem hasla");
define("SEND_NEW_PASSWORD", "Send new password");
define("PASSWORD_SENT", "Informacje o koncie zostaly przeslane na adres e-mail");
define("FORGOT_MAIL", "Kliknij na ponizszy link, aby otrzymac nowe haslo");
define("MAIL_NOT_FOUND_IN_DB", "e-mail brzmieniu nie mozna znalezc w bazie danych");
define("NEW_PASSWORD", "New Password");

//dla przeniesc ..
define("MOVE_LINK_LABEL", "Move link");
define("MOVE_CATEGORY_LABEL", "Move Kategoria");
define("MOVE_TO", "Przesun do");

//tekst w admin_options.php
define("ADMIN_LABEL", "Administrator");
define("ADMIN_USERNAME_LABEL", "Nazwa uzytkownika Administrator");
define("ADMIN_PASSWORD_LABEL", "Haslo administratora");
define("ADMIN_EMAIL_LABEL", "Administrator e-mail");
define("CENTRAL_FEATURES", "funkcje Centralnego");
define("DESCRIPTION_LABEL", "Opis");
define("DOMAIN_LABEL", "URL");
define("LANGUAGE_LABEL", "Language");
define("LINK_TYPES_LABEL", "typy link");
define("RECIPROCAL_LINKS_LABEL", "Wzajemne powiazania");
define("REGULAR_LINKS_LABEL", "regularnego polaczenia");
define("DISPLAY_LABEL", "Ekran");
define("LINKS_SORT_BY_LABEL", "Linki posortowane wg");
define("CATEGORIES_SORT_BY_LABEL", "Kategorie posortowane wg");
define("TITLE_REVERSED", "Tytul odwrócony");
define("DESCRIPTION_REVERSED", "Opis odwrócony");
define("DATE_LABEL", "Data");
define("DATE_REVERSED", "Data odwrócony");
define("RECIPROCAL_URL", "Reciprocal URL");
define("RECIPROCAL_URL_DESC", "Reciprocal URL odwrócony");

define("URL_REVERSED", "URL odwrócony");
define("CATEGORY_COLUMNS_DESCRIPTION", "kolumny Kategoria");
define("LINKS_PER_PAGE", "Linki na stronie");
define("INPUT_CONTROL", "Kontrola wejscia");
define("MAXIMUM_LINK_DESCRIPTION", "maksymalne opis");
define("MINIMUM_LINK_DESCRIPTION", "minimalne opis");
define("MAXIMUM_CATEGORY_DESCRIPTION", "maksymalne opis");
define("MINIMUM_CATEGORY_DESCRIPTION", "minimalne opis");
define("SAVE_BUTTON", "Zapisz zmiany");
define("DISABLE_EXTENSIONS_LABEL", "Wylacz rozszerzenia");
define("ENABLE_GZIP_LABEL", "Wlacz kompresje gzip");
define("HIDE_ADMIN_BUTTON", "admin Ukryj przycisk");
define("DENY_INDEX_PAGE_SUBMISSIONS", "Odmowa front linki do strony");
define("DISPLAY_UNACCEPTED_LINKS", "Ekran pok linki");
define("OPEN_LINKS_IN_NEW_WINDOWS", "Otwórz linki w nowych oknach");
define("SEARCH_RESULTS_PER_PAGE", "Wyniki wyszukiwania na stronie");

//na tematy
define("TEMPLATE_SUBMIT", "Use this theme");
define("CHOSE_TEMPLATE", "Tematy Wybierz");
define("NO_TEMPLATES_WERE_FOUND", "Nie znaleziono tematów");
define("DIRECTORY_LABEL", "Drogowskaz");
define("THUMBNAIL_PREVIEW", "Podglad ");
//themes edycji
define("FILE_LABEL", "Plik");
define("PERMISSION_LABEL", "Zgoda");
define("NOT_WRITEABLE", "nie jest zapisywalny");
define("IS_WRITEABLE", "zapisywalny");
define("EDIT_TEMPLATE", "Edytuj szablon");

//dla admin_words.php
define("DOUBLE_ADD", "<br> ten tekst jest juz ocenzurowane");
define("NO_INPUT_WORD", "<br> musisz wstawic tekst do cenzora");
define("NO_ID_FOUND", "<br> ID nie zostal odnaleziony w bazie danych");
define("MORE_THAN_ONE_ID_FOUND", "<br> Powazny blad! wiecej niz jeden identyfikator zostal odnaleziony w bazie danych. zglosic ten blad tutaj: http://sourceforge.net/tracker/?group_id=181014&atid=895496");
define("EDIT_CENSORED_NOT_FOUND", "zaden tekst nie zostal wprowadzony do cenzora");
define("NO_BANNED_WORDS", "Obecnie nie ocenzurowane tekst");
define("update", "Update");
define("remove", "Usun");
define("Akcja", "Akcja");
define("BAN_WORDS", "Dodaj tekst cenzury");
define("NEW_CENSORED_WORD", "Nowe ocenzurowany tekst");
define("CENSORED_WORD", "ocenzurowane tekst");
define("REPLACE_WITH", "Zamien");
define("EDIT_DELETE_BANNED_WORDS", "Edytuj ocenzurowany tekst");

//dla categories.php
define("NO_SUBCATEGORIES_FOUND", "Nie ma podkategorii tej kategorii");

//dla edycji kategorii i link
define("EDIT_CATEGORY_LABEL", "Edytuj kategorie");
define("EDIT_LINK_LABEL", "Edytuj link");

//do stopki
define("POWERED_BY", "Powered by");

//ostrzezen
define("WRONG_CAPTCHA", "Wrong captcha inserted");
define("NO_TITLE_AT_ALL", "Tytul brakuje");
define("TITLE_TOO_LONG", "dodaje sie tytul jest dluzszy niz jest to dozwolone");
define("TITLE_TOO_SHORT", "dodaje sie tytul ten jest krótszy niz dozwolony");
define("ILLEGAL_WORDS_WITHIN_TITLE", "dodaje sie tytul zawiera ocenzurowany tekst");
define("TITLE_ALREADY_THERE", "istnieje juz podobny tytul");
define("NO_DESCRIPTION_AT_ALL", "opis brakuje");
define("DESCRIPTION_TOO_LONG", "dodaje sie opis jest dluzszy niz jest to dozwolone");
define("DESCRIPTION_TOO_SHORT", "dodaje sie opis jest krótszy niz dozwolony");
define("ILLEGAL_WORDS_WITHIN_DESCRIPTION", "dodaje sie opis zawiera ocenzurowany tekst");
define("NAME_TOO_LONG", "dodaje nazwa jest dluzsza niz dozwolone");
define("NAME_TOO_SHORT", "dodaje nazwa jest krótszy niz dozwolony");
define("ILLEGAL_WORDS_WITHIN_NAME", "dodaje nazwa zawiera ocenzurowany tekst");
define("EMAIL_TOO_LONG", "dodaje e-mail jest dluzszy niz jest to dozwolone");
define("EMAIL_TOO_SHORT", "dodaje e-mail jest krótszy niz dozwolony");
define("ILLEGAL_WORDS_WITHIN_EMAIL", "dodaje e-mail zawiera ocenzurowany tekst");
define("URL_TOO_LONG", "Wprowadzony adres URL jest dluzszy niz jest to dozwolone");
define("URL_TOO_SHORT", "Wprowadzony adres URL jest krótszy niz dozwolony");
define("ILLEGAL_WORDS_WITHIN_URL", "Wprowadzony adres URL zawiera ocenzurowany tekst");
define("URL_ALLREADY_THERE", "nie ma juz podobne url");
define("NO_RECIPROCAL_URL_AT_ALL", "wzajemne url brakuje");
define("RECIPROCAL_URL_TOO_LONG", "dodaje wzajemnych URL jest dluzszy niz jest to dozwolone");
define("RECIPROCAL_URL_TOO_SHORT", "dodaje wzajemnych url jest krótszy niz dozwolony");
define("ILLEGAL_WORDS_WITHIN_RECIPROCAL_URL", "dodaje wzajemnych zawiera ocenzurowany tekst");
define("RECIPROCAL_NOT_ALLOWED_BUT_CHOSED", "nie wzajemne Funkcja dostepna jest opcja");
define("NOT_CORRECT_IP_ADDRESS", "dodaje adres IP jest nieprawidlowy");
define("NO_USERNAME_AT_ALL", "username is missing");
define("TOO_LONG_USERNAME", "dodaje uzytkownika jest dluzszy niz jest to dozwolone");
define("TOO_SHORT_USERNAME", "dodaje uzytkownika jest krótszy niz dozwolony");
define("NO_PASSWORD_AT_ALL", "password is missing");
define("TOO_LONG_PASSWORD", "dodaje sie haslo jest dluzszy niz jest to dozwolone");
define("TOO_SHORT_PASSWORD", "dodaje sie haslo jest krótszy niz dozwolony");
define("NO_MINIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "minimalne opis linku brakuje");
define("MINIMUM_ALLOWED_LINK_DESCRIPTION", "dodaje sie minimalna opis linku nie numeryczne");
define("NO_MAXIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "maksymalne opis linku brakuje");
define("MAXIMUM_ALLOWED_LINK_DESCRIPTION", "dodaje sie opis linku maksymalna nie zostala numeryczne");
define("NO_MINIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "minimalne opis kategorii brakuje");
define("MIN_CAT_DESC_NOT_NUMERIC", "dodaje sie minimalna opis kategorii nie numeryczne");
define("NO_MAXIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "maksymalne opis kategorii brakuje");
define("MAX_CAT_DESC_NOT_NUMERIC", "dodaje sie opis kategorii maksymalna nie zostala numeryczne");
define("MINIMUM_LINK_DESCRIPTION_BIGGER_THAN_MAXIMUM", "dodaje sie opis minimalny zwiazek musi byc mniejszy niz maksymalny opis linku");
define("MINIMUM_CAT_DESCRIPTION_BIGGER_THAN_MAXIMUM", "dodaje sie minimalna opis kategorii musi byc mniejszy niz maksymalny opis kategorii");
define("LINKS_PER_PAGE_NOT_NUMERIC", "dodaje linki na stronie nie bylo numeryczne");
define("NO_LINKS_PER_PAGE_AT_ALL", "liczba linków na stronie brakuje");
define("NO_COLUMN_NUMBER_AT_ALL", "liczba kolumn jest brak");
define("COLUMN_NUMBER_IS_NOT_A_NUMBER", "dodaje wartosc liczby kolumn nie numeryczne");
define("NO_SORT_OPTION_AT_ALL", "opcji sortowania brakuje");
define("SORT_OPTION_TOO_LONG", "dodaje opcje sortowania jest dluzszy niz jest to dozwolone");
define("SORT_OPTION_TOO_SHORT", "dodaje opcje sortowania jest krótszy niz dozwolony");
define("NO_LANGUAGE_AT_ALL", "wybór jezyka brakuje");
define("LANGUAGE_TOO_LONG", "wybrany jezyk jest dluzszy niz dozwolone"); //<------|<
define("LANGUAGE_TOO_SHORT", "wybrany jezyk jest krótszy niz dozwolony"); //<---|^- jest przydatne?
define("PASSWORD_EQUALS_USERNAME", "Haslo musi sie róznic od uzytkownika");
define("NO_LINKTYPE_AT_ALL", "opcja typu link brakuje");
define("REGULAR_NOT_ALLOWED_BUT_CHOSED", "nie regularne opcja jest dostepna");
define("NO_CATEGORY_SELECTED", "no kategorii zostal wybrany");
define("CATEGORY_ID_NOT_A_NUMBER", "id kategorii nie jest liczba");

define("INVALID_URL_FORMAT", "format adresu URL jest nieprawidlowy");
define("BAD_REQUEST", "Bad request");
define("ZLIB_NOT_ENABLED", "trzeba miec dostep do zlib w celu wykorzystania gzip compression");
define("INDEX_PAGE_NOT_OPEN_FOR_SUBMISSION", "nie na pierwszej stronie jest otwarty na argumenty");
define("SEARCH_OPTION_WARNING", "pole wyników wyszukiwania wymaga liczbowej input");

//dla links.php
define("NO_LINKS_HERE", "nie ma zadnych linków tutaj");
define("SUBMITTED_LABEL", "Wprowadzone");

//dla wyszukiwania
define("NO_MATCHES", "Nie znaleziono");
define("MAKE_A_SEARCH", "Make wyszukiwania");
define("SEARCH_FOR", "Szukaj");
define("SEARCH_IN", "Szukaj w");
define("SORT_BY", "Sortuj");
define("ALL", "Wszystkie");
define("ALPHABETICAL_LABEL", "alfabetycznie");
define("ALPHABETICAL_REVERSED", "alfabetycznie odwrócony");
define("NEWEST_FIRST", "najnowszych");
define("OLDEST_FIRST", "Najstarszy pierwszy");
define("SERCHED_FOR_LABEL", "Szukano");

//dla submit.php
define("SUBMIT_SUCCESS", "link zostal przeslany pomyslnie");
define("SUBMIT_NAME_LABEL", "Name of You / Twoja Firma / organizacja uzytkownika / grupy:"); // Usun te etykiete
define("SUBMIT_A_LINK", "Wyslij link");
define("REGULAR_LINK", "regularne link");
define("RECIPROCAL_LINK", "Reciprocal Link");
define("RECIPROCAL_URL_LABEL", "Reciprocal URL");
define("CLOSED_FOR_SUBMISSIONS", "katalog jest zamknieta dla wniosków");
define("PAYMENT_CANCELLED", "platnosci zostaly anulowane");
define("PROCESSING_PAYMENT", "Przetwarzanie platnosci ...");
define("PROCESSING_PAYMENT_DESCRIPTION", "Prosze czekac, zamówienie jest przetwarzane ...");

//dla suggest.php
define("SUGGEST_A_CATEGORY", "Zaproponuj kategorie");
define("SUBMIT_SUCCESS_CATEGORY", "sugestia z powodzeniem zostaly dokonane");

//dla rozszerzenia
define("EXTENSIONS_LABEL", "Extensions");
define("EDIT_EXTENSIONS", "Extensions Edycja");
define("AVAILABLE_EXTENSIONS_FOR_INSTALL", "Dostepne rozszerzenia");
define("NO_INSTALLED_EXTENSIONS", "Obecnie nie ma zainstalowanych rozszerzen");
define("NO_EXTENSIONS_FOR_INSTALL", "Nie ma rozszerzenie dostepne do instalacji");
define("SIMPLE_LABEL", "Simple");
define("FREE_LABEL", "Free");
//rozszerzenie bledy
define("EXTENSION_ROOT_ERROR", "rozszerzenie glównego elementu brakuje lub jest nieprawidlowy");
define("EXTENSION_ID_ERROR", "rozszerzenie elementu / id jest uszkodzony lub brakuje");
define("EXTENSION_ID_ERROR2", "rozszerzenie elementu / id nie pasuje do nazwy folderu rozszerzenia");
define("EXTENSION_TITLE_ERROR", "rozszerzenie elementu / tytul jest uszkodzony lub brakuje");
define("EXTENSION_VERSION_ERROR", "rozszerzenie elementu / wersja jest uszkodzony lub brakuje");
define("EXTENSION_DESCRIPTION_ERROR", "rozszerzenie elementu / opis jest uszkodzony lub brakuje");
define("EXTENSION_AUTHOR_ERROR", "rozszerzenie element / autor jest uszkodzony lub brakuje");
define("EXTENSION_HOOKS_ERROR", "rozszerzenie elementu / haczyków jest uszkodzony lub brakuje");
define("EXTENSION_HOOKS_HOOK_ERROR", "rozszerzenie elementu / hooks / hak sa znieksztalcone lub niekompletne");
define("EXTENSION_HOOKS_HOOK_ERROR2", "rozszerzenie elementu / hooks / hak brakuje atrybutu id");
define("EDIT_EXTENSION", "Edytuj Extension");
define("HOOKS", "haki");
define("EXTENSION_PERMISSION_WARNING", "trzeba zmienic uprawnienia do pliku: %s do 755, aby go edytowac w trybie online");

define("EXTENSION_ALLREADY_INSTALLED", "Rozszerzenie %s jest juz zainstalowany");
define("EXTENSIONS_DISABLED", "Extensions jest wylaczona. Musisz isc do Admin-> Otions i zmiany rozszerzenia niepelnosprawne pierwszenstwo przed zainstalowanych rozszerzen moze wejsc w zycie.");

//new okresla
define("POSITION_NOT_A_NUMBER", "stanowisko zaproponowal Ci nie wazne numerycznej numer jest");
define("HARD_BAN", "text Ban");
define("SEARCH_TYPE", "Typ wyszukiwania");
define("VERSION_LABEL", "Version");
define("AUTHOR_LABEL", "Author");
define("INSTALL_LABEL", "Install");
define("UNINSTALL_LABEL", "Odinstaluj");
define("ID_LABEL", "ID");
define("DETAILS_LABEL", "Details");
define("SUBKATEGORIE", "podkategorie");
define("SPONSORED_LINKS", "Links sponsorowany");
define("PAID_LINKS", "platne linki");
define("SPONSOR_LINK", "Link sponsorowany");
define("PAID_LINK", "Paid Link");
define("LOG_OUT", "Wyloguj");
define("PRICE_LABEL", "Cena");
define("CURRENCY_LABEL", "Waluta");
define("NOT_PAID", "platnosc w toku");
define("IS_PAYMENT_PENDING", "platnosc otrzymana");
define("INVALID_EMAIL", "dodaje adres e-mail jest nieprawidlowy");
define("WRONG_PASSWORD_CONFIRMATION", "dodaje sie haslo nie pasuje do potwierdzenia");
define("CHANGE_PASSWORD_LABEL", "Zmien haslo");
define("ENTER_NEW_PASSWORD", "Enter new password");
define("RETYPE_PASSWORD", "Powtórz haslo");
define("SAVE_PASSWORD_BUTTON", "Save Password");
define("PASSWORD_HAS_BEEN_CHANGED", "- Twoje haslo zostalo zmienione");
define("ACCOUNT_LABEL", "Konto");
define("SHOW_PHP_INFO", "Pokaz informacje");
define("SEF_REWRITE_LABEL", "Rewrite Layer");
define("INDEX_PAGE", "Strona Glówna");

//generowanie strony
define("PAGE_GENERATED_IN", "Strona wygenerowana w");
define("SECONDS", "Seconds");
?>