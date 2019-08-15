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
if (!defined('e107_INIT')) { exit; }
require_once(e_PLUGIN.'links_page/link_defines.php');
define("LAN_ADMIN_HELP_0", "Strona linków - pomoc");

define("LAN_ADMIN_HELP_1", "<i>Strona zarządzania kategoriami wyświetla wszystkie dostępne kategorie.</i><br /><br /><b>Szczegóły</b><br />Wyświetlana jest lista wszystkich kategorii wraz z ich ikonami, nazwą i opisem, opcjami oraz przyciskami sortowania.<br /><br /><b>Objaśnienie ikon</b><br />
".LINK_ICON_LINK." : odnośnik do kategorii<br /><br />
".LINK_ICON_EDIT." : modyfikacja kategorii<br /><br />
".LINK_ICON_DELETE." : usunięcie kategorii<br /><br />
".LINK_ICON_ORDER_UP." : strzałka do góry, umożliwia zmianę kolejności kategorii w górę<br /><br />
".LINK_ICON_ORDER_DOWN." : strzałka w dół, umożliwia zmianę kolejności kategorii w dół<br />
<br />
<b>Kolejność</b><br />Tutaj można ręcznie ustawić kolejność wszystkich kategorii. Zmień wartości w polach do wyboru zgodnie z żądaną kolejnością, a następnie kliknij na przycisk 'przeładuj', aby zapisać zmiany kolejności.<br />");
define("LAN_ADMIN_HELP_2", "<i>Strona tworzenia nowych kategorii linków umożliwia dodanie nowych kategorii</i><br /><br />Możesz tutaj przesłać nową ikonę, a po wgraniu przypisać ją do kategorii");
define("LAN_ADMIN_HELP_3", "<i>Strona zarządzania linkami w pierwszej kolejności pokazuje kategorie.</i><br /><br />".LINK_ICON_LINK." : odnośnik do kategorii<br /><br />".LINK_ICON_EDIT." : kliknij ikonę, aby zobaczyć wszystkie linki w kategorii<br />");
define("LAN_ADMIN_HELP_4", "<i>Strona tworzenia linków umożliwia dodanie nowego odnośnika</i><br /><br />Możesz tutaj przesłać nową ikonę, a po wgraniu przypisać ją do odnośnika.<br /><br />Metoda  otwarcia, umożliwia zdefiniowanie sposobu otwarcia strony docelowej po kliknięciu w odnośnik.");
define("LAN_ADMIN_HELP_5", "<i>Strona nadesłanych linków wyświetla wszystkie linki nadesłane przez użytkowników</i><br /><br /><b>Szczegóły</b><br />Wyświetlany jest adres URL, nazwa użytkownika, który nadesłał link, oraz opcje.<br /><br /><b>Objaśnienie ikon</b><br />
".LINK_ICON_EDIT." : edycja linka w formularzu tworzenia odnośników<br /><br />
".LINK_ICON_DELETE." : usunięcie nadesłanego linka<br />
");
define("LAN_ADMIN_HELP_6", "<i>Strona opcji umożliwia zmianę preferencji wtyczki</i><br /><br />
Ogólne opcje<br />
Te opcje są wykorzystywane na wszystkich stronach wtyczki.<br /><br />
Osobisty menedżer linków<br />
Menedżerowie linków to uprzywilejowane osoby, które mogą zarządzać linkami nadesłanymi przez siebie.<br /><br />
Strona kategorii<br />
Tutaj można zmienić opcje strony kategorii<br /><br />
Wyświetlanie linków<br />
Te opcje są wykorzystywane na stronie odnośników.<br /><br />
Strona odsłon<br />
Te opcje są wykorzystywane na stronie odsłon.<br /><br />
Strona ocen<br />
Te opcje są wykorzystywane na stronie ocen.<br />
");

define("LAN_ADMIN_HELP_7", "<i>Strona modyfikacji kategorii umożliwia dokonanie zmian w istniejącej kategorii</i><br /><br />Możesz tutaj przesłać nową ikonę, a po wgraniu przypisać ją do kategorii.<br />Możesz również zaktualizować datę dodania poprzez zaznaczenie odpowiedniego pola.");

define("LAN_ADMIN_HELP_8", "<i>Ta strona wyświetla wszystkie istniejące linki w danej kategorii.</i><br /><br /><b>Szczegóły</b><br />Wyświetlana jest lista odnośników wraz z ich grafikami, nazwą, opcjami oraz przyciskami sortowania.<br /><br /><b>Objaśnienie ikon</b><br />
".LINK_ICON_LINK." : odnośnik do strony<br /><br />
".LINK_ICON_EDIT." : modyfikacja odnośnika<br /><br />
".LINK_ICON_DELETE." : usunięcie odnośnika<br /><br />
".LINK_ICON_ORDER_UP." : strzałka do góry, umożliwia zmianę kolejności odnośnika w górę.<br /><br />
".LINK_ICON_ORDER_DOWN." : strzałka w dół, umożliwia zmianę kolejności odnośnika w dół.<br />
<br />
<b>Kolejność</b><br />Tutaj można ręcznie ustawić kolejność wszystkich odnośników. Zmień wartości w polach do wyboru zgodnie z żądaną kolejnością, a następnie kliknij na przycisk 'przeładuj', aby zapisać zmiany kolejności.<br />");

define("LAN_ADMIN_HELP_9", "<i>Strona modyfikacji odnośnika umożliwia dokonanie zmian w istniejącym linku.</i><br /><br />Możesz tutaj przesłać nową ikonę, a po wgraniu przypisać ją do odnośnika.<br /><br />Metoda  otwarcia, umożliwia zdefiniowanie sposobu otwarcia strony docelowej po kliknięciu w odnośnik.");
define("LAN_ADMIN_HELP_10", "<i>Strona edycji nadesłanego linka umożliwia dodanie go do pozostałych odnośników</i><br /><br />Do pola opisu jest dodawany tekst odnośnie nadesłania linka.<br /><br />Możesz tutaj przesłać nową ikonę, a po wgraniu przypisać ją do odnośnika.<br /><br />Metoda  otwarcia, umożliwia zdefiniowanie sposobu otwarcia strony docelowej po kliknięciu w odnośnik.");
?>