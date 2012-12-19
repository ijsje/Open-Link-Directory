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
define("TITLE_LABEL", "T�tulo");
define("CATEGORY_LABEL", "Categor�a");
define("CAPTCHA_LABEL", "Captcha");
define("URL_LABEL", "URL");
define("LINK_DESCRIPTION_LABEL", "Descripci�n del enlace");
define("CATEGORY_DESCRIPTION_LABEL", "Descripci�n de la Categor�a");
define("NAME_LABEL", "Nombre");
define("EMAIL_LABEL", "Email");
define("EDIT_LABEL", "Editar");
define("ACCEPT_LABEL", "Aceptar");
define("UNACCEPT_LABEL", "Unaccept");
define("MOVE_LABEL", "Move");
define("DELETE_LABEL", "Borrar");
define("NAVIGATION_LABEL", "Navegaci�n");
define("HOME_LABEL", "Home");
define("SUBMIT_LINK_LABEL", "Enviar un enlace");
define("SUGGEST_CATEGORY_LABEL", "Sugerir una categor�a");
define("SEARCH_LABEL", "Buscar");

//Por include / functions.php
define("RECIPROCAL_NOT_FROM_SAME_DOMAIN", "la url de reciprocidad debe venir del mismo dominio que el v�nculo URL");
define("NO_RECIPROCAL_FOUND", "ninguna relaci�n de reciprocidad se encuentra en la direcci�n URL de reciprocidad:");
define("URL_COULD_NOT_BE_LOADED", "no ha podido cargar la URL rec�proco:");

//Por la admin_menu
define("ACCEPT_CATEGORIES_LABEL", "Aceptar Categor�as");
define("ACCEPT_LINKS_TITLE", "Aceptar enlaces");
define("BROWSE", "Buscar");
define("LINKS_LABEL", "Enlaces");
define("CATEGORIES_LABEL", "Categor�as");
define("INFORMATION_LABEL", "Informaci�n");
define("OPTION_LABEL", "Opciones");
define("CENSORING", "Censura");
define("IP_BANNING", "Prohibici�n de la propiedad intelectual");
define("TEMPLATES_TITLE", "Temas");
define("ADMIN_MENU", "men� Admin");
define("DIRECTORY_MANAGEMENT", "Gesti�n de Directorio");
define("GENERAL_LABEL", "General");
define("PLUGINS_LABEL", "Plugins");

//IP para la prohibici�n de
define("CENSORED_WORD_IS_NOTHING", "no, que hizo insertar algo para censurar");
define("YOU_MUST_SELECT_AN_IP", "usted debe seleccionar una direcci�n IP");
define("IP_ALLREADY_BANNED", "el per�odo de investigaci�n seleccionado ya est� prohibido");
define("IP_BANNED_QOUTE", "Usted est� prohibido!");
define("NEW_IP_BAN", "Nueva prohibici�n de la propiedad intelectual");
define("ADD_A_BAN", "A�adir una prohibici�n");
define("IP_NUMBER", "N�mero IP");
define("MANAGE_BANS", "la prohibici�n de administrar");
define("UNBAN_IP", "Unban IP");
define("SELECT_IP_TO_UNBAN", "Seleccionar la IP del usuario que desea eliminar la prohibici�n");
define("UNBAN", "Unban");
define("INFO", "Info");
define("NO_IP_BANS", "No IPs est�n prohibidos pero");

//para plugins
define("PLUGIN_DOES_NOT_EXIST", "el plugin no existe");
define("PLUGIN_NOT_SELECTED", "no fue seleccionado plugin");

//para agregar
define("ADD_LABEL", "Agregar");
define("ADD_LINK_LABEL", "Agregar enlace");
define("ADD_CATEGORY_LABEL", "A�adir categor�a");

//para la paginaci�n
define("NEXT_PAGE", "P�gina siguiente");
define("PREVIOUS_PAGE", "P�gina anterior");

//para admin_categories.php
//define("PROPOSED_CATEGORY_NAME", "nombre de la categor�a propuesta");
//define("PROPOSED_TITLE", "t�tulo propuesto, editar como quieras");
//define("PROPOSED_CATEGORY_DESCRIPTION", "Descripci�n de la Categor�a");
//define("PROPOSED_DESCRIPTION_LABEL", "La descripci�n. Edit como quieras");
define("ACCEPT", "Aceptar");
define("MODIFIE_CATEGORIES", "Modificar categor�as");
define("SELECT_CATEGORY", "Seleccione el nombre de la categor�a que desea editar");
define("DELETE_CATEGORY", "Eliminar una categor�a de");
define("DELETE_CATEGORY_LABEL", "categor�a que se borr�");
define("DELETE_CATEGORY_SELECT_LABEL", "Seleccione el nombre de la categor�a que desea eliminar");
define("DELETE_BUTTON", "Borrar");
define("NO_CATEGORIES_HERE", "No hay categor�as de aqu�");

//para admin_information.php
define("WELCOME_LABEL", "Bienvenido");
define("WELCOME_MESSAGE", "Bienvenido al panel de control de la administraci�n OpenLD. Aqu� est� una lista de algunas cosas que usted puede hacer:");
define("MODERATE_CATEGORIES_AND_LINKS", "categor�as moderado y enlaces");
define("SET_OPTIONS_AND_PREFERENCES", "establecer las opciones y preferencias");
define("CONTROL_PERMISSIONS", "permisos de control");
define("BAN_IPS", "prohibici�n de IP");
define("LIMIT_SPAM", "spam l�mite por la censura de texto");
define("SOFTWARE_INFO", "informaci�n de software");
define("OPENLD_VERSION_LABEL", "versi�n OpenLD");
define("SERVER_INFORMATION", "Informaci�n del servidor");
define("SERVER_NAME_LABEL", "Nombre:");
define("SERVER_SOFTWARE_LABEL", "software");
define("SERVER_PROTOCOLL_LABEL", "Protocolo");
define("SCRIPT_ENVIRONMENT_LABEL", "Gui�n para el Medio Ambiente");
define("OS_LABEL", "Sistema operativo:");
define("PHP_LABEL", "PHP");
define("DATABASE_LABEL", "Base de datos");
define("ROWS_LABEL", "Filas:");
define("SIZE_LABEL", "Size:");
define("ACCELERATOR_LABEL", "Acelerador de:");

//para admin_accept_links.php
define("APPROVED_LINKS_LABEL", "Enlaces Aprobado");

//para admin_login.php
define("INCORRECT_PASSWORD_ERROR", "nombre de usuario correcto, pero con una contrase�a incorrecta");
define("INCORRECT_USERNAME_ERROR", "contrase�a correcta, pero con nombre de usuario incorrecto");
define("USERNAME_AND_PASSWORD_INCORRECT", "su nombre de usuario y la contrase�a es incorrecta");
define("LOGIN_TITLE", "Entrar al Panel de Administraci�n");
define("USERNAME_LABEL", "Usuario");
define("PASSWORD_LABEL", "Password");
define("FORGOT_PASSWORD", "Recordar Contrase�a");
define("SEND_NEW_PASSWORD", "Enviar nueva contrase�a");
define("PASSWORD_SENT", "La informaci�n de su cuenta se han enviado a su direcci�n de correo electr�nico");
define("FORGOT_MAIL", "Haga clic en el enlace de abajo para obtener una nueva contrase�a");
define("MAIL_NOT_FOUND_IN_DB", "el correo electr�nico que ha insertado no se puede encontrar en la base de datos");
define("NEW_PASSWORD", "New Password");

//para mover ..
define("MOVE_LINK_LABEL", "Mover Link");
define("MOVE_CATEGORY_LABEL", "Mover Categor�a");
define("MOVE_TO", "Mover a");

//texto en admin_options.php
define("ADMIN_LABEL", "Admin");
define("ADMIN_USERNAME_LABEL", "nombre de usuario administrador");
define("ADMIN_PASSWORD_LABEL", "contrase�a de administrador");
define("ADMIN_EMAIL_LABEL", "Admin e-mail");
define("CENTRAL_FEATURES", "caracter�sticas fundamentales");
define("DESCRIPTION_LABEL", "Descripci�n");
define("DOMAIN_LABEL", "URL");
define("LANGUAGE_LABEL", "Idioma");
define("LINK_TYPES_LABEL", "tipos de Enlace");
define("RECIPROCAL_LINKS_LABEL", "Enlaces rec�procos");
define("REGULAR_LINKS_LABEL", "enlaces regulares");
define("DISPLAY_LABEL", "Pantalla");
define("LINKS_SORT_BY_LABEL", "Enlaces ordenados por");
define("CATEGORIES_SORT_BY_LABEL", "ordenados por categor�as");
define("TITLE_REVERSED", "T�tulo inversa");
define("DESCRIPTION_REVERSED", "Descripci�n invertido");
define("DATE_LABEL", "Fecha");
define("DATE_REVERSED", "Fecha en que se invierte");
define("RECIPROCAL_URL", "Reciprocal URL");
define("RECIPROCAL_URL_DESC", "Reciprocal URL invertido");
define("URL", "URL");
define("URL_REVERSED", "direcci�n inversa");
define("CATEGORY_COLUMNS_DESCRIPTION", "columnas de la categor�a");
define("LINKS_PER_PAGE", "Enlaces por p�gina");
define("INPUT_CONTROL", "control de entrada");
define("MAXIMUM_LINK_DESCRIPTION", "descripci�n Enlaces m�ximo");
define("MINIMUM_LINK_DESCRIPTION", "descripci�n Enlaces m�nimo");
define("MAXIMUM_CATEGORY_DESCRIPTION", "Descripci�n Gatos m�ximo");
define("MINIMUM_CATEGORY_DESCRIPTION", "descripci�n de los gatos m�nimo");
define("SAVE_BUTTON", "Guardar cambios");
define("DISABLE_EXTENSIONS_LABEL", "desactivar las extensiones");
define("ENABLE_GZIP_LABEL", "Habilitar la compresi�n gzip");
define("HIDE_ADMIN_BUTTON", "bot�n Ocultar admin");
define("DENY_INDEX_PAGE_SUBMISSIONS", "v�nculos de la p�gina Denegar frente");
define("DISPLAY_UNACCEPTED_LINKS", "v�nculos de pantalla aceptada");
define("OPEN_LINKS_IN_NEW_WINDOWS", "Abrir enlaces en ventanas nuevas");
define("SEARCH_RESULTS_PER_PAGE", "Resultados de la b�squeda por p�gina");

//para los temas
define("TEMPLATE_SUBMIT", "Usar este tema");
define("CHOSE_TEMPLATE", "Temas Seleccione");
define("NO_TEMPLATES_WERE_FOUND", "No temas encontrados");
define("DIRECTORY_LABEL", "Directorio");
define("THUMBNAIL_PREVIEW", "Vista Previa");
//temas de edici�n de
define("FILE_LABEL", "Archivo");
define("PERMISSION_LABEL", "Permiso");
define("NOT_WRITEABLE", "No se puede escribir");
define("IS_WRITEABLE", "grabable");
define("EDIT_TEMPLATE", "Editar plantilla");

//para admin_words.php
define("DOUBLE_ADD", "<br> este texto ya est� censurado");
define("NO_INPUT_WORD", "<br> necesita insertar texto de censurar");
define("NO_ID_FOUND", "<br> el ID no se encuentra en la base de datos");
define("MORE_THAN_ONE_ID_FOUND", "<br> un error serio! m�s de un ID se encuentra en la base de datos. Informar de este error aqu�: http://sourceforge.net/tracker/?group_id=181014&atid=895496");
define("EDIT_CENSORED_NOT_FOUND", "no hay texto se insert� para censurar");
define("NO_BANNED_WORDS", "Actualmente no hay texto censurado");
define("UPDATE", "Update");
define("REMOVE", "Eliminar");
define("ACTION", "Acci�n");
define("BAN_WORDS", "palabras de prohibici�n");
define("NEW_CENSORED_WORD", "Nuevo texto censurado");
define("CENSORED_WORD", "text Censored");
define("REPLACE_WITH", "Reemplazar");
define("EDIT_DELETE_BANNED_WORDS", "Editar texto censurado");

//para categories.php
define("NO_SUBCATEGORIES_FOUND", "No hay subcategor�as de esta categor�a");

//para editar la categor�a y enlace
define("EDIT_CATEGORY_LABEL", "Editar Categor�a");
define("EDIT_LINK_LABEL", "enlace Editar");

//para el pie de p�gina
define("POWERED_BY", "Powered by");

//para las advertencias
define("WRONG_CAPTCHA", "Wrong captcha inserted");
define("NO_TITLE_AT_ALL", "t�tulo que falta");
define("TITLE_TOO_LONG", "inserta el t�tulo es m�s largo que lo permitido");
define("TITLE_TOO_SHORT", "inserta el t�tulo es m�s corto de lo permitido");
define("ILLEGAL_WORDS_WITHIN_TITLE", "inserta el t�tulo incluye un texto censurado");
define("TITLE_ALREADY_THERE", "ya existe un t�tulo similar");
define("NO_DESCRIPTION_AT_ALL", "descripci�n que falta");
define("DESCRIPTION_TOO_LONG", "la descripci�n inserta es m�s largo de lo permitido");
define("DESCRIPTION_TOO_SHORT", "la descripci�n inserta es m�s corta de lo permitido");
define("ILLEGAL_WORDS_WITHIN_DESCRIPTION", "la descripci�n insertada incluye texto censurado");
define("NAME_TOO_LONG", "inserta el nombre es m�s largo que lo permitido");
define("NAME_TOO_SHORT", "inserta el nombre es m�s corto de lo permitido");
define("ILLEGAL_WORDS_WITHIN_NAME", "el nombre inserta incluye texto censurado");
define("EMAIL_TOO_LONG", "el correo electr�nico insertado es m�s de lo permitido");
define("EMAIL_TOO_SHORT", "el correo electr�nico insertado es menor que lo permitido");
define("ILLEGAL_WORDS_WITHIN_EMAIL", "el correo electr�nico incluye el texto insertado censurado");
define("URL_TOO_LONG", "La URL introducida es m�s largo de lo permitido");
define("URL_TOO_SHORT", "La URL introducida es m�s corta de lo permitido");
define("ILLEGAL_WORDS_WITHIN_URL", "La URL introducida incluye texto censurado");
define("URL_ALLREADY_THERE", "ya hay una direcci�n URL similar");
define("NO_RECIPROCAL_URL_AT_ALL", "url falta de reciprocidad");
define("RECIPROCAL_URL_TOO_LONG", "la url de reciprocidad inserta es m�s largo de lo permitido");
define("RECIPROCAL_URL_TOO_SHORT", "la url de reciprocidad inserta es m�s corta de lo permitido");
define("ILLEGAL_WORDS_WITHIN_RECIPROCAL_URL", "a�ade el texto censurados incluye rec�proca");
define("RECIPROCAL_NOT_ALLOWED_BUT_CHOSED", "no la opci�n rec�proca es avilable");
define("NOT_CORRECT_IP_ADDRESS", "la direcci�n IP insertado es incorrecto");
define("NO_USERNAME_AT_ALL", "el nombre de usuario que falta");
define("TOO_LONG_USERNAME", "inserta el nombre de usuario es mayor de lo permitido");
define("TOO_SHORT_USERNAME", "el nombre de usuario inserta es m�s corta de lo permitido");
define("NO_PASSWORD_AT_ALL", "la clave es que falta");
define("TOO_LONG_PASSWORD", "inserta la contrase�a es m�s largo de lo permitido");
define("TOO_SHORT_PASSWORD", "inserta la contrase�a es m�s corta de lo permitido");
define("NO_MINIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "Descripci�n de v�nculo m�nimo que falta");
define("MINIMUM_ALLOWED_LINK_DESCRIPTION", "a�ade la descripci�n de v�nculo m�nimo no era num�rica");
define("NO_MAXIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "Descripci�n del v�nculo m�ximo que falta");
define("MAXIMUM_ALLOWED_LINK_DESCRIPTION", "la descripci�n del link insertado m�xima no era num�ricos");
define("NO_MINIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "descripci�n de la categor�a m�nima es de que falta");
define("MIN_CAT_DESC_NOT_NUMERIC", "a�ade la descripci�n de la categor�a m�nimo no era num�rica");
define("NO_MAXIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "descripci�n de la categor�a m�xima es de que falta");
define("MAX_CAT_DESC_NOT_NUMERIC", "a�ade la descripci�n de la categor�a m�xima no era num�rica");
define("MINIMUM_LINK_DESCRIPTION_BIGGER_THAN_MAXIMUM", "a�ade la descripci�n de v�nculo m�nimo debe ser menor que la relaci�n m�xima de descripci�n");
define("MINIMUM_CAT_DESCRIPTION_BIGGER_THAN_MAXIMUM", "a�ade la descripci�n de la categor�a m�nima debe ser menor que la descripci�n de la categor�a m�xima");
define("LINKS_PER_PAGE_NOT_NUMERIC", "los enlaces insertados por p�gina no es num�rico");
define("NO_LINKS_PER_PAGE_AT_ALL", "n�mero de enlaces por p�gina no se encuentra");
define("NO_COLUMN_NUMBER_AT_ALL", "n�mero de columnas que falta");
define("COLUMN_NUMBER_IS_NOT_A_NUMBER", "el valor insertado por el n�mero de columnas no es num�rico");
define("NO_SORT_OPTION_AT_ALL", "opci�n de clasificaci�n es que falta");
define("SORT_OPTION_TOO_LONG", "la opci�n de ordenaci�n inserta es m�s largo de lo permitido");
define("SORT_OPTION_TOO_SHORT", "la opci�n de ordenaci�n inserta es m�s corta de lo permitido");
define("NO_LANGUAGE_AT_ALL", "opci�n de idioma no se encuentra");
define("LANGUAGE_TOO_LONG", "el idioma seleccionado es m�s largo de lo permitido"); //<------|<
define("LANGUAGE_TOO_SHORT", "el idioma seleccionado es menor que lo permitido"); //<---|^- esto es �til?
define("PASSWORD_EQUALS_USERNAME", "contrase�a debe ser diferente del nombre de usuario");
define("NO_LINKTYPE_AT_ALL", "opci�n de tipo de v�nculo que falta");
define("REGULAR_NOT_ALLOWED_BUT_CHOSED", "no la opci�n de regular est� disponible");
define("NO_CATEGORY_SELECTED", "no se ha seleccionado la categor�a");
define("CATEGORY_ID_NOT_A_NUMBER", "el ID de la categor�a no es un n�mero");
define("CATEGORY_ID_NOT_IN_DB", "el ID de la categor�a no existe");
define("INVALID_URL_FORMAT", "el formato de URL no es v�lida");
define("BAD_REQUEST", "Bad request");
define("ZLIB_NOT_ENABLED", "usted debe tener acceso a zlib para utilizar compresi�n gzip");
define("INDEX_PAGE_NOT_OPEN_FOR_SUBMISSION", "no la primera p�gina est� abierta para la presentaci�n de");
define("SEARCH_OPTION_WARNING", "resultados de la b�squeda campo requiere de entrada num�rica");

//para links.php
define("NO_LINKS_HERE", "No hay v�nculos aqu�");
define("SUBMITTED_LABEL", "Enviado");

//para la b�squeda
define("NO_MATCHES", "No se encontr� resultado");
define("MAKE_A_SEARCH", "Hacer una b�squeda");
define("SEARCH_FOR", "Buscar");
define("SEARCH_IN", "Buscar en");
define("SORT_BY", "Ordenar por");
define("ALL", "Todo");
define("ALPHABETICAL_LABEL", "Alfab�tico");
define("ALPHABETICAL_REVERSED", "Alfab�tico invertido");
define("NEWEST_FIRST", "Lo nuevo primero");
define("OLDEST_FIRST", "Lo viejo primero");
define("SERCHED_FOR_LABEL", "Resultados de la b�squeda para");

//para submit.php
define("SUBMIT_SUCCESS", "El enlace se ha enviado correctamente");
define("SUBMIT_NAME_LABEL", "Nombre de usted o su empresa o su organizaci�n / su grupo:"); //quitar esta etiqueta de
define("SUBMIT_A_LINK", "Enviar un v�nculo");
define("REGULAR_LINK", "manera regular");
define("RECIPROCAL_LINK", "enlace rec�proco");
define("RECIPROCAL_URL_LABEL", "Reciprocal URL");
define("CLOSED_FOR_SUBMISSIONS", "El directorio est� actualmente cerrado para la presentaci�n");
define("PAYMENT_CANCELLED", "El pago se han cancelado");
define("PROCESSING_PAYMENT", "Procesamiento de Pagos ...");
define("PROCESSING_PAYMENT_DESCRIPTION", "Gracias por esperar, su solicitud se est� procesando ...");

//para suggest.php
define("SUGGEST_A_CATEGORY", "Sugerir una Categor�a");
define("SUBMIT_SUCCESS_CATEGORY", "La sugerencia que ha hecho con �xito");

//para las extensiones
define("EXTENSIONS_LABEL", "Extensiones");
define("EDIT_EXTENSIONS", "Extensiones Editar");
define("AVAILABLE_EXTENSIONS_FOR_INSTALL", "extensiones disponibles");
define("NO_INSTALLED_EXTENSIONS", "Actualmente no hay extensiones instaladas");
define("NO_EXTENSIONS_FOR_INSTALL", "No hay extensi�n disponible para instalar");
define("SIMPLE_LABEL", "Simple");
define("FREE_LABEL", "Libre");
//Errores de extensi�n
define("EXTENSION_ROOT_ERROR", "extensi�n elemento ra�z es incorrecto o falta");
define("EXTENSION_ID_ERROR", "elemento de extensi�n / id es incorrecto o falta");
define("EXTENSION_ID_ERROR2", "elemento de extensi�n / ID no coincide con el nombre de la carpeta de extensi�n");
define("EXTENSION_TITLE_ERROR", "elemento de extensi�n / t�tulo es incorrecto o falta");
define("EXTENSION_VERSION_ERROR", "elemento de extensi�n / versi�n es incorrecto o falta");
define("EXTENSION_DESCRIPTION_ERROR", "elemento de extensi�n / descripci�n es incorrecto o falta");
define("EXTENSION_AUTHOR_ERROR", "elemento de extensi�n / autor es incorrecto o falta");
define("EXTENSION_HOOKS_ERROR", "elemento de extensi�n / gancho es incorrecto o falta");
define("EXTENSION_HOOKS_HOOK_ERROR", "elemento de extensi�n / gancho / gancho son malformados o no");
define("EXTENSION_HOOKS_HOOK_ERROR2", "elemento de extensi�n / gancho / gancho falta un atributo 'id'");
define("EDIT_EXTENSION", "Editar Extension");
define("HOOKS", "ganchos");
define("EXTENSION_PERMISSION_WARNING", "usted debe cambiar los permisos en el archivo:%s a 755 con el fin de editar en l�nea");
define("EXTENSION_FILE_NOT_FOUND", "%s no se pudo encontrar");
define("EXTENSION_ALLREADY_INSTALLED", "la extensi�n %s ya est� instalado");
define("EXTENSIONS_DISABLED", "Extensiones est� deshabilitada. Tienes que ir a la Administraci�n-> Otions y cambiar las extensiones de preferencia antes de las extensiones instaladas con discapacidad puedan tener efecto.");

//new defines
define("POSITION_NOT_A_NUMBER", "la posici�n que usted sugiere no es un n�mero num�rico v�lido");
define("HARD_BAN", "Display ning�n contenido con este texto");
define("SEARCH_TYPE", "Tipo de b�squeda");
define("VERSION_LABEL", "versi�n");
define("AUTHOR_LABEL", "Autor");
define("INSTALL_LABEL", "Install");
define("UNINSTALL_LABEL", "Desinstalar");
define("ID_LABEL", "ID");
define("DETAILS_LABEL", "Detalles");
define("categor�as", "Subcategor�a");
define("SPONSORED_LINKS", "Enlaces patrocinados");
define("PAID_LINKS", "v�nculos de pago");
define("SPONSOR_LINK", "Enlace Patrocinado");
define("PAID_LINK", "Enlace Paid");
define("LOG_OUT", "Salir");
define("PRICE_LABEL", "Precio");
define("CURRENCY_LABEL", "Moneda");
define("NOT_PAID", "pendiente de pago");
define("IS_PAYMENT_PENDING", "pago recibido");
define("INVALID_EMAIL", "la direcci�n de correo insertada no era v�lida");
define("WRONG_PASSWORD_CONFIRMATION", "inserta la contrase�a no coincide con la confirmaci�n");
define("CHANGE_PASSWORD_LABEL", "Cambiar Contrase�a");
define("ENTER_NEW_PASSWORD", "Introduzca una nueva contrase�a");
define("RETYPE_PASSWORD", "Volver a escribir contrase�a");
define("SAVE_PASSWORD_BUTTON", "Guardar contrase�a");
define("PASSWORD_HAS_BEEN_CHANGED", "- Su contrase�a ha cambiado");
define("ACCOUNT_LABEL", "Cuenta");
define("SHOW_PHP_INFO", "Mostrar informaci�n");
define("SEF_REWRITE_LABEL", "Rewrite capa");
define("INDEX_PAGE", "p�gina �ndice");

// generaci�n de la p�gina
define("PAGE_GENERATED_IN", "Page generated in");
define("SECONDS", "Segundos");