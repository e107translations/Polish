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
//define("ADSTAT_ON", "On");
//define("ADSTAT_OFF", "Off");
define("ADSTAT_L1", "Ten plugin będzie zapisywał wszystkie wizyty na Twojej stronie, a następnie wykona szczegółowe zestawienie bazujące na zebranych informacjach.");
define("ADSTAT_L2", "Plugin statystyk został pomyślnie zainstalowany. Aby aktywować, proszę przejść do strony konfiguracyjnej plugina i wybrać odpowiednia opcję.<br /><b>Musisz ustawić uprawnienia katalogu e107_plugins/log/logs na wartość 777 (chmod 777)</b>");
define("ADSTAT_L3", "Statystyki");
define("ADSTAT_L4", "Aktywacja statystyk");
define("ADSTAT_L5", "Rodzaje statystyk");
define("ADSTAT_L6", "Przeglądarki");
define("ADSTAT_L7", "Systemy operacyjne");
define("ADSTAT_L8", "Rozdzielczość oraz głębia kolorów");
define("ADSTAT_L9", "Kraje oraz domeny");
define("ADSTAT_L10", "Strony odsyłające");
define("ADSTAT_L11", "Słowa kluczowe");
define("ADSTAT_L12", "Resetuj statystyki");
define("ADSTAT_L13", "ta opcja wymaże statystyki - ostrożnie! Kasuje statystyki do wczorajszego dnia. Istnieje też osobna opcja, aby usunąć wybrane wcześniejsze dane."); // TODO: Condense this help field (minimize)
define("ADSTAT_L14", "Ilość stron");
//define("ADSTAT_L15", "Update Statistic Settings");
define("ADSTAT_L16", "Ustawienia statystyk");
//define("ADSTAT_L17", "Statistic settings updated");
define("ADSTAT_L18", "Zezwól na dostęp do głównej strony statystyk dla...");
define("ADSTAT_L19", "Ostatni goście");
define("ADSTAT_L20", "Zliczanie wizyt administratorów");
define("ADSTAT_L21", "Maksymalna ilość rekordów wyświetlana na stronie statystyk");
define("ADSTAT_L22", "Uruchom podprogram aktualizujący");
define("ADSTAT_L23", "Zostały wykryte statystyki z poprzedniej wersji systemu e107, zaktualizuj je tutaj");
define("ADSTAT_L24", "Przejdź do skryptu aktualizującego");
//define("ADSTAT_L25", "Selected stats reset");
define("ADSTAT_L26", "Usuń wpisy stron");
define("ADSTAT_L27", "Jeśli statystyki zawierają niepoprawne strony, możesz usunąć je z poziomu tej strony");
define("ADSTAT_L28", "Otwórz stronę");
define("ADSTAT_L29", "Nazwa strony");
define("ADSTAT_L30", "Zaznacz, aby usunąć");
define("ADSTAT_L31", "Usuń wybrane strony");
define("ADSTAT_L32", "Porządkowanie stron");
// define("ADSTAT_L33", "Configure Statistics Logging"); see English_global.php
// define("ADSTAT_L34", "Site Stats");
define ('ADSTAT_L35', 'Opcje');
define ('ADSTAT_L36', 'Eksport');
//define ('ADSTAT_L37', 'Create export file');
define ('ADSTAT_L38', "Musisz ustawić katalog e107_plugins/log/logs na zapisywalny");
define ('ADSTAT_L39', 'Funkcje statystyk');
define ('ADSTAT_L40', 'Eksport danych');
define ('ADSTAT_L41', 'Wybór danych');
define ('ADSTAT_L42', 'Pojedynczy dzień');
define ('ADSTAT_L43', 'Codziennie przez miesiąc');
define ('ADSTAT_L44', 'Miesięcznie przez rok');
define ('ADSTAT_L45', 'Cały czas');
define ('ADSTAT_L46', 'Data:');
define ('ADSTAT_L47', 'Błędnie wybrana data');
define ('ADSTAT_L48', 'Miesięcznie oraz przez cały czas');
define ('ADSTAT_L49', 'Tylko cały czas');
define ('ADSTAT_L50', 'Brak');
define ('ADSTAT_L51', 'Dane wyjściowe');
define ('ADSTAT_L52', 'Dane strony');//Page Data
define ('ADSTAT_L53', 'Brak możliwości wyboru');
define ('ADSTAT_L54', 'Nieprawidłowy wyboru rodzaju');
define ('ADSTAT_L55', 'Pojedynczy cudzysłów');
define ('ADSTAT_L56', 'Podwójny cudzysłów');
define ('ADSTAT_L57', 'Przecinek');
define ('ADSTAT_L58', 'Pionowa kreska (|)');
define ('ADSTAT_L59', 'Separator CSV, cytaty');
define ('ADSTAT_L60', 'Pasek adresu url witryny z');
define ('ADSTAT_L61', '(jeśli zaznaczone, po prostu daje odwołanie do strony)');
define ('ADSTAT_L62', 'Cały czas (szczegółowe)');
define ('ADSTAT_L63', 'Dostępne zestawy danych');
define ('ADSTAT_L64', 'Znaleziono rekordów bazy danych:');
define ('ADSTAT_L65', 'Filtr BD:');
define ('ADSTAT_L66', 'Pokaż zestawy danych');
define ('ADSTAT_L67', 'Wygeneruj plik CSV (zmienne oddzielone przecinkami), który zawiera wcześniejsze statystyki spełniające określone kryteria');
define ('ADSTAT_L68', 'Lista wpisów bazy danych statystyk, które rzeczywiście istnieją i spełniają kryteria wyboru');
define ('ADSTAT_L69', 'Usuwanie wcześniejszych statystyk');
define ('ADSTAT_L70', 'Usuń dane wcześniejsze niż:');
define ('ADSTAT_L71', 'Usuń dane');
define ('ADSTAT_L72', 'Potwierdź usunięcie danych starszych niż pierwszego dnia:');
//define ('ADSTAT_L73', 'Confirm');
define ('ADSTAT_L74', '(Lista pozycji danych, które zostaną usunięte poniżej)');
define ('ADSTAT_L75', 'Zapisy do usunięcia');
define ('ADSTAT_L76', 'Uwaga! Po usunięciu danych nie można ich odzyskać. Wcześniej, wykonaj kopię zapasową lub eksport danych.');
define ('ADSTAT_L77', 'Skasowane dane:');
define ('ADSTAT_L78', 'Pokaż poprzedni miesiąc, jak również bieżący miesiąc dla niestronicowych statystyk');
define ('ADSTAT_L79', 'Wykorzystywane tylko, gdy miesięczne statystyki są zebrane');
define ('ADSTAT_L80', 'Następujące strony zostały skasowane:');
define ('ADSTAT_L81', 'Statystyki wyczyszczone:');
define ('ADSTAT_L82', 'Poniższe wartości ustawiono na:');
define ('ADSTAT_L83', 'Poniższe ID statystyk skasowano:');
define ('ADSTAT_L84', '');
define ('ADSTAT_L85', '');



?>