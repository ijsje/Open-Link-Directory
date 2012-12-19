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


	function openld_hash($str)
	{
		if (function_exists('sha1'))	// Only in PHP 4.3.0+
			return sha1($str);
		else if (function_exists('mhash'))	// Only if Mhash library is loaded
			return bin2hex(mhash(MHASH_SHA1, $str));
		else
			return md5($str);
	}

	session_start();

	//Generate a captcha string
	$rand = openld_hash(mktime() * microtime());
	$captcha_string = substr($rand, 0, rand(5, 6));

	//store the string in a session
	$_SESSION['captcha'] = openld_hash($captcha_string);

	//make an image
	$image_width = rand(150, 179);
	$image_height = rand(50, 58);
	$lines = rand(1, 8);
	$rand_color = array(rand(0, 180), rand(0, 180), rand(0, 180));
	$captcha_image = imagecreate($image_width, $image_height);
	imagecolorallocate($captcha_image ,rand(237, 255), rand(246, 255), rand(238, 255));
	$text_color = imagecolorallocate($captcha_image, $rand_color[0], $rand_color[1], $rand_color[2]);
	imagestring($captcha_image, rand(3, 5), rand(19, 80), rand(4,39), $captcha_string, $text_color);

	//line up
	$loop = rand(0,$lines);
	for($i=0; $i<=$loop; $i++)
	{
		$line = imagecolorallocate($captcha_image, $rand_color[0], $rand_color[1], $rand_color[2]);
		imageline($captcha_image,rand(0, $image_width),rand(0, $image_height), rand(0, $image_width), rand(0, $image_height), $line);
	}

	//display the image
	header("Content-type: image/jpeg");
	imagejpeg($captcha_image);

	//allocate the image
	imagedestroy($captcha_image);
