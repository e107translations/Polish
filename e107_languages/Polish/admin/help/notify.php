<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/notify.php                    *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Powiadomienia e-mail będą rozsyłane, gdy na Twojej stronie zajdzie jakieś ściśle określone wydarzenie.<br /><br />
Na przykład, ustawienie powiadomienia o <i>Adresach IP zablokowanych w wyniku ataków typu flood</i> dla grupy <i>Administratorzy</i> spowoduje wysłanie e-maili do wszystkich administratorów, kiedy Twojej stronie będzie groziło zapchanie w wyniku ataku typu flood.<br /><br />
Możesz również, jako inny przykład, ustawić powiadomienie o <i>Nowych pozycjach dodanych przez administratorów</i> dla grupy <i>Zarejestrowani</i>, co spowoduje wysłanie e-maili o nowościach dodanych do serwisu do wszystkich użytkowników serwisu.<br /><br />
Jeśli chcesz, aby powiadomienia e-mail były wysyłane na alternatywny adres e-mail - zaznacz opcję <i>E-mail</i> i wpisz w pole docelowy adres e-mail.";

$ns -> tablerender("Pomoc", $text);