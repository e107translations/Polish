<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/fileinspector.php             *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }



$text = "<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_core.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Plik jądra</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_warning.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Rozpoznane niebezpieczeństwo</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_check.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Plik jądra (spójność zaliczona)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_fail.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Plik jądra (błąd spójności)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_uncalc.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Plik jądra (niesprawdzony)</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_missing.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Brakujący plik jądra</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_old.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Stary plik jądra</div>
<div style='margin-left: 0px; margin-bottom: 1px; margin-top: 2px; vertical-align: top; white-space: nowrap'>
<img src='".e_IMAGE."fileinspector/file_unknown.png' alt='".$dir."' style='margin-left: 3px; width: 16px; height: 16px' />&nbsp;Nieznany plik jądra</div>";
$ns -> tablerender("Klucz pliku", $text);

$text = "Inspektor skanuje i analizuje pliki na serwerze hostującym Twój serwis. Kiedy inspektor napotka pliki jądra e107, to sprawdzi ich spójność, aby się upewnić, że nie są uszkodzone.";

$text .= "<br /><br />
<a href='".e_SELF."?create'>Kliknij tutaj, aby stworzyć migawkę własnych plików wtyczek do zastosowania w Inspektorze Plików.</a>";

if ($pref['developer']) {
$text .= "<br /><br />
Dodatkowe narzędzie porównawcze łąńcuchów (tylko tryb deweloperski) umożliwi Ci skanowanie plików na Twoim serwerze ze względu na łańcuchy tekstowe wykorzystujące regularne wyrażenia. Silnik regex jest używany w PHP <a href='http://php.net/pcre'>PCRE</a>
(preg_* funkcje), więc wpisz swoje zapytanie jako #pattern#modifiers w określonych polach.";
}

$ns -> tablerender("Inspektor plików", $text);