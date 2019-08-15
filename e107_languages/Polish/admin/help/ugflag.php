<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/ugflag.php                    *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Jeśli aktualizujesz e107 do nowszej wersji lub po prostu potrzebujesz przełączyć swoją stronę na chwilę w tryb offline zaznacz pole <i>Aktywuj tryb konserwacji</i>. Od tej chwili odwiedzający Twoja stronę będą przekierowani do strony wyjaśniającej przyczyny przerwy technicznej. Gdy zakończysz, odznacz pole, aby przywrócić normalne funkcjonowanie serwisu.";

$ns -> tablerender("Konserwacja", $text);