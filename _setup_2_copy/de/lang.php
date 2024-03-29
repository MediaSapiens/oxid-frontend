<?php
/**
 *    This file is part of OXID eShop Community Edition.
 *
 *    OXID eShop Community Edition is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    OXID eShop Community Edition is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @package   setup
 * @copyright (C) OXID eSales AG 2003-2011
 * @version OXID eShop CE
 * @version   SVN: $Id: lang.php 38391 2011-08-24 15:09:50Z vilma $
 */

$aLang = array(

'charset'                                       => 'ISO-8859-15',
'HEADER_META_MAIN_TITLE'                        => "OXID eShop Installationsassistent",
'HEADER_TEXT_SETUP_NOT_RUNS_AUTOMATICLY'        => "Sollte das Setup nicht nach einigen Sekunden automatisch weiterspringen, dann klicken Sie bitte",
'FOOTER_OXID_ESALES'                            => "&copy; OXID eSales AG 2003-".@date("Y"),

'TAB_0_TITLE'                                   => "Voraussetzungen",
'TAB_1_TITLE'                                   => "Willkommen",
'TAB_2_TITLE'                                   => "Lizenzbedingungen",
'TAB_3_TITLE'                                   => "Datenbank",
'TAB_4_TITLE'                                   => "Verzeichnisse & Login",
'TAB_5_TITLE'                                   => "Lizenz",
'TAB_6_TITLE'                                   => "Fertigstellen",

'TAB_0_DESC'                                    => "�berpr�fen, ob ihr System die Voraussetzungen erf�llt",
'TAB_1_DESC'                                    => "Herzlich willkommen<br>zur Installation von OXID eShop",
'TAB_2_DESC'                                    => "Best�tigen Sie die Lizenzbedingungen",
'TAB_3_DESC'                                    => "Verbindung testen,<br>Tabellen anlegen",
'TAB_4_DESC'                                    => "Verzeichnisse einrichten und Admin-Zugangsdaten w�hlen",
'TAB_5_DESC'                                    => "Lizenzschl�ssel eintragen",
'TAB_6_DESC'                                    => "Installation erfolgreich",

'HERE'                                          => "hier",

'ERROR_NOT_AVAILABLE'                           => "FEHLER: %s nicht vorhanden!",
'ERROR_NOT_WRITABLE'                            => "FEHLER: %s nicht beschreibbar!",
'ERROR_DB_CONNECT'                              => "FEHLER: Keine Datenbankverbindung m�glich!",
'ERROR_OPENING_SQL_FILE'                        => "FEHLER: Kann SQL Datei %s nicht �ffnen!",
'ERROR_FILL_ALL_FIELDS'                         => "FEHLER: Bitte alle notwendigen Felder ausf�llen!",
'ERROR_COULD_NOT_CREATE_DB'                     => "FEHLER: Datenbank %s nicht vorhanden und kann auch nicht erstellt werden!",
'ERROR_DB_ALREADY_EXISTS'                       => "FEHLER: Es scheint, als ob in der Datenbank %s bereits eine OXID Datenbank vorhanden ist. Bitte l�schen Sie diese!",
'ERROR_BAD_SQL'                                 => "FEHLER: (Tabellen)Probleme mit folgenden SQL Befehlen: ",
'ERROR_BAD_DEMODATA'                            => "FEHLER: (Demodaten)Probleme mit folgenden SQL Befehlen: ",
'ERROR_CONFIG_FILE_IS_NOT_WRITABLE'             => "FEHLER: %s/config.inc.php"." nicht beschreibbar!",
'ERROR_BAD_SERIAL_NUMBER'                       => "FEHLER: Falsche Serienummer!",
'ERROR_COULD_NOT_OPEN_CONFIG_FILE'              => "Konnte config.inc.php nicht �ffnen. Bitte in unserer FAQ oder im Forum nachlesen oder den OXID Support kontaktieren.",
'ERROR_COULD_NOT_FIND_FILE'                     => "Setup konnte die Datei \"%s\" nicht finden!",
'ERROR_COULD_NOT_READ_FILE'                     => "Setup konnte die Datei \"%s\" nicht �ffnen!",
'ERROR_COULD_NOT_WRITE_TO_FILE'                 => "Setup konnte nicht in die Datei \"%s\" schreiben!",
'ERROR_PASSWORD_TOO_SHORT'                      => "Passwort zu kurz",
'ERROR_PASSWORDS_DO_NOT_MATCH'                  => "Passw�rter stimmen nicht �berein",
'ERROR_USER_NAME_DOES_NOT_MATCH_PATTERN'        => "Bitte geben Sie eine g�ltige E-Mail-Adresse ein!",
'ERROR_MYSQL_VERSION_DOES_NOT_FIT_REQUIREMENTS' => "Die MySQL Version erf�llt nicht die Systemvoraussetzungen",

'ERROR_VIEWS_CANT_CREATE'                       => "FEHLER: Kann Views nicht erstellen. Bitte pr�fen Sie Ihre Benutzerrechte f�r die Datenbank.",
'ERROR_VIEWS_CANT_SELECT'                       => "FEHLER: Kann nicht auf Views zugreifen. Bitte pr�fen Sie Ihre Benutzerrechte f�r die Datenbank.",
'ERROR_VIEWS_CANT_DROP'                         => "FEHLER: Kann Views nicht l�schen. Bitte pr�fen Sie Ihre Benutzerrechte f�r die Datenbank.",

'MOD_PHP_EXTENNSIONS'                           => 'PHP Erweiterungen',
'MOD_PHP_CONFIG'                                => 'PHP Konfiguration',
'MOD_SERVER_CONFIG'                             => 'Server-Konfiguration',

'MOD_MOD_REWRITE'                               => 'Apache mod_rewrite Modul',
'MOD_SERVER_PERMISSIONS'                        => 'Dateizugriffsrechte',
'MOD_ALLOW_URL_FOPEN'                           => 'allow_url_fopen oder fsockopen auf Port 80',
'MOD_PHP4_COMPAT'                               => 'Zend Kompatibilit�tsmodus muss ausgeschaltet sein',
'MOD_PHP_VERSION'                               => 'PHP mindestens Version 5.2.0',
'MOD_REQUEST_URI'                               => 'REQUEST_URI vorhanden',
'MOD_LIB_XML2'                                  => 'LIB XML2',
'MOD_PHP_XML'                                   => 'DOM',
'MOD_J_SON'                                     => 'JSON',
'MOD_I_CONV'                                    => 'ICONV',
'MOD_TOKENIZER'                                 => 'Tokenizer',
'MOD_BC_MATH'                                   => 'BCMath',
'MOD_MYSQL_CONNECT'                             => 'MySQL Client Connector f�r MySQL 5',
'MOD_GD_INFO'                                   => 'GDlib v2 [v1] incl. JPEG Unterst�tzung',
'MOD_INI_SET'                                   => 'ini_set erlaubt',
'MOD_REGISTER_GLOBALS'                          => 'register_globals muss ausgeschaltet sein',
'MOD_ZEND_OPTIMIZER'                            => 'Zend Optimizer oder Zend Guard Loader installiert',
'MOD_ZEND_PLATFORM_OR_SERVER'                   => 'Zend Platform oder Zend Server installiert',
'MOD_MB_STRING'                                 => 'mbstring',
'MOD_CURL'                                      => 'cURL',
'MOD_OPEN_SSL'                                  => 'OpenSSL',
'MOD_SOAP'                                      => 'SOAP',
'MOD_UNICODE_SUPPORT'                           => 'UTF-8 Unterst�tzung',
'MOD_BUG53632'                                  => 'M�gliche Probleme mit Server durch PHP Bugs',

'STEP_0_ERROR_TEXT'                             => 'Ihr System erf�llt nicht alle n�tigen Systemvoraussetzungen',
'STEP_0_ERROR_URL'                              => "http://www.oxid-esales.com/de/produkte/community-edition/systemvoraussetzungen",
'STEP_0_TEXT'                                   => '<ul class="req">'.
                                                   '<li class="pass"> - Die Voraussetzung ist erf�llt.</li>'.
                                                   '<li class="pmin"> - Die Voraussetzung ist nicht oder nur teilweise erf�llt. Der OXID eShop funktioniert trotzdem und kann installiert werden.</li>'.
                                                   '<li class="fail"> - Die Voraussetzung ist nicht erf�llt. Der OXID eShop funktioniert nicht ohne diese Voraussetzung und kann nicht installiert werden.</li>'.
                                                   '<li class="null"> - Die Voraussetzung konnte nicht �berpr�ft werden.'.
                                                   '</ul>',
'STEP_0_DESC'                                   => 'In diesem Schritt wird �berpr�ft, ob Ihr System die Voraussetzungen erf�llt:',
'STEP_0_TITLE'                                  => 'Systemvoraussetzungen �berpr�fen',

'STEP_1_TITLE'                                  => "Willkommen",
'STEP_1_DESC'                                   => "Willkommen beim Installationsassistenten f�r den OXID eShop",
'STEP_1_TEXT'                                   => "<p>Um eine erfolgreiche und einfache Installation zu gew�hrleisten, nehmen Sie sich bitte die Zeit, die folgenden Punkte aufmerksam zu lesen und Schritt f�r Schritt auszuf�hren.</p> <p>Viel Erfolg mit Ihrem OXID eShop w�nscht Ihnen</p>",
'STEP_1_ADDRESS'                                => "OXID eSales AG<br>
                                                    Bertoldstr. 48<br>
                                                    79098 Freiburg<br>
                                                    Deutschland<br>",
'STEP_1_CHECK_UPDATES'                          => 'Regelm��ig �berpr�fen, ob Aktualisierungen vorhanden sind.',
'BUTTON_BEGIN_INSTALL'                          => "Shopinstallation beginnen",
'BUTTON_PROCEED_INSTALL'                        => "Setup beginnen",

'STEP_2_TITLE'                                  => "Lizenzbedingungen",
'BUTTON_RADIO_LICENCE_ACCEPT'                   => "Ich akzeptiere die Lizenzbestimmungen.",
'BUTTON_RADIO_LICENCE_NOT_ACCEPT'               => "Ich akzeptiere die Lizenzbestimmungen nicht.",
'BUTTON_LICENCE'                                => "Weiter",

'STEP_3_TITLE'                                  => "Datenbank",
'STEP_3_DESC'                                   => "Nun wird die Datenbank erstellt und mit den notwendigen Tabellen bef�llt. Dazu ben�tigen wir einige Angaben von Ihnen:",
'STEP_3_DB_HOSTNAME'                            => "Datenbank Hostname oder IP Adresse",
'STEP_3_DB_USER_NAME'                           => "Datenbank Benutzername",
'STEP_3_DB_PASSWORD'                            => "Datenbank Passwort",
'STEP_3_DB_PASSWORD_SHOW'                       => "Passwort anzeigen",
'STEP_3_DB_DATABSE_NAME'                        => "Datenbank Name",
'STEP_3_DB_DEMODATA'                            => "Demodaten",
'STEP_3_UTFMODE'                                => "UTF-8 Zeichenkodierung benutzen",
'STEP_3_UTFNOTSUPPORTED'                        => "Der OXID eShop kann nicht im UTF-8 Modus verwendet werden, weil:",
'STEP_3_UTFNOTSUPPORTED1'                       => " das mbstring PHP-Modul fehlt",
'STEP_3_UTFNOTSUPPORTED2'                       => " die installierte PCRE-Version UTF-8 nicht unterst�tzt",
'STEP_3_UTFINFO'                                => "Die UTF-8 Zeichenkodierung kann besser mit Sonderzeichen umgehen als andere Zeichenkodierungen. Dies ist insbesondere f�r vielsprachige eShops wichtig. Allerdings ist der eShop mit UTF-8 geringf�gig langsamer als mit der Standard-Zeichenkodierung (ISO 8859-15). <br /> Wenn Sie vorhaben, viele verschiedene Sprachen im eShop zu benutzen, sollten sie UTF-8 verwenden. Wenn Sie nur Sprachen mit �hnlichen Zeichens�tzen (z. B. Deutsch, Englisch, Franz�sisch) im eShop benutzen m�chten, ben�tigen Sie UTF-8 nicht.",
'STEP_3_CREATE_DB_WHEN_NO_DB_FOUND'             => "Falls die Datenbank nicht vorhanden ist, wird versucht diese anzulegen",
'BUTTON_RADIO_INSTALL_DB_DEMO'                  => "Demodaten installieren",
'BUTTON_RADIO_NOT_INSTALL_DB_DEMO'              => "Demodaten <strong>nicht</strong> installieren",
'BUTTON_DB_INSTALL'                             => "Datenbank jetzt erstellen",

'STEP_3_1_TITLE'                                => "Datenbank - in Arbeit...",
'STEP_3_1_DB_CONNECT_IS_OK'                     => "Datenbank Verbindung erfolgreich gepr�ft...",
'STEP_3_1_DB_CREATE_IS_OK'                      => "Datenbank %s erfolgreich erstellt...",
'STEP_3_1_CREATING_TABLES'                      => "Erstelle Tabellen, kopiere Daten...",

'STEP_3_2_TITLE'                                => "Datenbank - Tabellen erstellen...",
'STEP_3_2_CONTINUE_INSTALL_OVER_EXISTING_DB'    => "Falls Sie dennoch installieren wollen und die alten Daten �berschreiben, klicken Sie",
'STEP_3_2_CREATING_DATA'                        => "Datenbank erfolgreich erstellt!<br>Bitte warten...",

'STEP_4_TITLE'                                  => "Einrichten des OXID eShops",
'STEP_4_DESC'                                   => "Bitte geben Sie hier die f�r den Betrieb notwendigen Daten ein:",
'STEP_4_SHOP_URL'                               => "Shop URL",
'STEP_4_SHOP_DIR'                               => "Verzeichnis auf dem Server zum Shop",
'STEP_4_SHOP_TMP_DIR'                           => "Verzeichnis auf dem Server zum TMP Verzeichnis",
'STEP_4_ADMIN_LOGIN_NAME'                       => "Administrator E-Mail (wird als Benutzername verwendet)",
'STEP_4_ADMIN_PASS'                             => "Administrator Passwort",
'STEP_4_ADMIN_PASS_CONFIRM'                     => "Administrator Passwort best�tigen",
'STEP_4_ADMIN_PASS_MINCHARS'                    => "frei w�hlbar, mindestens 6 Zeichen",

'STEP_4_1_TITLE'                                => "Verzeichnisse - in Arbeit...",
'STEP_4_1_DATA_WAS_WRITTEN'                     => "Kontrolle und Schreiben der Dateien erfolgreich!<br>Bitte warten...",
'BUTTON_WRITE_DATA'                             => "Daten jetzt speichern",

'STEP_5_TITLE'                                  => "OXID eShop Lizenz",
'STEP_5_DESC'                                   => "Bitte geben Sie nun Ihren OXID eShop Lizenzschl�ssel ein:",
'STEP_5_LICENCE_KEY'                            => "Lizenzschl�ssel",
'STEP_5_LICENCE_DESC'                           => "Der mit der Demo Version ausgelieferte Lizenzschl�ssel (oben bereits ausgef�llt) ist 30 Tage g�ltig .<br>
                                                    Nach Ablauf der 30 Tage k�nnen alle Ihre �nderungen nach Eingabe eines g�ltigen Lizenzschl�ssels weiterhin benutzt werden.",
'BUTTON_WRITE_LICENCE'                          => "Lizenzschl�ssel speichern",

'STEP_5_1_TITLE'                                => "Lizenzschl�ssel - in Arbeit...",
'STEP_5_1_SERIAL_ADDED'                         => "Lizenzschl�ssel erfolgreich gespeichert!<br>Bitte warten...",

'STEP_6_TITLE'                                  => "OXID eShop Einrichtung erfolgreich",
'STEP_6_DESC'                                   => "Die Einrichtung Ihres OXID eShops wurde erfolgreich abgeschlossen.",
'STEP_6_LINK_TO_SHOP'                           => "Hier geht es zu Ihrem Shop",
'STEP_6_LINK_TO_SHOP_ADMIN_AREA'                => "Zugang zu Ihrer Shop Administration",
'STEP_6_TO_SHOP'                                => "Zum Shop",
'STEP_6_TO_SHOP_ADMIN'                          => "Zur Shop Administration",

'ATTENTION'                                     => "Bitte beachten Sie",
'SETUP_DIR_DELETE_NOTICE'                       => "WICHTIG: Bitte l�schen Sie Ihr Setup Verzeichnis falls dieses nicht bereits automatisch entfernt wurde!",
'SETUP_CONFIG_PERMISSIONS'                      => "WICHTIG: Aus Sicherheitsgr�nden setzen Sie Ihre config.inc.php Datei auf read-only-Modus!",

'SELECT_SETUP_LANG'                             => "Sprache f�r Installation und Shop",
'SELECT_SETUP_LANG_HINT'                        => ". Aktivieren Sie weitere Sprachen im Admin, falls gew�nscht.",
'SELECT_COUNTRY_LANG'                           => "Shop-Standort",
'SELECT_SELIVERY_COUNTRY'                       => "Haupt Lieferland",
'SELECT_DELIVERY_COUNTRY_HINT'                  => "Aktivieren Sie weitere Lieferl�nder im Admin, falls ben�tigt",
'SELECT_SETUP_LANG_SUBMIT'                      => "Ausw�hlen",
'USE_DYNAMIC_PAGES'                             => "Um Ihren Gesch�ftserfolg zu vergr��ern, laden Sie weitere Informationen vom OXID Server nach. <br>Mehr Informationen in unserern ",
'PRIVACY_POLICY'                                => "Datenschutzerl�uterungen",

'LOAD_DYN_CONTENT_NOTICE'                       => "<p>Falls die Option &quot;Weitere Informationen&quot; nachladen eingeschaltet ist, sehen Sie ein zus�tzliches Men� im Admin Bereich Ihres OXID eShops.</p><p>Mittels dieses Men�s erhalten Sie weitere Informationen �ber eCommerce Services wie z.B. Google Produktsuche oder econda.</p> <p>Sie k�nnen diese Einstellung im Admin Bereich jederzeit wieder �ndern.</p>",
'ERROR_SETUP_CANCELLED'                         => "Das Setup wurde abgebrochen, weil Sie die Lizenzvereinbarungen nicht akzeptiert haben.",
'BUTTON_START_INSTALL'                          => "Setup erneut starten",

);

$aLang['MOD_MEMORY_LIMIT']                      = 'PHP Memory limit (min. 14MB, 30MB empfohlen)';
