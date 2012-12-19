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
define("CATEGORY_DESCRIPTION_LABEL", "Description de la catégorie");
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
define("SUGGEST_CATEGORY_LABEL", "Suggérer une catégorie");
define("SEARCH_LABEL", "Recherche");

//For include/functions.php
define("RECIPROCAL_NOT_FROM_SAME_DOMAIN", "L'url de réciprocité doit provenir du même domaine");
define("NO_RECIPROCAL_FOUND", "Pas de lien de réciprocité a été trouvé à l'URL réciproque:");
define("URL_COULD_NOT_BE_LOADED", "Impossible de charger l'URL réciproque:");

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
define("TEMPLATES_TITLE", "Thèmes");
define("ADMIN_MENU", "menu Admin");
define("DIRECTORY_MANAGEMENT", "gestion d'annuaire");
define("GENERAL_LABEL", "General");
define("PLUGINS_LABEL", "Plugins");

//for ip banning
define("CENSORED_WORD_IS_NOTHING", "Vous n'avez pas insérer de caractères ou un mot de censure");
define("YOU_MUST_SELECT_AN_IP", "Vous devez sélectionner une adresse IP");
define("IP_ALLREADY_BANNED", "La propriété intellectuelle vous avez choisi d'interdiction est déjà interdit");
define("IP_BANNED_QOUTE", "Désolé, tu es banni!");
define("NEW_IP_BAN", "Une nouvelle interdiction IP");
define("ADD_A_BAN", "Ajouter une interdiction");
define("IP_NUMBER", "numéro IP");
define("MANAGE_BANS", "les interdictions Gérer");
define("UNBAN_IP", "Unban IP");
define("SELECT_IP_TO_UNBAN", "Sélectionnez l'IP de l'utilisateur que vous souhaitez débannir.");
define("UNBAN", "Unban");
define("INFO", "Info");
define("NO_IP_BANS", "Non IPs sont interdits pour le moment");

//for plugins
define("PLUGIN_DOES_NOT_EXIST", "Le plugin n'existe pas");
define("PLUGIN_NOT_SELECTED", "No plugin a été choisi");

//for adding
define("ADD_LABEL", "Add");
define("ADD_LINK_LABEL", "Ajouter Lien");
define("ADD_CATEGORY_LABEL", "Ajouter une catégorie");

//for pagination
define("NEXT_PAGE", "Page suivante");
define("PREVIOUS_PAGE", "Page précédente");

//for admin_categories.php
define("PROPOSED_CATEGORY_NAME", "Nom de catégorie proposée");
define("PROPOSED_TITLE", "title proposées, modifiez-le si vous le souhaitez.");
define("PROPOSED_CATEGORY_DESCRIPTION", "Description de la catégorie");
define("PROPOSED_DESCRIPTION_LABEL", "la description. éditer comme vous le souhaitez.");
define("ACCEPT", "Accepter");
define("MODIFIE_CATEGORIES", "Modifier les catégories");
define("SELECT_CATEGORY", "Sélectionnez le nom de la catégorie que vous souhaitez modifier.");
define("DELETE_CATEGORY", "Supprimer une catégorie");
define("DELETE_CATEGORY_LABEL", "Catégorie d'être supprimé");
define("DELETE_CATEGORY_SELECT_LABEL", "Sélectionnez le nom de la catégorie que vous souhaitez supprimer.");
define("DELETE_BUTTON", "Delete");
define("NO_CATEGORIES_HERE", "Il n'existe pas de catégories ici");

//for admin_information.php
define("WELCOME_LABEL", "Bienvenue");
define("WELCOME_MESSAGE", "Bienvenue sur le panneau d'administration contrôle OpenLD. Voici une liste d'un certain nombre de choses que vous pouvez faire:");
define("MODERATE_CATEGORIES_AND_LINKS", "modérée catégories et des liens.");
define("SET_OPTIONS_AND_PREFERENCES", "définir des options et des préférences.");
define("CONTROL_PERMISSIONS", "des autorisations de contrôle.");
define("BAN_IPS", "IP interdiction.");
define("LIMIT_SPAM", "spam limite en censurant des mots.");
define("SOFTWARE_INFO", "information logiciel");
define("OPENLD_VERSION_LABEL", "version OpenLD");
define("SERVER_INFORMATION", "Informations serveur");
define("SERVER_NAME_LABEL", "Nom:");
define("SERVER_SOFTWARE_LABEL", "Software:");
define("SERVER_PROTOCOLL_LABEL", "Protocole:");
define("SCRIPT_ENVIRONMENT_LABEL", "Script Environnement");
define("OS_LABEL", "Système d'exploitation:");
define("PHP_LABEL", "PHP:");
define("DATABASE_LABEL", "database");
define("ROWS_LABEL", "Rows:");
define("SIZE_LABEL", "Taille:");
define("ACCELERATOR_LABEL", "Accélérateur:");

//for admin_accept_links.php
define("APPROVED_LINKS_LABEL", "liens Approuvé");

//for admin_login.php
define("INCORRECT_PASSWORD_ERROR", "Votre nom d'utilisateur était correcte, mais votre mot de passe était erroné.");
define("INCORRECT_USERNAME_ERROR", "Votre mot de passe est correct, mais votre nom d'utilisateur qui n'allait pas.");
define("USERNAME_AND_PASSWORD_INCORRECT", "Le nom d'utilisateur et votre mot de passe était erroné.");
define("LOGIN_TITLE", "Se connecter sur le panneau d'administration");
define("USERNAME_LABEL", "Username");
define("PASSWORD_LABEL", "Password");
define("FORGOT_PASSWORD", "Mot de passe");
define("SEND_NEW_PASSWORD", "Envoyer nouveau mot de passe");
define("PASSWORD_SENT", "Vos informations de compte ont été envoyés.");
define("FORGOT_MAIL", "cliquez sur le lien ci-dessous si vous voulez obtenir un nouveau mot de passe.");
define("MAIL_NOT_FOUND_IN_DB", "L'e-mail que vous avez inséré ne pouvait être trouvée dans la base de données");
define("NEW_PASSWORD", "New Password");

//for move..
define("MOVE_LINK_LABEL", "Déplacer le lien vers");
define("MOVE_CATEGORY_LABEL", "Déplacer Category");
define("MOVE_TO", "Move to");

//text in admin_options.php
define("ADMIN_LABEL", "Admin");
define("ADMIN_USERNAME_LABEL", "nom d'utilisateur Admin");
define("ADMIN_PASSWORD_LABEL", "Mot de passe Admin");
define("ADMIN_EMAIL_LABEL", "Admin e-mail");
define("CENTRAL_FEATURES", "caractéristiques Central");
define("DESCRIPTION_LABEL", "Description");
define("DOMAIN_LABEL", "URL");
define("LANGUAGE_LABEL", "Langue");
define("LINK_TYPES_LABEL", "types Link");
define("RECIPROCAL_LINKS_LABEL", "liens de réciprocité");
define("REGULAR_LINKS_LABEL", "liens réguliers");
define("DISPLAY_LABEL", "Affichage");
define("LINKS_SORT_BY_LABEL", "liens classés par");
define("CATEGORIES_SORT_BY_LABEL", "des catégories triées par");
define("TITLE_REVERSED", "Titre inversé");
define("DESCRIPTION_REVERSED", "Description inversée");
define("DATE_LABEL", "Date");
define("DATE_REVERSED", "Date inversée");
define("RECIPROCAL_URL", "Reciprocal URL");
define("RECIPROCAL_URL_DESC", "Reciprocal URL inversée");
define("URL", "URL");
define("URL_REVERSED", "URL inversée");
define("CATEGORY_COLUMNS_DESCRIPTION", "colonnes Category");
define("LINKS_PER_PAGE", "liens par page");
define("INPUT_CONTROL", "contrôle de l'entrée");
define("MAXIMUM_LINK_DESCRIPTION", "description des liens maximum");
define("MINIMUM_LINK_DESCRIPTION", "Links description minimale");
define("MAXIMUM_CATEGORY_DESCRIPTION", "Cats Description maximum");
define("MINIMUM_CATEGORY_DESCRIPTION", "Cats description minimale");
define("SAVE_BUTTON", "Enregistrer les modifications");
define("DISABLE_EXTENSIONS_LABEL", "désactiver les extensions");
define("ENABLE_GZIP_LABEL", "Activer la compression gzip");
define("HIDE_ADMIN_BUTTON", "Cacher bouton admin");
define("DENY_INDEX_PAGE_SUBMISSIONS", "liens Refuser la page de couverture");
define("DISPLAY_UNACCEPTED_LINKS", "liens inadmissibles Display");
define("OPEN_LINKS_IN_NEW_WINDOWS", "Ouvrir les liens dans une nouvelle fenêtre");
define("SEARCH_RESULTS_PER_PAGE", "Résultats de la recherche par page");

//for the template
define("TEMPLATE_SUBMIT", "Définir comme modèle");
define("CHOSE_TEMPLATE", "Select templates");
define("NO_TEMPLATES_WERE_FOUND", "Aucun modèle n'a été trouvée");
define("DIRECTORY_LABEL", "Répertoire");
define("THUMBNAIL_PREVIEW", "Aperçu");
//editing template
define("FILE_LABEL", "File");
define("PERMISSION_LABEL", "autorisation");
define("NOT_WRITEABLE", "Non inscriptible");
define("IS_WRITEABLE", "Modifiable");
define("EDIT_TEMPLATE", "Edit template");

//for admin_words.php
define("DOUBLE_ADD", "<br> Vous avez déjà une spamword similaire dans votre db");
define("NO_INPUT_WORD", "<br> Vous devez insérer un mot de censure");
define("NO_ID_FOUND", "<br> L'id n'a pas été trouvé dans la base de données");
define("MORE_THAN_ONE_ID_FOUND", "<br> grave erreur: Plus d'un ID n'a été trouvée dans la base de données");
define("EDIT_CENSORED_NOT_FOUND", "Vous avez oublié d'insérer un mot de censure");
define("NO_BANNED_WORDS", "Il n'ya pas de mots interdits dans ce répertoire");
define("UPDATE", "Update");
define("REMOVE", "Supprimer");
define("ACTION", "Action");
define("BAN_WORDS", "l'interdiction des mots");
define("NEW_CENSORED_WORD", "Nouveau mot censuré");
define("CENSORED_WORD", "mot Censuré");
define("REPLACE_WITH", "Remplacer par");
define("EDIT_DELETE_BANNED_WORDS", "Modifier / Supprimer les mots interdits");

//for categories.php
define("NO_SUBCATEGORIES_FOUND", "Non sous-catégories ont été trouvés dans cette catégorie.");

//for edit category and link
define("EDIT_CATEGORY_LABEL", "Edit Category");
define("EDIT_LINK_LABEL", "Modifier le lien");

//for the footer
define("POWERED_BY", "Powered by");

//for warnings
define("WRONG_CAPTCHA", "Wrong captcha inserted");
define("NO_TITLE_AT_ALL", "Pas de titre a été inséré. Vous devez insérer un titre.");
define("TITLE_TOO_LONG", "Le titre inséré est trop long.");
define("TITLE_TOO_SHORT", "Le titre inséré est trop court.");
define("ILLEGAL_WORDS_WITHIN_TITLE", "Vous avez ajouté des mots interdits dans le document.");
define("TITLE_ALREADY_THERE", "Il est déjà un titre similaire.");
define("NO_DESCRIPTION_AT_ALL", "Pas de description a été inséré. Vous devez insérer une description.");
define("DESCRIPTION_TOO_LONG", "La description inséré est trop long.");
define("DESCRIPTION_TOO_SHORT", "La description inséré est trop court.");
define("ILLEGAL_WORDS_WITHIN_DESCRIPTION", "Vous avez ajouté des mots interdits dans la description.");
define("NAME_TOO_LONG", "Le nom inséré est trop long.");
define("NAME_TOO_SHORT", "Le nom inséré est trop court.");
define("ILLEGAL_WORDS_WITHIN_NAME", "Vous avez ajouté des mots interdits dans le nom.");
define("EMAIL_TOO_LONG", "L'email inséré est trop long.");
define("EMAIL_TOO_SHORT", "L'email inséré est trop court.");
define("ILLEGAL_WORDS_WITHIN_EMAIL", "Vous avez ajouté des mots interdits dans le courriel.");
define("URL_TOO_LONG", "L'URL insérée est trop long.");
define("URL_TOO_SHORT", "L'URL insérée est trop court.");
define("ILLEGAL_WORDS_WITHIN_URL", "Vous avez ajouté des mots interdits dans l'URL.");
define("URL_ALLREADY_THERE", "Il est déjà une URL semblable.");
define("NO_RECIPROCAL_URL_AT_ALL", "Non url réciproque a été inséré. Vous devez insérer une URL réciproque.");
define("RECIPROCAL_URL_TOO_LONG", "L'url de réciprocité inséré est trop long.");
define("RECIPROCAL_URL_TOO_SHORT", "L'url de réciprocité inséré est trop court.");
define("ILLEGAL_WORDS_WITHIN_RECIPROCAL_URL", "Vous avez ajouté des mots interdits dans l'URL réciproque.");
define("RECIPROCAL_NOT_ALLOWED_BUT_CHOSED", "L'option réciproque n'est pas permis, mais a été choisi.");
define("NOT_CORRECT_IP_ADDRESS", "L'adresse IP n'est pas correcte.");
define("NO_USERNAME_AT_ALL", "Aucun nom d'utilisateur a été inséré. Vous devez insérer un nom d'utilisateur.");
define("TOO_LONG_USERNAME", "Le nom d'utilisateur inséré est trop long.");
define("TOO_SHORT_USERNAME", "Le nom d'utilisateur inséré est trop court.");
define("NO_PASSWORD_AT_ALL", "Aucun mot de passe a été inséré. Vous devez insérer un mot de passe.");
define("TOO_LONG_PASSWORD", "Le mot de passe inséré est trop long.");
define("TOO_SHORT_PASSWORD", "Le mot de passe introduit est trop court.");
define("NO_MINIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "Pas de description lien minimal a été inséré. Vous devez insérer une description du lien minimum.");
define("MINIMUM_ALLOWED_LINK_DESCRIPTION", "La description du lien minimum n'est pas numérique.");
define("NO_MAXIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "Pas de description lien maximum a été inséré. Vous devez insérer une description du lien maximum.");
define("MAXIMUM_ALLOWED_LINK_DESCRIPTION", "La description du lien maximum était pas numérique.");
define("NO_MINIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "Pas de description catégorie minimale a été inséré. Vous devez insérer une description de catégorie minimum.");
define("MIN_CAT_DESC_NOT_NUMERIC", "La description de catégorie minimum n'est pas numérique.");
define("NO_MAXIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "Pas de description catégorie maximale a été inséré. Vous devez insérer une description de la catégorie maximale.");
define("MAX_CAT_DESC_NOT_NUMERIC", "La description de la catégorie maximale était pas numérique.");
define("MINIMUM_LINK_DESCRIPTION_BIGGER_THAN_MAXIMUM", "La description du lien minimum est plus grand que la description du lien maximum.");
define("MINIMUM_CAT_DESCRIPTION_BIGGER_THAN_MAXIMUM", "La description de la catégorie minimale est plus grande que la description de la catégorie maximale.");
define("LINKS_PER_PAGE_NOT_NUMERIC", "Les liens par page était pas numérique.");
define("NO_LINKS_PER_PAGE_AT_ALL", "Pas de liens par page ont été insérés. Vous devez insérer un liens par page.");
define("NO_COLUMN_NUMBER_AT_ALL", "Pas de numéro de colonne a été inséré. Vous devez insérer un numéro de colonne.");
define("COLUMN_NUMBER_IS_NOT_A_NUMBER", "Le numéro de la colonne n'est pas numérique.");
define("NO_SORT_OPTION_AT_ALL", "Non option de tri a été inséré. Vous devez insérer une option de tri.");
define("SORT_OPTION_TOO_LONG", "L'option de tri inséré est trop long.");
define("SORT_OPTION_TOO_SHORT", "L'option de tri est inséré trop court.");
define("NO_LANGUAGE_AT_ALL", "Pas de langue a été inséré. Vous devez insérer un langage.");
define("LANGUAGE_TOO_LONG", "La langue sélectionnée est trop long."); // <------|<
define("LANGUAGE_TOO_SHORT", "La langue sélectionnée est trop court."); // <---|^- est-ce utile?
define("PASSWORD_EQUALS_USERNAME", "Mot de passe ne doit pas être le même que le nom d'utilisateur.");
define("NO_LINKTYPE_AT_ALL", "Non type de lien a été inséré. Vous devez insérer un type de lien.");
define("REGULAR_NOT_ALLOWED_BUT_CHOSED", "L'option ordinaire n'est pas autorisé, mais a été choisi.");
define("NO_CATEGORY_SELECTED", "Sans catégorie est sélectionnée.");
define("CATEGORY_ID_NOT_A_NUMBER", "L'id catégorie n'est pas un nombre.");
define("CATEGORY_ID_NOT_IN_DB", "l'ID de catégorie n'est pas dans la base de données.");
define("INVALID_URL_FORMAT", "Le format d'URL n'est pas valide");
define("BAD_REQUEST", "Bad Request");
define("ZLIB_NOT_ENABLED", "Vous devez avoir accès à zlib pour pouvoir utiliser la compression gzip");
define("INDEX_PAGE_NOT_OPEN_FOR_SUBMISSION", "Page d'accueil n'est pas ouvert pour observations");
define("SEARCH_OPTION_WARNING", "Résultats de la recherche sur le terrain exige une entrée numérique");

//for links.php
define("NO_LINKS_HERE", "Il n'existe pas de liens ici");
define("SUBMITTED_LABEL", "Soumis:");

//for search
define("NO_MATCHES", "rien n'a été trouvé");
define("MAKE_A_SEARCH", "Effectuer une recherche");
define("SEARCH_FOR", "Rechercher");
define("SEARCH_IN", "Recherche dans");
define("SORT_BY", "Trier par");
define("ALL", "All");
define("ALPHABETICAL_LABEL", "Alphabetical");
define("ALPHABETICAL_REVERSED", "par ordre alphabétique inversé");
define("NEWEST_FIRST", "Plus récent en premier");
define("OLDEST_FIRST", "Les plus anciens en premier");
define("SERCHED_FOR_LABEL", "de rechercher");

//for submit.php
define("SUBMIT_SUCCESS", "Félicitations! Votre lien est dans l'annuaire et est en attente d'approbation.");
define("SUBMIT_NAME_LABEL", "Nom de vous / votre entreprise / votre organisation ou votre groupe:");
define("SUBMIT_A_LINK", "Soumettre un lien");
define("REGULAR_LINK", "liaison régulière");
define("RECIPROCAL_LINK", "Reciprocal Link");
define("RECIPROCAL_URL_LABEL", "Reciprocal URL");
define("CLOSED_FOR_SUBMISSIONS", "Le répertoire ne pas accepter la soumission de tout genre");
define("PAYMENT_CANCELLED", "Le paiement a été annulé");
define("PROCESSING_PAYMENT", "Payment Processing ...");
define("PROCESSING_PAYMENT_DESCRIPTION", "S'il vous plaît patienter, votre commande est en cours ...");

//for suggest.php
define("SUGGEST_A_CATEGORY", "Suggérer une catégorie");
define("SUBMIT_SUCCESS_CATEGORY", "Félicitations! Votre suggestion catégorie a été ajoutée à la base de données.");

//for extensions
define("EXTENSIONS_LABEL", "Extensions");
define("EDIT_EXTENSIONS", "Extensions Edit");
define("AVAILABLE_EXTENSIONS_FOR_INSTALL", "Extensions disponibles");
define("NO_INSTALLED_EXTENSIONS", "Il n'y a actuellement aucune installé les extensions");
define("NO_EXTENSIONS_FOR_INSTALL", "Il n'y a pas d'extension disponibles pour installer");
define("SIMPLE_LABEL", "simples");
define("FREE_LABEL", "Free");
//extension errors
define("EXTENSION_ROOT_ERROR", "extension élément racine est incorrect ou manquant.");
define("EXTENSION_ID_ERROR", "extension Element / id est incorrect ou manquant.");
define("EXTENSION_ID_ERROR2", "extension Element / id ne correspond pas au nom du dossier d'extension.");
define("EXTENSION_TITLE_ERROR", "extension Element / titre est incorrect ou manquant.");
define("EXTENSION_VERSION_ERROR", "extension Element / version est incorrecte ou manquante.");
define("EXTENSION_DESCRIPTION_ERROR", "extension Element / description est incorrect ou manquant.");
define("EXTENSION_AUTHOR_ERROR", "extension Element / auteur est mal formé ou manquant.");
define("EXTENSION_HOOKS_ERROR", "extension Element / crochets, il est incorrect ou manquant.");
define("EXTENSION_HOOKS_HOOK_ERROR", "extension Element / crochets / crochet sont mal formés ou manquant.");
define("EXTENSION_HOOKS_HOOK_ERROR2", "extension Element / crochets / crochet sont manquantes un attribut 'id'.");
define("EDIT_EXTENSION", "Edit Extension");
define("HOOKS", "Hooks");
define("EXTENSION_PERMISSION_WARNING", "Vous devez modifier les autorisations dans le fichier:% s à " .get_filepermission(true). " afin de modifier en ligne.");
define("EXTENSION_FILE_NOT_FOUND", "Erreur:%s n'a pu être trouvé");
define("EXTENSION_ALLREADY_INSTALLED", "Erreur: l'extension %s est deja installé");
define("EXTENSIONS_DISABLED", "Extensions est désactivée. Vous devez vous rendre à l'admin-> OTIONS et les changements et les extensions de préférence handicapés avant extensions installées puissent prendre effet.");

//new defines
define("POSITION_NOT_A_NUMBER", "La position que vous avez suggéré n'est pas un nombre numérique valide");
define("HARD_BAN", "considérer ceci comme spam");
define("SEARCH_TYPE", "tapez Recherche");
define("VERSION_LABEL", "Version");
define("AUTHOR_LABEL", "Auteur");
define("INSTALL_LABEL", "Install");
define("UNINSTALL_LABEL", "Désinstaller");
define("ID_LABEL", "ID");
define("DETAILS_LABEL", "Details");
define("SUBCATEGORIES", "Sous-catégories");
define("SPONSORED_LINKS", "Liens commerciaux");
define("PAID_LINKS", "Paid Links");
define("SPONSOR_LINK", "lien commercial");
define("PAID_LINK", "Link a payé");
define("LOG_OUT", "Log Out");
define("PRICE_LABEL", "Price");
define("CURRENCY_LABEL", "Currency");
define("NOT_PAID", "paiement en attente");
define("IS_PAYMENT_PENDING", "Paiement reçu");
define("INVALID_EMAIL", "L'adresse email est invalide.");
define("WRONG_PASSWORD_CONFIRMATION", "Le mot de passe inséré ne correspond pas à votre confirmation");
define("CHANGE_PASSWORD_LABEL", "Change Password");
define("ENTER_NEW_PASSWORD", "Entrez un nouveau mot de passe");
define("RETYPE_PASSWORD", "Retype Password");
define("SAVE_PASSWORD_BUTTON", "Save Password");
define("PASSWORD_HAS_BEEN_CHANGED", "- Votre mot de passe a été changé");
define("ACCOUNT_LABEL", "Compte");
define("SHOW_PHP_INFO", "show info");
define("SEF_REWRITE_LABEL", "ré-écriture de couche");
define("INDEX_PAGE", "Page d'index");

//page generation
define("PAGE_GENERATED_IN", "Page generated in");
define("SECONDS", "secondes"); 