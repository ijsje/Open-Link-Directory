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


//cadenas comunes
define("TITLE_LABEL", "Título");
define("CATEGORY_LABEL", "Categoría");
define("CAPTCHA_LABEL", "Captcha");
define("URL_LABEL", "URL");
define("LINK_DESCRIPTION_LABEL", "Descripción del enlace");
define("CATEGORY_DESCRIPTION_LABEL", "Descripción de la Categoría");
define("NAME_LABEL", "Nombre");
define("EMAIL_LABEL", "Email");
define("EDIT_LABEL", "Editar");
define("ACCEPT_LABEL", "Aceptar");
define("UNACCEPT_LABEL", "Unaccept");
define("MOVE_LABEL", "Move");
define("DELETE_LABEL", "Borrar");
define("NAVIGATION_LABEL", "Navegación");
define("HOME_LABEL", "Home");
define("SUBMIT_LINK_LABEL", "Enviar un enlace");
define("SUGGEST_CATEGORY_LABEL", "Sugerir una categoría");
define("SEARCH_LABEL", "Buscar");

//Por include / functions.php
define("RECIPROCAL_NOT_FROM_SAME_DOMAIN", "la url de reciprocidad debe venir del mismo dominio que el vínculo URL");
define("NO_RECIPROCAL_FOUND", "ninguna relación de reciprocidad se encuentra en la dirección URL de reciprocidad:");
define("URL_COULD_NOT_BE_LOADED", "no ha podido cargar la URL recíproco:");

//Por la admin_menu
define("ACCEPT_CATEGORIES_LABEL", "Aceptar Categorías");
define("ACCEPT_LINKS_TITLE", "Aceptar enlaces");
define("BROWSE", "Buscar");
define("LINKS_LABEL", "Enlaces");
define("CATEGORIES_LABEL", "Categorías");
define("INFORMATION_LABEL", "Información");
define("OPTION_LABEL", "Opciones");
define("CENSORING", "Censura");
define("IP_BANNING", "Prohibición de la propiedad intelectual");
define("TEMPLATES_TITLE", "Temas");
define("ADMIN_MENU", "menú Admin");
define("DIRECTORY_MANAGEMENT", "Gestión de Directorio");
define("GENERAL_LABEL", "General");
define("PLUGINS_LABEL", "Plugins");

//IP para la prohibición de
define("CENSORED_WORD_IS_NOTHING", "no, que hizo insertar algo para censurar");
define("YOU_MUST_SELECT_AN_IP", "usted debe seleccionar una dirección IP");
define("IP_ALLREADY_BANNED", "el período de investigación seleccionado ya está prohibido");
define("IP_BANNED_QOUTE", "Usted está prohibido!");
define("NEW_IP_BAN", "Nueva prohibición de la propiedad intelectual");
define("ADD_A_BAN", "Añadir una prohibición");
define("IP_NUMBER", "Número IP");
define("MANAGE_BANS", "la prohibición de administrar");
define("UNBAN_IP", "Unban IP");
define("SELECT_IP_TO_UNBAN", "Seleccionar la IP del usuario que desea eliminar la prohibición");
define("UNBAN", "Unban");
define("INFO", "Info");
define("NO_IP_BANS", "No IPs están prohibidos pero");

//para plugins
define("PLUGIN_DOES_NOT_EXIST", "el plugin no existe");
define("PLUGIN_NOT_SELECTED", "no fue seleccionado plugin");

//para agregar
define("ADD_LABEL", "Agregar");
define("ADD_LINK_LABEL", "Agregar enlace");
define("ADD_CATEGORY_LABEL", "Añadir categoría");

//para la paginación
define("NEXT_PAGE", "Página siguiente");
define("PREVIOUS_PAGE", "Página anterior");

//para admin_categories.php
//define("PROPOSED_CATEGORY_NAME", "nombre de la categoría propuesta");
//define("PROPOSED_TITLE", "título propuesto, editar como quieras");
//define("PROPOSED_CATEGORY_DESCRIPTION", "Descripción de la Categoría");
//define("PROPOSED_DESCRIPTION_LABEL", "La descripción. Edit como quieras");
define("ACCEPT", "Aceptar");
define("MODIFIE_CATEGORIES", "Modificar categorías");
define("SELECT_CATEGORY", "Seleccione el nombre de la categoría que desea editar");
define("DELETE_CATEGORY", "Eliminar una categoría de");
define("DELETE_CATEGORY_LABEL", "categoría que se borró");
define("DELETE_CATEGORY_SELECT_LABEL", "Seleccione el nombre de la categoría que desea eliminar");
define("DELETE_BUTTON", "Borrar");
define("NO_CATEGORIES_HERE", "No hay categorías de aquí");

//para admin_information.php
define("WELCOME_LABEL", "Bienvenido");
define("WELCOME_MESSAGE", "Bienvenido al panel de control de la administración OpenLD. Aquí está una lista de algunas cosas que usted puede hacer:");
define("MODERATE_CATEGORIES_AND_LINKS", "categorías moderado y enlaces");
define("SET_OPTIONS_AND_PREFERENCES", "establecer las opciones y preferencias");
define("CONTROL_PERMISSIONS", "permisos de control");
define("BAN_IPS", "prohibición de IP");
define("LIMIT_SPAM", "spam límite por la censura de texto");
define("SOFTWARE_INFO", "información de software");
define("OPENLD_VERSION_LABEL", "versión OpenLD");
define("SERVER_INFORMATION", "Información del servidor");
define("SERVER_NAME_LABEL", "Nombre:");
define("SERVER_SOFTWARE_LABEL", "software");
define("SERVER_PROTOCOLL_LABEL", "Protocolo");
define("SCRIPT_ENVIRONMENT_LABEL", "Guión para el Medio Ambiente");
define("OS_LABEL", "Sistema operativo:");
define("PHP_LABEL", "PHP");
define("DATABASE_LABEL", "Base de datos");
define("ROWS_LABEL", "Filas:");
define("SIZE_LABEL", "Size:");
define("ACCELERATOR_LABEL", "Acelerador de:");

//para admin_accept_links.php
define("APPROVED_LINKS_LABEL", "Enlaces Aprobado");

//para admin_login.php
define("INCORRECT_PASSWORD_ERROR", "nombre de usuario correcto, pero con una contraseña incorrecta");
define("INCORRECT_USERNAME_ERROR", "contraseña correcta, pero con nombre de usuario incorrecto");
define("USERNAME_AND_PASSWORD_INCORRECT", "su nombre de usuario y la contraseña es incorrecta");
define("LOGIN_TITLE", "Entrar al Panel de Administración");
define("USERNAME_LABEL", "Usuario");
define("PASSWORD_LABEL", "Password");
define("FORGOT_PASSWORD", "Recordar Contraseña");
define("SEND_NEW_PASSWORD", "Enviar nueva contraseña");
define("PASSWORD_SENT", "La información de su cuenta se han enviado a su dirección de correo electrónico");
define("FORGOT_MAIL", "Haga clic en el enlace de abajo para obtener una nueva contraseña");
define("MAIL_NOT_FOUND_IN_DB", "el correo electrónico que ha insertado no se puede encontrar en la base de datos");
define("NEW_PASSWORD", "New Password");

//para mover ..
define("MOVE_LINK_LABEL", "Mover Link");
define("MOVE_CATEGORY_LABEL", "Mover Categoría");
define("MOVE_TO", "Mover a");

//texto en admin_options.php
define("ADMIN_LABEL", "Admin");
define("ADMIN_USERNAME_LABEL", "nombre de usuario administrador");
define("ADMIN_PASSWORD_LABEL", "contraseña de administrador");
define("ADMIN_EMAIL_LABEL", "Admin e-mail");
define("CENTRAL_FEATURES", "características fundamentales");
define("DESCRIPTION_LABEL", "Descripción");
define("DOMAIN_LABEL", "URL");
define("LANGUAGE_LABEL", "Idioma");
define("LINK_TYPES_LABEL", "tipos de Enlace");
define("RECIPROCAL_LINKS_LABEL", "Enlaces recíprocos");
define("REGULAR_LINKS_LABEL", "enlaces regulares");
define("DISPLAY_LABEL", "Pantalla");
define("LINKS_SORT_BY_LABEL", "Enlaces ordenados por");
define("CATEGORIES_SORT_BY_LABEL", "ordenados por categorías");
define("TITLE_REVERSED", "Título inversa");
define("DESCRIPTION_REVERSED", "Descripción invertido");
define("DATE_LABEL", "Fecha");
define("DATE_REVERSED", "Fecha en que se invierte");
define("RECIPROCAL_URL", "Reciprocal URL");
define("RECIPROCAL_URL_DESC", "Reciprocal URL invertido");
define("URL", "URL");
define("URL_REVERSED", "dirección inversa");
define("CATEGORY_COLUMNS_DESCRIPTION", "columnas de la categoría");
define("LINKS_PER_PAGE", "Enlaces por página");
define("INPUT_CONTROL", "control de entrada");
define("MAXIMUM_LINK_DESCRIPTION", "descripción Enlaces máximo");
define("MINIMUM_LINK_DESCRIPTION", "descripción Enlaces mínimo");
define("MAXIMUM_CATEGORY_DESCRIPTION", "Descripción Gatos máximo");
define("MINIMUM_CATEGORY_DESCRIPTION", "descripción de los gatos mínimo");
define("SAVE_BUTTON", "Guardar cambios");
define("DISABLE_EXTENSIONS_LABEL", "desactivar las extensiones");
define("ENABLE_GZIP_LABEL", "Habilitar la compresión gzip");
define("HIDE_ADMIN_BUTTON", "botón Ocultar admin");
define("DENY_INDEX_PAGE_SUBMISSIONS", "vínculos de la página Denegar frente");
define("DISPLAY_UNACCEPTED_LINKS", "vínculos de pantalla aceptada");
define("OPEN_LINKS_IN_NEW_WINDOWS", "Abrir enlaces en ventanas nuevas");
define("SEARCH_RESULTS_PER_PAGE", "Resultados de la búsqueda por página");

//para los temas
define("TEMPLATE_SUBMIT", "Usar este tema");
define("CHOSE_TEMPLATE", "Temas Seleccione");
define("NO_TEMPLATES_WERE_FOUND", "No temas encontrados");
define("DIRECTORY_LABEL", "Directorio");
define("THUMBNAIL_PREVIEW", "Vista Previa");
//temas de edición de
define("FILE_LABEL", "Archivo");
define("PERMISSION_LABEL", "Permiso");
define("NOT_WRITEABLE", "No se puede escribir");
define("IS_WRITEABLE", "grabable");
define("EDIT_TEMPLATE", "Editar plantilla");

//para admin_words.php
define("DOUBLE_ADD", "<br> este texto ya está censurado");
define("NO_INPUT_WORD", "<br> necesita insertar texto de censurar");
define("NO_ID_FOUND", "<br> el ID no se encuentra en la base de datos");
define("MORE_THAN_ONE_ID_FOUND", "<br> un error serio! más de un ID se encuentra en la base de datos. Informar de este error aquí: http://sourceforge.net/tracker/?group_id=181014&atid=895496");
define("EDIT_CENSORED_NOT_FOUND", "no hay texto se insertó para censurar");
define("NO_BANNED_WORDS", "Actualmente no hay texto censurado");
define("UPDATE", "Update");
define("REMOVE", "Eliminar");
define("ACTION", "Acción");
define("BAN_WORDS", "palabras de prohibición");
define("NEW_CENSORED_WORD", "Nuevo texto censurado");
define("CENSORED_WORD", "text Censored");
define("REPLACE_WITH", "Reemplazar");
define("EDIT_DELETE_BANNED_WORDS", "Editar texto censurado");

//para categories.php
define("NO_SUBCATEGORIES_FOUND", "No hay subcategorías de esta categoría");

//para editar la categoría y enlace
define("EDIT_CATEGORY_LABEL", "Editar Categoría");
define("EDIT_LINK_LABEL", "enlace Editar");

//para el pie de página
define("POWERED_BY", "Powered by");

//para las advertencias
define("WRONG_CAPTCHA", "Wrong captcha inserted");
define("NO_TITLE_AT_ALL", "título que falta");
define("TITLE_TOO_LONG", "inserta el título es más largo que lo permitido");
define("TITLE_TOO_SHORT", "inserta el título es más corto de lo permitido");
define("ILLEGAL_WORDS_WITHIN_TITLE", "inserta el título incluye un texto censurado");
define("TITLE_ALREADY_THERE", "ya existe un título similar");
define("NO_DESCRIPTION_AT_ALL", "descripción que falta");
define("DESCRIPTION_TOO_LONG", "la descripción inserta es más largo de lo permitido");
define("DESCRIPTION_TOO_SHORT", "la descripción inserta es más corta de lo permitido");
define("ILLEGAL_WORDS_WITHIN_DESCRIPTION", "la descripción insertada incluye texto censurado");
define("NAME_TOO_LONG", "inserta el nombre es más largo que lo permitido");
define("NAME_TOO_SHORT", "inserta el nombre es más corto de lo permitido");
define("ILLEGAL_WORDS_WITHIN_NAME", "el nombre inserta incluye texto censurado");
define("EMAIL_TOO_LONG", "el correo electrónico insertado es más de lo permitido");
define("EMAIL_TOO_SHORT", "el correo electrónico insertado es menor que lo permitido");
define("ILLEGAL_WORDS_WITHIN_EMAIL", "el correo electrónico incluye el texto insertado censurado");
define("URL_TOO_LONG", "La URL introducida es más largo de lo permitido");
define("URL_TOO_SHORT", "La URL introducida es más corta de lo permitido");
define("ILLEGAL_WORDS_WITHIN_URL", "La URL introducida incluye texto censurado");
define("URL_ALLREADY_THERE", "ya hay una dirección URL similar");
define("NO_RECIPROCAL_URL_AT_ALL", "url falta de reciprocidad");
define("RECIPROCAL_URL_TOO_LONG", "la url de reciprocidad inserta es más largo de lo permitido");
define("RECIPROCAL_URL_TOO_SHORT", "la url de reciprocidad inserta es más corta de lo permitido");
define("ILLEGAL_WORDS_WITHIN_RECIPROCAL_URL", "añade el texto censurados incluye recíproca");
define("RECIPROCAL_NOT_ALLOWED_BUT_CHOSED", "no la opción recíproca es avilable");
define("NOT_CORRECT_IP_ADDRESS", "la dirección IP insertado es incorrecto");
define("NO_USERNAME_AT_ALL", "el nombre de usuario que falta");
define("TOO_LONG_USERNAME", "inserta el nombre de usuario es mayor de lo permitido");
define("TOO_SHORT_USERNAME", "el nombre de usuario inserta es más corta de lo permitido");
define("NO_PASSWORD_AT_ALL", "la clave es que falta");
define("TOO_LONG_PASSWORD", "inserta la contraseña es más largo de lo permitido");
define("TOO_SHORT_PASSWORD", "inserta la contraseña es más corta de lo permitido");
define("NO_MINIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "Descripción de vínculo mínimo que falta");
define("MINIMUM_ALLOWED_LINK_DESCRIPTION", "añade la descripción de vínculo mínimo no era numérica");
define("NO_MAXIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "Descripción del vínculo máximo que falta");
define("MAXIMUM_ALLOWED_LINK_DESCRIPTION", "la descripción del link insertado máxima no era numéricos");
define("NO_MINIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "descripción de la categoría mínima es de que falta");
define("MIN_CAT_DESC_NOT_NUMERIC", "añade la descripción de la categoría mínimo no era numérica");
define("NO_MAXIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "descripción de la categoría máxima es de que falta");
define("MAX_CAT_DESC_NOT_NUMERIC", "añade la descripción de la categoría máxima no era numérica");
define("MINIMUM_LINK_DESCRIPTION_BIGGER_THAN_MAXIMUM", "añade la descripción de vínculo mínimo debe ser menor que la relación máxima de descripción");
define("MINIMUM_CAT_DESCRIPTION_BIGGER_THAN_MAXIMUM", "añade la descripción de la categoría mínima debe ser menor que la descripción de la categoría máxima");
define("LINKS_PER_PAGE_NOT_NUMERIC", "los enlaces insertados por página no es numérico");
define("NO_LINKS_PER_PAGE_AT_ALL", "número de enlaces por página no se encuentra");
define("NO_COLUMN_NUMBER_AT_ALL", "número de columnas que falta");
define("COLUMN_NUMBER_IS_NOT_A_NUMBER", "el valor insertado por el número de columnas no es numérico");
define("NO_SORT_OPTION_AT_ALL", "opción de clasificación es que falta");
define("SORT_OPTION_TOO_LONG", "la opción de ordenación inserta es más largo de lo permitido");
define("SORT_OPTION_TOO_SHORT", "la opción de ordenación inserta es más corta de lo permitido");
define("NO_LANGUAGE_AT_ALL", "opción de idioma no se encuentra");
define("LANGUAGE_TOO_LONG", "el idioma seleccionado es más largo de lo permitido"); //<------|<
define("LANGUAGE_TOO_SHORT", "el idioma seleccionado es menor que lo permitido"); //<---|^- esto es útil?
define("PASSWORD_EQUALS_USERNAME", "contraseña debe ser diferente del nombre de usuario");
define("NO_LINKTYPE_AT_ALL", "opción de tipo de vínculo que falta");
define("REGULAR_NOT_ALLOWED_BUT_CHOSED", "no la opción de regular está disponible");
define("NO_CATEGORY_SELECTED", "no se ha seleccionado la categoría");
define("CATEGORY_ID_NOT_A_NUMBER", "el ID de la categoría no es un número");
define("CATEGORY_ID_NOT_IN_DB", "el ID de la categoría no existe");
define("INVALID_URL_FORMAT", "el formato de URL no es válida");
define("BAD_REQUEST", "Bad request");
define("ZLIB_NOT_ENABLED", "usted debe tener acceso a zlib para utilizar compresión gzip");
define("INDEX_PAGE_NOT_OPEN_FOR_SUBMISSION", "no la primera página está abierta para la presentación de");
define("SEARCH_OPTION_WARNING", "resultados de la búsqueda campo requiere de entrada numérica");

//para links.php
define("NO_LINKS_HERE", "No hay vínculos aquí");
define("SUBMITTED_LABEL", "Enviado");

//para la búsqueda
define("NO_MATCHES", "No se encontró resultado");
define("MAKE_A_SEARCH", "Hacer una búsqueda");
define("SEARCH_FOR", "Buscar");
define("SEARCH_IN", "Buscar en");
define("SORT_BY", "Ordenar por");
define("ALL", "Todo");
define("ALPHABETICAL_LABEL", "Alfabético");
define("ALPHABETICAL_REVERSED", "Alfabético invertido");
define("NEWEST_FIRST", "Lo nuevo primero");
define("OLDEST_FIRST", "Lo viejo primero");
define("SERCHED_FOR_LABEL", "Resultados de la búsqueda para");

//para submit.php
define("SUBMIT_SUCCESS", "El enlace se ha enviado correctamente");
define("SUBMIT_NAME_LABEL", "Nombre de usted o su empresa o su organización / su grupo:"); //quitar esta etiqueta de
define("SUBMIT_A_LINK", "Enviar un vínculo");
define("REGULAR_LINK", "manera regular");
define("RECIPROCAL_LINK", "enlace recíproco");
define("RECIPROCAL_URL_LABEL", "Reciprocal URL");
define("CLOSED_FOR_SUBMISSIONS", "El directorio está actualmente cerrado para la presentación");
define("PAYMENT_CANCELLED", "El pago se han cancelado");
define("PROCESSING_PAYMENT", "Procesamiento de Pagos ...");
define("PROCESSING_PAYMENT_DESCRIPTION", "Gracias por esperar, su solicitud se está procesando ...");

//para suggest.php
define("SUGGEST_A_CATEGORY", "Sugerir una Categoría");
define("SUBMIT_SUCCESS_CATEGORY", "La sugerencia que ha hecho con éxito");

//para las extensiones
define("EXTENSIONS_LABEL", "Extensiones");
define("EDIT_EXTENSIONS", "Extensiones Editar");
define("AVAILABLE_EXTENSIONS_FOR_INSTALL", "extensiones disponibles");
define("NO_INSTALLED_EXTENSIONS", "Actualmente no hay extensiones instaladas");
define("NO_EXTENSIONS_FOR_INSTALL", "No hay extensión disponible para instalar");
define("SIMPLE_LABEL", "Simple");
define("FREE_LABEL", "Libre");
//Errores de extensión
define("EXTENSION_ROOT_ERROR", "extensión elemento raíz es incorrecto o falta");
define("EXTENSION_ID_ERROR", "elemento de extensión / id es incorrecto o falta");
define("EXTENSION_ID_ERROR2", "elemento de extensión / ID no coincide con el nombre de la carpeta de extensión");
define("EXTENSION_TITLE_ERROR", "elemento de extensión / título es incorrecto o falta");
define("EXTENSION_VERSION_ERROR", "elemento de extensión / versión es incorrecto o falta");
define("EXTENSION_DESCRIPTION_ERROR", "elemento de extensión / descripción es incorrecto o falta");
define("EXTENSION_AUTHOR_ERROR", "elemento de extensión / autor es incorrecto o falta");
define("EXTENSION_HOOKS_ERROR", "elemento de extensión / gancho es incorrecto o falta");
define("EXTENSION_HOOKS_HOOK_ERROR", "elemento de extensión / gancho / gancho son malformados o no");
define("EXTENSION_HOOKS_HOOK_ERROR2", "elemento de extensión / gancho / gancho falta un atributo 'id'");
define("EDIT_EXTENSION", "Editar Extension");
define("HOOKS", "ganchos");
define("EXTENSION_PERMISSION_WARNING", "usted debe cambiar los permisos en el archivo:%s a 755 con el fin de editar en línea");
define("EXTENSION_FILE_NOT_FOUND", "%s no se pudo encontrar");
define("EXTENSION_ALLREADY_INSTALLED", "la extensión %s ya está instalado");
define("EXTENSIONS_DISABLED", "Extensiones está deshabilitada. Tienes que ir a la Administración-> Otions y cambiar las extensiones de preferencia antes de las extensiones instaladas con discapacidad puedan tener efecto.");

//new defines
define("POSITION_NOT_A_NUMBER", "la posición que usted sugiere no es un número numérico válido");
define("HARD_BAN", "Display ningún contenido con este texto");
define("SEARCH_TYPE", "Tipo de búsqueda");
define("VERSION_LABEL", "versión");
define("AUTHOR_LABEL", "Autor");
define("INSTALL_LABEL", "Install");
define("UNINSTALL_LABEL", "Desinstalar");
define("ID_LABEL", "ID");
define("DETAILS_LABEL", "Detalles");
define("categorías", "Subcategoría");
define("SPONSORED_LINKS", "Enlaces patrocinados");
define("PAID_LINKS", "vínculos de pago");
define("SPONSOR_LINK", "Enlace Patrocinado");
define("PAID_LINK", "Enlace Paid");
define("LOG_OUT", "Salir");
define("PRICE_LABEL", "Precio");
define("CURRENCY_LABEL", "Moneda");
define("NOT_PAID", "pendiente de pago");
define("IS_PAYMENT_PENDING", "pago recibido");
define("INVALID_EMAIL", "la dirección de correo insertada no era válida");
define("WRONG_PASSWORD_CONFIRMATION", "inserta la contraseña no coincide con la confirmación");
define("CHANGE_PASSWORD_LABEL", "Cambiar Contraseña");
define("ENTER_NEW_PASSWORD", "Introduzca una nueva contraseña");
define("RETYPE_PASSWORD", "Volver a escribir contraseña");
define("SAVE_PASSWORD_BUTTON", "Guardar contraseña");
define("PASSWORD_HAS_BEEN_CHANGED", "- Su contraseña ha cambiado");
define("ACCOUNT_LABEL", "Cuenta");
define("SHOW_PHP_INFO", "Mostrar información");
define("SEF_REWRITE_LABEL", "Rewrite capa");
define("INDEX_PAGE", "página índice");

// generación de la página
define("PAGE_GENERATED_IN", "Page generated in");
define("SECONDS", "Segundos");