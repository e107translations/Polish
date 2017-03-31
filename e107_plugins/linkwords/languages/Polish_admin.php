<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file                                            *
	* e107 Polish Team                                                *
	* www.d4e.pl                                                      *
	* $Date: 2016/02/20                                               *
	* $Author: JacekCich                                              *
+--------------------------------------------------------------------+
+====================================================================+
*/

//define("LWLAN_1", "Field(s) left blank.");
//define("LWLAN_2", "Link word saved.");
//define("LWLAN_3", "Link word updated.");
define("LWLAN_4", "Nie zdefiniowano jeszcze żadnych linków wyrazowych.");
define("LWLAN_5", "Wyrazy");
define("LWLAN_6", "Odnośnik");
define("LWLAN_7", "Aktywny?");
//define("LWLAN_8", "Options");
//define("LWLAN_9", "yes");
//define("LWLAN_10", "no");
define("LWLAN_11", "Aktualne linki wyrazowe");
//define("LWLAN_12", "Yes");
//define("LWLAN_13", "No");
//define("LWLAN_14", "Submit LinkWord");
//define("LWLAN_15", "Update LinkWord");
//define("LWLAN_16", "Edit");
//define("LWLAN_17", "Delete");
define("LWLAN_18", "Czy na pewno usunąć wskazany link wyrazowy?");
//define("LWLAN_19", "Linkword deleted.");
define("LWLAN_20", "Nie mogę odnaleźć wpisu linku wyrazowego.");
define("LWLAN_21", "Wyraz do automatycznego zlinkowania (lub lista wyrazów oddzielonych przecinkami)");
define("LWLAN_22", "Aktywować?");
define("LWLAN_23", "Zarządzanie linkami");
define("LWLAN_24", "Zarządzanie wyrazami");
//define("LWLAN_25", "Options");
define("LWLAN_26", "Obszary, w których będą aktywne linki wyrazowe");
define("LWLAN_27", "To jest 'kontekst' wyświetlanego tekstu");
define("LWLAN_28", "Strony, na których linki wyrazowe będą wyłączone");
define("LWLAN_29", "Identyczny format, jak przy ustawieniu widoczności menu. Jedna pozycja w linii. Wymień częściowe lub kompletne adresy URL. Zakończ je '!' dla precyzyjnego określenia końca linku");
//define("LWLAN_30", "Save options");
define("LWLAN_31", "Dodaj/edytuj link wyrazowy");
//define("LWLAN_32", "Linkword Options");
define("LWLAN_33", "Obszar tytułu");
define("LWLAN_34", "Streszczenie pozycji");
define("LWLAN_35", "Treść pozycji");
define("LWLAN_36", "Opis (linki etc)");
//define("LWLAN_37", "Legacy areas");
//define("LWLAN_38", "Clickable links");
//define("LWLAN_39", "Unprocessed text");
define("LWLAN_40", "Tytuły użytkowników (np. na forum)");
define("LWLAN_41", "Treść użytkowników (np. na forum)");
// Reserve numbers for further context strings



define("LWLAN_50", "Podpowiedź");
define("LWLAN_51", "Nieaktywne");
define("LWLAN_52", "Tylko linki wyrazowe");
define("LWLAN_53", "Tylko podpowiedzi");
define("LWLAN_54", "Linki wyrazowe oraz podpowiedzi");
define("LWLAN_55", "Otwórz link w nowym okniew");
define("LWLAN_56", "Otwórz w nowej karcie");
//define("LWLAN_57", "Error writing new values");
define("LWLAN_58", "Prefiks zamieniony na format 0.8 ");		// Used in 0.7-compatible stub only //Pref hook converted to 0.8 format
define("LWLAN_59", "Włącz funkcjonalność Ajax");
define("LWLAN_60", " LW ID");
//define("LWLAN_61", "ID");
define("LWLAN_62", "Podpowiedź ID (LW ID)");
define("LWLAN_63", "Tylko dodatnie liczby całkowite");
define("LWLAN_64", "Wyłącza link na bieżącej stronie");
define("LWLAN_65", "Po zaznaczeniu, klikalne linki będą wyłaczone jeżeli będą przekierowywać do aktualnej strony");


// Installation-related
//define("LWLANINS_1", "Linkwords");
//define("LWLANINS_2", "This plugin links specified words with a defined link and/or tooltip");
//define("LWLANINS_3", "Configure LinkWords");
//define("LWLANINS_4", "To configure please click on the link in the plugins section of the admin front page");
//define("LWLANINS_5", "Upgrade complete");


// Help text
define("LAN_LW_HELP_00","Pomoc linki wyrazowe");
define("LAN_LW_HELP_01","
  <b>Obszary do włączenia</b><br />
  wiele obszarów tekstu ma przydzielony \"kontekst\", linki wyrazowe będą wyświetlane tylko w obszarach zawierających ten kontekst.<br /><br />
  <b>Wyłączone linki wyrazowe</b><br />
  Linki wyrazowe będą wyłączone na określonych stronach lub stronach pasujących do wzorca. Wpisz je tutaj (składnia taka sama jak w przypadku menu), jeden wzór na linię.
  Jeżeli wzór kończy się na \"!\", to odpowiada to \"końcu zapytania\", i zwykle jest dokładnie dopasowane. W przeciwnym razie każdy url zawierający określony ciąg będzie pasował.<br />
  Uwaga, linki wyrazowe <i>nigdy</i> nie są wyświetlane na stronach admina.<br /><br />
  <b>Włącz funkcjonalność Ajax</b><br />
  Podpowiedzi będą używać Ajax do pokazywania informacji. To zazwyczaj wymaga niestandardowego kodowania.<br /><br />
  <b>Wyłącza link na bieżącej stronie</b><br />
  Zwykle nie ma sensu, aby użytkownik mógł kliknąć link, który znajduje się na tej samej stronie. Zaznacz pole, aby usunąć tę opcję,<br />
  ");
define("LAN_LW_HELP_02","Zdefiniuj słowa, które będą aktywnymi linkami lub które wyświetlą tekst w chmurce nad wskaźnikiem myszy<br /><br />
  <b><u>Wyrazy na linki</u></b><br />
  Bez uwzględniania wielkości liter. Dla mapowania różnych wyrazów tych samych linków i podpowiedzi rozdzielaj przecinkami (bez spacji)<br /><br />
  <b><u>Link</u></b><br />
  Zdefiniuj klikalny link wyrazowy. Jeżeli jest to zewnętrzny odnośnik, to [i]musi[/i] zaczynać się od \"http://\". Jeżeli jest to odnośnik do obszarów w tej stronie, to {e_XXX} stałe mogą zostać użyte.<br /><br />
  <b><u>Dymek</u></b><br />
  Zdefiniuje tekst, który będzie pokazywany gdy użytkownik najedzie kursorem myszy na dany wyraz.<br /><br />
  <b><u>LW ID (Dymek ID)</u></b><br /><br />
  Określa opcjonalny kod ID, który będzie przetwarzany przez Ajax. Jeżeli puste, to będzie używany nr. zapisu z bazy danych.<br /><br />
  <b><u>Aktywny?</u></b><br />
  Określa, które opcje są aktywne.
  ");





?>