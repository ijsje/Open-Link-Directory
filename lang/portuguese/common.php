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
define("TITLE_LABEL", "Título");
define("CATEGORY_LABEL", "Categoria");
define("CAPTCHA_LABEL", "Captcha");
define("URL_LABEL", "URL");
define("LINK_DESCRIPTION_LABEL", "Descrição");
define("CATEGORY_DESCRIPTION_LABEL", "Descrição da Categoria");
define("NAME_LABEL", "Nome");
define("EMAIL_LABEL", "Email");
define("EDIT_LABEL", "Editar");
define("ACCEPT_LABEL", "Aceitar");
define("UNACCEPT_LABEL", "Unaccept");
define("MOVE_LABEL", "Move");
define("DELETE_LABEL", "Apagar");
define("NAVIGATION_LABEL", "Navegação");
define("HOME_LABEL", "Home");
define("SUBMIT_LINK_LABEL", "Enviar um link");
define("SUGGEST_CATEGORY_LABEL", "Sugerir uma categoria");
define("SEARCH_LABEL", "Pesquisar");

// Para include / functions.php
define("RECIPROCAL_NOT_FROM_SAME_DOMAIN", "o url recíproca deve vir do mesmo domínio como o link url");
define("NO_RECIPROCAL_FOUND", "ligação recíproca não foi encontrado no URL recíproco:");
define("URL_COULD_NOT_BE_LOADED", "não pôde carregar o URL recíproco:");

// para o admin_menu
define("ACCEPT_CATEGORIES_LABEL", "Aceitar Categorias");
define("ACCEPT_LINKS_TITLE", "Aceitar links");
define("BROWSE", "Browse");
define("LINKS_LABEL", "Links");
define("CATEGORIES_LABEL", "Categorias");
define("INFORMATION_LABEL", "Information");
define("OPTION_LABEL", "Opções");
define("CENSORING", "Censura");
define("IP_BANNING", "IP Banning");
define("TEMPLATES_TITLE", "Temas");
define("ADMIN_MENU", "menu Admin");
define("DIRECTORY_MANAGEMENT", "Gerenciamento de Diretório");
define("GENERAL_LABEL", "General");
define("PLUGINS_LABEL", "Plugins");

// para IP proibição
define("CENSORED_WORD_IS_NOTHING", "não, você fez inserir algo a censurar");
define("YOU_MUST_SELECT_AN_IP", "você deve selecionar um IP");
define("IP_ALLREADY_BANNED", "o IP selecionado já está proibido ");
define("IP_BANNED_QOUTE", "Está proibido!");
define("NEW_IP_BAN", "Novo IP proibição");
define("ADD_A_BAN", "Adicionar uma proibição");
define("IP_NUMBER", "Número IP");
define("MANAGE_BANS", "proibições Gerenciar");
define("UNBAN_IP", "Banir IP");
define("SELECT_IP_TO_UNBAN", "Selecione o IP do usuário que deseja unban");
define("UNBAN", "Banir");
define("INFO", "Info");
define("NO_IP_BANS", "Não IPs são proibidas ainda");

// para plugins
define("PLUGIN_DOES_NOT_EXIST", "o plugin não existe");
define("PLUGIN_NOT_SELECTED", "nenhum plugin foi selecionado");

// para adicionar
define("ADD_LABEL", "Adicionar");
define("ADD_LINK_LABEL", "Adicionar Link");
define("ADD_CATEGORY_LABEL", "Adicionar Categoria");

// para paginação
define ("NEXT_PAGE","Next Page");
define ("PREVIOUS_PAGE","Página anterior");

// para admin_categories.php
// define("PROPOSED_CATEGORY_NAME", "nome da categoria proposto");
// define("PROPOSED_TITLE", título "proposto, editar como quiser");
// define("PROPOSED_CATEGORY_DESCRIPTION", "Descrição da Categoria");
// define("PROPOSED_DESCRIPTION_LABEL", "A descrição. Edite como quiser");
define("ACEITO", "Aceitar");
define("MODIFIE_CATEGORIES", "categorias Modificar");
define("SELECT_CATEGORY", "Selecione o nome da categoria que pretende editar");
define("DELETE_CATEGORY", "Excluir uma categoria");
define("DELETE_CATEGORY_LABEL", "Categoria a ser excluído");
define("DELETE_CATEGORY_SELECT_LABEL", "Selecione o nome da categoria que você deseja excluir");
define("DELETE_BUTTON", "Apagar");
define("NO_CATEGORIES_HERE", "Não há aqui categorias");

// para admin_information.php
define("WELCOME_LABEL", "Welcome");
define("WELCOME_MESSAGE", "Bem-vindo ao painel de controle da administração OpenLD. Aqui está uma lista de algumas coisas que você pode fazer: ");
define("MODERATE_CATEGORIES_AND_LINKS", "categorias moderada e links");
define("SET_OPTIONS_AND_PREFERENCES", "definir as opções e preferências");
define("CONTROL_PERMISSIONS", "as permissões de controle");
define("BAN_IPS", "IPs proibição");
define("LIMIT_SPAM", "spam limite censurando o texto");
define("SOFTWARE_INFO", "Informações sobre o software");
define("OPENLD_VERSION_LABEL", "versão OpenLD");
define("SERVER_INFORMATION", "Informações do servidor");
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
define("USERNAME_AND_PASSWORD_INCORRECT", "seu nome de usuário e senha estava incorreto");
define("LOGIN_TITLE", "Acesso ao Painel de Administração");
define("USERNAME_LABEL", "Username");
define("PASSWORD_LABEL", "Password");
define("FORGOT_PASSWORD", "Esqueci a senha");
define("SEND_NEW_PASSWORD", "Enviar nova senha");
define("PASSWORD_SENT", "informações de sua conta foram enviadas para seu endereço de e-mail");
define("FORGOT_MAIL", "Clique no link abaixo para obter uma nova senha");
define("MAIL_NOT_FOUND_IN_DB", "o e-mail inserido não pôde ser encontrado no banco de dados");
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
define("CENTRAL_FEATURES", "características Central");
define("DESCRIPTION_LABEL", "Descrição");
define("DOMAIN_LABEL", "URL");
define("LANGUAGE_LABEL", "Idioma");
define("LINK_TYPES_LABEL", "tipo link");
define("RECIPROCAL_LINKS_LABEL", "ligações recíprocas");
define("REGULAR_LINKS_LABEL", "ligações regulares");
define("DISPLAY_LABEL", "Display");
define("LINKS_SORT_BY_LABEL", "Links ordenados por");
define("CATEGORIES_SORT_BY_LABEL", "classificadas por categorias");
define("TITLE_REVERSED", "Título invertida");
define("DESCRIPTION_REVERSED", "Descrição invertida");
define("DATE_LABEL", "Data");
define("DATE_REVERSED", "Date invertido");
define("RECIPROCAL_URL", "Reciprocal URL");
define("RECIPROCAL_URL_DESC", "Reciprocal URL invertida");
define("URL", "URL");
define("URL_REVERSED", "URL invertida");
define("CATEGORY_COLUMNS_DESCRIPTION", "colunas Categoria");
define("LINKS_PER_PAGE", "Links por página");
define("INPUT_CONTROL", "controle de entrada");
define("MAXIMUM_LINK_DESCRIPTION", "descrição máximo");
define("MINIMUM_LINK_DESCRIPTION", "descrição mínimo");
define("MAXIMUM_CATEGORY_DESCRIPTION", "descrição máximo");
define("MINIMUM_CATEGORY_DESCRIPTION", "descrição mínimo");
define("SAVE_BUTTON", "Salvar alterações");
define("DISABLE_EXTENSIONS_LABEL", "desactivar extensões");
define("ENABLE_GZIP_LABEL", "Ativar compactação gzip");
define("HIDE_ADMIN_BUTTON", "botão Hide admin");
define("DENY_INDEX_PAGE_SUBMISSIONS", "Negue links primeira página");
define("DISPLAY_UNACCEPTED_LINKS", "links Display inaceitável");
define("OPEN_LINKS_IN_NEW_WINDOWS", "Abrir links em novas janelas");
define("SEARCH_RESULTS_PER_PAGE","Buscar resultados por página");

// para os temas
define("TEMPLATE_SUBMIT", "Usar o tema");
define("CHOSE_TEMPLATE", "temas Select");
define("NO_TEMPLATES_WERE_FOUND", "Não temas encontrados");
define("DIRECTORY_LABEL", "Diretório");
define("THUMBNAIL_PREVIEW", "Preview");
// edição de temas
define("FILE_LABEL", "Arquivo");
define("PERMISSION_LABEL", "Permissão");
define("NOT_WRITEABLE", "Não gravável");
define("IS_WRITEABLE", "gravável");
define("EDIT_TEMPLATE", "Editar template");

// para admin_words.php
define("DOUBLE_ADD", "<br> este texto já está censurado");
define("NO_INPUT_WORD", "<br> você precisa inserir texto para censurar");
define("NO_ID_FOUND", "<br> o id não foi encontrado no banco de dados");
define("MORE_THAN_ONE_ID_FOUND", "<br> erro grave! mais de um ID foi encontrado no banco de dados. Denunciar este erro aqui: http://sourceforge.net/tracker/?group_id=181014&atid=895496");
define("EDIT_CENSORED_NOT_FOUND", "o texto não foi inserida a censurar");
define("NO_BANNED_WORDS", "Não existe actualmente texto censurado");
define("UPDATE", "Update");
define("REMOVE", "Remover");
define("ACTION", "Action");
define("BAN_WORDS", "Adicionar texto a censura");
define("NEW_CENSORED_WORD", "Novo texto censurado");
define("CENSORED_WORD", "texto Censurado");
define("REPLACE_WITH", "Substituir");
define("EDIT_DELETE_BANNED_WORDS", "Editar texto censurado");

// para categories.php
define("NO_SUBCATEGORIES_FOUND", "Não há subcategorias nesta categoria");

// para editar categoria e link
define("EDIT_CATEGORY_LABEL", "Editar Categoria");
define("EDIT_LINK_LABEL", "Edit Link");

// para o rodapé
define("POWERED_BY", "Powered by");

// para alertas
define("WRONG_CAPTCHA", "Wrong captcha inserted");
define("NO_TITLE_AT_ALL", "title is missing");
define("TITLE_TOO_LONG", "o título inserido é mais do que o permitido ");
define("TITLE_TOO_SHORT", "o título introduzido é menor do que o permitido ");
define("ILLEGAL_WORDS_WITHIN_TITLE", "o título inserido inclui texto censurado ");
define("TITLE_ALREADY_THERE", "já existe um título similar");
define("NO_DESCRIPTION_AT_ALL", "descrição está faltando");
define("DESCRIPTION_TOO_LONG", "a descrição inserida é mais do que o permitido");
define("DESCRIPTION_TOO_SHORT", "a descrição inserida é menor do que o permitido");
define("ILLEGAL_WORDS_WITHIN_DESCRIPTION", "a descrição inserida inclui texto censurado");
define("NAME_TOO_LONG", "o nome inserido é maior do que o permitido");
define("NAME_TOO_SHORT", "o nome inserido é menor do que o permitido");
define("ILLEGAL_WORDS_WITHIN_NAME", "o nome inserido inclui texto censurado");
define("EMAIL_TOO_LONG", "o e-mail inserido é maior do que o permitido");
define("EMAIL_TOO_SHORT", "o e-mail inserido é menor do que o permitido");
define("ILLEGAL_WORDS_WITHIN_EMAIL", "o e-mail inserido inclui texto censurado");
define("URL_TOO_LONG", "O URL inserido é maior do que o permitido");
define("URL_TOO_SHORT", "O URL inserido é menor do que o permitido");
define("ILLEGAL_WORDS_WITHIN_URL", "O URL inserido inclui texto censurado");
define("URL_ALLREADY_THERE", "já existe uma URL similar");
define("NO_RECIPROCAL_URL_AT_ALL", "url recíproca está faltando");
define("RECIPROCAL_URL_TOO_LONG", "O URL inserido recíproca é mais do que o permitido");
define("RECIPROCAL_URL_TOO_SHORT", "O URL inserido recíproca é mais curto do que o permitido");
define("ILLEGAL_WORDS_WITHIN_RECIPROCAL_URL", "o texto inserido recíproco inclui censuradas ");
define("RECIPROCAL_NOT_ALLOWED_BUT_CHOSED", "não a opção recíproca é avilable");
define("NOT_CORRECT_IP_ADDRESS", "inserido no endereço IP está incorreto ");
define("NO_USERNAME_AT_ALL", "o nome é fictício");
define("TOO_LONG_USERNAME", "o nome de usuário inserido é maior do que o permitido");
define("TOO_SHORT_USERNAME", "o nome de usuário inserido é menor do que o permitido");
define("NO_PASSWORD_AT_ALL", "a senha está em falta");
define("TOO_LONG_PASSWORD", "a senha inserida é mais do que o permitido");
define("TOO_SHORT_PASSWORD", "a senha inserida é menor do que o permitido");
define("NO_MINIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "descrição do link mínimo está faltando");
define("MINIMUM_ALLOWED_LINK_DESCRIPTION", "a descrição do link inserido mínimo não foi numérico ");
define("NO_MAXIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "descrição do link máxima está em falta");
define("MAXIMUM_ALLOWED_LINK_DESCRIPTION", "a descrição do link inserido o máximo não foi numérico ");
define("NO_MINIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "descrição da categoria mínimo está faltando");
define("MIN_CAT_DESC_NOT_NUMERIC", "a descrição da categoria inserida mínimo não foi numérico");
define("NO_MAXIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "descrição da categoria máxima é falta");
define("MAX_CAT_DESC_NOT_NUMERIC", "a descrição da categoria não foi inserido no máximo numérico");
define("MINIMUM_LINK_DESCRIPTION_BIGGER_THAN_MAXIMUM", "a descrição do link inserido mínimo deve ser menor do que a ligação máxima descrição ");
define("MINIMUM_CAT_DESCRIPTION_BIGGER_THAN_MAXIMUM", "a descrição da categoria inserida mínimo deve ser menor do que a descrição da categoria máxima");
define("LINKS_PER_PAGE_NOT_NUMERIC", "os links inseridos por página não foi numérico");
define("NO_LINKS_PER_PAGE_AT_ALL", "número de links por página está faltando");
define("NO_COLUMN_NUMBER_AT_ALL", "número de colunas está faltando");
define("COLUMN_NUMBER_IS_NOT_A_NUMBER", "o valor inserido para o número de colunas não foi numérico ");
define("NO_SORT_OPTION_AT_ALL", "opção de classificação está em falta");
define("SORT_OPTION_TOO_LONG", "a opção de classificação inserido é maior do que o permitido ");
define("SORT_OPTION_TOO_SHORT", "a opção de classificação inserido é menor do que o permitido ");
define("NO_LANGUAGE_AT_ALL", "opção de idioma está em falta");
define("LANGUAGE_TOO_LONG", "o idioma selecionado é maior do que o permitido"); // <------|<
define("LANGUAGE_TOO_SHORT", "o idioma selecionado é menor do que o permitido"); // <---|^- isso é útil?
define("PASSWORD_EQUALS_USERNAME", "senha deve ser diferente do nome de usuário");
define("NO_LINKTYPE_AT_ALL", "opção de tipo de ligação está faltando");
define("REGULAR_NOT_ALLOWED_BUT_CHOSED", "não a opção regular está disponível");
define("NO_CATEGORY_SELECTED", "A categoria não foi selecionado");
define("CATEGORY_ID_NOT_A_NUMBER", "o id da categoria não é um número");
define("CATEGORY_ID_NOT_IN_DB", "a id categoria não existe");
define("INVALID_URL_FORMAT", "o formato de URL é inválido");
define("BAD_REQUEST", "pedido mau");
define("ZLIB_NOT_ENABLED", "você deve ter acesso a zlib, a fim de usar compressão gzip");
define("INDEX_PAGE_NOT_OPEN_FOR_SUBMISSION", "não a página é aberta para a apresentação ");
define("SEARCH_OPTION_WARNING", "resultados de pesquisa de campo requer entrada numérico");

// para links.php
define("NO_LINKS_HERE", "Não existem links here");
define("SUBMITTED_LABEL", "Submissão");

// para a pesquisa
define("NO_MATCHES", "não se achou");
define("MAKE_A_SEARCH", "Faça uma pesquisa");
define("SEARCH_FOR", "Pesquisar");
define("SEARCH_IN", "Procurar em");
define("SORT_BY", "Ordenar por");
define("ALL", "All");
define("ALPHABETICAL_LABEL", "ordem alfabética");
define("ALPHABETICAL_REVERSED", "por ordem alfabética invertida");
define("NEWEST_FIRST", "Novos primeiro");
define("OLDEST_FIRST", "Antigos primeiro");
define("SERCHED_FOR_LABEL", "Pesquisa feita por");

// para submit.php
define("SUBMIT_SUCCESS", "A ligação foi submetido com sucesso");
define("SUBMIT_NAME_LABEL", "Name of You / Your Company / Your Organization / seu grupo:"); // remover esta etiqueta
define("SUBMIT_A_LINK", "Enviar um link");
define("REGULAR_LINK", "Link Regular");
define("RECIPROCAL_LINK", "Link recíproco");
define("RECIPROCAL_URL_LABEL", "Reciprocal URL");
define("CLOSED_FOR_SUBMISSIONS", "O diretório está atualmente fechado para a apresentação");
define("PAYMENT_CANCELLED", "O pagamento ter sido cancelado");
define("PROCESSING_PAYMENT", "Processamento de Pagamentos ...");
define("PROCESSING_PAYMENT_DESCRIPTION", "Por favor, aguarde, seu pedido está sendo processado ...");

// para suggest.php
define("SUGGEST_A_CATEGORY", "Sugerir uma categoria");
define("SUBMIT_SUCCESS_CATEGORY", "A sugestão foi feita com sucesso");

// para extensões
define("EXTENSIONS_LABEL", "Extensões");
define("EDIT_EXTENSIONS", "Extensões Editar");
define("AVAILABLE_EXTENSIONS_FOR_INSTALL", "Extensões disponíveis");
define("NO_INSTALLED_EXTENSIONS", "Não existem actualmente instalado extensões");
define("NO_EXTENSIONS_FOR_INSTALL", "Não há extensão disponível para instalar");
define("SIMPLE_LABEL", "Simples");
define("FREE_LABEL", "Free");
// erros de extensão
define("EXTENSION_ROOT_ERROR", "extensão elemento raiz está ausente ou malformado");
define("EXTENSION_ID_ERROR", "extensão elemento / ID está incorreto ou faltando");
define("EXTENSION_ID_ERROR2", "extensão elemento / ID não corresponde ao nome da pasta de extensão");
define("EXTENSION_TITLE_ERROR", "extensão elemento / título está incorrecto ou em falta");
define("EXTENSION_VERSION_ERROR", "extensão elemento / versão é incorrecto ou em falta");
define("EXTENSION_DESCRIPTION_ERROR", "extensão elemento / descrição está incorreto ou faltando");
define("EXTENSION_AUTHOR_ERROR", "extensão elemento / autor está incorreto ou faltando");
define("EXTENSION_HOOKS_ERROR", "extensão elemento / gancho está incorreto ou faltando");
define("EXTENSION_HOOKS_HOOK_ERROR", "extensão elemento / gancho / gancho são mal formados ou em falta");
define("EXTENSION_HOOKS_HOOK_ERROR2", "extensão elemento / gancho / gancho está faltando um atributo 'id'");
define("EDIT_EXTENSION", "Editar Extensão");
define("HOOKS", "ganchos");
define("EXTENSION_PERMISSION_WARNING", "você deve alterar as permissões no arquivo:%s para 755, a fim de editá-lo on-line");
define("EXTENSION_FILE_NOT_FOUND", "%s não pôde ser encontrado");
define("EXTENSION_ALLREADY_INSTALLED", "A extensão %s já está instalado");
define("EXTENSIONS_DISABLED", "extensões está desativado. Você deve ir a Administração-> Otions e alterar as extensões de preferência antes de extensões instaladas com deficiência possam ter efeito.");

// define novo
define("POSITION_NOT_A_NUMBER", "a posição que você sugeriu não é um número válido numérico ");
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
define("PRICE_LABEL", "Preço");
define("CURRENCY_LABEL", "Moeda");
define("NOT_PAID", "pagamento pendente");
define("IS_PAYMENT_PENDING", "pagamento recebido");
define("INVALID_EMAIL", "o endereço de e-mail inserido é inválido");
define("WRONG_PASSWORD_CONFIRMATION", "a senha inserido não corresponde à sua confirmação");
define("CHANGE_PASSWORD_LABEL", "Alterar Senha");
define("ENTER_NEW_PASSWORD", "Digite uma nova senha");
define("RETYPE_PASSWORD", "Retype Password");
define("SAVE_PASSWORD_BUTTON", "Save Password");
define("PASSWORD_HAS_BEEN_CHANGED", "- Sua senha foi alterada");
define("ACCOUNT_LABEL", "Conta");
define("SHOW_PHP_INFO", "Show info");
define("SEF_REWRITE_LABEL", "Rewrite Layer");
define("INDEX_PAGE", "Página Índice");

// geração de
define("PAGE_GENERATED_IN", "Página gerada em");
define("SECONDS", "Segundos");