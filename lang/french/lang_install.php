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

define("NO_USERNAME_AT_ALL", "Aucun nom d'utilisateur a été inséré. Vous devez insérer un nom d'utilisateur.");
define("TOO_LONG_USERNAME", "Le nom est trop long.");
define("TOO_SHORT_USERNAME", "Le nom d'utilisateur est trop court.");
define("NO_PASSWORD_AT_ALL", "Aucun mot de passe a été inséré. Vous devez insérer un mot de passe.");
define("TOO_LONG_PASSWORD", "Le mot de passe inséré est trop long.");
define("TOO_SHORT_PASSWORD", "Le mot de passe introduit est trop court.");
define("EMAIL_TOO_LONG", "L'email inséré est trop long.");
define("EMAIL_TOO_SHORT", "L'email inséré est trop court.");
define("ILLEGAL_WORDS_WITHIN_EMAIL", "Vous avez ajouté des mots interdits dans le courriel.");
define("NO_TITLE_AT_ALL", "Pas de titre a été inséré. Vous devez insérer un titre.");
define("TITLE_TOO_LONG", "Le titre inséré est trop long.");
define("TITLE_TOO_SHORT", "Le titre inséré est trop court.");
define("NO_DESCRIPTION_AT_ALL", "Pas de description a été inséré. Vous devez insérer une description.");
define("DESCRIPTION_TOO_LONG", "La description inséré est trop long.");
define("DESCRIPTION_TOO_SHORT", "La description inséré est trop court.");
define("URL_TOO_LONG", "L'URL insérée est trop long.");
define("URL_TOO_SHORT", "L'URL insérée est trop court.");
define("ILLEGAL_WORDS_WITHIN_URL", "Vous avez ajouté des mots interdits dans l'URL.");
define("INVALID_URL_FORMAT", "Le format d'URL n'est pas valide");

define("PERMISSION_DESCRIPTION", "Veiller à ce que les permissions sont placées à 755 pour les fichiers suivants ci-dessous.");
define("CHMOD_LABEL", "autorisations");
define("CHMOD_WARNING", "vous devez définir les autorisations de fichier à 755");
define("PERMISSION_NOT_CONTINUE", "Vous devez modifier les permissions de fichiers avant de pouvoir continuer");

define("EXTENSION_ERROR", "Ce type de base de données n'a pas été remplis correctement");
define("HOST_ERROR", "L'hôte n'a pas été remplis correctement");
define("NAME_ERROR", "Le nom de la base n'a pas été remplis correctement");
define("USERNAME_ERROR", "Le nom n'a pas été remplis correctement");
define("PASSWORD_ERROR", "Le mot de passe n'a pas été remplis correctement");
define("PREFIX_ERROR", "Le préfixe n'a pas été remplis correctement");
define("PASSWORD_EQUALS_USERNAME", "Mot de passe ne doit pas être le même que le nom d'utilisateur.");

define("LOCAL_SETTINGS", "Database Settings");
define("OVERVIEW_TABLE_OBJECT", "Objet");
define("OVERVIEW_TABLE_PREFERENCE", "Préférence");
define("OVERVIEW_TABLE_DATABASE", "Database Application");
define("OVERVIEW_TABLE_HOST", "Host");
define("OVERVIEW_TABLE_NAME", "Nom de la base de données");
define("OVERVIEW_TABLE_USERNAME", "Nom d'utilisateur pour la base de données");
define("OVERVIEW_TABLE_PASSWORD", "Mot de passe pour la base de données");
define("OVERVIEW_TABLE_PREFIX", "Préfixe");
define("CONFIG_NOT_FOUND", "Le fichier de configuration n'a pas été trouvé"); // ne sais pas si sa encore en usage
define("DATBASE_ALLREADY_INSTALLED", "base de données déjà installée, supprimer le / dossier d'installation pour plus de sécurité");
define("WRONG_PHP_VERSION", "Vous utilisez PHP version". PHP_VERSION. ". OpenLD nécessite au minimum PHP 4.3.0 pour fonctionner correctement. Vous devez mettre à niveau votre installation de PHP avant de pouvoir continuer.");
define("NO_VALID_DB_SELECTED", "Aucune base de données valide a été choisie");
define("INSTALL_OPENLD", "Install OpenLD");
define("LICENSE", "License");
define("SET_YOUR_OPTIONS", "Réglez vos options");
define("ADMIN_USERNAME", "Admins username");
define("ADMIN_PASSWORD", "Admins du mot de passe");
define("ADMIN_EMAIL", "Admins Email");
define("SITE_TITLE", "Titre du site");
define("SITE_DESCRIPTION", "Description du site");
define("SITE_DOMAIN", "URL");
define("CONTINUE_", "continuer"); // ne peut être tout simplement continuer en raison du type ou de conflit méthode

define("FINISH_DESCRIPTION", "Félicitations! OpenLD a été installé avec succès. S'il vous plaît suivez les instructions ci-dessous pour finaliser l'installation.");
define("OPENLD_IS_INSTALLED", "Votre répertoire OpenLD est installé!");
define("DELETE_INSTALL_FOLDER_MESSAGE", "Vous devez maintenant supprimer le répertoire d'installation de l'ensemble pour des raisons de sécurité.");
define("GOTO_DIRECTORY_INDEX", "Allez dans le répertoire index");

define("INSTALLATION", "Installation");
define("CONFIGURATIONS", "Configurations");
// define("PREFERENCES", "Préférences");
define("FINISH", "Terminer");

define("TITLE_PHASE", "Installation OPENLD - ");

//for the footer
define("POWERED_BY", "Powered by");

// Page generation
define("PAGE_GENERATED_IN", "Page generated in");
define("SECONDS", "secondes"); 