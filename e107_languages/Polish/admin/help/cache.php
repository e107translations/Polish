<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/cache.php                     *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Cache strony";
$text = "Włączenie pamięci podręcznej znacznie zwiększy szybkość działania Twojego serwisu oraz zminimalizujesz ilość połączeń do bazy danych SQL.<br /><br /><b>UWAGA! Podczas tworzenia własnego tematu graficznego powinieneś wyłączyć cachowanie, ponieważ w przeciwnym wypadku jakiekolwiek wprowadzone zmiany nie będą odzwierciedlone.</b>";
$ns -> tablerender($caption, $text);
