<?php
/***********************************************************************

  Copyright (C) 2006  Rickard Andersson (rickard@punbb.org)
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

// Check SQLite prefix collision
if ($db_type == 'sqlite' && strtolower($db_prefix) == 'sqlite_')
	error('The table prefix \'sqlite_\' is reserved for use by the SQLite engine. Please choose a different prefix.');


//create the tables
$schema = array(
	'FIELDS' => array(
		'id' => array(
			'datatype' => 'SERIAL',
			'allow_null' => false
		),
		'spam_word' => array(
			'datatype' => 'VARCHAR(255)',
			'allow_null' => true
		),
		'replace_word' => array(
			'datatype' => 'VARCHAR(255)',
			'allow_null' => true
		),
		'ban_type' => array(
			'datatype' => 'VARCHAR(1)',
			'allow_null' => true
		)
	),
	'PRIMARY KEY' => array('id')
);
$db->create_table('illegal_words', $schema);


$schema = array(
	'FIELDS' => array(
		'id' => array(
			'datatype' => 'SERIAL',
			'allow_null' => false
		),
		'father_id' => array(
			'datatype' => 'INT(10) UNSIGNED',
			'allow_null' => false,
			'default' => '0'
		),
		'title' => array(
			'datatype' => 'VARCHAR(100)',
			'allow_null' => true
		),
		'description' => array(
			'datatype' => 'TEXT',
			'allow_null' => true
		),
		'active' => array(
			'datatype' => 'TINYINT(1) UNSIGNED',
			'allow_null' => true
		),
		'last_update' => array(
			'datatype' => 'TIMESTAMP',
			'allow_null' => true
		),
		'created' => array(
			'datatype' => 'DATE',
			'allow_null' => true
		),
		'ip' => array(
			'datatype' => 'VARCHAR(15)',
			'allow_null' => true
		),
		'position' => array(
			'datatype' => 'INT(10) UNSIGNED',
			'allow_null' => false,
			'default' => '0'
		)
	),
	'PRIMARY KEY' => array('id')
);
$db->create_table('categories', $schema);


$schema = array(
	'FIELDS' => array(
		'id' => array(
			'datatype' => 'SERIAL',
			'allow_null' => false
		),
		'name' => array(
			'datatype' => 'VARCHAR(100)',
			'allow_null' => true
		),
		'email' => array(
			'datatype' => 'VARCHAR(150)',
			'allow_null' => true
		),
		'url' => array(
			'datatype' => 'VARCHAR(255)',
			'allow_null' => true
		),
		'title' => array(
			'datatype' => 'VARCHAR(255)',
			'allow_null' => true
		),
		'description' => array(
			'datatype' => 'TEXT',
			'allow_null' => true
		),
		'active' => array(
			'datatype' => 'TINYINT(1) UNSIGNED',
			'allow_null' => true
		),
		'ip' => array(
			'datatype' => 'VARCHAR(15)',
			'allow_null' => true
		),
		'category_id' => array(
			'datatype' => 'INT(10) UNSIGNED',
			'allow_null' => true
		),
		'date_submitted' => array(
			'datatype' => 'TIMESTAMP',
			'allow_null' => false,
			'default' => 'CURRENT_TIMESTAMP'
		),
		'reciprocal_url' => array(
			'datatype' => 'VARCHAR(255)',
			'allow_null' => true
		),
		'type' => array(
			'datatype' => 'VARCHAR(50)',
			'allow_null' => true
		),
		'payment_status' => array(
			'datatype' => 'VARCHAR(50)',
			'allow_null' => true
		),
		'position' => array(
			'datatype' => 'INT(10) UNSIGNED',
			'allow_null' => false,
			'default' => '0'
		)
	),
	'PRIMARY KEY' => array('id')
);
$db->create_table('links', $schema);


$schema = array(
	'FIELDS' => array(
		'id' => array(
			'datatype' => 'SERIAL',
			'allow_null' => false
		),
		'ip' => array(
			'datatype' => 'VARCHAR(15)',
			'allow_null' => false,
			'default' => '""'
		)
	),
	'PRIMARY KEY' => array('id')
);
$db->create_table('ip_bans', $schema);

	
$schema = array(
	'FIELDS' => array(
		'id' => array(
			'datatype' => 'SERIAL',
			'allow_null' => false	
		),
		'title' => array(
			'datatype' => 'VARCHAR(100)',
			'allow_null' => false,
			'default' => '""'
		),
		'value' => array(
			'datatype' => 'VARCHAR(255)',
			'allow_null' => false,
			'default' => '""'
		)
	),
	'PRIMARY KEY' => array('id')
);
$db->create_table('settings', $schema);


$schema = array(
	'FIELDS' => array(
		'id' => array(
			'datatype' => 'VARCHAR(150)',
			'allow_null' => false,
			'default' => '""'
		),
		'title' => array(
			'datatype' => 'VARCHAR(150)',
			'allow_null' => false,
			'default' => '""'
		),
		'version' => array(
			'datatype' => 'VARCHAR(25)',
			'allow_null' => false,
			'default' => '""'
		),
		'description' => array(
			'datatype' => 'TEXT',
			'allow_null' => true
		),
		'author' => array(
			'datatype' => 'VARCHAR(50)',
			'allow_null' => false,
			'default' => '""'
		),
		'uninstall' => array(
			'datatype' => 'TEXT',
			'allow_null' => true
		)
	),
	'PRIMARY KEY' => array('id')
);
$db->create_table('extensions', $schema);


$schema = array(
	'FIELDS' => array(
		'id' => array(
			'datatype' => 'VARCHAR(150)',
			'allow_null' => false,
			'default' => '""'
		),
		'extension_id' => array(
			'datatype' => 'VARCHAR(150)',
			'allow_null' => false,
			'default' => '""'
		),
		'code' => array(
			'datatype' => 'TEXT',
			'allow_null' => true
		),
		'installed' => array(
			'datatype' => 'INT(10) UNSIGNED',
			'allow_null' => false,
			'default' => '0'
		)
	),
	'PRIMARY KEY' => array('id', 'extension_id')
);
$db->create_table('extension_hooks', $schema);


// Make sure base_url doesn't end with a slash
$_POST['site_domain'] = remove_last_slash($_POST['site_domain']);


//Now, we will implement the settings
$config = array(
	'admin_username' => $db->escape($_POST['admin_username']),
	'admin_password' => openld_hash($_POST['admin_password']),
	'title' => $db->escape($_POST['site_title']),
	'description' => $db->escape($_POST['site_description']),
	'email' => $db->escape($_POST['admin_email']),
	'domain' => $db->escape($_POST['site_domain']),
	'links_sorting_by' => "title",
	'categories_sorting_by' => "title",
	'number_of_colums' => "2",
	'number_of_links_per_page' => "20",
	'number_of_search_results_per_page' => "20", //new.. not implemented in search.php yet
	'link_title_max_length' => "255", // cannot exceed 255 chars
	'link_title_min_length' => "2",
	'link_url_max_length' => "255", // cannot exceed 255 chars
	'link_url_min_length' => "2",
	'link_description_max_length' => "1024",
	'link_description_min_length' => "0",
	'category_description_max_length' => "1024",
	'category_description_min_length' => "0",
	'reciprocal_links_option' => "N",
	'reciprocal_url_option' => $db->escape($_POST['site_domain']),
	'regular_links_option' => "Y",
	'paid_links_option' => "N",
	'sponsor_links_option' => "N",
	'template_path' => "default/",
	'admin_template_path' => "default/",
	'language' => "english",
	'auto_accept_links' => "N", //Not added to the option panel yet
	'display_unaccepted_links' => "N",
	'display_unaccepted_categories' => "N", //Not added to the option panel yet
	'disable_extensions' => "N" ,
	'payments' => 'paypal', //payment tool(paypal, gbuy..)
	'paid_price_option' => '1',
	'paid_curr_option' => 'USD',
	'paid_account_option' => $db->escape($_POST['admin_email']),
	'sponsor_price_option' => '5',
	'sponsor_curr_option' => 'USD',
	'sponsor_account_option' => $db->escape($_POST['admin_email']),
	'rewrite_layer' => 'off',
	'gzip' => 'N',
	'hide_admin_button' => 'N',
	'deny_index_page_submissions' => 'N',
	'open_links_in_new_windows' => 'N'
		// 'ban_words' => "N" //will reduce performance leak if it's set to N.. but requires alots of enchangements in the code.. except if the censor is only used when submitting.. which we will use it for.. and then we don't need this setting.
);

while (list($conf_name, $conf_value) = @each($config))
{
	$query = array(
		'INSERT' => 'title, value',
		'INTO' => 'settings',
		'VALUES' => '"' .$conf_name. '","' .$conf_value. '"'
	);
	$db->query_build($query)
		or error('Unable to insert into table '.$db_prefix.'settings. Please check your configuration and try again. Failing values: "' .$conf_name. '", "' .$conf_value. '"',  __FILE__, __LINE__);
}

//generate settings cache
generate_settings_cache();

// install extensions by default - list all below
install_extension('support_openld');


if ($db_type == 'pgsql' || $db_type == 'sqlite')
	$db->end_transaction();