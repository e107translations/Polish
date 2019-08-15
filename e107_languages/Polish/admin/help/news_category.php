<?php
/*
+-----------------------------------------------------------------------------+
+-----------------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/news_categoory.php            *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+-----------------------------------------------------------------------------+
*/
 
if (!defined('e107_INIT')) { exit; }

$text = "Możesz podzielić aktualności pomiędzy różne kategorie, a odwiedzającym zezwolić tylko na przeglądanie aktualności ze wskazanych kategorii.<br /><br />Załaduj ikony aktualności do jednego z dwóch katalogów ".e_THEME."-yourtheme-/images/ lub themes/shared/newsicons/.";
$ns -> tablerender("Kategorie aktualności", $text);

