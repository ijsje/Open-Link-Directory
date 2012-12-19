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

//common strings
define("TITLE_LABEL", "Titre");
define("CATEGORY_LABEL", "Category");
define("CAPTCHA_LABEL", "Captcha");
define("URL_LABEL", "URL");
define("LINK_DESCRIPTION_LABEL", "Description du lien");
define("CATEGORY_DESCRIPTION_LABEL", "Description de la cat�gorie");
define("NAME_LABEL", "Nom");
define("EMAIL_LABEL", "Email");
define("EDIT_LABEL", "Edit");
define("ACCEPT_LABEL", "Accepter");
define("UNACCEPT_LABEL", "Unaccept");
define("MOVE_LABEL", "Move");
define("DELETE_LABEL", "Delete");
define("NAVIGATION_LABEL", "Navigation");
define("HOME_LABEL", "Accueil");
define("SUBMIT_LINK_LABEL", "Proposer un site");
define("SUGGEST_CATEGORY_LABEL", "Sugg�rer une cat�gorie");
define("SEARCH_LABEL", "Recherche");

//For include/functions.php
define("RECIPROCAL_NOT_FROM_SAME_DOMAIN", "L'url de r�ciprocit� doit provenir du m�me domaine");
define("NO_RECIPROCAL_FOUND", "Pas de lien de r�ciprocit� a �t� trouv� � l'URL r�ciproque:");
define("URL_COULD_NOT_BE_LOADED", "Impossible de charger l'URL r�ciproque:");

//for the admin_menu
define("ACCEPT_CATEGORIES_LABEL", "Accepter Categories");
define("ACCEPT_LINKS_TITLE", "Accepter les liens");
define("BROWSE", "Parcourir");
define("LINKS_LABEL", "Links");
define("CATEGORIES_LABEL", "Categories");
define("INFORMATION_LABEL", "Information");
define("OPTION_LABEL", "Options");
define("CENSORING", "censure");
define("IP_BANNING", "IP Banning");
define("TEMPLATES_TITLE", "Th�mes");
define("ADMIN_MENU", "menu Admin");
define("DIRECTORY_MANAGEMENT", "gestion d'annuaire");
define("GENERAL_LABEL", "General");
define("PLUGINS_LABEL", "Plugins");

//for ip banning
define("CENSORED_WORD_IS_NOTHING", "Vous n'avez pas ins�rer de caract�res ou un mot de censure");
define("YOU_MUST_SELECT_AN_IP", "Vous devez s�lectionner une adresse IP");
define("IP_ALLREADY_BANNED", "La propri�t� intellectuelle vous avez choisi d'interdiction est d�j� interdit");
define("IP_BANNED_QOUTE", "D�sol�, tu es banni!");
define("NEW_IP_BAN", "Une nouvelle interdiction IP");
define("ADD_A_BAN", "Ajouter une interdiction");
define("IP_NUMBER", "num�ro IP");
define("MANAGE_BANS", "les interdictions G�rer");
define("UNBAN_IP", "Unban IP");
define("SELECT_IP_TO_UNBAN", "S�lectionnez l'IP de l'utilisateur que vous souhaitez d�bannir.");
define("UNBAN", "Unban");
define("INFO", "Info");
define("NO_IP_BANS", "Non IPs sont interdits pour le moment");

//for plugins
define("PLUGIN_DOES_NOT_EXIST", "Le plugin n'existe pas");
define("PLUGIN_NOT_SELECTED", "No plugin a �t� choisi");

//for adding
define("ADD_LABEL", "Add");
define("ADD_LINK_LABEL", "Ajouter Lien");
define("ADD_CATEGORY_LABEL", "Ajouter une cat�gorie");

//for pagination
define("NEXT_PAGE", "Page suivante");
define("PREVIOUS_PAGE", "Page pr�c�dente");

//for admin_categories.php
define("PROPOSED_CATEGORY_NAME", "Nom de cat�gorie propos�e");
define("PROPOSED_TITLE", "title propos�es, modifiez-le si vous le souhaitez.");
define("PROPOSED_CATEGORY_DESCRIPTION", "Description de la cat�gorie");
define("PROPOSED_DESCRIPTION_LABEL", "la description. �diter comme vous le souhaitez.");
define("ACCEPT", "Accepter");
define("MODIFIE_CATEGORIES", "Modifier les cat�gories");
define("SELECT_CATEGORY", "S�lectionnez le nom de la cat�gorie que vous souhaitez modifier.");
define("DELETE_CATEGORY", "Supprimer une cat�gorie");
define("DELETE_CATEGORY_LABEL", "Cat�gorie d'�tre supprim�");
define("DELETE_CATEGORY_SELECT_LABEL", "S�lectionnez le nom de la cat�gorie que vous souhaitez supprimer.");
define("DELETE_BUTTON", "Delete");
define("NO_CATEGORIES_HERE", "Il n'existe pas de cat�gories ici");

//for admin_information.php
define("WELCOME_LABEL", "Bienvenue");
define("WELCOME_MESSAGE", "Bienvenue sur le panneau d'administration contr�le OpenLD. Voici une liste d'un certain nombre de choses que vous pouvez faire:");
define("MODERATE_CATEGORIES_AND_LINKS", "mod�r�e cat�gories et des liens.");
define("SET_OPTIONS_AND_PREFERENCES", "d�finir des options et des pr�f�rences.");
define("CONTROL_PERMISSIONS", "des autorisations de contr�le.");
define("BAN_IPS", "IP interdiction.");
define("LIMIT_SPAM", "spam limite en censurant des mots.");
define("SOFTWARE_INFO", "information logiciel");
define("OPENLD_VERSION_LABEL", "version OpenLD");
define("SERVER_INFORMATION", "Informations serveur");
define("SERVER_NAME_LABEL", "Nom:");
define("SERVER_SOFTWARE_LABEL", "Software:");
define("SERVER_PROTOCOLL_LABEL", "Protocole:");
define("SCRIPT_ENVIRONMENT_LABEL", "Script Environnement");
define("OS_LABEL", "Syst�me d'exploitation:");
define("PHP_LABEL", "PHP:");
define("DATABASE_LABEL", "database");
define("ROWS_LABEL", "Rows:");
define("SIZE_LABEL", "Taille:");
define("ACCELERATOR_LABEL", "Acc�l�rateur:");

//for admin_accept_links.php
define("APPROVED_LINKS_LABEL", "liens Approuv�");

//for admin_login.php
define("INCORRECT_PASSWORD_ERROR", "Votre nom d'utilisateur �tait correcte, mais votre mot de passe �tait erron�.");
define("INCORRECT_USERNAME_ERROR", "Votre mot de passe est correct, mais votre nom d'utilisateur qui n'allait pas.");
define("USERNAME_AND_PASSWORD_INCORRECT", "Le nom d'utilisateur et votre mot de passe �tait erron�.");
define("LOGIN_TITLE", "Se connecter sur le panneau d'administration");
define("USERNAME_LABEL", "Username");
define("PASSWORD_LABEL", "Password");
define("FORGOT_PASSWORD", "Mot de passe");
define("SEND_NEW_PASSWORD", "Envoyer nouveau mot de passe");
define("PASSWORD_SENT", "Vos informations de compte ont �t� envoy�s.");
define("FORGOT_MAIL", "cliquez sur le lien ci-dessous si vous voulez obtenir un nouveau mot de passe.");
define("MAIL_NOT_FOUND_IN_DB", "L'e-mail que vous avez ins�r� ne pouvait �tre trouv�e dans la base de donn�es");
define("NEW_PASSWORD", "New Password");

//for move..
define("MOVE_LINK_LABEL", "D�placer le lien vers");
define("MOVE_CATEGORY_LABEL", "D�placer Category");
define("MOVE_TO", "Move to");

//text in admin_options.php
define("ADMIN_LABEL", "Admin");
define("ADMIN_USERNAME_LABEL", "nom d'utilisateur Admin");
define("ADMIN_PASSWORD_LABEL", "Mot de passe Admin");
define("ADMIN_EMAIL_LABEL", "Admin e-mail");
define("CENTRAL_FEATURES", "caract�ristiques Central");
define("DESCRIPTION_LABEL", "Description");
define("DOMAIN_LABEL", "URL");
define("LANGUAGE_LABEL", "Langue");
define("LINK_TYPES_LABEL", "types Link");
define("RECIPROCAL_LINKS_LABEL", "liens de r�ciprocit�");
define("REGULAR_LINKS_LABEL", "liens r�guliers");
define("DISPLAY_LABEL", "Affichage");
define("LINKS_SORT_BY_LABEL", "liens class�s par");
define("CATEGORIES_SORT_BY_LABEL", "des cat�gories tri�es par");
define("TITLE_REVERSED", "Titre invers�");
define("DESCRIPTION_REVERSED", "Description invers�e");
define("DATE_LABEL", "Date");
define("DATE_REVERSED", "Date invers�e");
define("RECIPROCAL_URL", "Reciprocal URL");
define("RECIPROCAL_URL_DESC", "Reciprocal URL invers�e");
define("URL", "URL");
define("URL_REVERSED", "URL invers�e");
define("CATEGORY_COLUMNS_DESCRIPTION", "colonnes Category");
define("LINKS_PER_PAGE", "liens par page");
define("INPUT_CONTROL", "contr�le de l'entr�e");
define("MAXIMUM_LINK_DESCRIPTION", "description des liens maximum");
define("MINIMUM_LINK_DESCRIPTION", "Links description minimale");
define("MAXIMUM_CATEGORY_DESCRIPTION", "Cats Description maximum");
define("MINIMUM_CATEGORY_DESCRIPTION", "Cats description minimale");
define("SAVE_BUTTON", "Enregistrer les modifications");
define("DISABLE_EXTENSIONS_LABEL", "d�sactiver les extensions");
define("ENABLE_GZIP_LABEL", "Activer la compression gzip");
define("HIDE_ADMIN_BUTTON", "Cacher bouton admin");
define("DENY_INDEX_PAGE_SUBMISSIONS", "liens Refuser la page de couverture");
define("DISPLAY_UNACCEPTED_LINKS", "liens inadmissibles Display");
define("OPEN_LINKS_IN_NEW_WINDOWS", "Ouvrir les liens dans une nouvelle fen�tre");
define("SEARCH_RESULTS_PER_PAGE", "R�sultats de la recherche par page");

//for the template
define("TEMPLATE_SUBMIT", "D�finir comme mod�le");
define("CHOSE_TEMPLATE", "Select templates");
define("NO_TEMPLATES_WERE_FOUND", "Aucun mod�le n'a �t� trouv�e");
define("DIRECTORY_LABEL", "R�pertoire");
define("THUMBNAIL_PREVIEW", "Aper�u");
//editing template
define("FILE_LABEL", "File");
define("PERMISSION_LABEL", "autorisation");
define("NOT_WRITEABLE", "Non inscriptible");
define("IS_WRITEABLE", "Modifiable");
define("EDIT_TEMPLATE", "Edit template");

//for admin_words.php
define("DOUBLE_ADD", "<br> Vous avez d�j� une spamword similaire dans votre db");
define("NO_INPUT_WORD", "<br> Vous devez ins�rer un mot de censure");
define("NO_ID_FOUND", "<br> L'id n'a pas �t� trouv� dans la base de donn�es");
define("MORE_THAN_ONE_ID_FOUND", "<br> grave erreur: Plus d'un ID n'a �t� trouv�e dans la base de donn�es");
define("EDIT_CENSORED_NOT_FOUND", "Vous avez oubli� d'ins�rer un mot de censure");
define("NO_BANNED_WORDS", "Il n'ya pas de mots interdits dans ce r�pertoire");
define("UPDATE", "Update");
define("REMOVE", "Supprimer");
define("ACTION", "Action");
define("BAN_WORDS", "l'interdiction des mots");
define("NEW_CENSORED_WORD", "Nouveau mot censur�");
define("CENSORED_WORD", "mot Censur�");
define("REPLACE_WITH", "Remplacer par");
define("EDIT_DELETE_BANNED_WORDS", "Modifier / Supprimer les mots interdits");

//for categories.php
define("NO_SUBCATEGORIES_FOUND", "Non sous-cat�gories ont �t� trouv�s dans cette cat�gorie.");

//for edit category and link
define("EDIT_CATEGORY_LABEL", "Edit Category");
define("EDIT_LINK_LABEL", "Modifier le lien");

//for the footer
define("POWERED_BY", "Powered by");

//for warnings
define("WRONG_CAPTCHA", "Wrong captcha inserted");
define("NO_TITLE_AT_ALL", "Pas de titre a �t� ins�r�. Vous devez ins�rer un titre.");
define("TITLE_TOO_LONG", "Le titre ins�r� est trop long.");
define("TITLE_TOO_SHORT", "Le titre ins�r� est trop court.");
define("ILLEGAL_WORDS_WITHIN_TITLE", "Vous avez ajout� des mots interdits dans le document.");
define("TITLE_ALREADY_THERE", "Il est d�j� un titre similaire.");
define("NO_DESCRIPTION_AT_ALL", "Pas de description a �t� ins�r�. Vous devez ins�rer une description.");
define("DESCRIPTION_TOO_LONG", "La description ins�r� est trop long.");
define("DESCRIPTION_TOO_SHORT", "La description ins�r� est trop court.");
define("ILLEGAL_WORDS_WITHIN_DESCRIPTION", "Vous avez ajout� des mots interdits dans la description.");
define("NAME_TOO_LONG", "Le nom ins�r� est trop long.");
define("NAME_TOO_SHORT", "Le nom ins�r� est trop court.");
define("ILLEGAL_WORDS_WITHIN_NAME", "Vous avez ajout� des mots interdits dans le nom.");
define("EMAIL_TOO_LONG", "L'email ins�r� est trop long.");
define("EMAIL_TOO_SHORT", "L'email ins�r� est trop court.");
define("ILLEGAL_WORDS_WITHIN_EMAIL", "Vous avez ajout� des mots interdits dans le courriel.");
define("URL_TOO_LONG", "L'URL ins�r�e est trop long.");
define("URL_TOO_SHORT", "L'URL ins�r�e est trop court.");
define("ILLEGAL_WORDS_WITHIN_URL", "Vous avez ajout� des mots interdits dans l'URL.");
define("URL_ALLREADY_THERE", "Il est d�j� une URL semblable.");
define("NO_RECIPROCAL_URL_AT_ALL", "Non url r�ciproque a �t� ins�r�. Vous devez ins�rer une URL r�ciproque.");
define("RECIPROCAL_URL_TOO_LONG", "L'url de r�ciprocit� ins�r� est trop long.");
define("RECIPROCAL_URL_TOO_SHORT", "L'url de r�ciprocit� ins�r� est trop court.");
define("ILLEGAL_WORDS_WITHIN_RECIPROCAL_URL", "Vous avez ajout� des mots interdits dans l'URL r�ciproque.");
define("RECIPROCAL_NOT_ALLOWED_BUT_CHOSED", "L'option r�ciproque n'est pas permis, mais a �t� choisi.");
define("NOT_CORRECT_IP_ADDRESS", "L'adresse IP n'est pas correcte.");
define("NO_USERNAME_AT_ALL", "Aucun nom d'utilisateur a �t� ins�r�. Vous devez ins�rer un nom d'utilisateur.");
define("TOO_LONG_USERNAME", "Le nom d'utilisateur ins�r� est trop long.");
define("TOO_SHORT_USERNAME", "Le nom d'utilisateur ins�r� est trop court.");
define("NO_PASSWORD_AT_ALL", "Aucun mot de passe a �t� ins�r�. Vous devez ins�rer un mot de passe.");
define("TOO_LONG_PASSWORD", "Le mot de passe ins�r� est trop long.");
define("TOO_SHORT_PASSWORD", "Le mot de passe introduit est trop court.");
define("NO_MINIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "Pas de description lien minimal a �t� ins�r�. Vous devez ins�rer une description du lien minimum.");
define("MINIMUM_ALLOWED_LINK_DESCRIPTION", "La description du lien minimum n'est pas num�rique.");
define("NO_MAXIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "Pas de description lien maximum a �t� ins�r�. Vous devez ins�rer une description du lien maximum.");
define("MAXIMUM_ALLOWED_LINK_DESCRIPTION", "La description du lien maximum �tait pas num�rique.");
define("NO_MINIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "Pas de description cat�gorie minimale a �t� ins�r�. Vous devez ins�rer une description de cat�gorie minimum.");
define("MIN_CAT_DESC_NOT_NUMERIC", "La description de cat�gorie minimum n'est pas num�rique.");
define("NO_MAXIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "Pas de description cat�gorie maximale a �t� ins�r�. Vous devez ins�rer une description de la cat�gorie maximale.");
define("MAX_CAT_DESC_NOT_NUMERIC", "La description de la cat�gorie maximale �tait pas num�rique.");
define("MINIMUM_LINK_DESCRIPTION_BIGGER_THAN_MAXIMUM", "La description du lien minimum est plus grand que la description du lien maximum.");
define("MINIMUM_CAT_DESCRIPTION_BIGGER_THAN_MAXIMUM", "La description de la cat�gorie minimale est plus grande que la description de la cat�gorie maximale.");
define("LINKS_PER_PAGE_NOT_NUMERIC", "Les liens par page �tait pas num�rique.");
define("NO_LINKS_PER_PAGE_AT_ALL", "Pas de liens par page ont �t� ins�r�s. Vous devez ins�rer un liens par page.");
define("NO_COLUMN_NUMBER_AT_ALL", "Pas de num�ro de colonne a �t� ins�r�. Vous devez ins�rer un num�ro de colonne.");
define("COLUMN_NUMBER_IS_NOT_A_NUMBER", "Le num�ro de la colonne n'est pas num�rique.");
define("NO_SORT_OPTION_AT_ALL", "Non option de tri a �t� ins�r�. Vous devez ins�rer une option de tri.");
define("SORT_OPTION_TOO_LONG", "L'option de tri ins�r� est trop long.");
define("SORT_OPTION_TOO_SHORT", "L'option de tri est ins�r� trop court.");
define("NO_LANGUAGE_AT_ALL", "Pas de langue a �t� ins�r�. Vous devez ins�rer un langage.");
define("LANGUAGE_TOO_LONG", "La langue s�lectionn�e est trop long."); // <------|<
define("LANGUAGE_TOO_SHORT", "La langue s�lectionn�e est trop court."); // <---|^- est-ce utile?
define("PASSWORD_EQUALS_USERNAME", "Mot de passe ne doit pas �tre le m�me que le nom d'utilisateur.");
define("NO_LINKTYPE_AT_ALL", "Non type de lien a �t� ins�r�. Vous devez ins�rer un type de lien.");
define("REGULAR_NOT_ALLOWED_BUT_CHOSED", "L'option ordinaire n'est pas autoris�, mais a �t� choisi.");
define("NO_CATEGORY_SELECTED", "Sans cat�gorie est s�lectionn�e.");
define("CATEGORY_ID_NOT_A_NUMBER", "L'id cat�gorie n'est pas un nombre.");
define("CATEGORY_ID_NOT_IN_DB", "l'ID de cat�gorie n'est pas dans la base de donn�es.");
define("INVALID_URL_FORMAT", "Le format d'URL n'est pas valide");
define("BAD_REQUEST", "Bad Request");
define("ZLIB_NOT_ENABLED", "Vous devez avoir acc�s � zlib pour pouvoir utiliser la compression gzip");
define("INDEX_PAGE_NOT_OPEN_FOR_SUBMISSION", "Page d'accueil n'est pas ouvert pour observations");
define("SEARCH_OPTION_WARNING", "R�sultats de la recherche sur le terrain exige une entr�e num�rique");

//for links.php
define("NO_LINKS_HERE", "Il n'existe pas de liens ici");
define("SUBMITTED_LABEL", "Soumis:");

//for search
define("NO_MATCHES", "rien n'a �t� trouv�");
define("MAKE_A_SEARCH", "Effectuer une recherche");
define("SEARCH_FOR", "Rechercher");
define("SEARCH_IN", "Recherche dans");
define("SORT_BY", "Trier par");
define("ALL", "All");
define("ALPHABETICAL_LABEL", "Alphabetical");
define("ALPHABETICAL_REVERSED", "par ordre alphab�tique invers�");
define("NEWEST_FIRST", "Plus r�cent en premier");
define("OLDEST_FIRST", "Les plus anciens en premier");
define("SERCHED_FOR_LABEL", "de rechercher");

//for submit.php
define("SUBMIT_SUCCESS", "F�licitations! Votre lien est dans l'annuaire et est en attente d'approbation.");
define("SUBMIT_NAME_LABEL", "Nom de vous / votre entreprise / votre organisation ou votre groupe:");
define("SUBMIT_A_LINK", "Soumettre un lien");
define("REGULAR_LINK", "liaison r�guli�re");
define("RECIPROCAL_LINK", "Reciprocal Link");
define("RECIPROCAL_URL_LABEL", "Reciprocal URL");
define("CLOSED_FOR_SUBMISSIONS", "Le r�pertoire ne pas accepter la soumission de tout genre");
define("PAYMENT_CANCELLED", "Le paiement a �t� annul�");
define("PROCESSING_PAYMENT", "Payment Processing ...");
define("PROCESSING_PAYMENT_DESCRIPTION", "S'il vous pla�t patienter, votre commande est en cours ...");

//for suggest.php
define("SUGGEST_A_CATEGORY", "Sugg�rer une cat�gorie");
define("SUBMIT_SUCCESS_CATEGORY", "F�licitations! Votre suggestion cat�gorie a �t� ajout�e � la base de donn�es.");

//for extensions
define("EXTENSIONS_LABEL", "Extensions");
define("EDIT_EXTENSIONS", "Extensions Edit");
define("AVAILABLE_EXTENSIONS_FOR_INSTALL", "Extensions disponibles");
define("NO_INSTALLED_EXTENSIONS", "Il n'y a actuellement aucune install� les extensions");
define("NO_EXTENSIONS_FOR_INSTALL", "Il n'y a pas d'extension disponibles pour installer");
define("SIMPLE_LABEL", "simples");
define("FREE_LABEL", "Free");
//extension errors
define("EXTENSION_ROOT_ERROR", "extension �l�ment racine est incorrect ou manquant.");
define("EXTENSION_ID_ERROR", "extension Element / id est incorrect ou manquant.");
define("EXTENSION_ID_ERROR2", "extension Element / id ne correspond pas au nom du dossier d'extension.");
define("EXTENSION_TITLE_ERROR", "extension Element / titre est incorrect ou manquant.");
define("EXTENSION_VERSION_ERROR", "extension Element / version est incorrecte ou manquante.");
define("EXTENSION_DESCRIPTION_ERROR", "extension Element / description est incorrect ou manquant.");
define("EXTENSION_AUTHOR_ERROR", "extension Element / auteur est mal form� ou manquant.");
define("EXTENSION_HOOKS_ERROR", "extension Element / crochets, il est incorrect ou manquant.");
define("EXTENSION_HOOKS_HOOK_ERROR", "extension Element / crochets / crochet sont mal form�s ou manquant.");
define("EXTENSION_HOOKS_HOOK_ERROR2", "extension Element / crochets / crochet sont manquantes un attribut 'id'.");
define("EDIT_EXTENSION", "Edit Extension");
define("HOOKS", "Hooks");
define("EXTENSION_PERMISSION_WARNING", "Vous devez modifier les autorisations dans le fichier:% s � " .get_filepermission(true). " afin de modifier en ligne.");
define("EXTENSION_FILE_NOT_FOUND", "Erreur:%s n'a pu �tre trouv�");
define("EXTENSION_ALLREADY_INSTALLED", "Erreur: l'extension %s est deja install�");
define("EXTENSIONS_DISABLED", "Extensions est d�sactiv�e. Vous devez vous rendre � l'admin-> OTIONS et les changements et les extensions de pr�f�rence handicap�s avant extensions install�es puissent prendre effet.");

//new defines
define("POSITION_NOT_A_NUMBER", "La position que vous avez sugg�r� n'est pas un nombre num�rique valide");
define("HARD_BAN", "consid�rer ceci comme spam");
define("SEARCH_TYPE", "tapez Recherche");
define("VERSION_LABEL", "Version");
define("AUTHOR_LABEL", "Auteur");
define("INSTALL_LABEL", "Install");
define("UNINSTALL_LABEL", "D�sinstaller");
define("ID_LABEL", "ID");
define("DETAILS_LABEL", "Details");
define("SUBCATEGORIES", "Sous-cat�gories");
define("SPONSORED_LINKS", "Liens commerciaux");
define("PAID_LINKS", "Paid Links");
define("SPONSOR_LINK", "lien commercial");
define("PAID_LINK", "Link a pay�");
define("LOG_OUT", "Log Out");
define("PRICE_LABEL", "Price");
define("CURRENCY_LABEL", "Currency");
define("NOT_PAID", "paiement en attente");
define("IS_PAYMENT_PENDING", "Paiement re�u");
define("INVALID_EMAIL", "L'adresse email est invalide.");
define("WRONG_PASSWORD_CONFIRMATION", "Le mot de passe ins�r� ne correspond pas � votre confirmation");
define("CHANGE_PASSWORD_LABEL", "Change Password");
define("ENTER_NEW_PASSWORD", "Entrez un nouveau mot de passe");
define("RETYPE_PASSWORD", "Retype Password");
define("SAVE_PASSWORD_BUTTON", "Save Password");
define("PASSWORD_HAS_BEEN_CHANGED", "- Votre mot de passe a �t� chang�");
define("ACCOUNT_LABEL", "Compte");
define("SHOW_PHP_INFO", "show info");
define("SEF_REWRITE_LABEL", "r�-�criture de couche");
define("INDEX_PAGE", "Page d'index");

//page generation
define("PAGE_GENERATED_IN", "Page generated in");
define("SECONDS", "secondes"); 