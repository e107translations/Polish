<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/lan_validator.php                  *
   * Validator Handler - Language File                               *
	* Default error messages by Error code number                     *
	* e107 Polish Team                                                *
	* www.d4e.pl                                                      *
	* $Date: 2016/01/20                                               *
	* $Author: JacekCich                                              *
+--------------------------------------------------------------------+
+====================================================================+
*/

define("LAN_VALIDATE_0",   "Nieznany błąd");
define("LAN_VALIDATE_101", "Brakująca wartość");
define("LAN_VALIDATE_102", "Nieoczekiwany typ wartości");
define("LAN_VALIDATE_103", "Znaleziono Nieprawidłowe znaki");
define("LAN_VALIDATE_104", "Nieprawidłowy adres e-mail");
define("LAN_VALIDATE_105", "Pola nie pasują" );
define("LAN_VALIDATE_131", "Ciąg zbyt krótki");
define("LAN_VALIDATE_132", "Ciąg zbyt długi");
define("LAN_VALIDATE_133", "Liczba zbyt niska");
define("LAN_VALIDATE_134", "Liczba zbyt wysoka");
define("LAN_VALIDATE_135", "Liczba zbyt niska");//Array count too low
define("LAN_VALIDATE_136", "Liczba zbyt wysoka");
define("LAN_VALIDATE_151", "Oczekiwano liczby całkowitej");
define("LAN_VALIDATE_152", "Oczekiwano liczby zmiennoprzecinkowej");
define("LAN_VALIDATE_153", "Oczekiwano typu wypełnienia");
define("LAN_VALIDATE_154", "Oczekiwano tupu Array");
define("LAN_VALIDATE_191", "Pusta wartość");
define("LAN_VALIDATE_201", "Plik nie istnieje");
define("LAN_VALIDATE_202", "Nie można zapisać pliku");
define("LAN_VALIDATE_203", "Plik przekracza dozwolony rozmiar pliku");
define("LAN_VALIDATE_204", "Rozmiar pliku jest mniejszy niż dozwolony minimalny rozmiar pliku");
//define("LAN_VALIDATE_", "");

/*
 * TRANSLATION INSTRUCTIONS:
 * Don"t translate %1$s, %2$s, %3$s, etc.
 *
 * These are substituted by validator handler:
 * %1$s - field name
 * %2$d - validation error code (number)
 * %3$s - validation error message (string)
 */

// define("LAN_VALIDATE_FAILMSG", "<strong>&quot;%1$s&quot;</strong> validation error: [#%2$d] %3$s.");

 //FIXME - use this instead:
define("LAN_VALIDATE_FAILMSG", "[x] bład walidacji: [y] [z].");