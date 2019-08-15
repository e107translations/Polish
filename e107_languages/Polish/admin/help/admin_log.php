<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/admin_log.php                 *
	* e107 Polish Team                                                *
	* www.d4e.pl                                                      *
	* $Date: 2016/01/20                                               *
	* $Author: JacekCich                                              *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Pomoc Logi systemowe";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

function common_filters()
{
  $ret = "<b>Filtry danych</b><br />
  Można określić różne filtry, które ograniczają ilość danych do wyświetlenia. Są one przechowywane w pliku cookie, aż do wylogowania.<br />
  Początek i koniec daty/czasu filtry muszą być włączone przez odpowiednie zaznaczenie pola wyboru.<br />
  Inne filtry są aktywne, gdy występuje wartość w polu.<br />
  ";
  return $ret;
}


switch ($action)
{
case 'auditlog' :
  $text = "Ta strona pokazuje aktywność użytkownika, którego zaznaczyłeś do rejestracji logów.<br /><br />";
  $text .= common_filters();
  break;
case 'config' :
  $text = "Ta strona konfiguruje różne opcje logów systemowych.<br /><br />
  <b>Ustawienia ogólne</b><br />
  Ustawia liczbę wierszy na ekranie logu.<br /><br />
  <b>Admin Log</b><br />
  Ten dziennik logów zachowuje starsze wpisy do czasu ich usunięcia, skorzystaj z tej opcji aby usunąć starsze wpisy zdarzeń.<br /><br />
  <b>Dziennik audytu użytkownika</b><br />
  Ten dziennik śledzi aktywność użytkownika. Dla zarejestrowanych użytkowników, tylko tych w określonej klasie są śledzenia - możesz również tych 'Użytkowników' dać do śledzenia lub utworzyć specyficzną grupę klasy w celu ich śledzenia. Następnie należy określić rodzaje działalności, które chcesz śledzić.<br />
  Zdarzenia związane z rejestracją mogą być śledzone oddzielnie.<br /><br />
  <b>Rolling Log</b><br />
  Ten dziennik jest używany do śledzenia zdarzeń nadzwyczajnych, pomoc w debugowania itp. Tę funkcję możesz wyłaczyć. Zdarzenia są automatycznie usuwane po upływie określonej liczby dni.
  ";
  break;
case 'rolllog' :
  $text = " 'rolling log' wyświetla różne nienormalne zdarzenia, które nie są zarejestrowane w inny sposób. Może być również stosowany do kodowania debugowania oraz monitorowania.<br /><br />";
  $text .= common_filters();
  break;
case 'downlog' :
  $text = "Ta strona wyświetla pobierania użytkowników.<br /><br />";
  $text .= common_filters();
  break;
case 'comments' :
  $text = "Ta strona wyświetla komentarze użytkowników, z opcjami do wyboru przez użytkownika ID, rodzaj i datę. Niechciane komentarze mogą zostać usunięte.";
  break;
case 'detailed' :
  $text = "Główny system rejestracji zdarzeń, rejestruje z dużą dokładnością (jeżeli bazowy serwer to wspiera), ta strona pozwala sprawdzić wpisy występujące w stosunkowo małym przedziale czasowym. Zapisy dziennika zdarzeń dla admina, audytu zdarzeń oraz 'rolling log' są połączone. Możesz więc, zobaczyć dokładne relacje między zdarzeniami.";
  break;
case 'adminlog' :
default :
  $text = "Ta strona wyświetla aktywność administratora.<br /><br />
  (Obecnie do kodu nadal jest dodawane rejestrowanie, więc lista nie jest kompletna)<br /><br />";
  $text .= common_filters();
}
$ns -> tablerender($caption, $text);
?>