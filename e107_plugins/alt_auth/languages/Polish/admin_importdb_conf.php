<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
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
define('IMPORTDB_LAN_9', 'Metoda szyfrowania hasła:');
define('IMPORTDB_LAN_10', 'Skonfiguruj typ zaimportowanego hasła do bazy danych');
define('IMPORTDB_LAN_11', 'Z tej opcji należy skorzystać po zaimportowaniu innego systemu opartego na użytkownikach e107. Opcja pozwala akceptować hasła zakodowane w wybranym niestandardowym formacie. Hasło każdego użytkownika jest konwertowane do formatu e107 podczas logowania.');
//define('IMPORTDB_LAN_12', 'PHPBB2/PHPBB3 salted');
//define('IMPORTDB_LAN_13', 'WordPress salted');
//define('IMPORTDB_LAN_14', 'Magento salted');


define('LAN_AUTHENTICATE_HELP','Tej metody uwierzytelniania należy używać <i>tylko</i> po zaimportowaniu bazy danych użytkowników, a hasło ma niezgodny format. Oryginalne hasło jest odczytywane z lokalnej bazy danych i sprawdzane pod kątem formatu przechowywania oryginalnego systemu. Jeśli się sprawdzi, zostanie przekonwertowane na bieżący format zgodny z e107 i zapisane w bazie danych. Po pewnym czasie zazwyczaj można wyłączyć wtyczkę alternatywnego uwierzytelniania, ponieważ wszyscy aktywni użytkownicy będą mieli zapisane hasła w kompatybilnym formacie.');

?>
