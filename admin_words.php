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

define('OPENLD_ROOT', './');
require OPENLD_ROOT.'admin_header.php';

($hook = get_hook('admin_words_before_input_check')) ? eval($hook) : null;
if(!empty($_POST))
{
	if(isset($_POST['add_word']))
	{
		$error->check_new_censor_word(check_if_null($_POST['new_censor_word']));
		$_POST['if_total_ban'] = isset($_POST['if_total_ban']) ? 'T' : 'N';
		//since we don't need a replace word, it's not important to check
		($hook = get_hook('admin_words_add_word_check')) ? eval($hook) : null;
		if($error->transform_error())
		{
			$query = array(
				'INSERT' => 'spam_word, replace_word, ban_type',
				'INTO' => 'illegal_words',
				'VALUES' => '"' .$db->escape($_POST['new_censor_word']). '", "'
					.$db->escape($_POST['new_replace_with']). '", "'
					.$db->escape($_POST['if_total_ban']).'"'
			);
			($hook = get_hook('admin_words_add_sql')) ? eval($hook) : null;
			$db->query_build($query) or error(__FILE__, __LINE__);

			($hook = get_hook('admin_words_add_word_after_sql')) ? eval($hook) : null; 
		}
	}
	elseif(isset($_POST['remove_word']))
	{
		$error->check_censor_word_id(check_if_null($_POST['id']));
		($hook = get_hook('admin_words_remove_word_check')) ? eval($hook) : null;
		if($error->transform_error())
		{
			$query = array(
				'DELETE' => 'illegal_words',
				'WHERE' => 'id=' .intval($_POST['id'])
			);
			($hook = get_hook('admin_words_remove_sql')) ? eval($hook) : null;
			$db->query_build($query) or error("Couldn't delete a row", __FILE__, __LINE__);
			($hook = get_hook('admin_words_remove_word_after_sql')) ? eval($hook) : null;
		}
	}
	elseif(isset($_POST['update']))
	{
		$error->check_censor_word_id(check_if_null($_POST['id']));
		$error->null_control('censor_word_warning', check_if_null($_POST['edit_censored_word']), EDIT_CENSORED_NOT_FOUND);
		$_POST['edit_replace_word'] = isset($_POST['edit_replace_word']) ? $_POST['edit_replace_word'] : '';
		$error->update_old_censor_word(check_if_null($_POST['edit_censored_word']), check_if_null($_POST['id']));
		$_POST['if_total_ban'] = isset($_POST['if_total_ban']) ? 'T' : 'N';
		($hook = get_hook('admin_words_update_word_check')) ? eval($hook) : null;
		if($error->transform_error())
		{
			$query = array(
				'UPDATE' => 'illegal_words',
				'SET' => 'spam_word="' .$db->escape($_POST['edit_censored_word']).
					'", replace_word="'.$db->escape($_POST['edit_replace_word']).
					'", ban_type="'.$db->escape($_POST['if_total_ban']).'"',
				'WHERE' => 'id=' .intval($_POST['id'])
			);
			($hook = get_hook('admin_words_update_sql')) ? eval($hook) : null;
			$db->query_build($query) or error("Couldn't update a row", __FILE__, __LINE__);
			($hook = get_hook('admin_words_update_word_after_sql')) ? eval($hook) : null;
		}
	}
}
($hook = get_hook('admin_words_after_input_check')) ? eval($hook) : null;

//get all censored words
$query = array(
	'SELECT' => 'spam_word, id, replace_word, ban_type',
	'FROM' => 'illegal_words'
);
($hook = get_hook('admin_words_sql')) ? eval($hook) : null;
$result = $db->query_build($query) or error("Could not select spam_word in illegal_words", __FILE__, __LINE__);

$page = 'admin/admin_words.php';
require OPENLD_ROOT.'admin_footer.php';
