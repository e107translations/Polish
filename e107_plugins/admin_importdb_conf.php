<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/lan_eurl.php                       *
   *                                                                 *
	* e107 Polish Team                                                *
	* www.d4e.pl                                                      *
	* $Date: 2016/01/20                                               *
	* $Author: JacekCich                                              *
+--------------------------------------------------------------------+
+====================================================================+
*/
 /**
 *	e107 Alternate authorisation plugin
 *
 *	@package	e107_plugins
 *	@subpackage	alt_auth
 *	@version 	$Id$;
 */

// Some password-related strings moved to admin_alt_auth.php for generic use
//define('IMPORTDB_LAN_1', 'Database type');
//define('IMPORTDB_LAN_2', 'Plain Text');
//define('IMPORTDB_LAN_3', 'Joomla salted');
//define('IMPORTDB_LAN_4', 'Mambo salted');
//define('IMPORTDB_LAN_5', 'SMF (SHA1)');
//define('IMPORTDB_LAN_6', 'Generic SHA1');
//define('IMPORTDB_LAN_7', 'MD5 (E107 original)');
//define('IMPORTDB_LAN_8', 'E107 salted (option 2.0 on)');
define('IMPORTDB_LAN_9', 'Metoda Hasła:');
define('IMPORTDB_LAN_10', 'Skonfiguruj importowany typ hasła bazy danych');
define('IMPORTDB_LAN_11', 'Ta opcja będzie używana podczas importu innych systemów bzowych do e107.<br />
							Umożliwia przyjęcie haseł zakodowanych w wybranych innych formatach.<br />
							Każde hasło użytkownika jest konwertowane do e107 podczas logowania.');
//define('IMPORTDB_LAN_12', 'PHPBB2/PHPBB3 salted');
//define('IMPORTDB_LAN_13', 'WordPress salted');
//define('IMPORTDB_LAN_14', 'Magento salted');


define('LAN_AUTHENTICATE_HELP','Ta metoda autentykacji jest używana  <i>tylko</i> podczas importu bazy danych do e107 oraz gdy hasło jest w niekompatybilnym formacie. <br />
Oryginalne hasło odczytane z lokalnej bazy danych i po sprawdzeniu, ponownie zapisane w formacie w bazie danych. Jeżeli zostanie zweryfikowane, następuje konwersja do aktualnego kompatybilnego z e107 formatu oraz zapisane w bazie danych. Po jakimś czasie, można wyłaczyć plugin alt_auth, ponieważ hasła aktywnych użytkowników zapisane są w poprawnym formacie.');

?>