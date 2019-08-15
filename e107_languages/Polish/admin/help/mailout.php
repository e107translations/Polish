<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/mailout.php                   *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$e107 = e107::getInstance();

$action = e107::getParser()->toDB(varset($_GET['mode'],'makemail'));

  switch ($action)
  {
	case 'justone' :
	  $text = 'Wyślij e-mail z ograniczeniami określonymi przez opcjonalną wtyczką';
	  break;
	case 'debug' :
	  $text = 'Tylko dla deweloperów. Nie używany obecnie';
	  break;
	case 'saved' :
	  $text = 'Wybierz i korzystaj z zapisanego szablonu e-mail, aby wysłać e-maile. Usuń dowolny szablon który nie jest już używany';
	  break;
	case 'pending' :
		$text = 'Lista e-maili przygotowanych do wysyłania, wraz z aktualnym statusem. Zadaniem harmonogramu wysyłania poczty będzie przetwarzać te e-maile, jak to jest w planie, z uwzględnieniem najwcześniejszych terminów.';
		break;
	case 'held' :
		$text = 'Lista e-maili, które zostały przygotowane do wysłania, ale jeszcze wysłane nie są.';
		break;
	case 'sent' :
	  $text = 'Lista zrealizowanych e-maili. Pozwala, zobaczyć wyniki wysyłania.<br />';
	  break;
	case 'savedmail' :
	case 'makemail' :
	case 'main' :
	  $text = 'Tworzenie wiadomości e-mail.<br /> Nadaj mu opisową nazwę a następnie wybierz z listy odbiorców. Można zapisać wszystko jako szablon do listu lub wysłać bezpośrednio.<br />';
	  $text .= 'Adresy e-mail mogą być wspierane przez inne wtyczki (np. newsletter) lub podobne. Duplikaty są usuwane gdy poczta zostanie wysłana<br />';
	  $text .= 'Wszelkie załączniki będą wybierane z listy poprawnie dodanych plików do działu download.<br />';
	  $text .= 'Mail może być wysłany jako zwykły tekst (najbardziej uniwersalny i najmniej narażony na zaklasyfikowanie jako spam), lub jako HTML (w tym przypadku zwykły tekst alternatywny jest generowany automatycznie).<br /> Style szablonów mogą być automatycznie dodawane do wiadomości. Alternatywnie można wybrać uprzednio zdefiniowany szablon.';
	  break;
	case 'recipients' :
		$text = 'Pokazuje wszystkich odbiorców i potencjalnych odbiorców wiadomości e-mail wraz z aktualnym statusem.';
		break;
	case 'prefs' :
	  $text = '<b>Konfigurowanie opcji e-maili.</b><br />
	  E-mail testowy jest wysyłany przy użyciu aktualnego sposobu i ustawień. Jeśli masz problemy z e-mailem odbitym, spróbuj wysłać wiadomość testową do: <i>check-auth@verifier.port25.com</i> aby mieć pewność, że ustawienia rekordów MX serwera są prawidłowe. Oczywiście należy być pewnym, że podany na stronie adres e-mail jest prawidłowy.<br /><br />';
	  $text .= '<b>Metody mailingowe</b><br />
	  Użyj SMTP do wysyłania poczty. Ustawienia zależą od hostów serwera pocztowego.<br /><br />';
	  $text .= '<b>Domyślny format e-mail</b><br />
	  E-maile mogą być przesyłane albo w postaci zwykłego tekstu lub w formacie HTML. Te ostatnie z reguły daje lepszy wygląd, ale jest bardziej podatne na filtrowane za pomocą różnych środków bezpieczeństwa. W przypadku wybrania opcji HTML, zwykły tekst zostanie dodany oddzielnie.<br /><br />';
	  $text .= '<b>Kontrola poczty masowej</b><br />
	  Zadane wartości zależeć będą od hosta poczty oraz od ilości wysyłanych e-maili; jest możliwe wpisanie od dużej wartości do zera, tak że kolejka wysyłanych e-maili opróżniana jest natychmiastowo. Zazwyczaj najlepiej jest wysyłać mniej niż 500 e-maili na godzinę.<br /><br />';
	  $text .= '<b>Odbite e-maile</b><br />
	  Można podać adres e-mail, aby otrzymać odpowiedź zwrotną, gdy e-mail jest niemożliwy do dostarczenia. Jeżeli możesz zmieniać ustawienia swojego serwera, to możesz określić inny skrypt do panowania wysyłania poczty . W przeciwnym razie możesz podać osobne konto e-mail,
	  który może być sprawdzony zarówno okresowo (stosując harmonogram), lub ręcznie za pomocą menu opcji użytkownika. Zwykle będzie to standardowe konto POP3; użyj opcji związanych z TLS-tylko wtedy, gdy szczególnie wymagane jest to przez host<br /><br />';
	  $text .= '<b>Źródła adresu e-mail</b><br />
	  Jeśli masz dodatkowe wtyczki związane z pocztą elektroniczną, można wybrać który z nich będzie dodawać adresy e-mail do listy.<br /><br />';
	  $text .= '<b>Rejestrowanie</b><br />
	  Opcja \'Rejestrowanie zbiorczych maili\' tworzy plik tekstowy w katalogu dziennika systemu. Musi on być okresowo kasowany.<br /> Opcja \'Tylko rejestrowanie\' pozwala zobaczyć kto odbiera pocztę która jest wysyłana.<br /> Opcja \'wraz z błędami\' powoduje zapisanie co siódmy błąd, służy głównie do testowania';
	  break;
	 case 'maint' :
		$text = 'Funkcje konserwacji bazy danych poczty';
		break;
	default :
	  $text = 'Brak dokumentacji';
  }

$ns->tablerender('Poczta', $text);