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


// strings comum
define("TITLE_LABEL", "T�tulo");
define("CATEGORY_LABEL", "Categoria");
define("CAPTCHA_LABEL", "Captcha");
define("URL_LABEL", "URL");
define("LINK_DESCRIPTION_LABEL", "Descri��o");
define("CATEGORY_DESCRIPTION_LABEL", "Descri��o da Categoria");
define("NAME_LABEL", "Nome");
define("EMAIL_LABEL", "Email");
define("EDIT_LABEL", "Editar");
define("ACCEPT_LABEL", "Aceitar");
define("UNACCEPT_LABEL", "Unaccept");
define("MOVE_LABEL", "Move");
define("DELETE_LABEL", "Apagar");
define("NAVIGATION_LABEL", "Navega��o");
define("HOME_LABEL", "Home");
define("SUBMIT_LINK_LABEL", "Enviar um link");
define("SUGGEST_CATEGORY_LABEL", "Sugerir uma categoria");
define("SEARCH_LABEL", "Pesquisar");

// Para include / functions.php
define("RECIPROCAL_NOT_FROM_SAME_DOMAIN", "o url rec�proca deve vir do mesmo dom�nio como o link url");
define("NO_RECIPROCAL_FOUND", "liga��o rec�proca n�o foi encontrado no URL rec�proco:");
define("URL_COULD_NOT_BE_LOADED", "n�o p�de carregar o URL rec�proco:");

// para o admin_menu
define("ACCEPT_CATEGORIES_LABEL", "Aceitar Categorias");
define("ACCEPT_LINKS_TITLE", "Aceitar links");
define("BROWSE", "Browse");
define("LINKS_LABEL", "Links");
define("CATEGORIES_LABEL", "Categorias");
define("INFORMATION_LABEL", "Information");
define("OPTION_LABEL", "Op��es");
define("CENSORING", "Censura");
define("IP_BANNING", "IP Banning");
define("TEMPLATES_TITLE", "Temas");
define("ADMIN_MENU", "menu Admin");
define("DIRECTORY_MANAGEMENT", "Gerenciamento de Diret�rio");
define("GENERAL_LABEL", "General");
define("PLUGINS_LABEL", "Plugins");

// para IP proibi��o
define("CENSORED_WORD_IS_NOTHING", "n�o, voc� fez inserir algo a censurar");
define("YOU_MUST_SELECT_AN_IP", "voc� deve selecionar um IP");
define("IP_ALLREADY_BANNED", "o IP selecionado j� est� proibido ");
define("IP_BANNED_QOUTE", "Est� proibido!");
define("NEW_IP_BAN", "Novo IP proibi��o");
define("ADD_A_BAN", "Adicionar uma proibi��o");
define("IP_NUMBER", "N�mero IP");
define("MANAGE_BANS", "proibi��es Gerenciar");
define("UNBAN_IP", "Banir IP");
define("SELECT_IP_TO_UNBAN", "Selecione o IP do usu�rio que deseja unban");
define("UNBAN", "Banir");
define("INFO", "Info");
define("NO_IP_BANS", "N�o IPs s�o proibidas ainda");

// para plugins
define("PLUGIN_DOES_NOT_EXIST", "o plugin n�o existe");
define("PLUGIN_NOT_SELECTED", "nenhum plugin foi selecionado");

// para adicionar
define("ADD_LABEL", "Adicionar");
define("ADD_LINK_LABEL", "Adicionar Link");
define("ADD_CATEGORY_LABEL", "Adicionar Categoria");

// para pagina��o
define ("NEXT_PAGE","Next Page");
define ("PREVIOUS_PAGE","P�gina anterior");

// para admin_categories.php
// define("PROPOSED_CATEGORY_NAME", "nome da categoria proposto");
// define("PROPOSED_TITLE", t�tulo "proposto, editar como quiser");
// define("PROPOSED_CATEGORY_DESCRIPTION", "Descri��o da Categoria");
// define("PROPOSED_DESCRIPTION_LABEL", "A descri��o. Edite como quiser");
define("ACEITO", "Aceitar");
define("MODIFIE_CATEGORIES", "categorias Modificar");
define("SELECT_CATEGORY", "Selecione o nome da categoria que pretende editar");
define("DELETE_CATEGORY", "Excluir uma categoria");
define("DELETE_CATEGORY_LABEL", "Categoria a ser exclu�do");
define("DELETE_CATEGORY_SELECT_LABEL", "Selecione o nome da categoria que voc� deseja excluir");
define("DELETE_BUTTON", "Apagar");
define("NO_CATEGORIES_HERE", "N�o h� aqui categorias");

// para admin_information.php
define("WELCOME_LABEL", "Welcome");
define("WELCOME_MESSAGE", "Bem-vindo ao painel de controle da administra��o OpenLD. Aqui est� uma lista de algumas coisas que voc� pode fazer: ");
define("MODERATE_CATEGORIES_AND_LINKS", "categorias moderada e links");
define("SET_OPTIONS_AND_PREFERENCES", "definir as op��es e prefer�ncias");
define("CONTROL_PERMISSIONS", "as permiss�es de controle");
define("BAN_IPS", "IPs proibi��o");
define("LIMIT_SPAM", "spam limite censurando o texto");
define("SOFTWARE_INFO", "Informa��es sobre o software");
define("OPENLD_VERSION_LABEL", "vers�o OpenLD");
define("SERVER_INFORMATION", "Informa��es do servidor");
define("SERVER_NAME_LABEL", "Nome:");
define("SERVER_SOFTWARE_LABEL", "Software");
define("SERVER_PROTOCOLL_LABEL", "Protocolo");
define("SCRIPT_ENVIRONMENT_LABEL", "Script Ambiente");
define("OS_LABEL", "sistema operacional:");
define("PHP_LABEL", "PHP");
define("DATABASE_LABEL", "Database");
define("ROWS_LABEL", "Linhas:");
define("SIZE_LABEL", "Size:");
define("ACCELERATOR_LABEL", "Accelerator");

// para admin_accept_links.php
define("APPROVED_LINKS_LABEL", "links Aprovado");

// para admin_login.php
define("INCORRECT_PASSWORD_ERROR", "username correto, mas com a senha errada");
define("INCORRECT_USERNAME_ERROR", "senha correta, mas com nome errado");
define("USERNAME_AND_PASSWORD_INCORRECT", "seu nome de usu�rio e senha estava incorreto");
define("LOGIN_TITLE", "Acesso ao Painel de Administra��o");
define("USERNAME_LABEL", "Username");
define("PASSWORD_LABEL", "Password");
define("FORGOT_PASSWORD", "Esqueci a senha");
define("SEND_NEW_PASSWORD", "Enviar nova senha");
define("PASSWORD_SENT", "informa��es de sua conta foram enviadas para seu endere�o de e-mail");
define("FORGOT_MAIL", "Clique no link abaixo para obter uma nova senha");
define("MAIL_NOT_FOUND_IN_DB", "o e-mail inserido n�o p�de ser encontrado no banco de dados");
define("NEW_PASSWORD", "Nova Senha");

// para mover ..
define("MOVE_LINK_LABEL", "Move Link");
define("MOVE_CATEGORY_LABEL", "Move Categoria");
define("MOVE_TO", "Move to");

// texto admin_options.php
define("ADMIN_LABEL", "Admin");
define("ADMIN_USERNAME_LABEL", "username admin");
define("ADMIN_PASSWORD_LABEL", "Admin password");
define("ADMIN_EMAIL_LABEL", "Admin E-mail");
define("CENTRAL_FEATURES", "caracter�sticas Central");
define("DESCRIPTION_LABEL", "Descri��o");
define("DOMAIN_LABEL", "URL");
define("LANGUAGE_LABEL", "Idioma");
define("LINK_TYPES_LABEL", "tipo link");
define("RECIPROCAL_LINKS_LABEL", "liga��es rec�procas");
define("REGULAR_LINKS_LABEL", "liga��es regulares");
define("DISPLAY_LABEL", "Display");
define("LINKS_SORT_BY_LABEL", "Links ordenados por");
define("CATEGORIES_SORT_BY_LABEL", "classificadas por categorias");
define("TITLE_REVERSED", "T�tulo invertida");
define("DESCRIPTION_REVERSED", "Descri��o invertida");
define("DATE_LABEL", "Data");
define("DATE_REVERSED", "Date invertido");
define("RECIPROCAL_URL", "Reciprocal URL");
define("RECIPROCAL_URL_DESC", "Reciprocal URL invertida");
define("URL", "URL");
define("URL_REVERSED", "URL invertida");
define("CATEGORY_COLUMNS_DESCRIPTION", "colunas Categoria");
define("LINKS_PER_PAGE", "Links por p�gina");
define("INPUT_CONTROL", "controle de entrada");
define("MAXIMUM_LINK_DESCRIPTION", "descri��o m�ximo");
define("MINIMUM_LINK_DESCRIPTION", "descri��o m�nimo");
define("MAXIMUM_CATEGORY_DESCRIPTION", "descri��o m�ximo");
define("MINIMUM_CATEGORY_DESCRIPTION", "descri��o m�nimo");
define("SAVE_BUTTON", "Salvar altera��es");
define("DISABLE_EXTENSIONS_LABEL", "desactivar extens�es");
define("ENABLE_GZIP_LABEL", "Ativar compacta��o gzip");
define("HIDE_ADMIN_BUTTON", "bot�o Hide admin");
define("DENY_INDEX_PAGE_SUBMISSIONS", "Negue links primeira p�gina");
define("DISPLAY_UNACCEPTED_LINKS", "links Display inaceit�vel");
define("OPEN_LINKS_IN_NEW_WINDOWS", "Abrir links em novas janelas");
define("SEARCH_RESULTS_PER_PAGE","Buscar resultados por p�gina");

// para os temas
define("TEMPLATE_SUBMIT", "Usar o tema");
define("CHOSE_TEMPLATE", "temas Select");
define("NO_TEMPLATES_WERE_FOUND", "N�o temas encontrados");
define("DIRECTORY_LABEL", "Diret�rio");
define("THUMBNAIL_PREVIEW", "Preview");
// edi��o de temas
define("FILE_LABEL", "Arquivo");
define("PERMISSION_LABEL", "Permiss�o");
define("NOT_WRITEABLE", "N�o grav�vel");
define("IS_WRITEABLE", "grav�vel");
define("EDIT_TEMPLATE", "Editar template");

// para admin_words.php
define("DOUBLE_ADD", "<br> este texto j� est� censurado");
define("NO_INPUT_WORD", "<br> voc� precisa inserir texto para censurar");
define("NO_ID_FOUND", "<br> o id n�o foi encontrado no banco de dados");
define("MORE_THAN_ONE_ID_FOUND", "<br> erro grave! mais de um ID foi encontrado no banco de dados. Denunciar este erro aqui: http://sourceforge.net/tracker/?group_id=181014&atid=895496");
define("EDIT_CENSORED_NOT_FOUND", "o texto n�o foi inserida a censurar");
define("NO_BANNED_WORDS", "N�o existe actualmente texto censurado");
define("UPDATE", "Update");
define("REMOVE", "Remover");
define("ACTION", "Action");
define("BAN_WORDS", "Adicionar texto a censura");
define("NEW_CENSORED_WORD", "Novo texto censurado");
define("CENSORED_WORD", "texto Censurado");
define("REPLACE_WITH", "Substituir");
define("EDIT_DELETE_BANNED_WORDS", "Editar texto censurado");

// para categories.php
define("NO_SUBCATEGORIES_FOUND", "N�o h� subcategorias nesta categoria");

// para editar categoria e link
define("EDIT_CATEGORY_LABEL", "Editar Categoria");
define("EDIT_LINK_LABEL", "Edit Link");

// para o rodap�
define("POWERED_BY", "Powered by");

// para alertas
define("WRONG_CAPTCHA", "Wrong captcha inserted");
define("NO_TITLE_AT_ALL", "title is missing");
define("TITLE_TOO_LONG", "o t�tulo inserido � mais do que o permitido ");
define("TITLE_TOO_SHORT", "o t�tulo introduzido � menor do que o permitido ");
define("ILLEGAL_WORDS_WITHIN_TITLE", "o t�tulo inserido inclui texto censurado ");
define("TITLE_ALREADY_THERE", "j� existe um t�tulo similar");
define("NO_DESCRIPTION_AT_ALL", "descri��o est� faltando");
define("DESCRIPTION_TOO_LONG", "a descri��o inserida � mais do que o permitido");
define("DESCRIPTION_TOO_SHORT", "a descri��o inserida � menor do que o permitido");
define("ILLEGAL_WORDS_WITHIN_DESCRIPTION", "a descri��o inserida inclui texto censurado");
define("NAME_TOO_LONG", "o nome inserido � maior do que o permitido");
define("NAME_TOO_SHORT", "o nome inserido � menor do que o permitido");
define("ILLEGAL_WORDS_WITHIN_NAME", "o nome inserido inclui texto censurado");
define("EMAIL_TOO_LONG", "o e-mail inserido � maior do que o permitido");
define("EMAIL_TOO_SHORT", "o e-mail inserido � menor do que o permitido");
define("ILLEGAL_WORDS_WITHIN_EMAIL", "o e-mail inserido inclui texto censurado");
define("URL_TOO_LONG", "O URL inserido � maior do que o permitido");
define("URL_TOO_SHORT", "O URL inserido � menor do que o permitido");
define("ILLEGAL_WORDS_WITHIN_URL", "O URL inserido inclui texto censurado");
define("URL_ALLREADY_THERE", "j� existe uma URL similar");
define("NO_RECIPROCAL_URL_AT_ALL", "url rec�proca est� faltando");
define("RECIPROCAL_URL_TOO_LONG", "O URL inserido rec�proca � mais do que o permitido");
define("RECIPROCAL_URL_TOO_SHORT", "O URL inserido rec�proca � mais curto do que o permitido");
define("ILLEGAL_WORDS_WITHIN_RECIPROCAL_URL", "o texto inserido rec�proco inclui censuradas ");
define("RECIPROCAL_NOT_ALLOWED_BUT_CHOSED", "n�o a op��o rec�proca � avilable");
define("NOT_CORRECT_IP_ADDRESS", "inserido no endere�o IP est� incorreto ");
define("NO_USERNAME_AT_ALL", "o nome � fict�cio");
define("TOO_LONG_USERNAME", "o nome de usu�rio inserido � maior do que o permitido");
define("TOO_SHORT_USERNAME", "o nome de usu�rio inserido � menor do que o permitido");
define("NO_PASSWORD_AT_ALL", "a senha est� em falta");
define("TOO_LONG_PASSWORD", "a senha inserida � mais do que o permitido");
define("TOO_SHORT_PASSWORD", "a senha inserida � menor do que o permitido");
define("NO_MINIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "descri��o do link m�nimo est� faltando");
define("MINIMUM_ALLOWED_LINK_DESCRIPTION", "a descri��o do link inserido m�nimo n�o foi num�rico ");
define("NO_MAXIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "descri��o do link m�xima est� em falta");
define("MAXIMUM_ALLOWED_LINK_DESCRIPTION", "a descri��o do link inserido o m�ximo n�o foi num�rico ");
define("NO_MINIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "descri��o da categoria m�nimo est� faltando");
define("MIN_CAT_DESC_NOT_NUMERIC", "a descri��o da categoria inserida m�nimo n�o foi num�rico");
define("NO_MAXIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "descri��o da categoria m�xima � falta");
define("MAX_CAT_DESC_NOT_NUMERIC", "a descri��o da categoria n�o foi inserido no m�ximo num�rico");
define("MINIMUM_LINK_DESCRIPTION_BIGGER_THAN_MAXIMUM", "a descri��o do link inserido m�nimo deve ser menor do que a liga��o m�xima descri��o ");
define("MINIMUM_CAT_DESCRIPTION_BIGGER_THAN_MAXIMUM", "a descri��o da categoria inserida m�nimo deve ser menor do que a descri��o da categoria m�xima");
define("LINKS_PER_PAGE_NOT_NUMERIC", "os links inseridos por p�gina n�o foi num�rico");
define("NO_LINKS_PER_PAGE_AT_ALL", "n�mero de links por p�gina est� faltando");
define("NO_COLUMN_NUMBER_AT_ALL", "n�mero de colunas est� faltando");
define("COLUMN_NUMBER_IS_NOT_A_NUMBER", "o valor inserido para o n�mero de colunas n�o foi num�rico ");
define("NO_SORT_OPTION_AT_ALL", "op��o de classifica��o est� em falta");
define("SORT_OPTION_TOO_LONG", "a op��o de classifica��o inserido � maior do que o permitido ");
define("SORT_OPTION_TOO_SHORT", "a op��o de classifica��o inserido � menor do que o permitido ");
define("NO_LANGUAGE_AT_ALL", "op��o de idioma est� em falta");
define("LANGUAGE_TOO_LONG", "o idioma selecionado � maior do que o permitido"); // <------|<
define("LANGUAGE_TOO_SHORT", "o idioma selecionado � menor do que o permitido"); // <---|^- isso � �til?
define("PASSWORD_EQUALS_USERNAME", "senha deve ser diferente do nome de usu�rio");
define("NO_LINKTYPE_AT_ALL", "op��o de tipo de liga��o est� faltando");
define("REGULAR_NOT_ALLOWED_BUT_CHOSED", "n�o a op��o regular est� dispon�vel");
define("NO_CATEGORY_SELECTED", "A categoria n�o foi selecionado");
define("CATEGORY_ID_NOT_A_NUMBER", "o id da categoria n�o � um n�mero");
define("CATEGORY_ID_NOT_IN_DB", "a id categoria n�o existe");
define("INVALID_URL_FORMAT", "o formato de URL � inv�lido");
define("BAD_REQUEST", "pedido mau");
define("ZLIB_NOT_ENABLED", "voc� deve ter acesso a zlib, a fim de usar compress�o gzip");
define("INDEX_PAGE_NOT_OPEN_FOR_SUBMISSION", "n�o a p�gina � aberta para a apresenta��o ");
define("SEARCH_OPTION_WARNING", "resultados de pesquisa de campo requer entrada num�rico");

// para links.php
define("NO_LINKS_HERE", "N�o existem links here");
define("SUBMITTED_LABEL", "Submiss�o");

// para a pesquisa
define("NO_MATCHES", "n�o se achou");
define("MAKE_A_SEARCH", "Fa�a uma pesquisa");
define("SEARCH_FOR", "Pesquisar");
define("SEARCH_IN", "Procurar em");
define("SORT_BY", "Ordenar por");
define("ALL", "All");
define("ALPHABETICAL_LABEL", "ordem alfab�tica");
define("ALPHABETICAL_REVERSED", "por ordem alfab�tica invertida");
define("NEWEST_FIRST", "Novos primeiro");
define("OLDEST_FIRST", "Antigos primeiro");
define("SERCHED_FOR_LABEL", "Pesquisa feita por");

// para submit.php
define("SUBMIT_SUCCESS", "A liga��o foi submetido com sucesso");
define("SUBMIT_NAME_LABEL", "Name of You / Your Company / Your Organization / seu grupo:"); // remover esta etiqueta
define("SUBMIT_A_LINK", "Enviar um link");
define("REGULAR_LINK", "Link Regular");
define("RECIPROCAL_LINK", "Link rec�proco");
define("RECIPROCAL_URL_LABEL", "Reciprocal URL");
define("CLOSED_FOR_SUBMISSIONS", "O diret�rio est� atualmente fechado para a apresenta��o");
define("PAYMENT_CANCELLED", "O pagamento ter sido cancelado");
define("PROCESSING_PAYMENT", "Processamento de Pagamentos ...");
define("PROCESSING_PAYMENT_DESCRIPTION", "Por favor, aguarde, seu pedido est� sendo processado ...");

// para suggest.php
define("SUGGEST_A_CATEGORY", "Sugerir uma categoria");
define("SUBMIT_SUCCESS_CATEGORY", "A sugest�o foi feita com sucesso");

// para extens�es
define("EXTENSIONS_LABEL", "Extens�es");
define("EDIT_EXTENSIONS", "Extens�es Editar");
define("AVAILABLE_EXTENSIONS_FOR_INSTALL", "Extens�es dispon�veis");
define("NO_INSTALLED_EXTENSIONS", "N�o existem actualmente instalado extens�es");
define("NO_EXTENSIONS_FOR_INSTALL", "N�o h� extens�o dispon�vel para instalar");
define("SIMPLE_LABEL", "Simples");
define("FREE_LABEL", "Free");
// erros de extens�o
define("EXTENSION_ROOT_ERROR", "extens�o elemento raiz est� ausente ou malformado");
define("EXTENSION_ID_ERROR", "extens�o elemento / ID est� incorreto ou faltando");
define("EXTENSION_ID_ERROR2", "extens�o elemento / ID n�o corresponde ao nome da pasta de extens�o");
define("EXTENSION_TITLE_ERROR", "extens�o elemento / t�tulo est� incorrecto ou em falta");
define("EXTENSION_VERSION_ERROR", "extens�o elemento / vers�o � incorrecto ou em falta");
define("EXTENSION_DESCRIPTION_ERROR", "extens�o elemento / descri��o est� incorreto ou faltando");
define("EXTENSION_AUTHOR_ERROR", "extens�o elemento / autor est� incorreto ou faltando");
define("EXTENSION_HOOKS_ERROR", "extens�o elemento / gancho est� incorreto ou faltando");
define("EXTENSION_HOOKS_HOOK_ERROR", "extens�o elemento / gancho / gancho s�o mal formados ou em falta");
define("EXTENSION_HOOKS_HOOK_ERROR2", "extens�o elemento / gancho / gancho est� faltando um atributo 'id'");
define("EDIT_EXTENSION", "Editar Extens�o");
define("HOOKS", "ganchos");
define("EXTENSION_PERMISSION_WARNING", "voc� deve alterar as permiss�es no arquivo:%s para 755, a fim de edit�-lo on-line");
define("EXTENSION_FILE_NOT_FOUND", "%s n�o p�de ser encontrado");
define("EXTENSION_ALLREADY_INSTALLED", "A extens�o %s j� est� instalado");
define("EXTENSIONS_DISABLED", "extens�es est� desativado. Voc� deve ir a Administra��o-> Otions e alterar as extens�es de prefer�ncia antes de extens�es instaladas com defici�ncia possam ter efeito.");

// define novo
define("POSITION_NOT_A_NUMBER", "a posi��o que voc� sugeriu n�o � um n�mero v�lido num�rico ");
define("HARD_BAN", "text Ban");
define("SEARCH_TYPE", "tipo Pesquisar");
define("VERSION_LABEL", "Version");
define("AUTHOR_LABEL", "Autor");
define("INSTALL_LABEL", "Install");
define("UNINSTALL_LABEL", "Desinstalar");
define("ID_LABEL", "ID");
define("DETAILS_LABEL", "Detalhes");
define("SUBCATEGORIES", "Sub");
define("SPONSORED_LINKS", "Links patrocinados");
define("PAID_LINKS", "Paid Links");
define("SPONSOR_LINK", "Link Patrocinado");
define("PAID_LINK", "link Paid");
define("LOG_OUT", "Sair");
define("PRICE_LABEL", "Pre�o");
define("CURRENCY_LABEL", "Moeda");
define("NOT_PAID", "pagamento pendente");
define("IS_PAYMENT_PENDING", "pagamento recebido");
define("INVALID_EMAIL", "o endere�o de e-mail inserido � inv�lido");
define("WRONG_PASSWORD_CONFIRMATION", "a senha inserido n�o corresponde � sua confirma��o");
define("CHANGE_PASSWORD_LABEL", "Alterar Senha");
define("ENTER_NEW_PASSWORD", "Digite uma nova senha");
define("RETYPE_PASSWORD", "Retype Password");
define("SAVE_PASSWORD_BUTTON", "Save Password");
define("PASSWORD_HAS_BEEN_CHANGED", "- Sua senha foi alterada");
define("ACCOUNT_LABEL", "Conta");
define("SHOW_PHP_INFO", "Show info");
define("SEF_REWRITE_LABEL", "Rewrite Layer");
define("INDEX_PAGE", "P�gina �ndice");

// gera��o de
define("PAGE_GENERATED_IN", "P�gina gerada em");
define("SECONDS", "Segundos");