<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/links.php                     *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Tutaj możesz dodać wszystkie linki związane bezpośrednio z Twoim serwisem. Dodane odnośniki zostaną wyświetlone w głównym menu strony. Jeśli chcesz utworzyć stronę z linkami do zewnętrznych serwisów użyj wtyczki <i>Strona linków</i>.
<br />
";
$ns -> tablerender("Odnośniki w menu", $text);