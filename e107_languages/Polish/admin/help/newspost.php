<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/newspost.php                  *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Aktualności";
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';
switch ($action)
{
  case 'create' :
	$text = "<b>Ogólnie</b><br />
Treść będzie wyświetlana na stronie głównej, rozszerzenie będzie możliwe do przeczytania po kliknięciu w link 'Czytaj więcej' .
<br />
<br />
<b>Pokazuj tylko tytuł</b>
<br />
Aktywacja tego spowoduje wyświetlenie tylko tytułu aktualności na stronie głównej wraz z linkiem do pełnej wiadomości.
<br /><br />
<b>Aktywacja</b>
<br />
Jeśli ustawisz datę początkową oraz/lub końcową dana pozycja aktualności będzie wyświetlana tylko pomiędzy wskazanymi datami.
";
	break;
  case 'cat' :
	$text = "Możesz podzielić aktualności pomiędzy różne kategorie, a odwiedzającym zezwolić tylko na przeglądanie aktualności ze wskazanych kategorii. <br /><br />Załaduj ikony aktualności do jednego z dwóch katalogów ".e_THEME."-yourtheme-/images/ lub themes/shared/newsicons/.";
    break;
  case 'pref' :
    $text = 'Ustaw różne opcje związane z aktualnościami<br /><br />
	<b>Kolumny kategorii aktualności</b><br />
	Wymaga wsparcia szablonu aby wybrać.<br /><br />
	<b>Ilość aktualności wyświetlanych na stronie.</b><br />
	Na stronie głównej wiadomości; wyświetla elementy w formacie rozszerzonym.<br /><br />
	<b>Ilość aktualności do wyświetlenia w archiwum.</b><br />
	Ustaw ilość wyświetlanych aktualności, których pokazywany jest tylko tytuł na stronie aktualności (włączając poprzednie).<br /><br />
	<b>Włącz edytor WYSIWYG </b><br />
	Wymagane dla wpisywania aktualności w HTML.
	';
	break;
  case 'list' :
  default :
	$text = 'Lista wszystkich aktualności. Aby edytować lub skasować, kliknij jedną z ikon \'opcje\' w kolumnie. Aby zobaczyć dany element, kliknij w tytuł.';
}
$ns -> tablerender($caption, $text);