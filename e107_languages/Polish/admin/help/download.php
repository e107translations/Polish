<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/download.php                  *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Proszę załadować swoje pliki do następujących katalogów: <br />pliki - ".e_FILE."downloads
<br />obrazki - ".e_FILE."downloadimages
<br />miniaturki obrazków - ".e_FILE."downloadthumbs .
<br /><br />
Aby dodać plik do pobrania, najpierw utwórz dział główny, następnie utwórz podkategorię do utworzonego działu głównego, po wykonaniu przedstawionych czynności będziesz mógł udostępnić pliki do pobrania.";
$ns -> tablerender("Download", $text);