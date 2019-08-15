<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/userclass2.php                *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Klasy użytkowników";

if (!($action = vartrue($_GET['action'])))
{
	if (e_QUERY)
	{
	  $qs = explode(".", e_QUERY);
	}
	$action = varset($qs[0],'display');
}
switch ($action)
{
  case 'initial' :
	$text = "Ustaw klasę, do której nowy użytkownik strony będzie przypisanych pierwotnie.
	Jeżeli weryfikacja jest włączona, to ta funkcja działa wtedy, gdy użytkownik rejestruje się lub gdy użytkownik został zweryfikowany.<br /><br />
	  I pamiętaj, że jeśli używasz hierarchii klas użytkownika, to dany użytkownik jest automatycznie członkiem wszystkich klas 'powyżej' zaznaczonych na liście.";
	break;
  case 'options' :
	$text = "Opcje konfiguracji pozwalają na tworzenie i usuwanie hierarchii domyślnej klasy. Można zobaczyć efekt patrząc na listę użytkownika.<br />
	Nie zmienia to informacji o klasach użytkownika, hierarchię możesz edytować lub usunąć później.<br /><br />
	Musisz tylko preinstalować hierarchię klas w przypadku gdy, nastąpiło uszkodzenie tabel w bazie danych";
	break;
  case 'membs' :
    $text = "Teraz na stronie administratora";
	break;
  case 'debug' :
	$text = "Tylko dla zaawansowanych użytkowników - pokazuje hierarchię klas, plus przypisane klasy i klasy, do której pierwsze 20 użytkowników ma dostęp.<br />
	Liczba przed nazwą klasy jest jego unikatowym ID (numer referencyjny). Z klasy 'Wszyscy' mają ID  0 (zero). e107 używa identyfikatorów ID w odniesieniu do klas.<br />
	Po nazwie klasy, jest widoczność i możliwości edycyjne - [widoczność:253, edycja: 27] tak dla przykładu. Oznacza to, że widoczność danej klasy jest dla większości obszarów ale tylko wtedy, gdy dany użytkownik jest członkiem klasy 253, a użytkownik może edytować swoje członkostwo klasy tylko wtedy, gdy jest członkiem klasy 27.<br />
	W końcu, po znaku '=', jest lista wszystkich klas powyżej lub poniżej listy oraz ID danej klasy. W ten sposób użytkownik, który jest członkiem danej klasy będzie członkiem wszystkich klas na tej liście.<br /><br />
	Aby pomóc w zrozumieniu, pokazano członkostwo klasy dla pierwszych 20 użytkowników. Pierwszy wpis w każdej linii pokazuje klasy, których użytkownik jest członkiem.
	 Druga pozycja zawiera listę wszystkich klas, w których użytkownik jest członkiem a dziedziczenie zaczyna obowiązywać. Trzecia pozycja pokazuje, która klasa członkostwa może być edytowalna";
	break;
  case 'test' :
  case 'special' :
    $text = "Nie używaj tego !!! Tylko dla deweloperów !!!";
	break;
  case 'edit' :
  case 'config' :
	$text = "Na tej stronie możesz tworzyć, edytować lub usuwać grupy użytkowników.<br />
         Grupy są przydatne do ograniczenia dostępu dla użytkowników do niektórych części Twojego serwisu. Na przykład, możesz utworzyć grupę i nazwać ją <i>Test</i>, a następnie utworzyć forum z przyznanym tylko dla tej grupy dostępem do niego.<br /><br />
		 Nazwa klasy jest wyświetlana na listach rozwijanych i tym podobnych; w niektórych miejscach również wyświetlany jest bardziej szczegółowy opis.<br /><br />
		 Ikony klas mogą być wyświetlane w różnych miejscach na stronie, jeśli są ustawione.<br /><br />
		 Możesz umożliwić użytkownikom edytowanie swojego dostępu do danej klasy. Jeśli ustawisz 'nikt', to tylko administratorzy będą mogli zarządzać klasą użytkowników <br /><br />
		Lista 'Widoczność klasy' pozwala ukryć klasy przed innymi użytkownikami - ma to zastosowanie w listach rozwijanych oraz polach wyboru.<br /><br />
		Lista 'Nadrzędna klasa' pozwala ustawić hierarchię danej klasy. 'xxx_Potrzebne wsparcie_xxx' Jeżeli na 'górze' listy hierarchii są klasy 'Wszyscy/Publiczne' lub 'Użytkownik',
		 klasy niżej w hierarchii mają także prawa klasy nadrzędnej, tak jak klasa nadrzędna i tak dalej.
		 Jeżeli 'góra' klasy hierarchii jest 'Nikt', wtedy uprawnienia zgromadzone są w przeciwnym kierunku - klasa wyświetla wszelkie uprawnienia klasy <b>poniżej</b> listy. Wyniki listy są pokazane w dolnej części strony, można je rozwijać lub zwijać klikając na znak '+' lub '-' boxes.";
	break;
  case 'display' :
  default :
	$text = "Na tej stronie możesz tworzyć, edytować lub usuwać grupy użytkowników.";
}
e107::getRender() -> tablerender($caption, $text);