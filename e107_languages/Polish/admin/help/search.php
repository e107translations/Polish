<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/search.php                    *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Wyszukiwanie";
$text = "Jeśli Twoja wersja serwera MySQL wspiera ta opcję możesz przełączyć na metodę sortowania MySQL, ponieważ jest ona szybsza niż metoda sortowania PHP. Zobacz w preferencjach.<br /><br />
Jeśli Twoja strona zawiera języki ideograficzne takie jak chiński oraz japoński, musisz używać metody sortowania PHP oraz musisz również wyłączyć opcję <i>Tylko pełne słowa</i>
";
$ns->tablerender($caption, $text);
