<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/lan_log_messages.php               *
   *                                                                 *
	* e107 Polish Team                                                *
	* www.d4e.pl                                                      *
	* $Date: 2016/01/20                                               *
	* $Author: JacekCich                                              *
+--------------------------------------------------------------------+
+====================================================================+
*/

/*
Definicje w tym pliku są dla standardowych "wyjaśnień" wiadomości, które mogą być wprowadzone
do którejś wiadomości z logów systemowych. Są trzy grupy o różnych przedrostkach:
	LAN_ADMIN_LOG_nnn - the admin log (rejestruje działania zamierzone przez adminów)
	LAN_AUDIT_LOG_nnn - the audit log (rejestruje działania, zwykle zamierzone przez użytkowników)
	LAN_ROLL_LOG_nnn - the rolling log (Zapisy zewnętrzne wydarzenia, debugowanie itd)
*/


// User audit trail events. For messages 11-30, the last 2 digits must match the define for the event type in the admin log class file
define("LAN_AUDIT_LOG_001", "Dostępne dla zablokowanych użytkowników");
define("LAN_AUDIT_LOG_002", "Aktywna ochrona przed zatykaniem");
define("LAN_AUDIT_LOG_003", "Dostępne dla zablokowanych adresów IP");
define("LAN_AUDIT_LOG_004", "");
define("LAN_AUDIT_LOG_005", "");
define("LAN_AUDIT_LOG_006", "Użytkownik zmienił hasło");
define("LAN_AUDIT_LOG_007", "Użytkownik zmienił adres e-mail");
define("LAN_AUDIT_LOG_008", "");
define("LAN_AUDIT_LOG_009", "");
define("LAN_AUDIT_LOG_010", "Dane użytkownika zmienione przez admina");
define("LAN_AUDIT_LOG_011", "Użytkownik zerejestrował się");
define("LAN_AUDIT_LOG_012", "Użytkownik potwierdził rejestrację");
define("LAN_AUDIT_LOG_013", "Użytkownik zalogował się");
define("LAN_AUDIT_LOG_014", "Użytkownik wylogował się");
define("LAN_AUDIT_LOG_015", "Użytkownik zmienił swoją wyświetlaną nazwę");
define("LAN_AUDIT_LOG_016", "Użytkownik zmienił hasło");
define("LAN_AUDIT_LOG_017", "Użytkownik zmienił adres e-mail");
define("LAN_AUDIT_LOG_018", "Użytkownik zresetował swoje hasło");
define("LAN_AUDIT_LOG_019", "Użytkownik zmienił swoje ustawienia");
define("LAN_AUDIT_LOG_020", "Użytkownik dodany przez admina");
define("LAN_AUDIT_LOG_021", "Użytkownik odbił e-maila");
define("LAN_AUDIT_LOG_022", "Użytkownik zablokowany");
define("LAN_AUDIT_LOG_023", "Użytkownik odrzucił reset");
define("LAN_AUDIT_LOG_024", "Czasowy status użytkownika");


// Admin log events
//-----------------
define("LAN_AL_ADLOG_01", "Działania admina - preferencje zaktualizowano");
define("LAN_AL_ADLOG_02", "Działania admina - kasowanie starych danych");
define("LAN_AL_ADLOG_03", "Działania użytkownika - kasowanie starych danych");//User Audit log - delete old data
define("LAN_AL_ADLOG_04", "Działania użytkownika - zaktualizowano opcje");//User audit options updated
define("LAN_AL_ADLOG_05", "");

// User edits
//-----------
define("LAN_AL_USET_01", "Admin edytował dane użytkownika");
define("LAN_AL_USET_02", "Użytkownik dodany przez admina");
define("LAN_AL_USET_03", "Opcje użytkownika zaktualizowano");
define("LAN_AL_USET_04", "Usunięci użytkownicy");
define("LAN_AL_USET_05", "Zablokowany użytkownik");
define("LAN_AL_USET_06", "Odblokowany użytkownik");
define("LAN_AL_USET_07", "Użytkownik skasowany");
define("LAN_AL_USET_08", "Użytkownik jest adminem");
define("LAN_AL_USET_09", "Cofnięty status użytkownika admina");
define("LAN_AL_USET_10", "Zatwierdzony użytkownik");
define("LAN_AL_USET_11", "Ponowne wysłanie e-maila aktywacyjnego");
define("LAN_AL_USET_12", "Ponowne wysłanie wszystkich e-maili aktywacyjnych");
define("LAN_AL_USET_13", "Skasowane odbite e-maile");
define("LAN_AL_USET_14", "Klasa użytkowników zaktualizowana");
define("LAN_AL_USET_15", "Odmowa rejestracji");				// Too many users at same IP address

// Userclass events
//------------------
define("LAN_AL_UCLASS_00", "Nieznane wydarzenie klasy użytkownika");//Unknown userclass-related event
define("LAN_AL_UCLASS_01", "Utworzona klasa użytkownika");
define("LAN_AL_UCLASS_02", "Klasa użytkownika skasowana");
define("LAN_AL_UCLASS_03", "Edytowana klasa użytkownika");
define("LAN_AL_UCLASS_04", "Zaktualizowana klasa członków");
define("LAN_AL_UCLASS_05", "Edytowane wstępne ustawienia klasy użytkownika");
define("LAN_AL_UCLASS_06", "Opróżniona klasa członków");

// Banlist events
//----------------
define("LAN_AL_BANLIST_00", "Nieznane wydarzenie związane z blokadą");
define("LAN_AL_BANLIST_01", "Ręcznie dodana blokada");
define("LAN_AL_BANLIST_02", "Blokada skasowana");
define("LAN_AL_BANLIST_03", "Zmiana czasu blokady");
define("LAN_AL_BANLIST_04", "Dodany wpis do białej listy");
define("LAN_AL_BANLIST_05", "Usunięty wpis z białej listy");
define("LAN_AL_BANLIST_06", "Wyeksportowana lista blokad");
define("LAN_AL_BANLIST_07", "Importowanie listy blokad");
define("LAN_AL_BANLIST_08", "Zaktualizowanie opcji listy blokad");
define("LAN_AL_BANLIST_09", "Edycja listy blokad");
define("LAN_AL_BANLIST_10", "Edycja białej listy");
define("LAN_AL_BANLIST_11", "Wpis do białej listy");//Whitelist hit for ban entry
define("LAN_AL_BANLIST_12", "Wyczyszczono przedawnione blokady");


// Comment-related events
//-----------------------
define("LAN_AL_COMMENT_01", "Komentarz/Komentarze skasowano");

// Rolling log events
//-------------------
define("LAN_ROLL_LOG_01", "Puste pole nazwa użytkownika i/lub hasło");
define("LAN_ROLL_LOG_02", "Błędnie wpisany kod z obrazka");
define("LAN_ROLL_LOG_03", "Błędna kombinacja nazwa użytkownika/hasło");
define("LAN_ROLL_LOG_04", "Błędnie wpisana nazwa użytkownika");
define("LAN_ROLL_LOG_05", "Próba zalogowania się użytkownika, który nie dokończył procesu rejestracji");
define("LAN_ROLL_LOG_06", "Logowanie zablokowane przez procedury wyzwalania zdarzeń");
define("LAN_ROLL_LOG_07", "Wielekrotne logowanie z tego samego adresu");
define("LAN_ROLL_LOG_08", "Nadmierna długość nazwy użytkownika");
define("LAN_ROLL_LOG_09", "Próba zalogowania się przez zablokowanego użytkownika");
define("LAN_ROLL_LOG_10", "Logowanie nie powiodło się - powód nieznany");
define("LAN_ROLL_LOG_11", "Błędne logowanie się administratora");

// Prefs events
//-------------
define("LAN_AL_PREFS_01", "Zmiana ustawień");
define("LAN_AL_PREFS_02", "Utworzono nowe ustawienia");
define("LAN_AL_PREFS_03", "Błąd zapisu ustawień");


// Front Page events
//------------------
define("LAN_AL_FRONTPG_00", "Nieznane wydarzenie związane ze stroną główną");
define("LAN_AL_FRONTPG_01", "Zmiana kolejności reguł");
define("LAN_AL_FRONTPG_02", "Dodanie reguł");
define("LAN_AL_FRONTPG_03", "Edycja reguły");
define("LAN_AL_FRONTPG_04", "Skasowanie reguły");
define("LAN_AL_FRONTPG_05", "");
define("LAN_AL_FRONTPG_06", "");


// User theme admin
//-----------------
define("LAN_AL_UTHEME_00", "Nieznane wydarzenie związane z szablonem użytkownika");
define("LAN_AL_UTHEME_01", "Zmienione ustawienia szablonu użytkownika");
define("LAN_AL_UTHEME_02", "");


// Update routines
//----------------
define("LAN_AL_UPDATE_00", "Nieznane wydarzenie związane z aktualizacją oprogramowania");
define("LAN_AL_UPDATE_01", "Aktualizacja z 1.0 do 2.0 wykonana");
define("LAN_AL_UPDATE_02", "Aktualizacja z 0.7.x do 0.7.6 wykonana");
define("LAN_AL_UPDATE_03", "Dodano brakujące preferencje");


// Administrator routines
//-----------------------
define("LAN_AL_ADMIN_00", "Nieznane wydarzenie związane z administratorem");
define("LAN_AL_ADMIN_01", "Aktualizacja uprawnień administracyjnych");
define("LAN_AL_ADMIN_02", "Usunięto prawa administratora");
define("LAN_AL_ADMIN_03", "");

// Maintenance mode
//-----------------
define("LAN_AL_MAINT_00", "Nieznana wiadomość konserwacji");
define("LAN_AL_MAINT_01", "Ustawienia trybu konserwacji");
define("LAN_AL_MAINT_02", "Wyczyszczono tryb konserwacji");


// Sitelinks routines
//-------------------
define("LAN_AL_SLINKS_00", "Nieznana wiadomość odnośników strony");
define("LAN_AL_SLINKS_01", "Wygenerowano odnośniki podrzędne");
define("LAN_AL_SLINKS_02", "Odnośnik przeniesiono w górę");
define("LAN_AL_SLINKS_03", "Odnośnik przeniesiono w dół");
define("LAN_AL_SLINKS_04", "Zaktualizowano kolejność odnośników");
define("LAN_AL_SLINKS_05", "Zaktualizowano opcje odnośników");
define("LAN_AL_SLINKS_06", "Usunięto odnośnik");
define("LAN_AL_SLINKS_07", "Odnośnik wysłany");
define("LAN_AL_SLINKS_08", "Odnośnik zaktualizowany");


// Theme manager routines
//-----------------------
define("LAN_AL_THEME_00", "Nieznane wydarzenie związane z szablonem");
define("LAN_AL_THEME_01", "Zaktualizowano szablon witryny");
define("LAN_AL_THEME_02", "Zaktualizowano szablon administracyjny");
define("LAN_AL_THEME_03", "Zaktualizowano preload grafik z szablonu css");
define("LAN_AL_THEME_04", "Zaktualizowano styl css administracji");
define("LAN_AL_THEME_05", "");


// Cache control routines
//-----------------------
define("LAN_AL_CACHE_00", "Nieznana wiadomość kontrolna cache");
define("LAN_AL_CACHE_01", "Zaktualizowano ustawienia cache");
define("LAN_AL_CACHE_02", "Wyczyszczono system cache");
define("LAN_AL_CACHE_03", "Wyczyszczono cache zawartości");
define("LAN_AL_CACHE_04", "");


// Emote admin
//------------
define("LAN_AL_EMOTE_00", "Nieznana wiadomość dotycząca emotikon");
define("LAN_AL_EMOTE_01", "Zmieniono aktywny zestaw emotikon");
define("LAN_AL_EMOTE_02", "Aktywowano emotikony");
define("LAN_AL_EMOTE_03", "Wyłączono emotikony");


// Welcome message
//----------------
define("LAN_AL_WELCOME_00", "Nieznana wiadomość powitalna");
define("LAN_AL_WELCOME_01", "Wiadomość powitalna została utworzona");
define("LAN_AL_WELCOME_02", "Zaktualizowano wiadomość powitalną");
define("LAN_AL_WELCOME_03", "Skasowano wiadomość powitalną");
define("LAN_AL_WELCOME_04", "Zmieniono opcje wiadomości powitalnej");
define("LAN_AL_WELCOME_05", "");


// Admin Password
//---------------
define("LAN_AL_ADMINPW_01", "Zmieniono hasło administratora");


// Banners Admin
//--------------
define("LAN_AL_BANNER_00", "Nieznana wiadomość dotycząca bnera");
define("LAN_AL_BANNER_01", "Zaktualizowano menu banera");
define("LAN_AL_BANNER_02", "Utworzono baner");
define("LAN_AL_BANNER_03", "Zaktualizowano baner");
define("LAN_AL_BANNER_04", "Skasowano baner");
define("LAN_AL_BANNER_05", "Zaktualizowano ustawienia banera");
define("LAN_AL_BANNER_06", "");

// Image management
//-----------------
define("LAN_AL_IMALAN_00", "Nieznana wiadomość dotycząca grafiki");
define("LAN_AL_IMALAN_01", "Skasowano awatar");
define("LAN_AL_IMALAN_02", "Skasowano wszystkie awatary oraz zdjęcia");
define("LAN_AL_IMALAN_03", "Skasowano awatar");
define("LAN_AL_IMALAN_04", "Zaktualizowano ustawienia");
define("LAN_AL_IMALAN_05", "");
define("LAN_AL_IMALAN_06", "");

// Language management
//--------------------
define("LAN_AL_LANG_00", "Nieznana wiadomość dotycząca języka");
define("LAN_AL_LANG_01", "Zmieniono preferencje języka");
define("LAN_AL_LANG_02", "Skasowano tabele językowe");
define("LAN_AL_LANG_03", "Utworzono tabele językowe");
define("LAN_AL_LANG_04", "Utworzono pakiet zip języka");
define("LAN_AL_LANG_05", "");

// Meta Tags
//----------
define("LAN_AL_META_01", "Zaktualizowano meta tagi");

// Downloads
//----------
define("LAN_AL_DOWNL_01", "Zmieniono opcje downloadu");
define("LAN_AL_DOWNL_02", "Utworzono opcje downloadu");
define("LAN_AL_DOWNL_03", "Utworzono opcje downloadu");
define("LAN_AL_DOWNL_04", "Skasowano kategorię downloadu");
define("LAN_AL_DOWNL_05", "Utworzono download");
define("LAN_AL_DOWNL_06", "Zaktualizowano download");
define("LAN_AL_DOWNL_07", "Skasowano download");
define("LAN_AL_DOWNL_08", "Zaktualizowano kolejność sortowania kategorii download");
define("LAN_AL_DOWNL_09", "Dodano limit pobierania");
define("LAN_AL_DOWNL_10", "Zaktualizowano limit pobierania");
define("LAN_AL_DOWNL_11", "Usunięto limit pobierania");
define("LAN_AL_DOWNL_12", "Dodano mirror");
define("LAN_AL_DOWNL_13", "Zaktualizowano mirror");
define("LAN_AL_DOWNL_14", "Skasowano mirror");
define("LAN_AL_DOWNL_15", "");

// Custom Pages/Menus
//-------------------
define("LAN_AL_CPAGE_01", "Dodano własne strony/menu");
define("LAN_AL_CPAGE_02", "Zaktualizowano własne menu/strony");
define("LAN_AL_CPAGE_03", "Skasowano własne menu/strony");
define("LAN_AL_CPAGE_04", "Zaktualizowano ustawienia własnych menu/stron");

// Extended User Fields
//---------------------
define("LAN_AL_EUF_01", "EUF przeniesiono do góry");
define("LAN_AL_EUF_02", "EUF przeniesiono w dół");
define("LAN_AL_EUF_03", "Przeniesiono w górę kategorię EUF");
define("LAN_AL_EUF_04", "Przeniesiono w dół kategorię EUF");
define("LAN_AL_EUF_05", "Dodano dodatkowe pole użytkownika");
define("LAN_AL_EUF_06", "Zaktualizowano dodatkowe pole użytkownika");
define("LAN_AL_EUF_07", "Skasowano dodatkowe pole użytkownika");
define("LAN_AL_EUF_08", "Dodano kategorię EUF");
define("LAN_AL_EUF_09", "Zaktualizowano kategorię EUF");
define("LAN_AL_EUF_10", "Skasowano kategorię EUF");
define("LAN_AL_EUF_11", "Aktywowano dodatkowe pole użytkownika");
define("LAN_AL_EUF_12", "Dezaktywowano dodatkowe pole użytkownika");

// Menus
//------
define("LAN_AL_MENU_01", "Aktywowano menud");
define("LAN_AL_MENU_02", "Ustawiono widoczność menu");
define("LAN_AL_MENU_03", "Zmieniono obszar wyświetlania menu");
define("LAN_AL_MENU_04", "Dezaktywowano menu");
define("LAN_AL_MENU_05", "Menu przesunięto do góry");
define("LAN_AL_MENU_06", "Menu przesunięto w dół");
define("LAN_AL_MENU_07", "Menu przeniesiono do góry");
define("LAN_AL_MENU_08", "Menu przeniesiono w dół");
define("LAN_AL_MENU_09", "");

// Public Uploads
//---------------
define("LAN_AL_UPLOAD_01", "Skasowano nadesłany plik");
define("LAN_AL_UPLOAD_02", "Zmieniono preferencje uploadu");

// Search
//-------
define("LAN_AL_SEARCH_01", "Zaktualizowano ustawienia wyszukiwania");
define("LAN_AL_SEARCH_02", "Zaktualizowano preferencje wyszukiwania");
define("LAN_AL_SEARCH_03", "Auto aktualizacja parametrów wyszukiwania");
define("LAN_AL_SEARCH_04", "Zaktualizowano obszary wyszukiwania");
define("LAN_AL_SEARCH_05", "Zaktualizowano ustawienia wyszukiwania");
define("LAN_AL_SEARCH_06", "");

// Notify
//-------
define("LAN_AL_NOTIFY_01", "Zaktualizowano ustawienia powiadamiania");

// News
//-----
define("LAN_AL_NEWS_01", "Skasowano pozycję nowości");
define("LAN_AL_NEWS_02", "Skasowano kategorię nowości");
define("LAN_AL_NEWS_03", "Usunięto nadesłane nowości");
define("LAN_AL_NEWS_04", "Utworzono kategorię nowości");
define("LAN_AL_NEWS_05", "Zaktualizowano kategorię nowości");
define("LAN_AL_NEWS_06", "Zaktualizowano preferencje nowości");
define("LAN_AL_NEWS_07", "Autoryzowano nadesłene wiadomości");
define("LAN_AL_NEWS_08", "Dodano nowość");
define("LAN_AL_NEWS_09", "Zaktualizowano nowość");
define("LAN_AL_NEWS_10", "Zmieniono kategorię nowości");
define("LAN_AL_NEWS_11", "Skasowano zmienioną kategorię nowości");
define("LAN_AL_NEWS_12", "Zmieniono przepisaną kategorię nowości");
define("LAN_AL_NEWS_13", "Skasowano przepisaną kategorię nowości");



// File Manager
//-------------
define("LAN_AL_FILEMAN_01", "Skasowano plik/pliki");
define("LAN_AL_FILEMAN_02", "Przeniesiono plik/pliki");
define("LAN_AL_FILEMAN_03", "Nadesłany plik/pliki");
define("LAN_AL_FILEMAN_04", "");

// Mail
//-----
define("LAN_AL_MAIL_01", "Wysłano e-mail testowy");
define("LAN_AL_MAIL_02", "Utworzono Mailshot");
define("LAN_AL_MAIL_03", "Zaktualizowano ustawienia e-mail");
define("LAN_AL_MAIL_04", "Skasowano szczegóły Mailshot");
define("LAN_AL_MAIL_05", "Uporządkowano bazę danych poczty");
define("LAN_AL_MAIL_06", "Aktywowano Mailout");
define("LAN_AL_MAIL_07", "");

// Plugin Manager
//---------------
define("LAN_AL_PLUGMAN_01", "Zainstalowano wtyczkę");
define("LAN_AL_PLUGMAN_02", "Zaktualizowano wtyczkę");
define("LAN_AL_PLUGMAN_03", "Odinstalowano wtyczkę");
define("LAN_AL_PLUGMAN_04", "Odświeżono wtyczkę");

// URL Manager
//---------------
define("LAN_AL_EURL_01", "Zamieniono konfigurację adresów url strony");

// Sundry Pseudo-plugins - technically they"re plugins, but not worth the file overhead of treating them separately
//----------------------
define("LAN_AL_MISC_01", "Zaktualizowano ustawienia rozwijanego menu");
define("LAN_AL_MISC_02", "Zaktualizowano ustawienia menu online");
define("LAN_AL_MISC_03", "Zaktualizowano ustawienia menu login");
define("LAN_AL_MISC_04", "Zaktualizowano ustawienia menu komentarzy");
define("LAN_AL_MISC_05", "Zaktualizowano ustawienia menu zegara");
define("LAN_AL_MISC_06", "Zaktualizowano ustawienia menu kalendarza");
define("LAN_AL_MISC_07", "");


define("LAN_AL_PING_01", "Ping do serwisu");

define("LAN_AL_ADMINUI_01", "Wpisano do tabel Admin-UI : [x]");
define("LAN_AL_ADMINUI_02", "Zaktualizowano tabele Admin-UI : [x]");
define("LAN_AL_ADMINUI_03", "Skasowano tabele Admin-UI : [x]");
define("LAN_AL_ADMINUI_04", "Błąd tabeli Admin-UI : [x]");

define("LAN_AL_BACKUP", "Kopia zapasowa bazy danych");


?>