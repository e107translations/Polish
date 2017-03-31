<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/lan_eurl.php                       *
   *                                                                 *
	* e107 Polish Team                                                *
	* www.d4e.pl                                                      *
	* $Date: 2016/01/20                                               *
	* $Author: JacekCich                                              *
+--------------------------------------------------------------------+
+====================================================================+
*/

/**
 *	e107 Alternate authorisation plugin
 *
 *	@package	e107_plugins
 *	@subpackage	alt_auth
 *	@version 	$Id$;
 */

define('LAN_ALT_1', 'Podstawowy typ autoryzacji');
define('LAN_ALT_2', 'Zaktualizuj ustawienia');
define('LAN_ALT_3', 'Wybierz alternatywny typ autoryzacji');
define('LAN_ALT_4', 'Skonfiguruj parametry dla');
define('LAN_ALT_5', 'Skonfiguruj parametry autoryzacji');
define('LAN_ALT_6', 'Działanie połączenia nie powiodło się');
define('LAN_ALT_7', 'Jeśli podłączenie do podstawowego typu autoryzacji nie powiedzie się (oraz nie jest to lokalna baza danych e107), jak ma być to zatrzymane?');
define('LAN_ALT_8', 'Wtórny typ autoryzacji');
define('LAN_ALT_9', 'Będzie używany, gdy podstawowa metoda autoryzacji nie będzie mogła znaleźć użytkownika.');

define('LAN_ALT_10', 'Pole nazwa użytkownika');
define('LAN_ALT_11', 'Pole hasło użytkownika');
define('LAN_ALT_12', 'Pole e-mail użytkownika');
define('LAN_ALT_13', 'Ukryć pole e-mail?');
define('LAN_ALT_14', 'Pole nazwa wyświetlana użytkownika');
define('LAN_ALT_15', 'Pole prawdziwa nazwa użytkownika');
define('LAN_ALT_16', 'Pole własna nazwa użytkownika');
define('LAN_ALT_17', 'Pole sygnatura');
define('LAN_ALT_18', 'Pole awatar');
define('LAN_ALT_19', 'Pole zdjęcie');
define('LAN_ALT_20', 'Pole dołączył');//Join date field
define('LAN_ALT_21', 'Pole statusu blokady');
define('LAN_ALT_22', 'Pole klasy użytkownika');
//define('LAN_ALT_23', 'XUP file field');
define('LAN_ALT_24', 'Pole hasła solonego');
define('LAN_ALT_25', '(czasami w połączeniu z hasłem dla zwiększenia bezpieczeństwa)');
define('LAN_ALT_26', 'Typ bazy danych:');
define('LAN_ALT_27', 'Aby przenieść wartość pola do lokalnej bazy danych, należy podać nazwę pola w odpowiednim polu poniżej. (Nazwa użytkownika i hasło są zawsze przenoszone)
		<br />Pozostaw to pole puste aby nie przenosić wszystkich');

define('LAN_ALT_29', 'Metody autoryzacji');
define('LAN_ALT_30', 'Ustawienia ');
define('LAN_ALT_31', 'Ustawienia główne');
define('LAN_ALT_32', 'Serwer:');
define('LAN_ALT_33', 'Nazwa użytkownika:');
define('LAN_ALT_34', 'Hasło:');
define('LAN_ALT_35', 'Baza danych:');
define('LAN_ALT_36', 'Tabela:');
define('LAN_ALT_37', 'Pole nazwa użytkownika:');
define('LAN_ALT_38', 'Pole hasło:');
define('LAN_ALT_39', 'Prefiks tabel:');

define('LAN_ALT_40', 'Test dostępu do bazy danych');
define('LAN_ALT_41', ' (stosując powyższe referencje)');
define('LAN_ALT_42', 'Jeśli nazwa użytkownika i hasło są wprowadzone, użytkownik zostanie także sprawdzony');
define('LAN_ALT_43', 'Pomyślnie połączono z bazą danych');
define('LAN_ALT_44', 'Błąd połączenia z bazą danych');
define('LAN_ALT_45', 'Pomyślnie wyszukano nazwę użytkownika');//Username lookup successful
define('LAN_ALT_46', 'Błąd wyszukiwania nazwy użytkownika');
define('LAN_ALT_47', ' Test');
define('LAN_ALT_48', 'Poprzednia walidacja');
define('LAN_ALT_49', 'Nazwa użytkownika = ');
define('LAN_ALT_50', 'Hasło = ');
define('LAN_ALT_51', '(puste)');
define('LAN_ALT_52', 'Uwierzytelnianie nie powiodło się - ');
define('LAN_ALT_53', 'nieznana przyczyna');
define('LAN_ALT_54', 'nie można połączyć się z bazą danych / dostawcą');
define('LAN_ALT_55', 'nieprawidłowy użytkownik');
define('LAN_ALT_56', 'złe hasło');
define('LAN_ALT_57', 'Metoda niedostępna');
define('LAN_ALT_58', 'Uwierzytelnianie udane');
define('LAN_ALT_59', 'Pobieranie parametrów:');
define('LAN_ALT_60', 'Rozszerzone Pola użytkownika');
define('LAN_ALT_61', 'Dopuszczać');
define('LAN_ALT_62', 'Nazwa pola');
define('LAN_ALT_63', 'Opis');
define('LAN_ALT_64', 'Typ');
define('LAN_ALT_65', 'Alternatywne Uwierzytelnianie');
define('LAN_ALT_66', 'Wtyczka ta pozwala na alternatywne metody uwierzytelniania.');
define('LAN_ALT_67', 'Ustawienia');
define('LAN_ALT_68', 'Usługa uwierzytelniania nie jest ustawiona.  Musisz ustawić preferowaną metodę uwierzytelniania.');
define('LAN_ALT_69', '');
define('LAN_ALT_70', 'Nie');
define('LAN_ALT_71', 'Prawda/Fałsz');
define('LAN_ALT_72', 'Duże litery');
define('LAN_ALT_73', 'Małe litery');
define('LAN_ALT_74', 'Pierwsza duża');
define('LAN_ALT_75', 'Duże słowa');
define('LAN_ALT_76', 'Ograniczenie klasy użytkownika (wartość liczbowa - zero lub puste dla wszystkich)');
define('LAN_ALT_77', 'Tylko użytkownicy w tej klasie (na bazie ustawionej wyżej) mają dostęp');
define('LAN_ALT_78', 'Nieudana akcja hasło');
define('LAN_ALT_79', 'Jeśli użytkownik istnieje w pierwotnej DB, albo wprowadzone hasło jest nieprawidłowe, w jaki sposób należy to zatrzymać?');

define('IMPORTDB_LAN_2', 'Zwykły tekst');
define('IMPORTDB_LAN_3', 'Joomla solone');
define('IMPORTDB_LAN_4', 'Mambo solone');
define('IMPORTDB_LAN_5', ' SMF (SHA1)');
define('IMPORTDB_LAN_6', 'Ogólne SHA1');
define('IMPORTDB_LAN_7', ' MD5 (oryginalne e107)');
define('IMPORTDB_LAN_8', 'e107 solone (opcja 2.0 )');
define('IMPORTDB_LAN_12', ' PHPBB2/PHPBB3 solone');
define('IMPORTDB_LAN_13', 'WordPress solone');
define('IMPORTDB_LAN_14', 'Magento solone');



define('LAN_ALT_FALLBACK', 'Użyj autoryzacji wtórnej');
define('LAN_ALT_FAIL', 'Nieudane logowanie');
define('LAN_ALT_UPDATESET', 'Ustawienia aktualizacji');
define('LAN_ALT_UPDATED','Ustawienia zaktualizowane');

define('LAN_ALT_AUTH_HELP', 'Są to ustawienia wspólne dla wszystkich metod uwierzytelnienia oraz określa działania, które należy podjąć<br /><br />
	Dodatkowe pola użytkownika określa, które <i>mogą</i> być dodane/zaktualizowane kiedy użytkownik loguje się - wymagana jest dalsza konfiguracja
dla określonej metody uwierzytelniania.');
define('LAN_ALT_VALIDATE_HELP', 'Można sprawdzić ustawienia przy użyciu \'Test dostępu do bazy danych\' spróbować sprawdzić poprawność użytkownika - który używa dokładnie tego samego procesu jak wtedy, gdy użytkownik próbuje się zalogować i stwierdzić, czy ustawienia są poprawne.<br />
	Jeśli skonfigurowano kilka parametrów, które mają być skopiowane do tabeli użytkownika o udanym logowaniu, są one również wymienione.
	');
define('LAN_ALT_COPY_HELP', 'Można wybrać pola do skopiowania ze zdalnej bazy danych do bazy danych użytkownika, wpisując odpowiednie nazwy.<br /><br />
	');
define('LAN_ALT_CONVERSION_HELP', 'W niektórych polach, w liście rozwijanej po prawej stronie pola, wprowadzanie wyboru konwersji, które mogą być stosowane do wartości
odczytanej ze zdalnej bazy danych; jeżeli \'nie\' jest zaznaczone, kopiowana wartość jest ta sama. Konwersje są:<br />
	<b>Prawda/Fałsz</b> - słowa \'Prawda\' oraz \'Fałsz\' (oraz ich dolna / mieszana kombinacja) są przekształcane w wartości logiczne 1 i zero.<br />
	<b>DUŻE LITERY</b> - Wszystkie litery są zamieniane na wielkie litery<br />
	<b>małe litery</b> - Wszystkie litery są zamieniane na małe litery<br />
	<b>Pierwsza duża</b> - Pierwszy znak jest konwertowany na wielkie litery<br />
	<b>Duże Słowa</b> - Pierwsza litera każdego wyrazu jest konwertowana na wielkie litery<br />
	<br />
	<br />');

?>