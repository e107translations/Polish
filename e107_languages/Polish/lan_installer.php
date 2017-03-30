<?php
/*
+====================================================================+
* Copyright e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - lan_installer.php                        *
   *                                                                 *
	* e107 Polish Team                                                *
	* www.d4e.pl                                                      *
	* $Date: 2016/01/20                                               *
	* $Author: JacekCich                                              *
+--------------------------------------------------------------------+
+====================================================================+
*/
define("LANINS_001", "Instalacja e107");
define("LANINS_002", "Etap");
define("LANINS_003", "<b>1</b>");
define("LANINS_004", "Wybór języka");
define("LANINS_005", "Proszę wybrać język, który będzie używany w dalszym procesie instalacji");
//define("LANINS_006", "Ustaw język");
define("LANINS_007", "<b>4</b>");
define("LANINS_008", "Sprawdzenie wersji PHP & MySQL oraz uprawnień plików");
define("LANINS_009", "Ponowne sprawdzenie uprawnień plików");
define("LANINS_010", "Plik niezapisywalny:");
define("LANINS_010a", "Folder niezapisywalny:");
//define("LANINS_011", "Błąd");
define("LANINS_012", "Prawdopodobnie serwer hostujący nie obsługuje funkcji MySQL. Możliwe, że rozszerzenie MySQL PHP nie jest zainstalowane lub Twoja instalacja PHP nie została skompilowane ze wsparciem dla MySQL.");
define("LANINS_013", "Nie można określić numer wersji MySQL. To nie jest błąd krytyczny, więc proszę kontynuować instalację. Należy jednak pamiętać, że e107 wymaga MySQL w wersji >= 3,23, aby funkcjonować prawidłowo.");
define("LANINS_014", "Uprawnienia plików");
define("LANINS_015", "Wersja PHP");
//define("LANINS_016", "MySQL");
define("LANINS_017", "OK");
define("LANINS_018", "Upewnij się, że wszystkie wymienione pliki istnieją i posiadają odpowiednie uprawnienia. Atrybuty powinny być ustawione na wartość 777, lecz zależy to od systemu operacyjnego - skontaktuj się z administratorem serwera, jeżeli napotkasz na jakiekolwiek problemy.");
define("LANINS_019", "Wersja PHP zainstalowany na serwerze nie jest zdolna do uruchomienia skryptu e107. e107 wymaga PHP w wersji co najmniej ".MIN_PHP_VERSION.", aby działać poprawnie. Albo zaktualizuj wersję PHP, albo skontaktuj się z administratorem serwera i poinformuj o potrzebie aktualizacji.");
//define("LANINS_020", "Zacznij instalację");
define("LANINS_021", "<b>2</b>");
define("LANINS_022", "Konfiguracja połączenia z serwerem MySQL");
define("LANINS_023", "Poniżej proszę wpisać dane niezbędne do poprawnego połączenia z bazą danych MySQL.<br /><br />Jeśli masz na serwerze uprawnienia <i>root</i> (głównego administratora), możesz utworzyć nową bazę danych zaznaczając pole wyboru. Jeśli nie masz wspomnianych uprawnień, musisz utworzyć bazę danych w jakiś inny sposób lub posłużyć się już istniejącą bazą.<br /><br />Jeśli masz tylko jedną bazę danych użyj prefiksu, dzięki któremu inne skrypty będą mogły korzystać z tej samej bazy.<br />Jeśli nie znasz dokładnych danych swojego serwera MySQL, skontaktuj się z administratorem usługi hostingowej.");
define("LANINS_024", "Serwer MySQL:");
define("LANINS_025", "Użytkownik MySQL:");
define("LANINS_026", "Hasło MySQL:");
define("LANINS_027", "Baza danych MySQL:");
define("LANINS_028", "Utwórzyć nową Bazę Danych");
define("LANINS_029", "Prefiks tabel:");
define("LANINS_030", "Adres serwera MySQL (najczęściej localhost), na którym chcesz zainstalować system e107. Adres może zawierać numer portu, np. “nazwahosta:port”, lub ścieżkę do lokalnych zasobów serwera, np. \':/ścieżka/do/zasobów\'.");
define("LANINS_031", "Wpisz nazwę użytkownika, którą system e107 będzie używał do łączenia się z serwerem MySQL");
define("LANINS_032", "Wpisz hasło użytkownika MySQL");
define("LANINS_033", "Wpisz nazwę baza danych MySQL w której chcesz zainstalować e107, czasami zwana jest również jako schemat. Jeśli użytkownik posiada uprawnienia do tworzenia baz danych, możesz zaznaczyć opcję automatycznego utworzenia bazy danych, jeśli takowa jeszcze nie istnieje.");
define("LANINS_034", "Prefiks wykorzystywany przy tworzeniu tabel e107. Przydatny dla wielu instalacji e107 w jednej bazie danych.");
//define("LANINS_035", "Kontynuacja");
define("LANINS_036", "<b>3</b>");
define("LANINS_037", "Weryfikacja połączenia z MySQL");
define("LANINS_038", " i tworzenie bazy danych");
define("LANINS_039", "Proszę upewnić się, że wszystkie najważniejsze pola zostały wypełnione - serwer MySQL, użytkownik MySQL i baza danych MySQL (są zawsze wymagane do uzyskania połączenia z serwerem MySQL)");
define("LANINS_040", "Błędy");
define("LANINS_041", "System e107 nie mógł nawiązać połączenia z serwerem MySQL używając podanych informacji.<br />Proszę wrócić do poprzedniej strony i upewnić się, że wpisane dane są poprawne.");
define("LANINS_042", "Połączenie z serwerem MySQL nawiązane i sprawdzone.");
define("LANINS_043", "Nie można utworzyć bazy danych, należy upewnić się, że uprawnienia do tworzenia baz danych na serwerze są poprawne.");
define("LANINS_044", "Utworzono bazę danych.");
define("LANINS_045", "Proszę kliknąć na przycisk, aby przejść do następnego etapu.");
define("LANINS_046", "<b>5</b>");
define("LANINS_047", "Dane administratora");
define("LANINS_048", "Rozszerzenie EXIF");

//define("LANINS_048", "Wróć do poprzedniego etapu");
define("LANINS_049", "Wprowadzone hasła nie są takie same. Proszę wrócić i spróbować ponownie.");
define("LANINS_050", "Rozszerzenie XML");
define("LANINS_051", "Zainstalowane");
define("LANINS_052", "Niezainstalowane");
define("LANINS_053", "e107 wymaga zainstalowanego rozszerzenia PHP XML. Przed kontynuacją, proszę skontaktować się z administratorem serwera lub zapoznać się z informacjami [x] . ");
define("LANINS_055", "Potwierdzenie instalacji");
define("LANINS_056", "<b>6</b>");
define("LANINS_057", " e107 posiada obecnie wszystkie potrzebne informacje, aby zakończyć instalację.<br /><br />Proszę kliknąć przycisk, aby utworzyć tabele bazy danych i zapisać wszystkie ustawienia.");
define("LANINS_058", "<b>7</b>");
define("LANINS_060", "Nie można odczytać danych z pliku sql.

 Proszę upewnić się, że plik [b]core_sql.php[/b] istnieje w katalogu [b]/e107_core/sql[/b] .");
define("LANINS_061", "e107 nie był w stanie utworzyć wszystkich wymaganych tabel bazy danych. <br /><br />Proszę wyczyścić bazę danych i rozwiązać wszystkie problemy przed ponowną próbą.");

//define("LANINS_063", "Witamy w e107");
define("LANINS_069", "e107 został pomyślnie zainstalowany!

Ze względu na bezpieczeństwo przywróć uprawnienia pliku [b]e107_config.php[/b] do wartości 644 (CHMOD 644).

Po kliknięciu na poniższy przycisk, usuń również z serwera plik <i>install.php</i>");
define("LANINS_070", "E107 nie był w stanie zapisać głównego pliku konfiguracyjnego na serwerze.

Proszę upewnić się, że plik [b]e107_config.php[/b] posiada prawidłowe uprawnienia");
define("LANINS_071", "Instalacja zakończona");
define("LANINS_072", "Login Admina");
define("LANINS_073", "Jest to nazwa, która będzie używana do logowania w serwisie. Można ją również używać jako nicka administratora");
define("LANINS_074", "Wyświetlana Nazwa Administratora");
//define("LANINS_075", "Jest to nazwa, która zostanie wyświetlona użytkownikom w Twoim profilu, forach i innych obszarach. Pozostaw to pole puste, jeśli jako Nazwy Administratora chcesz używać loginu.");
define("LANINS_076", "Hasło Admina");
define("LANINS_077", "Proszę wpisać hasło administratora, którym będziesz się posługiwał podczas logowania w serwisie");
define("LANINS_078", "Potwierdź Hasło");
define("LANINS_079", "Proszę powtórzyć hasło administratora");
define("LANINS_080", "e-mail Administratora");
define("LANINS_081", "Wpisz swój adres e-mail");
//define("LANINS_082", "nazwa@twojastrona.pl");
define("LANINS_083", "MySQL zgłosił błąd:");
define("LANINS_084", "Instalator nie mógł nawiązać połączenia z bazą danych");
define("LANINS_085", "Instalator nie mógł wybrać bazy danych:");
define("LANINS_086", "Pola - login administratora, hasło administratora oraz adres e-mail administratora są <b>wymagane</b>. Proszę powrócić do ostatniej strony i upewnić się, że informacje zostały poprawnie wprowadzone.");

//define("LANINS_087", "Różne");
//define("LANINS_088", "Strona główna");
//define("LANINS_089", "Zasoby");
//define("LANINS_090", "Użytkownicy");
//define("LANINS_091", "Dodaj newsa");
//define("LANINS_092", "Kontakt");
//define("LANINS_093", "Nadaje dostęp do prywatnych menu");
//define("LANINS_094", "Przykładowa klasa użytkowników forum prywatnego");
//define("LANINS_095", "Sprawdzanie integralności");

//define("LANINS_096", "Ostatnie komentarze");
//define("LANINS_097", "[więcej ...]");
//define("LANINS_100", "Ostatnie wpisy na forum");
//define("LANINS_101", "Zapisz ustawienia menu");
//define("LANINS_102", "Data / Czas");
// define("LANINS_103", 'Reviews');
// define("LANINS_104", 'Review Front Page ...');

define("LANINS_105", "Rozpoczynanie nazwy bazy danych lub prefiksu cyfrą, a następnie literą “e” or “E” jest niedozwolone");
define("LANINS_106", "OSTRZEŻENIE - e107 nie może zapisywać do katalogów i/lub wylistować plików. Jeśli nie zatrzyma to procesu instalacji e107, będzie to oznaczało, że niektóre funkcje są niedostępne.
Aby używać tych funkcji, należy zmienić uprawnienia plików.");
define("LANINS_107", "Nazwa strony");
define("LANINS_108", "np. 'Mój Blog'");
define("LANINS_109", "Wygląd strony");
//define("LANINS_110", "");
define("LANINS_111", "Włącz konfigurację zawartości");
define("LANINS_112", "Szybki podgląd strony lub demo. (jeżeli istnieje)");
define("LANINS_113", "Wpisz nazwę strony");
define("LANINS_114", "Wybierz wygląd strony");
define("LANINS_115", "Nazwa wyglądu graficznego");
define("LANINS_116", "Typ wyglądu graficznego");
define("LANINS_117", "Ustawienia strony");
define("LANINS_118", "Instalacja pluginów");
define("LANINS_119", "Instaluj wszystkie pluginy, które są zgodne z wersją wyglądu graficznego.");
define("LANINS_120", "<b>8</b>");
define("LANINS_121", "Plik e107_config.php nie jest pusty");
define("LANINS_122", "Najprawdopodobniej e107 jest już zainstalowane");
define("LANINS_123", "Opcja: Twoja nazwa lub alias. Zostaw puste, aby używać nazwy użytkownika");
define("LANINS_124", "Wpisz hasło mające 8 znaków");
define("LANINS_125", "System e107 został pomyślnie zainstalowany");
define("LANINS_126", "Ze względu na bezpieczeństwo przywróć uprawnienia pliku <b>e107_config.php</b> do wartości 644 (CHMOD 644).

Po kliknięciu na poniższy przycisk, usuń również z serwera plik <i>install.php</i>");
define("LANINS_127", "Baza Danych [x] już istnieje. Zastąpić ją ? (wszystkie zawarte w niej informacje zostaną utracone)");
define("LANINS_128", "Zastąp");
define("LANINS_129", "Bada Danych nie znaleziona.");

define("LANINS_134", "Instalacja");
define("LANINS_135", "z"); //of  //single time use installer only as in .1 of 8  not replacing by LAN_SEARCH_12
define("LANINS_136", "Usuń istniejącą bazę danych");
define("LANINS_137", "Znaleziono istniejącą bazę danych");
// define("LANINS_138", "Version");

define("LANINS_141", "Proszę wypełnić poniższy formularz poprawnymi danymi MySQL. Jeśli nie znasz tych informacji, należy skontaktować się z dostawcą usług hostingowych. Podpowiedzi uzyskasz po najechaniu kursorem myszy na pola.");
define("LANINS_142", "WAŻNE: Zmień nazwę pliku e107.htaccess na .htaccess");
define("LANINS_144", "WAŻNE: Skopiuj i wklej dane z pliku [b]e107.htaccess[/b] do nowego [b].htaccess[/b] pliku. Należy uważać, aby nie nadpisać istniejących danych, które mogą tam być.");
define("LANINS_145", "Do poprawnej instalacji e107 v2.x wymagane jest PHP [x] . Proszę skontaktować się z dostawcą usług hostingowych lub zapoznać się z informacjami w [y] przed kontynuowaniem.");

?>