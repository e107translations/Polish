<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/filemanager.php               *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Z poziomu tej strony możesz zarządzać plikami w swoich katalogach plików. Jeśli otrzymasz komunikat błędu o uprawnieniach podczas usiłowania przesyłania plików do określonego katalogu, ustaw CHMOD wskazanego folderu na wartość 777.";
$ns -> tablerender("Menedżer plików", $text);