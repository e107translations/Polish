<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/users.php                     *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Użytkownicy";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'create' :
    $text = "Na tej stronie możesz utworzyć nowego użytkownika, którego można natychmiast dodać jako aktywnego członka tego serwisu, przydzielonego do określonej klasy.<br /><br />
	 Jeśli zaznaczysz 'Aktywuj, powiadamiaj(hasło)', Login oraz Hasło <b>odkodowane</b> zostanie wysłane na adres e-mail, więc użytkownik będzie musiał zmienić swoje hasło.
	";
    break;

  case 'prune' :
	$text = "Zbiorcze usuwanie niechcianych użytkowników z bazy danych. Mogą to być zarówno ci, którym nie udało się zakończyć procesu rejestracji lub których adres e-mail został odbity. Wszystkie wpisy na forum, komentarze itd. zostaną oznaczone jako 'Użytkownik skasowany'.
	";
	break;

  case 'unverified' :
	$text = "Pokazuje tych użytkowników, którym nie udało się zakończyć procesu rejestracji. Generalnie, opcje są takie jak dla kompletnej listy użytkowników.";
    break;

  case 'options' :
	$text = "Ustawia różne opcje wpływające na wszystkich użytkowników.<br /><br />
	<b>Umożliwić nadsyłanie awatarów</b><br />
	Jeśli opcja jest włączona, użytkownicy mogą przesyłać awatar według własnego wyboru, który jest przechowywany na serwerze. Może to mieć wpływ na bezpieczeństwo.<br /><br />
	<b>Umożliwić nadsyłanie zdjęć</b><br />
	Jeśli opcja jest włączona, użytkownicy mogą nadsyłać swoje zdjęcia, które są przechowywane na serwerze. Może to mieć wpływ na bezpieczeństwo.<br /><br />
	<b>Włącz śledzenie użytkowników online</b><br />
	Ta opcja musi być włączona aby śledzić aktywność użytkowników w tym, licznik użytkowników online. Znacznie zwiększa aktywność bazy danych.<br /><br />
	<b>Informacje o zarejestrowanych użytkownikach</b><br />
	Określa, która klasa użytkowników może przeglądać listę użytkowników.
	";
    break;

  default :
	$text = "Na tej stronie możesz zarządzać zarejestrowanymi użytkownikami. Możesz aktualizować ich ustawienia, nadawać status administratora oraz między innymi przypisywać ich do określonej grupy użytkowników.<br /><br />
	Porządek sortowania można zmienić klikając na nagłówek kolumny.<br />
	Wyświetlane kolumny można zmienić klikając na 'Opcje', wybierając żądane kolumny, a następnie klikając na 'Szukaj/Odśwież'.<br /><br />
	<b>Informacje o użytkowniku</b><br />
	Wyświetla profil tego użytkownika (można również kliknąć na nazwę wyświetlaną).<br /><br />
	<b>Edycja</b><br />
	Edytuj ustawienia dla tego użytkownika. <br /><br />
	<b>Blokuj/Odblokuj</b><br />
	Ustal, czy użytkownik może uzyskać dostęp do witryny. <br /><br />
	<b>Aktywacja</b><br />
	Aktywuje użytkownika, który normalnie by odpowiedział na e-mail aktywacyjny.<br /><br />
	<b>Ponowne wysłanie wiadomości e-mail</b><br />
	Ponowne wysłanie wiadomości e-mail do użytkownika.<br /><br />
	<b>E-mail testowy</b><br />
	Sprawdzenie adresu e-mail pod kątem jego prawidłowości(nie wysyła e-maila).<br /><br />
	<b>Ustawienia klasy</b><br />
	Przypisuje użytkownika do danej klasy.<br /><br />
	<b>Kasowanie</b><br />
	Całkowicie usuwa danego użytkownika z serwisu (wpisy użytkownika na forum, komentarze itd. zostaną oznaczone jako 'Użytkownik skasowany').
	";
}


$ns -> tablerender($caption, $text);
unset($text);