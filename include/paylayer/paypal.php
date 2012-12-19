<?php
/***********************************************************************

  Copyright (C) 2006  Micah Carrick (email@micahcarrick.com)
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

class MoneyLayer
{
	var $form_url;
	var $log_file;
	var $error;
	var $response;
	var $fields;


	function MoneyLayer()
	{
		$this->form_url = 'https://www.paypal.com/cgi-bin/webscr';
		$this->log_file = 'paypal_log.txt';
		$this->response = '';
		$this->error = '';
		$this->fields = array();
	}


	function get_form()
	{
		$inputs = '';
		foreach($this->fields as $item => $value)
			$inputs .= '<input type="hidden" name="'. $item .'" value="'. $value .'">';

		return $inputs;
	}


	function add_field($item, $value)
	{
		$this->fields[$item] = $value;
	}


	function add_fields($fields_array)
	{
		foreach($fields_array as $item => $value)
			$this->fields[$item] = $value;
	}


	function get_form_URL($fields_array)
	{
		$queries = '';
		foreach($fields_array as $item => $input)
			$queries .= $item. '=' .urlencode($input). '&';
		return $queries;
	}


	function validate_payment()
	{
		$socket = fsockopen('www.paypal.com', 80, $errno, $errstr, 30); //must be changed to www.paypal.com before a release
		$post_string=$this->get_form_URL($_POST);
		$post_string.="cmd=_notify-validate";
		if (!$socket)
		{
			$this->error .= "\nPHP fsockopen() error: " . $errstr;
			return false;
		}
		else
		{
			$header = '';
			$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
			$header .= "Host: www.paypal.com:80\r\n";
			$header .= "Content-type: application/x-www-form-urlencoded\r\n";
			$header .= "Content-length: " . strlen($post_string) . "\r\n";
			$header .= "Connection: close\r\n\r\n";
			$header .= $post_string . "\r\n\r\n";

			fputs($socket, $header);
			while(!feof($socket))
				$this->response .= fgets($socket, 1024);
			fclose($socket);
		}
		if (strstr($this->response, 'VERIFIED'))
			return true;
		else
		{
			$this->error .= '\nPaypal payment validation failed\n\nResponse:'. $this->response. 'HEADER: '. $header;
			return false;
		}
	}


	function print_log()
	{
		$f = @fopen(OPENLD_ROOT.'files/'.$this->log_file, 'wb');
		fwrite($f, "Error: ". $this->error);
		fclose($f);
	}

}
