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

define("NO_USERNAME_AT_ALL", "nombre de usuario que falta");
define("TOO_LONG_USERNAME", "inserta el nombre de usuario es mayor de lo permitido");
define("TOO_SHORT_USERNAME", "el nombre de usuario inserta es más corta de lo permitido");
define("NO_PASSWORD_AT_ALL", "password falta");
define("TOO_LONG_PASSWORD", "inserta la contraseña es más largo de lo permitido");
define("TOO_SHORT_PASSWORD", "inserta la contraseña es más corta de lo permitido");
define("EMAIL_TOO_LONG", "el correo electrónico añade más tiempo del autorizado");
define("EMAIL_TOO_SHORT", "el mensaje más corto que permite insertar");
//define("ILLEGAL_WORDS_WITHIN_EMAIL", "que ha incluido las palabras prohibidas en el correo electrónico");
define("NO_TITLE_AT_ALL", "título que falta");
define("TITLE_TOO_LONG", "El título se inserta más tiempo del autorizado");
define("TITLE_TOO_SHORT", "El título es más corto que inserta permitido.");
define("NO_DESCRIPTION_AT_ALL", "descripción que falta");
define("DESCRIPTION_TOO_LONG", "La descripción inserta es más largo que lo permitido.");
define("DESCRIPTION_TOO_SHORT", "La descripción inserta es más corto que lo permitido.");
define("URL_TOO_LONG", "La URL introducida es más largo de lo permitido");
define("URL_TOO_SHORT", "La URL introducida es más corta de lo permitido");
define("INVALID_URL_FORMAT", "el formato de URL no es válida");

define("PERMISSION_DESCRIPTION", "Asegúrese de que los permisos se establecen a 755 para los archivos de abajo.");
define("CHMOD_LABEL", "permisos");
define("CHMOD_WARNING", "es necesario establecer los permisos de archivo a 755");
define("PERMISSION_NOT_CONTINUE", "es necesario cambiar los permisos de archivos antes de poder continuar");

define("EXTENSION_ERROR", "el tipo de base de datos no se llenó correctamente");
define("HOST_ERROR", "el anfitrión no se llenó correctamente");
define("NAME_ERROR", "el nombre de base de datos no se llenó correctamente");
define("USERNAME_ERROR", "el nombre de usuario no se llenó correctamente");
define("PASSWORD_ERROR", "La contraseña no se ha rellenado correctamente");
define("PREFIX_ERROR", "El prefijo no se llenó correctamente");
define("PASSWORD_EQUALS_USERNAME", "contraseña no debe ser el mismo que el nombre de usuario.");

define("LOCAL_SETTINGS", "Configuración de base de datos");
define("OVERVIEW_TABLE_OBJECT", "Objeto");
define("OVERVIEW_TABLE_PREFERENCE", "preferencia");
define("OVERVIEW_TABLE_DATABASE", "Base de datos de aplicación");
define("OVERVIEW_TABLE_HOST", "Host");
define("OVERVIEW_TABLE_NAME", "Nombre de la base de datos");
define("OVERVIEW_TABLE_USERNAME", "Nombre de usuario de base de datos");
define("OVERVIEW_TABLE_PASSWORD", "Contraseña de la base de datos");
define("OVERVIEW_TABLE_PREFIX", "Prefijo");
define("CONFIG_NOT_FOUND", "el archivo de configuración no se ha encontrado"); //no seguro de si su todavía en uso
define("DATBASE_ALLREADY_INSTALLED", "OpenLD ya se han instalado, elimine el archivo / carpeta de instalación para mayor seguridad");
define("WRONG_PHP_VERSION", "Se está ejecutando la versión de PHP". PHP_VERSION. ". OpenLD requiere al menos PHP 4.3.0 para funcionar correctamente. Debe actualizar su instalación de PHP antes de continuar.");
define("NO_VALID_DB_SELECTED", "ninguna base de datos válidos fue seleccionado");
define("INSTALL_OPENLD", "Instalación de OpenLD");
define("LICENSE", "Licencia");
define("SET_YOUR_OPTIONS", "Establecer las opciones");
define("ADMIN_USERNAME", "Administradores de Usuario");
define("ADMIN_PASSWORD", "Administradores de Password");
define("ADMIN_EMAIL", "Administradores de correo electrónico");
define("SITE_TITLE", "Título de la web");
define("SITE_DESCRIPTION", "Descripción del sitio");
define("SITE_DOMAIN", "URL");
define("CONTINUE_", "Continuar"); //No se puede continuar porque sólo de tipo / método de conflicto

define("FINISH_DESCRIPTION", "¡Felicidades! OpenLD se ha instalado correctamente. Por favor, siga las siguientes instrucciones para finalizar la instalación.");
define("OPENLD_IS_INSTALLED", "que está instalado el directorio OpenLD!");
define("DELETE_INSTALL_FOLDER_MESSAGE", "Ahora debe eliminar todo el directorio de instalación por razones de seguridad.");
define("GOTO_DIRECTORY_INDEX", "Ir al directorio de índice");

define("INSTALLATION", "Instalación");
define("CONFIGURATIONS", "Configuraciones");
//define("PREFERENCES", "Preferencias");
define("FINISH", "Finish");

define("TITLE_PHASE", "Instalación OPENLD -");

//para el pie de página
define("POWERED_BY", "Powered by");

//Page generation
define("PAGE_GENERATED_IN", "Page generated in");
define("SECONDS", "Segundos");