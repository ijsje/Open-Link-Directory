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

define("NO_USERNAME_AT_ALL", "Kullanýcý ismi girmediniz, lütfen bir kullanýcý ismi yazýnýz");
define("TOO_LONG_USERNAME", "Yazdýðýnýz kullanýcý ismi çok uzun, lütfen kýsaltýnýz");
define("TOO_SHORT_USERNAME", "Yazdýðýnýz kullanýcý ismi çok kýsa, lütfen daha uzun bir isim yazýnýz");
define("NO_PASSWORD_AT_ALL", "Parola girmediniz, lütfen bir parola yazýnýz");
define("TOO_LONG_PASSWORD", "Yazdýðýnýz parola çok uzun, lütfen kýsaltýnýz");
define("TOO_SHORT_PASSWORD", "Yazdýðýnýz parola çok kýsa, lütfen daha uzun bir parola yazýnýz");
define("EMAIL_TOO_LONG", "Yazdýðýnýz E-posta adresi çok uzun, lütfen kýsaltýnýz");
define("EMAIL_TOO_SHORT", "Yazdýðýnýz E-posta adresi çok kýsa, lütfen daha uzun bir adres yazýnýz");
define("ILLEGAL_WORDS_WITHIN_EMAIL", "E-posta adresinizde yasaklanmýþ kelimeler bulunuyor, lütfen deðiþtiriniz");
define("NO_TITLE_AT_ALL", "Baþlýk yazmadýnýz, lütfen siteniz için bir baþlýk yazýnýz");
define("TITLE_TOO_LONG", "Yazdýðýnýz baþlýk çok uzun, lütfen kýsaltýnýz");
define("TITLE_TOO_SHORT", "Yazdýðýnýz baþlýk çok kýsa, lütfen daha uzun bir baþlýk yazýnýz");
define("NO_DESCRIPTION_AT_ALL", "Site açýklamasý yazmadýnýz, lütfen siteniz için bir açýklama yazýnýz");
define("DESCRIPTION_TOO_LONG", "Yazdýðýnýz açýklama çok uzun, lütfen kýsaltýnýz");
define("DESCRIPTION_TOO_SHORT", "Yazdýðýnýz açýklama çok kýsa, lütfen daha uzun bir açýklama yazýnýz");
define("URL_TOO_LONG", "Site adresiniz çok uzun, lütfen kýsaltýnýz");
define("URL_TOO_SHORT", "Site adresiniz çok kýsa, lütfen daha uzun bir parola yazýnýz");
define("ILLEGAL_WORDS_WITHIN_URL", "Site adresinizde yasaklanmýþ kelimeler bulunuyor, lütfen deðiþtiriniz");
define("INVALID_URL_FORMAT", "Yazdýðýnýz site adresi geçerli deðil, lütfen deðiþtiriniz");

define("PERMISSION_DESCRIPTION", "Lütfen alttaki dosyalarýn yetkilerini 755 olarak ayarlayýnýz:");
define("CHMOD_LABEL", "Yetkiler");
define("CHMOD_WARNING", "Dosya yetkilerini 755 olarak ayarlayýnýz");
define("PERMISSION_NOT_CONTINUE", "Devam etmeden önce dosyalarýn yetkilendirmelerini 755 olarak deðiþtirin");

define("EXTENSION_ERROR", "Veribankasý türü doðru deðil");
define("HOST_ERROR", "Host kýsmýnda hata var");
define("NAME_ERROR", "Veribankasý ismi yanlýþ");
define("USERNAME_ERROR", "Veribankasý kullanýcýsý doðru deðil");
define("PASSWORD_ERROR", "Veribankasý parolasý doðru deðil");
define("PREFIX_ERROR", "Veribankasý ek uzantýsý eksik");
define("PASSWORD_EQUALS_USERNAME", "Parolanýz kullanýcý ismi ile ayný olamaz");

define("LOCAL_SETTINGS", "Veribankasý ayarlarý");
define("OVERVIEW_TABLE_OBJECT", "Konu");
define("OVERVIEW_TABLE_PREFERENCE", "Ayarlar");
define("OVERVIEW_TABLE_DATABASE", "Veribankasý uygulamasý");
define("OVERVIEW_TABLE_HOST", "Host");
define("OVERVIEW_TABLE_NAME", "Veribankasý ismi");
define("OVERVIEW_TABLE_USERNAME", "Veribankasý kullanýcý ismi");
define("OVERVIEW_TABLE_PASSWORD", "Veribankasý parolasý");
define("OVERVIEW_TABLE_PREFIX", "Veribankasý uzantýsý");
define("CONFIG_NOT_FOUND", "Ayar dosyasý bulunamadý"); // not sure if its still in use
define("DATBASE_ALLREADY_INSTALLED", "Veribankasý baþarýyla yüklendi, lütfen /install klasörünü güvenliðiniz için silin.");
define("WRONG_PHP_VERSION", "Kullandýðýnýz PHP sürümü: ".PHP_VERSION.". OpenLD minimum PHP 4.3.0 ile çalýþýr. Yükleme iþlemine devam etmeden önce PHP sürümünüzü yükseltiniz.");
define("NO_VALID_DB_SELECTED", "Geçerli bir veribankasý seçilmemiþ");
define("INSTALL_OPENLD", "Install OpenLD");
define("LICENSE", "Lisans");
define("SET_YOUR_OPTIONS", "Ayarlarý düzenle");
define("ADMIN_USERNAME", "Yönetici ismi");
define("ADMIN_PASSWORD", "Yönetici parolasý");
define("ADMIN_EMAIL", "Yönetici E-postasý");
define("SITE_TITLE", "Site ismi");
define("SITE_DESCRIPTION", "Site açýklamasý");
define("SITE_DOMAIN", "Site adresi");
define("CONTINUE_", "Devam"); // cannot be just CONTINUE because of type/method conflict

define("FINISH_DESCRIPTION", "Tebrikler! OpenLD baþarýyla yüklendi. Lütfen yükleme iþlemini bitirmek için sýradaki iþlemleri yapýnýz");
define("OPENLD_IS_INSTALLED", "OpenLD yükleme iþlemi bitti!");
define("DELETE_INSTALL_FOLDER_MESSAGE", "Güvenlik nedeniyle /install klasörünü silmenizi tavsiye ediyoruz");
define("GOTO_DIRECTORY_INDEX", "Dizin anasayfasýna git");

define("INSTALLATION", "Yükleme");
define("CONFIGURATIONS", "Ayarlar");
//define("PREFERENCES", "Özellikler");
define("FINISH", "Bitir");

define("TITLE_PHASE", "OPENLD Yüklemesi - ");

//for the footer
define("POWERED_BY", "Katký sunanlar:");

//Page generation
define("PAGE_GENERATED_IN", "Page generated in ");
define("SECONDS", " Seconds");
