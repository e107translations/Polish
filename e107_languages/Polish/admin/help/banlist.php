<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/banlist.php                   *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Blokowanie użytkowników";
if (e_QUERY) list($action,$junk) = explode('-',e_QUERY.'-'); else $action = 'list';		// Non-standard separator in query

switch ($action)
{
case 'transfer' :
  $text = 'Ta strona pozwala na przesyłanie danych listy blokad do i od tej strony jako plik CSV (Comma Separated Variable).<br /><br />';
  $text .= "<b>Eksport danych</b><br />
  Wybierz typy blokady do eksportu. Pola zostaną ograniczone przez wybrany separator i ewentualnie uwzględnione w wybranych cudzysłowach.<br /><br />";
  $text .= "<b>Import danych</b><br />
  Można wybrać, czy zastąpić istniejące blokady importowanymi, czy dodać je do listy. Jeśli importowane dane zawierają daty wygaśnięcia / czas, możesz określić, czy są one używane, czy wartości dla tej strony są używane.<br /><br />";
  $text .= "<b>Format pliku CSV</b><br />
  Format każdej linii w pliku jest: IP/e-mail, data, wygasa, typ, powód, uwagi.<br />
  Data i wygaśnięcia są w formacie YYYY-MM-DD_HH-MM-DD, chyba że wartość zero oznacza 'nieznany' lub 'nieokreślony'<br />
  Jedynie adres IP lub adres e-mail jest niezbędny; pozostałe pola są ważne, jeżeli występują.<br /><br />
  <b>Uwaga:</b> Będziesz musiał zmodyfikować plik 'filetypes.xml' aby umożliwić administratorom nadsyłanie pliku 'CSV'.";
  break;
case 'times' :
  $text = 'Ta strona ustawia domyślne zachowanie dla różnych rodzajów blokad.<br />
  Jeśli wiadomość zostanie dodana, zostanie ona pokazana użytkownikowi (w miarę potrzeb). Jeśli wiadomość rozpoczyna się od \'http://\' lub \'https://\' kontrola jest przekazywana na podany URL. W przeciwnym wypadku, użytkownik zobaczy pusty ekran.<br />
  Blokada będzie obowiązywać przez czas określony; po którym uzyska dostęp do określonej strony.';
  break;
case 'options' :
  $text = '<b>odwrócony DNS</b><br />
    Gdy włączone, adres IP użytkownika będzie kontrolowany pod względem danej domeny. Umożliwia dostęp do zewnętrznego serwera, więc informacja może być opóźniona - oraz gdy serwer jest off-line, mogą być bardzo duże opóźnienia.<br /><br />
	Możesz wybrać, aby wyszukać wszystkie nazwy serwerów na umożliwionych stronach, czy tylko przy dodawaniu nowej blokady.<br /><br />
	<b>Maksymalna szybkość dostępu</b><br />
	Ustawia maksymalną liczbę dostępów do serwisu od pojedynczego użytkownika lub z adresu IP w dowolnym okresie pięciu minut i jest przeznaczone do wykrywania ataków typu DoS. Przy 90% wybranego limitu, użytkownik otrzymuje ostrzeżenie; po osiągnięciu limitu następuje blokada.
	Różne progi mogą być ustawione dla gości i zalogowanych użytkowników.<br /><br />
	<b>Okres wyzwalania blokad</b><br />
	Ta opcja ma znaczenie tylko wtedy, gdy opcja zakazać użytkownikom przez określony czas, a nie na czas nieokreślony, została wykorzystana. Jeśli opcja jest włączona, a użytkownik próbuje uzyskać dostęp do witryny, okres blokady zostanie przedłużony (tak jakby blokada właśnie się rozpocząła).
	';
  break;
case 'edit' :
case 'add' :
$text = "Na tej stronie możesz blokować użytkowników odwiedzających Twoja stronę.<br />
Proszę wpisywać pełny adres IP lub używać znaku zastępczego (*) do zablokowania wskazanej puli adresów IP. Możesz również wpisać adres e-mail w celu zablokowania użytkowników zarejestrowanych na Twojej stronie.<br /><br />
<b>Blokowanie przez adres IP:</b><br />
Wpisanie adresu 123.123.123.123 zablokuje użytkowników odwiedzających Twoją stronę ze wskazanego adresu IP.<br />
Wpisanie adresu IP z jednym lub większą ilością wieloznaczników w końcowych blokach, np. 123.123.123.* lub 214.098.*.*, zablokuje użytkowników odwiedzających Twoją stronę ze wskazanej puli adresów IP. (Pamiętaj, że muszą to być dokładnie 4 grupy cyfr lub wieloznaczniki)<br /><br />
Format IPV6 wspiera również adresy z dołączonym znakiem '::' jako reprezentowanie bloku wartości zerowych. Każda para cyfr w polach końcowych może być oddzielona wieloznacznikiem.<br /><br />
<b>Blokowanie przez adres e-mail:</b><br />
Wpisanie adresu e-mail foo@bar.com zablokuje każdego zarejestrowanego użytkownika używającego tego adresu na Twojej stronie.<br />
Wpisanie adresu e-mail *@bar.com zablokuje każdego zarejestrowanego użytkownika używającego adresu e-mail pochodzącego ze wskazanej domeny.<br /><br />
<b>Blokowanie przez nazwę użytkownika</b><br />
Jest to wykonalne z podstrony 'Użytkownicy' w 'Panelu admina'.<br /><br />";
  break;
case 'whadd' :
case 'whedit' :
  $text = "Można określić adresy IP, które uważasz za 'przyjazne' - na ogół dla głównych administratorów witryn, w celu zagwarantowania, że mogą
   zawsze uzyskać dostęp do witryny.<br />
  Zaleca się utrzymanie liczby adresów z tej listy do absolutnego minimum; zarówno dla bezpieczeństwa jak i zminimalizowania wpływu na wydajność witryny.";
  break;
case 'banlog' :
  $text = 'Można tu zobaczyć listę wszystkich uprawnionych dostępów do strony dla adresu, który jest na liście blokad lub na białej liście. Kolumna \'powód\' pokazuje wynik.';
  break;
case 'white' :
  $text = "Ta strona przedstawia listę wszystkich adresów IP i adresów e-mail, które są wyraźnie dozwolone.<br />
    Ta lista ma priorytet nad listą Blokad - nie jest możliwe zablokowanie adresu z tej listy.<br />
	Wszystkie adresy muszą być wprowadzane ręcznie.";
  break;
case 'list' :
default :
$text = 'Ta strona przedstawia listę wszystkich adresów IP, nazw hostów i adresów e-mail, które są zablokowane (zablokowani użytkownicy są wyświetlani na stronie administrowania użytkownikami).<br /><br />
<b>Automatyczne blokady</b><br />
e107 automatycznie blokuje poszczególne adresy IP, jeśli próbują zapchać stronę, jak również adresy z nieudanych logowań.<br />
Te blokady pojawiają się również na tej liście. Można wybrać (na stronie opcji), czynność dla każdego rodzaju blokad.<br /><br />
<b>Usunięcie blokad</b><br />
Można ustawić okres ważności dla każdego rodzaju blokady, w którym to przypadku wpis zostanie usunięty po upływie zadanego okresu. W przeciwnym przypadku, blokada zostaje do czasu jej ręcznego skasowania.<br />
Można modyfikować okres blokady z tej strony - czasy liczone są od teraz.';
}
$ns -> tablerender($caption, $text);
