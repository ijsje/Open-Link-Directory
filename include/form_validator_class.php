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

class InputControl
{
	var $warnings;


	function InputControl()
	{
		$this->warnings = array();
	}


	function set_warning($item, $text)
	{
		if(isset($this->warnings[$item]))
			$this->warnings[$item] .= $text;
		else
			$this->warnings[$item] = $text;
	}


	function get_warning($item)
	{
		if(isset($this->warnings[$item]))
			return $this->warnings[$item];
		else
			return '';
	}


	function get_all_warnings()
	{
		if(is_array($this->warnings))
			return $this->warnings;
		else
			return array("warnings" => "is not set");
	}


	//uber private
	function length_control($item, $string, $maxlength, $minlength, $too_long_error, $too_short_error)
	{
		if(openld_strlen($string) > $maxlength)
			$this->set_warning($item, $too_long_error);
		if(openld_strlen($string) < $minlength)
			$this->set_warning($item, $too_short_error);
	}


	//should not be used within privates
	function censor_control($item, &$string_to_censor, $error_string)
	{
		if(!censor_words($string_to_censor))
			$this->set_warning($item, $error_string);
	}


	function null_control($item, $if_null, $error_string) // should be implemented in all public variables
	{
		if($if_null==null)
		{
			$this->set_warning($item, $error_string);
			return false;
		}

		return true;
	}


	//transform the error-array function
	function transform_error()
	{
		foreach($this->warnings as $junk)
			if($junk != "")
				return false;

		return true;
	}


	function numeric_control($item ,$id, $error_string) //Should be compenplated with public SQL
	{
		if(!is_numeric($id))
		{
			$this->set_warning($item, $error_string);
			return false;
		}
	}


	function string_control($item, $id, $error_string)
	{
		if(!is_string($id))
		{
			$this->set_warning($item, $error_string);
			return false;
		}
	}


	function check_title(&$title, $maxlength, $minlength, $censor=true)
	{
		$this->length_control('title_warning', $title, $maxlength, $minlength, TITLE_TOO_LONG, TITLE_TOO_SHORT);
		if($censor==true)
			$this->censor_control('title_warning', $title, ILLEGAL_WORDS_WITHIN_TITLE);
	}


	function check_description(&$description, $maxlength, $minlength, $censor=true)
	{
		$this->null_control('description_warning', $description, NO_DESCRIPTION_AT_ALL);
		$this->length_control('description_warning', $description, $maxlength, $minlength, DESCRIPTION_TOO_LONG, DESCRIPTION_TOO_SHORT);
		if($censor==true)
			$this->censor_control('description_warning', $description, ILLEGAL_WORDS_WITHIN_DESCRIPTION);
	}


	function check_name(&$name, $censor=true)
	{
		// the reason why this is a constant and not a setting is because nobody cares about the character length
		//for names and email addresses
		$this->length_control('name_warning', $name, 255, 5, NAME_TOO_LONG, NAME_TOO_SHORT);
		if($censor==true)
			$this->censor_control('name_warning', $name, ILLEGAL_WORDS_WITHIN_NAME);
	}


	function check_email(&$email, $censor=true) // this is public
	{
		//the maximum length of a RFC valid email address is 254 chars
		$max_email_length = 254;

		$this->length_control('email_warning', $email, $max_email_length, 5, EMAIL_TOO_LONG, EMAIL_TOO_SHORT);
		if($censor==true)
			$this->censor_control('email_warning', $email, ILLEGAL_WORDS_WITHIN_EMAIL);
	}


	function check_url(&$url, $censor=true)
	{
		$this->length_control('url_warning', $url, 255, 5, URL_TOO_LONG, URL_TOO_SHORT);
		if($censor==true)
			$this->censor_control('url_warning', $url, ILLEGAL_WORDS_WITHIN_URL);

		//add http:// in the beginning if the user forgets.
		if(strstr($url, "http://") == false && strstr($url, "https://") == false)
			$this->set_warning('url_warning', INVALID_URL_FORMAT);
	}


	function check_reciprocal_url(&$reciprocal_url, $from_url, $censor=true)
	{
		$this->null_control('reciprocal_warning', $reciprocal_url, NO_RECIPROCAL_URL_AT_ALL);
		$this->length_control('reciprocal_warning', $reciprocal_url, 255, 5, RECIPROCAL_URL_TOO_LONG, RECIPROCAL_URL_TOO_SHORT);
		if($censor==true)
			$this->censor_control('reciprocal_warning', $reciprocal_url, ILLEGAL_WORDS_WITHIN_RECIPROCAL_URL);
		if($this->transform_error() && reciprocal_check($reciprocal_url, $from_url)!=false)
			$this->set_warning('reciprocal_warning', reciprocal_check($reciprocal_url, $from_url));
	}


	function check_ip($ip)
	{
		if(!preg_match('/\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$/', $ip))
			$this->set_warning('ip_warning', NOT_CORRECT_IP_ADDRESS);
	}


	function check_new_username($username)
	{
		$this->null_control('username_warning', $username, NO_USERNAME_AT_ALL);
		$this->length_control('username_warning', $username, 255, 4, TOO_LONG_USERNAME, TOO_SHORT_USERNAME);
		//$this->censor_control('username_warning', $username, ILLEGAL_WORDS_WITHIN_USERNAME);
	}


	function check_new_password($password)
	{
		$this->null_control('password_warning', $password, NO_PASSWORD_AT_ALL);
		$this->length_control('password_warning', $password, 255, 4, TOO_LONG_PASSWORD, TOO_SHORT_PASSWORD);
		//$this->censor_control('password_warning', $password, ILLEGAL_WORDS_WITHIN_PASSWORD);
	}


	function check_minimum_link_description($min)
	{
		$this->null_control('admin_min_description_category_warning', $min, NO_MINIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL);
		$this->numeric_control('admin_min_description_category_warning', $min, MINIMUM_ALLOWED_LINK_DESCRIPTION);
	}


	function check_maximum_link_description($max)
	{
		$this->null_control('admin_max_description_link_warning', $max, NO_MAXIMUM_ALLOWED_LINK_DESCRIPTION_AT_ALL);
		$this->numeric_control('admin_max_description_link_warning', $max, MAXIMUM_ALLOWED_LINK_DESCRIPTION);
	}


	function check_minimum_category_description($min)
	{
		$this->null_control('admin_min_description_category_warning', $min, NO_MINIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL);
		$this->numeric_control('admin_min_description_category_warning', $min, MIN_CAT_DESC_NOT_NUMERIC);
	}


	function check_maximum_category_description($max)
	{
		$this->null_control('admin_max_description_category_warning', $max, NO_MAXIMUM_ALLOWED_CATEGORY_DESCRIPTION_AT_ALL);
		$this->numeric_control('admin_max_description_category_warning', $max, MAX_CAT_DESC_NOT_NUMERIC);
	}


	//public
	function check_maximum_vs_minimum_link_description($max, $min)
	{
		$this->check_maximum_link_description($max);
		$this->check_minimum_link_description($min);
		if($min > $max)
			$this->set_warning('admin_min_description_link_warning', MINIMUM_LINK_DESCRIPTION_BIGGER_THAN_MAXIMUM);
	}


	function check_maximum_vs_minimum_category_description($max, $min)
	{
		$this->check_maximum_category_description($max);
		$this->check_minimum_category_description($min);
		if($min > $max)
			$this->set_warning('admin_min_description_category_warning', MINIMUM_CAT_DESCRIPTION_BIGGER_THAN_MAXIMUM);
	}


	function check_links_per_page($links)
	{
		$this->null_control('links_per_page', $links, NO_LINKS_PER_PAGE_AT_ALL);
		$this->numeric_control('links_per_page', $links, LINKS_PER_PAGE_NOT_NUMERIC);
	}


	function check_column_number($columns)
	{
		$this->null_control('number_of_columns_warning', $columns, NO_COLUMN_NUMBER_AT_ALL);
		$this->numeric_control('number_of_columns_warning', $columns, COLUMN_NUMBER_IS_NOT_A_NUMBER);
	}


	function check_links_sorted_by($sort_string)
	{
		$this->null_control('links_sorted_by_valid', $sort_string, NO_SORT_OPTION_AT_ALL);
		$this->length_control('links_sorted_by_valid', $sort_string, 255, 0, SORT_OPTION_TOO_LONG, SORT_OPTION_TOO_SHORT);

		/*****
		No warning is needed, because it's just a select list, but here's a solution which could be used,
		tough it's still limiting extension creativity.
		SORT_OPTION_NOT_VALID will be removed until there's an argument for using something like this.
		******

		$field_string = $sort_string;
		if(strpos($field_string, ' DESC'))
			$field_string = substr($field_string, -5, 0);
		elseif(strpos($field_string, ' ASC'))
			$field_string = substr($field_string, -5, 0);

		if(!index_exists('links', $field_string)
			$this->set_warning('links_sorted_by_valid', SORT_OPTION_NOT_VALID);

		*****/
	}


	function check_language_preference($lang)
	{
		$this->null_control('language_warning', $lang, NO_LANGUAGE_AT_ALL);
		$this->length_control('language_warning', $lang, 255, 0, LANGUAGE_TOO_LONG, LANGUAGE_TOO_SHORT);
	}


	function check_site_path($url)
	{
		$this->check_url($url, false);
	}


	function check_admin_description($description)
	{
		$this->check_description($description, 255, 0, false);
	}


	function check_admin_title($title)
	{
		$this->null_control('title_warning', $title, NO_TITLE_AT_ALL);
		$this->check_title($title, 255, 0, false);
	}


	function check_new_username_vs_password($username, $password)
	{
		$this->check_new_username($username);
		$this->check_new_password($password);
		if($password == $username)
			$this->set_warning('password_warning', PASSWORD_EQUALS_USERNAME);
	}


	function check_linktype($linktype, $reciprocal_url = null, $from_url = null)
	{
		global $settings;
		$this->null_control('linktype_warning', $linktype, NO_LINKTYPE_AT_ALL);

		if($linktype == 'regular' && $settings['regular_links_option'] != 'Y')
			$this->set_warning('linktype_warning', REGULAR_NOT_ALLOWED_BUT_CHOSED);
		elseif($linktype == 'reciprocal')
		{
			if($settings['reciprocal_links_option'] != 'Y')
				$this->set_warning('linktype_warning', RECIPROCAL_NOT_ALLOWED_BUT_CHOSED);
			else
				$this->check_reciprocal_url($reciprocal_url, $from_url);
		}
		elseif($linktype == 'paid' && $settings['paid_links_option'] != 'Y')
			$this->set_warning('linktype_warning', PAID_NOT_ALLOWED_BUT_CHOSED);
		elseif($linktype == 'sponsor' && $settings['sponsor_links_option'] != 'Y')
			$this->set_warning('linktype_warning', SPONSORED_NOT_ALLOWED_BUT_CHOSED);
	}


	function check_payment()
	{
		$pay = new MoneyLayer();
		//check the log or something
		$_GET['action'] = isset($_GET['action']) ? $_GET['action'] : 'process';
		switch($_GET['action'])
		{
			case 'process': break;
			case 'ipn': break;
			case 'cancel': break;
			case 'success': break;
		} // should the switch part really be within this file?
	}


	function check_link_name(&$name)
	{
		$this->check_name($name, true);
	}


	function check_link_email(&$email)
	{
		//validation regexp for sorting out illigal addresses
		$correct_email_regexp = '/^(([^<>()[\]\\.,;:\s@"\']+(\.[^<>()[\]\\.,;:\s@"\']+)*)|("[^"\']+"))@((\[\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\])|(([a-zA-Z\d\-]+\.)+[a-zA-Z]{2,}))$/';

		if(!preg_match($correct_email_regexp, $email))
			$this->set_warning('email_warning', INVALID_EMAIL);

		$this->check_email($email, true);
	}


	function check_link_title(&$title)
	{
		global $settings;
		$this->check_title($title, $settings['link_title_max_length'], $settings['link_title_min_length'], true);
	}


	function check_link_url(&$url)
	{
		global $db;
		$this->check_url($url, true);

		$query = array(
			'SELECT' => 'id',
			'FROM' => 'links',
			'WHERE' => 'url="'.$db->escape($url).'"'
		);
		$if_similar_url = $db->query_build($query) or error("URL check error", __FILE__, __LINE__);
		if($db->num_rows($if_similar_url) != 0)
			$this->set_warning('url_warning', URL_ALLREADY_THERE);
	}


	function check_link_category_id($category_id)
	{
		global $settings;
		if($settings['deny_index_page_submissions'] == 'Y' && $category_id == 0)
			$this->set_warning('category_warning', INDEX_PAGE_NOT_OPEN_FOR_SUBMISSION);
		else
			$this->check_category_id($category_id);
	}


	function check_link_description(&$description)
	{
		global $settings;
		$this->check_description($description, $settings['link_description_max_length'], $settings['link_description_min_length'], true);
	}


	function check_category_title(&$title, $category_id)
	{
		$this->null_control('title_warning', $title, NO_TITLE_AT_ALL);

		if($this->null_control('title_warning', $category_id, 'category id is null'))
		{
			//using linktitle since we don't have a category_max_min_title preference yet
			global $settings, $db;
			$this->check_title($title, $settings['link_title_max_length'], $settings['link_title_min_length'], true);


			$query = array(
				'SELECT' => 'id',
				'FROM' => 'categories',
				'WHERE' => 'title="' .$db->escape($title). '" AND father_id=' .intval($category_id)
			);
			$if_similar_title = $db->query_build($query) or error("Category itle check error", __FILE__, __LINE__);
			if($db->num_rows($if_similar_title) != 0)
				$this->set_warning('title_warning', TITLE_ALREADY_THERE);
		}
	}


	function check_category_description(&$description)
	{
		if($this->null_control('description_warning', $description, NO_DESCRIPTION_AT_ALL) != false)
		{
			global $settings;
			//link_description is used since there no alternative for categories yet
			$this->check_description($description, $settings['link_description_max_length'], $settings['link_description_min_length'], true);
		}
	}


	function check_category_id($id)
	{
		if($this->null_control('category_warning', $id, NO_CATEGORY_SELECTED) != false)
		{
			if($this->numeric_control('category_warning', $id, CATEGORY_ID_NOT_A_NUMBER) != false)
			{
				//check so the id actually is in the db
				global $db;

				$query = array(
					'SELECT' => 'id',
					'FROM' => 'categories',
					'WHERE' => 'id=' .$id
				);
				$db->query_build($query) or error(__FILE__, __LINE__);

				if($db->num_rows($sql) == 0)
					$this->set_warning('category_warning', CATEGORY_ID_NOT_IN_DB);
				else
					error("serious error", __FILE__, __LINE__);
			}
		}
	}


	function check_link_id($id)
	{

	}


	function update_old_censor_word($edit_word, $id)
	{
		global $db;

		$query = array(
			'SELECT' => 'spam_word',
			'FROM' => 'illegal_words',
			'WHERE' => 'spam_word="' .$db->escape($edit_word). '" AND id<>' .intval($id)
		);
		$check_dual_sql = $db->query_build($query) or error("Could not select spamword", __FILE__, __LINE__);

		if($db->num_rows($check_dual_sql) != 0)
			$this->set_warning('censor_word_warning', DOUBLE_ADD);
	}


	function check_censor_word_id($id)
	{
		global $db;
		$this->null_control('censor_word_warning', $id, NO_ID_FOUND);

		$query = array(
			'SELECT' => 'id',
			'FROM' => 'illegal_words',
			'WHERE' => 'id=' .intval($id)
		);
		$check_sql = $db->query_build($query) or error("Could not select the id", __FILE__, __LINE__);

		if($db->num_rows($check_sql) == 0)
			$this->set_warning('censor_word_warning', NO_ID_FOUND);
		elseif($db->num_rows($check_sql) > 1)
			$this->set_warning('censor_word_warning', MORE_THAN_ONE_ID_FOUND);
	}


	function check_new_censor_word($new_word)
	{
		global $db;
		$this->null_control('new_censor_word_warning', $new_word, CENSORED_WORD_IS_NOTHING);

		$query = array(
			'SELECT' => 'spam_word',
			'FROM' => 'illegal_words',
			'WHERE' => 'spam_word="' .$db->escape($new_word). '"'
		);
		$check_sql = $db->query_build($query) or error("Could not select spamword", __FILE__, __LINE__);

		if($db->num_rows($check_sql) != 0)
			$this->set_warning('new_censor_word_warning', DOUBLE_ADD);
	}


	function check_new_ip_ban($ban_ip)
	{
		global $db;
		$this->check_ip(check_if_null($ban_ip));

		$query = array(
			'SELECT' => 'ip',
			'FROM' => 'ip_bans',
			'WHERE' => 'ip="' .$db->escape($ban_ip). '"'
		);
		$ip_insert_control = $db->query_build($query) or error(__FILE__, __LINE__);

		if($db->num_rows($ip_insert_control) > 0)
			$this->set_warning('ip_warning', IP_ALLREADY_BANNED);
	}
}


//function for controlling if input is isset
function check_if_null($var)
{
	if (!isset($var))
		return NULL;
	else
		return $var;
}


//The only error object.
$error = new InputControl();
