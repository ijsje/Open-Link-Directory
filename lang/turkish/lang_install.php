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

/************************************

TURKISH TRANSLATION BY KEDITOR
http://www.keditor.com

************************************/

define("NO_USERNAME_AT_ALL", "Kullan�c� ismi girmediniz, l�tfen bir kullan�c� ismi yaz�n�z");
define("TOO_LONG_USERNAME", "Yazd���n�z kullan�c� ismi �ok uzun, l�tfen k�salt�n�z");
define("TOO_SHORT_USERNAME", "Yazd���n�z kullan�c� ismi �ok k�sa, l�tfen daha uzun bir isim yaz�n�z");
define("NO_PASSWORD_AT_ALL", "Parola girmediniz, l�tfen bir parola yaz�n�z");
define("TOO_LONG_PASSWORD", "Yazd���n�z parola �ok uzun, l�tfen k�salt�n�z");
define("TOO_SHORT_PASSWORD", "Yazd���n�z parola �ok k�sa, l�tfen daha uzun bir parola yaz�n�z");
define("EMAIL_TOO_LONG", "Yazd���n�z E-posta adresi �ok uzun, l�tfen k�salt�n�z");
define("EMAIL_TOO_SHORT", "Yazd���n�z E-posta adresi �ok k�sa, l�tfen daha uzun bir adres yaz�n�z");
define("ILLEGAL_WORDS_WITHIN_EMAIL", "E-posta adresinizde yasaklanm�� kelimeler bulunuyor, l�tfen de�i�tiriniz");
define("NO_TITLE_AT_ALL", "Ba�l�k yazmad�n�z, l�tfen siteniz i�in bir ba�l�k yaz�n�z");
define("TITLE_TOO_LONG", "Yazd���n�z ba�l�k �ok uzun, l�tfen k�salt�n�z");
define("TITLE_TOO_SHORT", "Yazd���n�z ba�l�k �ok k�sa, l�tfen daha uzun bir ba�l�k yaz�n�z");
define("NO_DESCRIPTION_AT_ALL", "Site a��klamas� yazmad�n�z, l�tfen siteniz i�in bir a��klama yaz�n�z");
define("DESCRIPTION_TOO_LONG", "Yazd���n�z a��klama �ok uzun, l�tfen k�salt�n�z");
define("DESCRIPTION_TOO_SHORT", "Yazd���n�z a��klama �ok k�sa, l�tfen daha uzun bir a��klama yaz�n�z");
define("URL_TOO_LONG", "Site adresiniz �ok uzun, l�tfen k�salt�n�z");
define("URL_TOO_SHORT", "Site adresiniz �ok k�sa, l�tfen daha uzun bir parola yaz�n�z");
define("ILLEGAL_WORDS_WITHIN_URL", "Site adresinizde yasaklanm�� kelimeler bulunuyor, l�tfen de�i�tiriniz");
define("INVALID_URL_FORMAT", "Yazd���n�z site adresi ge�erli de�il, l�tfen de�i�tiriniz");

define("PERMISSION_DESCRIPTION", "L�tfen alttaki dosyalar�n yetkilerini 755 olarak ayarlay�n�z:");
define("CHMOD_LABEL", "Yetkiler");
define("CHMOD_WARNING", "Dosya yetkilerini 755 olarak ayarlay�n�z");
define("PERMISSION_NOT_CONTINUE", "Devam etmeden �nce dosyalar�n yetkilendirmelerini 755 olarak de�i�tirin");

define("EXTENSION_ERROR", "Veribankas� t�r� do�ru de�il");
define("HOST_ERROR", "Host k�sm�nda hata var");
define("NAME_ERROR", "Veribankas� ismi yanl��");
define("USERNAME_ERROR", "Veribankas� kullan�c�s� do�ru de�il");
define("PASSWORD_ERROR", "Veribankas� parolas� do�ru de�il");
define("PREFIX_ERROR", "Veribankas� ek uzant�s� eksik");
define("PASSWORD_EQUALS_USERNAME", "Parolan�z kullan�c� ismi ile ayn� olamaz");

define("LOCAL_SETTINGS", "Veribankas� ayarlar�");
define("OVERVIEW_TABLE_OBJECT", "Konu");
define("OVERVIEW_TABLE_PREFERENCE", "Ayarlar");
define("OVERVIEW_TABLE_DATABASE", "Veribankas� uygulamas�");
define("OVERVIEW_TABLE_HOST", "Host");
define("OVERVIEW_TABLE_NAME", "Veribankas� ismi");
define("OVERVIEW_TABLE_USERNAME", "Veribankas� kullan�c� ismi");
define("OVERVIEW_TABLE_PASSWORD", "Veribankas� parolas�");
define("OVERVIEW_TABLE_PREFIX", "Veribankas� uzant�s�");
define("CONFIG_NOT_FOUND", "Ayar dosyas� bulunamad�"); // not sure if its still in use
define("DATBASE_ALLREADY_INSTALLED", "Veribankas� ba�ar�yla y�klendi, l�tfen /install klas�r�n� g�venli�iniz i�in silin.");
define("WRONG_PHP_VERSION", "Kulland���n�z PHP s�r�m�: ".PHP_VERSION.". OpenLD minimum PHP 4.3.0 ile �al���r. Y�kleme i�lemine devam etmeden �nce PHP s�r�m�n�z� y�kseltiniz.");
define("NO_VALID_DB_SELECTED", "Ge�erli bir veribankas� se�ilmemi�");
define("INSTALL_OPENLD", "Install OpenLD");
define("LICENSE", "Lisans");
define("SET_YOUR_OPTIONS", "Ayarlar� d�zenle");
define("ADMIN_USERNAME", "Y�netici ismi");
define("ADMIN_PASSWORD", "Y�netici parolas�");
define("ADMIN_EMAIL", "Y�netici E-postas�");
define("SITE_TITLE", "Site ismi");
define("SITE_DESCRIPTION", "Site a��klamas�");
define("SITE_DOMAIN", "Site adresi");
define("CONTINUE_", "Devam"); // cannot be just CONTINUE because of type/method conflict

define("FINISH_DESCRIPTION", "Tebrikler! OpenLD ba�ar�yla y�klendi. L�tfen y�kleme i�lemini bitirmek i�in s�radaki i�lemleri yap�n�z");
define("OPENLD_IS_INSTALLED", "OpenLD y�kleme i�lemi bitti!");
define("DELETE_INSTALL_FOLDER_MESSAGE", "G�venlik nedeniyle /install klas�r�n� silmenizi tavsiye ediyoruz");
define("GOTO_DIRECTORY_INDEX", "Dizin anasayfas�na git");

define("INSTALLATION", "Y�kleme");
define("CONFIGURATIONS", "Ayarlar");
//define("PREFERENCES", "�zellikler");
define("FINISH", "Bitir");

define("TITLE_PHASE", "OPENLD Y�klemesi - ");

//for the footer
define("POWERED_BY", "Katk� sunanlar:");

//Page generation
define("PAGE_GENERATED_IN", "Page generated in ");
define("SECONDS", " Seconds");
