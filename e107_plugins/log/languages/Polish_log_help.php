<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/
define("LAN_STAT_HELP_01","Statystyki");
define("LAN_STAT_HELP_02","Ta opcja, usunie wszystkie wcześniejsze statystyki z bazy danych.  To niema wpływu na dane \"cały czas\" .<br /><br />
Uwaga! Po usunięciu danych nie można ich odzyskać. Wcześniej, wykonaj kopię zapasową lub eksport danych.");
define("LAN_STAT_HELP_03","Opcja ta pozwala na usunięcie danych odnoszących się do konkretnej strony serwisu.");
define("LAN_STAT_HELP_04","Ta opcja pozwala na eksport danych statystycznych w formacie CSV. Można je zaimportować do innych aplikacji w celu głębszej analizy. Więcej na temat wtyczki lub formatu pliku, możesz przeczytać na stronie wiki - plugin stats logging.");
define("LAN_STAT_HELP_05","<b>Statystyki włączone</b><br />Rejestrowanie statystyk będzie nie możliwy, gdy wyłączone.<br /><br />
<b>Dostęp do stron statystyk</b><br />
Określa, kto może przeglądać strony statystyk<br /><br />
<b>Zliczanie wizyt administratora</b><br />
Częste wizyty przez adminów mogą zakłócić statystyki strony, dzięki czemu można je wykluczyć<br /><br />
<b>Maksymalna liczba rekordów do wyświetlenia...</b><br />
Ustawia ilość \"ostatnich gości\"<br /><br />
<b>Rodzaje statystyk</b><br />
Określa jakie informacje mają być zapisane. Zapis danych miesięcznych, zajmie więcej miejsca w bazie danych ale daje lepszą widoczność.
Jeśli miesięczne dane statystyczne są gromadzone, można określić czy tylko w bieżącym miesiącu, lub bieżący miesiąc oraz poprzednie miesiące są wyświetlane<br /><br />
<b>Resetowanie statystyk</b><br />
Kasowanie wszystkich danych (do końca dnia wczorajszego). Aby usunąć również dzisiejsze statystyki, skasuj plik log*.php w katalogu log/logs <br /><br />
");
define("LAN_STAT_HELP_06","");

?>