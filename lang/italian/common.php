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
define("TITLE_LABEL", "Title");
define("CATEGORY_LABEL", "Categoria");
define("CAPTCHA_LABEL", "Captcha");
define("URL_LABEL", "URL");
define("LINK_DESCRIPTION_LABEL", "Descrizione Link");
define("CATEGORY_DESCRIPTION_LABEL", "Descrizione Categoria");
define("NAME_LABEL", "Nome");
define("EMAIL_LABEL", "Email");
define("EDIT_LABEL", "Modifica");
define("ACCEPT_LABEL", "Accept");
define("UNACCEPT_LABEL", "Unaccept");
define("MOVE_LABEL", "Move");
define("DELETE_LABEL", "Cancella");
define("NAVIGATION_LABEL", "Navigazione");
define("HOME_LABEL", "Home");
define("SUBMIT_LINK_LABEL", "Invia un link");
define("SUGGEST_CATEGORY_LABEL", "Suggerisci una categoria");
define("SEARCH_LABEL", "Ricerca");

//Per include / functions.php
define("RECIPROCAL_NOT_FROM_SAME_DOMAIN", "l'URL di reciprocità deve provenire dallo stesso dominio come il link url");
define("NO_RECIPROCAL_FOUND", "no link reciproco è stato trovato a url reciproca:");
define("URL_COULD_NOT_BE_LOADED", "Impossibile caricare l'URL di reciprocità:");

//per la admin_menu
define("ACCEPT_CATEGORIES_LABEL", "Accept Categorie");
define("ACCEPT_LINKS_TITLE", "Accetta link");
define("BROWSE", "Sfoglia");
define("LINKS_LABEL", "Links");
define("CATEGORIES_LABEL", "Categorie");
define("INFORMATION_LABEL", "Informazioni");
define("OPTION_LABEL", "Opzioni");
define("CENSORING", "Censura");
define("IP_BANNING", "IP Banning");
define("TEMPLATES_TITLE", "Temi");
define("ADMIN_MENU", "menu Admin");
define("DIRECTORY_MANAGEMENT", "Directory Management");
define("GENERAL_LABEL", "Generale");
define("PLUGINS_LABEL", "Plugins");

//IP per il divieto
define("CENSORED_WORD_IS_NOTHING", "non hai fatto inserire qualcosa di censurare");
define("YOU_MUST_SELECT_AN_IP", "è necessario selezionare un indirizzo IP");
define("IP_ALLREADY_BANNED", "l'ip selezionato è già vietato");
define("IP_BANNED_QOUTE", "Tu sei vietato!");
define("NEW_IP_BAN", "New divieto IP");
define("ADD_A_BAN", "Aggiungi un divieto");
define("IP_NUMBER", "numero IP");
define("MANAGE_BANS", "Gestione divieti");
define("UNBAN_IP", "Unban IP");
define("SELECT_IP_TO_UNBAN", "Selezionare l'IP dell'utente che si desidera unban");
define("UNBAN", "sblocco");
define("INFO", "info");
define("NO_IP_BANS", "No IP sono vietati ancora");

//per i plugin
define("PLUGIN_DOES_NOT_EXIST", "il plugin non esiste");
define("PLUGIN_NOT_SELECTED", "no plugin è stato selezionato");

//per l'aggiunta
define("ADD_LABEL", "Aggiungi");
define("ADD_LINK_LABEL", "Add Link");
define("ADD_CATEGORY_LABEL", "Aggiungi categoria");

//per l'impaginazione
define("NEXT_PAGE", "Next Page");
define("PREVIOUS_PAGE", "Pagina precedente");

//per admin_categories.php
//define("PROPOSED_CATEGORY_NAME", "il nome della categoria Proposta");
//define("PROPOSED_TITLE", "titolo proposto, modificare come volete");
//define("PROPOSED_CATEGORY_DESCRIPTION", "Descrizione Categoria");
//define("PROPOSED_DESCRIPTION_LABEL", "La descrizione. Modifica come vuoi");
define("ACCEPT", "Accept");
define("MODIFIE_CATEGORIES", "Modifica categorie");
define("SELECT_CATEGORY", "Selezionare il nome della categoria che si desidera modificare");
define("DELETE_CATEGORY", "Eliminazione di una categoria");
define("DELETE_CATEGORY_LABEL", "Categoria da cancellare");
define("DELETE_CATEGORY_SELECT_LABEL", "Selezionare il nome della categoria che si desidera eliminare");
define("DELETE_BUTTON", "Cancella");
define("NO_CATEGORIES_HERE", "Non ci sono categorie di qui");

//per admin_information.php
define("WELCOME_LABEL", "Welcome");
define("WELCOME_MESSAGE", "Benvenuto al pannello di controllo amministrazione OpenLD. Ecco un elenco di alcune cose che puoi fare:");
define("MODERATE_CATEGORIES_AND_LINKS", "categorie moderati e dei collegamenti");
define("SET_OPTIONS_AND_PREFERENCES", "impostare le opzioni e preferenze");
define("CONTROL_PERMISSIONS", "le autorizzazioni di controllo");
define("BAN_IPS", "IP divieto");
define("LIMIT_SPAM", "spam limite censurando testo");
define("SOFTWARE_INFO", "informazioni Software");
define("OPENLD_VERSION_LABEL", "versione OpenLD");
define("SERVER_INFORMATION", "Informazioni Server");
define("SERVER_NAME_LABEL", "Nome:");
define("SERVER_SOFTWARE_LABEL", "Software");
define("SERVER_PROTOCOLL_LABEL", "Protocollo:");
define("SCRIPT_ENVIRONMENT_LABEL", "Script Ambiente");
define("OS_LABEL", "Sistema operativo:");
define("PHP_LABEL", "PHP:");
define("DATABASE_LABEL", "Database");
define("ROWS_LABEL", "Righe:");
define("SIZE_LABEL", "Dimensione:");
define("ACCELERATOR_LABEL", "Accelerator:");

//per admin_accept_links.php
define("APPROVED_LINKS_LABEL", "link approvato");

//per admin_login.php
define("INCORRECT_PASSWORD_ERROR", "nome utente corretto, ma con una password errata");
define("INCORRECT_USERNAME_ERROR", "password corretta, ma con nome utente sbagliato");
define("USERNAME_AND_PASSWORD_INCORRECT", "il tuo nome utente e la password sono errati");
define("LOGIN_TITLE", "Accesso al pannello di amministrazione");
define("USERNAME_LABEL", "Username");
define("PASSWORD_LABEL", "Password");
define("FORGOT_PASSWORD", "Ho dimenticato la password");
define("SEND_NEW_PASSWORD", "Invia nuova password");
define("PASSWORD_SENT", "le tue informazioni account sono stati inviati al tuo indirizzo email");
define("FORGOT_MAIL", "Clicca sul link qui sotto per ottenere una nuova password");
define("MAIL_NOT_FOUND_IN_DB", "l'indirizzo email inserito non è stato trovato nel database");
define("NEW_PASSWORD", "New Password");

//per spostare ..
define("MOVE_LINK_LABEL", "Move Link");
define("MOVE_CATEGORY_LABEL", "Move Categoria");
define("MOVE_TO", "Vai a");

//testo in admin_options.php
define("ADMIN_LABEL", "Admin");
define("ADMIN_USERNAME_LABEL", "username Admin");
define("ADMIN_PASSWORD_LABEL", "password Admin");
define("ADMIN_EMAIL_LABEL", "Amministrazione e-mail");
define("CENTRAL_FEATURES", "caratteristiche centrali");
define("DESCRIPTION_LABEL", "Descrizione");
define("DOMAIN_LABEL", "URL");
define("LANGUAGE_LABEL", "Lingua");
define("LINK_TYPES_LABEL", "tipi Link");
define("RECIPROCAL_LINKS_LABEL", "collegamenti reciproci");
define("REGULAR_LINKS_LABEL", "collegamenti regolari");
define("DISPLAY_LABEL", "Display");
define("LINKS_SORT_BY_LABEL", "Links ordinati per");
define("CATEGORIES_SORT_BY_LABEL", "ordinati per categorie");
define("TITLE_REVERSED", "Titolo invertita");
define("DESCRIPTION_REVERSED", "Descrizione invertita");
define("DATE_LABEL", "Data");
define("DATE_REVERSED", "Data invertita");
define("RECIPROCAL_URL", "Reciprocal URL");
define("RECIPROCAL_URL_DESC", "Reciprocal URL invertita");
define("URL", "URL");
define("URL_REVERSED", "URL invertita");
define("CATEGORY_COLUMNS_DESCRIPTION", "colonne Categoria");
define("LINKS_PER_PAGE", "Links per pagina");
define("INPUT_CONTROL", "controllo di input");
define("MAXIMUM_LINK_DESCRIPTION", "Descrizione massimo");
define("MINIMUM_LINK_DESCRIPTION", "Descrizione minimi");
define("MAXIMUM_CATEGORY_DESCRIPTION", "Descrizione massimo");
define("MINIMUM_CATEGORY_DESCRIPTION", "Descrizione minimi");
define("SAVE_BUTTON", "Salva modifiche");
define("DISABLE_EXTENSIONS_LABEL", "Disattiva estensioni");
define("ENABLE_GZIP_LABEL", "Attiva compressione gzip");
define("HIDE_ADMIN_BUTTON", "pulsante admin Hide");
define("DENY_INDEX_PAGE_SUBMISSIONS", "pagina dei link Deny anteriore");
define("DISPLAY_UNACCEPTED_LINKS", "Visualizza i link non accettata");
define("OPEN_LINKS_IN_NEW_WINDOWS", "Apri i collegamenti in nuove finestre");
define("SEARCH_RESULTS_PER_PAGE", "Risultati della ricerca per pagina");

//per i temi
define("TEMPLATE_SUBMIT", "Use this theme");
define("CHOSE_TEMPLATE", "Selezionare temi grafici");
define("NO_TEMPLATES_WERE_FOUND", "No temi trovato");
define("DIRECTORY_LABEL", "Directory");
define("THUMBNAIL_PREVIEW", "Anteprima");
//themes editing
define("FILE_LABEL", "File");
define("PERMISSION_LABEL", "Permission");
define("NOT_WRITEABLE", "non scrivibile");
define("IS_WRITEABLE", "scrivibile");
define("EDIT_TEMPLATE", "Modifica modello");

//per admin_words.php
define("DOUBLE_ADD", "<br> questo testo è già censurato");
define("NO_INPUT_WORD", "<br> è necessario inserire il testo di censurare");
define("NO_ID_FOUND", "<br> l'ID non è stato trovato nel database");
define("MORE_THAN_ONE_ID_FOUND", "<br> errore grave! più ID è stato trovato nel database. Segnalare un errore qui: http://sourceforge.net/tracker/?group_id=181014&atid=895496");
define("EDIT_CENSORED_NOT_FOUND", "nessun testo è stato inserito per censurare");
define("NO_BANNED_WORDS", "Non esiste attualmente alcuna testo censurato");
define("UPDATE", "Update");
define("REMOVE", "Rimuovi");
define("ACTION", "azione");
define("BAN_WORDS", "Aggiungi testo per censurare");
define("NEW_CENSORED_WORD", "New censurato testo");
define("CENSORED_WORD", "testo censurato");
define("REPLACE_WITH", "Sostituisci con");
define("EDIT_DELETE_BANNED_WORDS", "Modifica del testo censurato");

//per categories.php
define("NO_SUBCATEGORIES_FOUND", "Non ci sono sottocategorie di questa categoria");

//per modificare la categoria e il link
define("EDIT_CATEGORY_LABEL", "Edit Category");
define("EDIT_LINK_LABEL", "Modifica collegamento");

//per il piè di pagina
define("POWERED_BY", "Powered by");

//per gli avvisi
define("WRONG_CAPTCHA", "Wrong captcha inserted");
define("NO_TITLE_AT_ALL", "titolo mancante");
define("TITLE_TOO_LONG", "il titolo inserito è più lungo di quanto consentito");
define("TITLE_TOO_SHORT", "il titolo inserito è più breve di quanto consentito");
define("ILLEGAL_WORDS_WITHIN_TITLE", "il titolo inserito include testo censurato");
define("TITLE_ALREADY_THERE", "vi è già un titolo simile");
define("NO_DESCRIPTION_AT_ALL", "descrizione mancante");
define("DESCRIPTION_TOO_LONG", "la descrizione inserito è più lungo di quanto consentito");
define("DESCRIPTION_TOO_SHORT", "la descrizione inserita è più breve di quanto consentito");
define("ILLEGAL_WORDS_WITHIN_DESCRIPTION", "la descrizione inserita include testo censurato");
define("NAME_TOO_LONG", "il nome inserito è più lungo di quanto consentito");
define("NAME_TOO_SHORT", "il nome inserito è più breve di quanto consentito");
define("ILLEGAL_WORDS_WITHIN_NAME", "il nome inserito è incluso il testo censurato");
define("EMAIL_TOO_LONG", "l'e-mail inserito è più lungo di quanto consentito");
define("EMAIL_TOO_SHORT", "l'e-mail inserito è più breve di quanto consentito");
define("ILLEGAL_WORDS_WITHIN_EMAIL", "l'e-mail inserita include testo censurato");
define("URL_TOO_LONG", "l'URL inserito è più lungo di quanto consentito");
define("URL_TOO_SHORT", "l'URL inserito è più breve di quanto consentito");
define("ILLEGAL_WORDS_WITHIN_URL", "l'URL inserito è incluso il testo censurato");
define("URL_ALLREADY_THERE", "vi è già un URL simile");
define("NO_RECIPROCAL_URL_AT_ALL", "url reciproco è mancante");
define("RECIPROCAL_URL_TOO_LONG", "l'url inserito reciproca è più lungo di quanto consentito");
define("RECIPROCAL_URL_TOO_SHORT", "l'url inserito reciproca è più breve di quanto consentito");
define("ILLEGAL_WORDS_WITHIN_RECIPROCAL_URL", "il testo inserito reciproca comprende censurato");
define("RECIPROCAL_NOT_ALLOWED_BUT_CHOSED", "non l'opzione reciproca è disponibili");
define("NOT_CORRECT_IP_ADDRESS", "l'indirizzo IP inserito non è corretto");
define("NO_USERNAME_AT_ALL", "il nome utente è mancante");
define("TOO_LONG_USERNAME", "il nome utente inserito è più lungo di quanto consentito");
define("TOO_SHORT_USERNAME", "il nome utente inserito è più breve di quanto consentito");
define("NO_PASSWORD_AT_ALL", "la password è mancante");
define("TOO_LONG_PASSWORD", "la password inserita è più consentito");
define("TOO_SHORT_PASSWORD", "la password inserita è più breve di quanto consentito");
define("NO_MINIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "description link minimo è mancante");
define("MINIMUM_ALLOWED_LINK_DESCRIPTION", "la descrizione inserita link minima non è stata numerico");
define("NO_MAXIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "description link massima è mancante");
define("MAXIMUM_ALLOWED_LINK_DESCRIPTION", "la descrizione inserita link massima non è stata numerico");
define("NO_MINIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "descrizione minimo della categoria è mancante");
define("MIN_CAT_DESC_NOT_NUMERIC", "la descrizione inserita minimo della categoria non è numerica");
define("NO_MAXIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "descrizione della categoria massima è mancante");
define("MAX_CAT_DESC_NOT_NUMERIC", "la descrizione inserito massima categoria non è numerica");
define("MINIMUM_LINK_DESCRIPTION_BIGGER_THAN_MAXIMUM", "la descrizione inserita link minimo deve essere inferiore al link massimo descrizione");
define("MINIMUM_CAT_DESCRIPTION_BIGGER_THAN_MAXIMUM", "la descrizione inserita minimo della categoria deve essere inferiore alla descrizione massima categoria");
define("LINKS_PER_PAGE_NOT_NUMERIC", "i link inseriti per pagina non è stata numerico");
define("NO_LINKS_PER_PAGE_AT_ALL", "numero di link per pagina mancante");
define("NO_COLUMN_NUMBER_AT_ALL", "il numero di colonne è mancante");
define("COLUMN_NUMBER_IS_NOT_A_NUMBER", "il valore inserito per il numero di colonne non è numerico");
define("NO_SORT_OPTION_AT_ALL", "un'opzione di ordinamento mancante");
define("SORT_OPTION_TOO_LONG", "l'opzione inserita specie è più lungo di quanto consentito");
define("SORT_OPTION_TOO_SHORT", "l'opzione inserita genere è più breve di quanto consentito");
define("NO_LANGUAGE_AT_ALL", "opzione della lingua è mancante");
define("LANGUAGE_TOO_LONG", "la lingua selezionata è più lungo di quanto consentito"); //<------|<
define("LANGUAGE_TOO_SHORT", "la lingua selezionata è più breve di quanto consentito"); //<---|^- è utile?
define("PASSWORD_EQUALS_USERNAME", "password deve essere diversa dal nome utente");
define("NO_LINKTYPE_AT_ALL", "l'opzione tipo di collegamento mancante");
define("REGULAR_NOT_ALLOWED_BUT_CHOSED", "non l'opzione regolare è disponibile");
define("NO_CATEGORY_SELECTED", "nessuna categoria è stato selezionato");
define("CATEGORY_ID_NOT_A_NUMBER", "l'ID di categoria non è un numero");
define("CATEGORY_ID_NOT_IN_DB", "l'ID categoria non esiste");
define("INVALID_URL_FORMAT", "il formato di URL non è valido");
define("BAD_REQUEST", "Bad request");
define("ZLIB_NOT_ENABLED", "si deve avere accesso a zlib, al fine di utilizzare la compressione gzip");
define("INDEX_PAGE_NOT_OPEN_FOR_SUBMISSION", "non la prima pagina è aperta per la presentazione");
define("SEARCH_OPTION_WARNING", "campo i risultati della ricerca richiede l'input numerico");

//per links.php
define("NO_LINKS_HERE", "Non ci sono link qui");
define("SUBMITTED_LABEL", "Inviato:");

//per la ricerca
define("NO_MATCHES", "Non trovato");
define("MAKE_A_SEARCH", "Fai una ricerca");
define("SEARCH_FOR", "Cerca");
define("SEARCH_IN", "Ricerca");
define("SORT_BY", "Ordina per");
define("TUTTI", "Tutti");
define("ALPHABETICAL_LABEL", "Alphabetical");
define("ALPHABETICAL_REVERSED", "in ordine alfabetico invertita");
define("NEWEST_FIRST", "Nuovi Prima");
define("OLDEST_FIRST", "prima i più vecchi");
define("SERCHED_FOR_LABEL", "Ricerca di");

//per submit.php
define("SUBMIT_SUCCESS", "Il collegamento è stata inviata correttamente");
define("SUBMIT_NAME_LABEL", "nome del tuo / la tua Azienda / Your Organization / del tuo gruppo:"); //rimuovere questa etichetta
define("SUBMIT_A_LINK", "Invia un link");
define("REGULAR_LINK", "Link Regular");
define("RECIPROCAL_LINK", "Link reciproco");
define("RECIPROCAL_URL_LABEL", "Reciprocal URL");
define("CLOSED_FOR_SUBMISSIONS", "L'elenco è attualmente chiuso per la presentazione");
define("PAYMENT_CANCELLED", "Il pagamento è stato annullato");
define("PROCESSING_PAYMENT", "Payment Processing ...");
define("PROCESSING_PAYMENT_DESCRIPTION", "Please wait, l'ordine è in fase di elaborazione ...");

//per suggest.php
define("SUGGEST_A_CATEGORY", "Suggerisci una categoria");
define("SUBMIT_SUCCESS_CATEGORY", "La proposta è stata presentata con successo");

//per le estensioni
define("EXTENSIONS_LABEL", "Extensions");
define("EDIT_EXTENSIONS", "Extensions Modifica");
define("AVAILABLE_EXTENSIONS_FOR_INSTALL", "estensioni");
define("NO_INSTALLED_EXTENSIONS", "Non ci sono attualmente installate le estensioni");
define("NO_EXTENSIONS_FOR_INSTALL", "Non ci sono un'estensione disponibile per l'installazione");
define("SIMPLE_LABEL", "Simple");
define("FREE_LABEL", "Free");
//Errori di estensione
define("EXTENSION_ROOT_ERROR", "l'estensione elemento principale è errato o mancante");
define("EXTENSION_ID_ERROR", "l'estensione elemento / id è errato o mancante");
define("EXTENSION_ID_ERROR2", "l'estensione elemento / id non corrisponde al nome della cartella estensione");
define("EXTENSION_TITLE_ERROR", "l'estensione elemento / titolo è errato o mancante");
define("EXTENSION_VERSION_ERROR", "l'estensione elemento / versione è errato o mancante");
define("EXTENSION_DESCRIPTION_ERROR", "l'estensione elemento / descrizione è errato o mancante");
define("EXTENSION_AUTHOR_ERROR", "l'estensione elemento / autore è errato o mancante");
define("EXTENSION_HOOKS_ERROR", "l'estensione elemento / ganci è errato o mancante");
define("EXTENSION_HOOKS_HOOK_ERROR", "l'estensione elemento / ganci / hook sono malformati o mancanti");
define("EXTENSION_HOOKS_HOOK_ERROR2", "l'estensione elemento / ganci / hook manca un attributo 'id'");
define("EDIT_EXTENSION", "Modifica Extension");
define("amo", "amo");
define("EXTENSION_PERMISSION_WARNING", "è necessario modificare le autorizzazioni nel file: %s a 755, al fine di modificarlo on-line");
define("EXTENSION_FILE_NOT_FOUND", "%s non è stato trovato");
define("EXTENSION_ALLREADY_INSTALLED", "l'estensione %s è già installato");
define("EXTENSIONS_DISABLED", "Extensions è disattivato. Devi andare a Admin-> Otions e cambiare le estensioni di preferenza per disabili, prima estensioni installate possa avere effetto.");

//new definisce
define("POSITION_NOT_A_NUMBER", "la posizione in cui si propone non è un numero valido numerico");
define("HARD_BAN", "text Ban");
define("SEARCH_TYPE", "tipo di ricerca");
define("VERSION_LABEL", "Version");
define("AUTHOR_LABEL", "Autore");
define("INSTALL_LABEL", "Installa");
define("UNINSTALL_LABEL", "Uninstall");
define("ID_LABEL", "ID");
define("DETAILS_LABEL", "Dettagli");
define("SUB_CATEGORIES", "sottocategorie");
define("SPONSORED_LINKS", "Collegamenti sponsorizzati");
define("PAID_LINKS", "Paid Links");
define("SPONSOR_LINK", "Link sponsorizzati");
define("PAID_LINK", "Link a pagamento");
define("LOG_OUT", "Log Out");
define("PRICE_LABEL", "Prezzo");
define("CURRENCY_LABEL", "Cambio");
define("NOT_PAID", "pagamenti in attesa");
define("IS_PAYMENT_PENDING", "pagamento ricevuto");
define("INVALID_EMAIL", "l'indirizzo email inserito non era valido");
define("WRONG_PASSWORD_CONFIRMATION", "la password inserita non corrisponde la conferma");
define("CHANGE_PASSWORD_LABEL", "Change Password");
define("ENTER_NEW_PASSWORD", "Immettere una nuova password");
define("RETYPE_PASSWORD", "Conferma Password");
define("SAVE_PASSWORD_BUTTON", "Save Password");
define("PASSWORD_HAS_BEEN_CHANGED", "- La password è stata modificata");
define("ACCOUNT_LABEL", "Account");
define("SHOW_PHP_INFO", "info Show");
define("SEF_REWRITE_LABEL", "riscrittura Layer");
define("INDEX_PAGE", "pagina indice");

//generazione della pagina
define("PAGE_GENERATED_IN", "Page generated in");
define("SECONDS", "secondi");