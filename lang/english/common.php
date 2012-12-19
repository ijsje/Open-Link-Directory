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
define("CATEGORY_LABEL", "Category");
define("CAPTCHA_LABEL", "Captcha");
define("URL_LABEL", "URL");
define("LINK_DESCRIPTION_LABEL", "Link Description");
define("CATEGORY_DESCRIPTION_LABEL", "Category Description");
define("NAME_LABEL", "Name");
define("EMAIL_LABEL", "Email");
define("EDIT_LABEL", "Edit");
define("ACCEPT_LABEL", "Accept");
define("UNACCEPT_LABEL", "Unaccept");
define("MOVE_LABEL", "Move");
define("DELETE_LABEL", "Delete");
define("NAVIGATION_LABEL", "Navigation");
define("HOME_LABEL", "Home");
define("SUBMIT_LINK_LABEL", "Submit a link");
define("SUGGEST_CATEGORY_LABEL", "Suggest a category");
define("SEARCH_LABEL", "Search");

//For include/functions.php
define("RECIPROCAL_NOT_FROM_SAME_DOMAIN", "the reciprocal url must come from the same domain as the link url");
define("NO_RECIPROCAL_FOUND", "no reciprocal link was found at the reciprocal url: ");
define("URL_COULD_NOT_BE_LOADED", "could not load the reciprocal url: ");

//for the admin_menu
define("ACCEPT_CATEGORIES_LABEL", "Accept Categories");
define("ACCEPT_LINKS_TITLE", "Accept links");
define("BROWSE", "Browse");
define("LINKS_LABEL", "Links");
define("CATEGORIES_LABEL", "Categories");
define("INFORMATION_LABEL", "Information");
define("OPTION_LABEL", "Options");
define("CENSORING", "Censoring");
define("IP_BANNING", "IP Banning");
define("TEMPLATES_TITLE", "Themes");
define("ADMIN_MENU", "Admin menu");
define("DIRECTORY_MANAGEMENT", "Directory Management");
define("GENERAL_LABEL", "General");
define("PLUGINS_LABEL", "Plugins");

//for ip banning
define("CENSORED_WORD_IS_NOTHING", "you didn't insert something to censor");
define("YOU_MUST_SELECT_AN_IP", "you must select an IP");
define("IP_ALLREADY_BANNED", "the selected ip is already banned");
define("IP_BANNED_QOUTE", "You are banned!");
define("NEW_IP_BAN", "New IP ban");
define("ADD_A_BAN", "Add a ban");
define("IP_NUMBER", "IP Number");
define("MANAGE_BANS", "Manage bans");
define("UNBAN_IP", "Unban IP");
define("SELECT_IP_TO_UNBAN", "Select the IP of the user you want to unban");
define("UNBAN", "Unban");
define("INFO", "Info");
define("NO_IP_BANS", "No IPs are banned yet");

//for plugins
define("PLUGIN_DOES_NOT_EXIST", "the plugin does not exist");
define("PLUGIN_NOT_SELECTED", "no plugin was selected");

//for adding
define("ADD_LABEL", "Add");
define("ADD_LINK_LABEL", "Add Link");
define("ADD_CATEGORY_LABEL", "Add Category");

//for pagination
define("NEXT_PAGE", "Next Page");
define("PREVIOUS_PAGE", "Previous Page");

//for admin_categories.php
//define("PROPOSED_CATEGORY_NAME", "Proposed category name");
//define("PROPOSED_TITLE", "Proposed title, edit as you want");
//define("PROPOSED_CATEGORY_DESCRIPTION", "Category Description");
//define("PROPOSED_DESCRIPTION_LABEL", "The description. Edit as you want");
define("ACCEPT", "Accept");
define("MODIFIE_CATEGORIES", "Modify categories");
define("SELECT_CATEGORY", "Select the name of the category you want to edit");
define("DELETE_CATEGORY", "Delete a category");
define("DELETE_CATEGORY_LABEL", "Category to be deleted");
define("DELETE_CATEGORY_SELECT_LABEL", "Select the name of the category you want to delete");
define("DELETE_BUTTON", "Delete");
define("NO_CATEGORIES_HERE", "There are no categories here");

//for admin_information.php
define("WELCOME_LABEL", "Welcome");
define("WELCOME_MESSAGE", "Welcome to the OpenLD administration control panel. Here is a list of a few things you can do:");
define("MODERATE_CATEGORIES_AND_LINKS", "moderate categories and links");
define("SET_OPTIONS_AND_PREFERENCES", "set options and preferences");
define("CONTROL_PERMISSIONS", "control permissions");
define("BAN_IPS", "ban IPs");
define("LIMIT_SPAM", "limit spam by censoring text");
define("SOFTWARE_INFO", "Software information");
define("OPENLD_VERSION_LABEL", "OpenLD version");
define("SERVER_INFORMATION", "Server information");
define("SERVER_NAME_LABEL", "Name: ");
define("SERVER_SOFTWARE_LABEL", "Software: ");
define("SERVER_PROTOCOLL_LABEL", "Protocol: ");
define("SCRIPT_ENVIRONMENT_LABEL", "Script Environment");
define("OS_LABEL", "Operating system: ");
define("PHP_LABEL", "PHP: ");
define("DATABASE_LABEL", "Database");
define("ROWS_LABEL", "Rows: ");
define("SIZE_LABEL", "Size: ");
define("ACCELERATOR_LABEL", "Accelerator: ");

//for admin_accept_links.php
define("APPROVED_LINKS_LABEL", "Approved links");

//for admin_login.php
define("INCORRECT_PASSWORD_ERROR", "correct username but with wrong password");
define("INCORRECT_USERNAME_ERROR", "correct password but with wrong username");
define("USERNAME_AND_PASSWORD_INCORRECT", "your username and password was incorrect");
define("LOGIN_TITLE", "Login to the Admin Panel");
define("USERNAME_LABEL", "Username");
define("PASSWORD_LABEL", "Password");
define("FORGOT_PASSWORD", "Forgot Password");
define("SEND_NEW_PASSWORD", "Send new password");
define("PASSWORD_SENT", "Your account information have been sent to your email address");
define("FORGOT_MAIL", "Click on the link below to get a new password");
define("MAIL_NOT_FOUND_IN_DB", "the email you inserted could not be found in the database");
define("NEW_PASSWORD", "New Password");

//for move..
define("MOVE_LINK_LABEL", "Move Link");
define("MOVE_CATEGORY_LABEL", "Move Category");
define("MOVE_TO", "Move to");

//text in admin_options.php
define("ADMIN_LABEL", "Admin");
define("ADMIN_USERNAME_LABEL", "Admin username");
define("ADMIN_PASSWORD_LABEL", "Admin password");
define("ADMIN_EMAIL_LABEL", "Admin e-mail");
define("CENTRAL_FEATURES", "Central features");
define("DESCRIPTION_LABEL", "Description");
define("DOMAIN_LABEL", "URL");
define("LANGUAGE_LABEL", "Language");
define("LINK_TYPES_LABEL", "Link types");
define("RECIPROCAL_LINKS_LABEL", "Reciprocal links");
define("REGULAR_LINKS_LABEL", "Regular links");
define("DISPLAY_LABEL", "Display");
define("LINKS_SORT_BY_LABEL", "Links sorted by");
define("CATEGORIES_SORT_BY_LABEL", "Categories sorted by");
define("TITLE_REVERSED", "Title reversed");
define("DESCRIPTION_REVERSED", "Description reversed");
define("DATE_LABEL", "Date");
define("DATE_REVERSED", "Date reversed");
define("RECIPROCAL_URL", "Reciprocal URL");
define("RECIPROCAL_URL_DESC", "Reciprocal URL reversed");
define("URL", "URL");
define("URL_REVERSED", "URL reversed");
define("CATEGORY_COLUMNS_DESCRIPTION", "Category columns");
define("LINKS_PER_PAGE", "Links per page");
define("INPUT_CONTROL", "Input control");
define("MAXIMUM_LINK_DESCRIPTION", "Maximum description");
define("MINIMUM_LINK_DESCRIPTION", "Minimum description");
define("MAXIMUM_CATEGORY_DESCRIPTION", "Maximum description");
define("MINIMUM_CATEGORY_DESCRIPTION", "Minimum description");
define("SAVE_BUTTON", "Save changes");
define("DISABLE_EXTENSIONS_LABEL", "Disable extensions");
define("ENABLE_GZIP_LABEL", "Enable gzip compression");
define("HIDE_ADMIN_BUTTON", "Hide admin button");
define("DENY_INDEX_PAGE_SUBMISSIONS", "Deny front page links");
define("DISPLAY_UNACCEPTED_LINKS", "Display unaccepted links");
define("OPEN_LINKS_IN_NEW_WINDOWS", "Open links in new windows");
define("SEARCH_RESULTS_PER_PAGE", "Search results per page");

//for the themes
define("TEMPLATE_SUBMIT", "Use this theme");
define("CHOSE_TEMPLATE", "Select themes");
define("NO_TEMPLATES_WERE_FOUND", "No themes found");
define("DIRECTORY_LABEL", "Directory");
define("THUMBNAIL_PREVIEW", "Preview");
//editing themes
define("FILE_LABEL", "File");
define("PERMISSION_LABEL", "Permission");
define("NOT_WRITEABLE", "Not writeable");
define("IS_WRITEABLE", "Writeable");
define("EDIT_TEMPLATE", "Edit template");

//for admin_words.php
define("DOUBLE_ADD", "<br>this text is already censored");
define("NO_INPUT_WORD", "<br>you need to insert text to censor");
define("NO_ID_FOUND", "<br>the id was not found in the database");
define("MORE_THAN_ONE_ID_FOUND", "<br>Serious error! More than one id was found in the database. Report this error here: http://sourceforge.net/tracker/?group_id=181014&atid=895496");
define("EDIT_CENSORED_NOT_FOUND", "no text was inserted to censor");
define("NO_BANNED_WORDS", "There is currently no censored text");
define("UPDATE", "Update");
define("REMOVE", "Remove");
define("ACTION", "Action");
define("BAN_WORDS", "Add text to censor");
define("NEW_CENSORED_WORD", "New censored text");
define("CENSORED_WORD", "Censored text");
define("REPLACE_WITH", "Replace with");
define("EDIT_DELETE_BANNED_WORDS", "Edit censored text");

//for categories.php
define("NO_SUBCATEGORIES_FOUND", "There is no subcategories this category");

//for edit category and link
define("EDIT_CATEGORY_LABEL", "Edit Category");
define("EDIT_LINK_LABEL", "Edit Link");

//for the footer
define("POWERED_BY", "Powered by");

//for warnings
define("WRONG_CAPTCHA", "Wrong captcha inserted");
define("NO_TITLE_AT_ALL", "title is missing");
define("TITLE_TOO_LONG", "the inserted title is longer than allowed");
define("TITLE_TOO_SHORT", "the inserted title is shorter than allowed");
define("ILLEGAL_WORDS_WITHIN_TITLE", "the inserted title includes censored text");
define("TITLE_ALREADY_THERE", "there is already a similar title");
define("NO_DESCRIPTION_AT_ALL", "description is missing");
define("DESCRIPTION_TOO_LONG", "the inserted description is longer than allowed");
define("DESCRIPTION_TOO_SHORT", "the inserted description is shorter than allowed");
define("ILLEGAL_WORDS_WITHIN_DESCRIPTION", "the inserted description includes censored text");
define("NAME_TOO_LONG", "the inserted name is longer than allowed");
define("NAME_TOO_SHORT", "the inserted name is shorter than allowed");
define("ILLEGAL_WORDS_WITHIN_NAME", "the inserted name includes censored text");
define("EMAIL_TOO_LONG", "the inserted email is longer than allowed");
define("EMAIL_TOO_SHORT", "the inserted email is shorter than allowed");
define("ILLEGAL_WORDS_WITHIN_EMAIL", "the inserted email includes censored text");
define("URL_TOO_LONG", "the inserted url is longer than allowed");
define("URL_TOO_SHORT", "the inserted url is shorter than allowed");
define("ILLEGAL_WORDS_WITHIN_URL", "the inserted url includes censored text");
define("URL_ALLREADY_THERE", "there is already a similar url");
define("NO_RECIPROCAL_URL_AT_ALL", "reciprocal url is missing");
define("RECIPROCAL_URL_TOO_LONG", "the inserted reciprocal url is longer than allowed");
define("RECIPROCAL_URL_TOO_SHORT", "the inserted reciprocal url is shorter than allowed");
define("ILLEGAL_WORDS_WITHIN_RECIPROCAL_URL", "the inserted reciprocal includes censored text");
define("RECIPROCAL_NOT_ALLOWED_BUT_CHOSED", "the reciprocal option is not avilable");
define("NOT_CORRECT_IP_ADDRESS", "the inserted IP address is incorrect");
define("NO_USERNAME_AT_ALL", "the username is missing");
define("TOO_LONG_USERNAME", "the inserted username is longer than allowed");
define("TOO_SHORT_USERNAME", "the inserted username is shorter than allowed");
define("NO_PASSWORD_AT_ALL", "the password is missing");
define("TOO_LONG_PASSWORD", "the inserted password is longer than allowed");
define("TOO_SHORT_PASSWORD", "the inserted password is shorter than allowed");
define("NO_MINIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "minimum link description is missing");
define("MINIMUM_ALLOWED_LINK_DESCRIPTION", "the inserted minimum link description was not numeric");
define("NO_MAXIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL", "maximum link description is missing");
define("MAXIMUM_ALLOWED_LINK_DESCRIPTION", "the inserted maximum link description was not numeric");
define("NO_MINIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "minimum category description is missing");
define("MIN_CAT_DESC_NOT_NUMERIC", "the inserted minimum category description was not numeric");
define("NO_MAXIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL", "maximum category description is missing");
define("MAX_CAT_DESC_NOT_NUMERIC", "the inserted maximum category description was not numeric");
define("MINIMUM_LINK_DESCRIPTION_BIGGER_THAN_MAXIMUM", "the inserted minimum link description must be smaller than the maximum link description");
define("MINIMUM_CAT_DESCRIPTION_BIGGER_THAN_MAXIMUM", "the inserted minimum category description must be smaller than the maximum category description");
define("LINKS_PER_PAGE_NOT_NUMERIC", "the inserted links per page was not numeric");
define("NO_LINKS_PER_PAGE_AT_ALL", "number of links per page is missing");
define("NO_COLUMN_NUMBER_AT_ALL", "number of columns is missing");
define("COLUMN_NUMBER_IS_NOT_A_NUMBER", "the inserted value for the number of columns was not numeric");
define("NO_SORT_OPTION_AT_ALL", "sort option is missing");
define("SORT_OPTION_TOO_LONG", "the inserted sort option is longer than allowed");
define("SORT_OPTION_TOO_SHORT", "the inserted sort option is shorter than allowed");
define("NO_LANGUAGE_AT_ALL", "language option is missing");
define("LANGUAGE_TOO_LONG", "the selected language is longer than allowed"); // <------|<
define("LANGUAGE_TOO_SHORT", "the selected language is shorter than allowed"); // <---|^- is this useful?
define("PASSWORD_EQUALS_USERNAME", "password must be different from the username");
define("NO_LINKTYPE_AT_ALL", "link type option is missing");
define("REGULAR_NOT_ALLOWED_BUT_CHOSED", "the regular option is not available");
define("NO_CATEGORY_SELECTED", "no category was selected");
define("CATEGORY_ID_NOT_A_NUMBER", "the category id is not a number");
define("CATEGORY_ID_NOT_IN_DB", "the category id doesn't exist");
define("INVALID_URL_FORMAT", "the URL format is invalid");
define("BAD_REQUEST", "bad request");
define("ZLIB_NOT_ENABLED", "you must have access to zlib in order to use gzip compression");
define("INDEX_PAGE_NOT_OPEN_FOR_SUBMISSION", "the front page is not open for submissions");
define("SEARCH_OPTION_WARNING", "search results field requires numerical input");

//for links.php
define("NO_LINKS_HERE", "There are no links here");
define("SUBMITTED_LABEL", "Submitted: ");

//for search
define("NO_MATCHES", "No matches found");
define("MAKE_A_SEARCH", "Make a search");
define("SEARCH_FOR", "Search for");
define("SEARCH_IN", "Search in");
define("SORT_BY", "Sort by");
define("ALL", "All");
define("ALPHABETICAL_LABEL", "Alphabetical");
define("ALPHABETICAL_REVERSED", "Alphabetical reversed");
define("NEWEST_FIRST", "Newest first");
define("OLDEST_FIRST", "Oldest first");
define("SERCHED_FOR_LABEL", "Searched for");

//for submit.php
define("SUBMIT_SUCCESS", "The link was succesfully submitted");
define("SUBMIT_NAME_LABEL", "Name of You/Your Company/Your Organization/Your Group:"); //remove this label
define("SUBMIT_A_LINK", "Submit a Link");
define("REGULAR_LINK", "Regular Link");
define("RECIPROCAL_LINK", "Reciprocal Link");
define("RECIPROCAL_URL_LABEL", "Reciprocal URL");
define("CLOSED_FOR_SUBMISSIONS", "The directory is currently closed for submissions");
define("PAYMENT_CANCELLED", "The payment have been cancelled");
define("PROCESSING_PAYMENT", "Processing Payment...");
define("PROCESSING_PAYMENT_DESCRIPTION", "Please wait, your order is being processed...");

//for suggest.php
define("SUGGEST_A_CATEGORY", "Suggest a Category");
define("SUBMIT_SUCCESS_CATEGORY", "The suggestion have succesfully been made");

//for extensions
define("EXTENSIONS_LABEL", "Extensions");
define("EDIT_EXTENSIONS", "Edit Extensions");
define("AVAILABLE_EXTENSIONS_FOR_INSTALL", "Available Extensions");
define("NO_INSTALLED_EXTENSIONS", "There are currently no installed extensions");
define("NO_EXTENSIONS_FOR_INSTALL", "There are no extension available to install");
define("SIMPLE_LABEL", "Simple");
define("FREE_LABEL", "Free");
//extension errors
define("EXTENSION_ROOT_ERROR", "root element extension is malformed or missing");
define("EXTENSION_ID_ERROR", "element extension/id is malformed or missing");
define("EXTENSION_ID_ERROR2", "element extension/id does not match the extension folder name");
define("EXTENSION_TITLE_ERROR", "element extension/title is malformed or missing");
define("EXTENSION_VERSION_ERROR", "element extension/version is malformed or missing");
define("EXTENSION_DESCRIPTION_ERROR", "element extension/description is malformed or missing");
define("EXTENSION_AUTHOR_ERROR", "element extension/author is malformed or missing");
define("EXTENSION_HOOKS_ERROR", "element extension/hooks is malformed or missing");
define("EXTENSION_HOOKS_HOOK_ERROR", "element extension/hooks/hook are malformed or missing");
define("EXTENSION_HOOKS_HOOK_ERROR2", "element extension/hooks/hook are missing an attribute 'id'");
define("EDIT_EXTENSION", "Edit Extension");
define("HOOKS", "Hooks");
define("EXTENSION_PERMISSION_WARNING", "you must change permissions in the file: %s to " .get_filepermission(true). " in order to edit it online");
define("EXTENSION_FILE_NOT_FOUND", "%s could not be found");
define("EXTENSION_ALLREADY_INSTALLED", "the extension %s is already installed");
define("EXTENSIONS_DISABLED", "Extensions is disabled. You must go to Admin->Otions and change the extensions-disabled preference before installed extensions can take effect.");

//new defines
define("POSITION_NOT_A_NUMBER", "the position you suggested is not a valid numerical number");
define("HARD_BAN", "Ban text");
define("SEARCH_TYPE", "Search type");
define("VERSION_LABEL", "Version");
define("AUTHOR_LABEL", "Author");
define("INSTALL_LABEL", "Install");
define("UNINSTALL_LABEL", "Uninstall");
define("ID_LABEL", "ID");
define("DETAILS_LABEL", "Details");
define("SUBCATEGORIES", "Subcategories");
define("SPONSORED_LINKS", "Sponsored Links");
define("PAID_LINKS", "Paid Links");
define("SPONSOR_LINK", "Sponsored Link");
define("PAID_LINK", "Paid Link");
define("LOG_OUT", "Log Out");
define("PRICE_LABEL", "Price");
define("CURRENCY_LABEL", "Currency");
define("NOT_PAID", "payment pending");
define("IS_PAYMENT_PENDING", "payment received");
define("INVALID_EMAIL", "the inserted email address was invalid");
define("WRONG_PASSWORD_CONFIRMATION", "the inserted password does not match your confirmation");
define("CHANGE_PASSWORD_LABEL", "Change Password");
define("ENTER_NEW_PASSWORD", "Enter a new password");
define("RETYPE_PASSWORD", "Retype Password");
define("SAVE_PASSWORD_BUTTON", "Save Password");
define("PASSWORD_HAS_BEEN_CHANGED", " - Your password has been changed");
define("ACCOUNT_LABEL", "Account");
define("SHOW_PHP_INFO", "Show info");
define("SEF_REWRITE_LABEL", "Rewrite Layer");
define("INDEX_PAGE", "Index page");

//page generation
define("PAGE_GENERATED_IN", "Page generated in ");
define("SECONDS", " Seconds");