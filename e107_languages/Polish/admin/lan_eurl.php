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

define("LAN_EURL_NAME", "Zarządzanie ");
define("LAN_EURL_NAME_CONFIG", "Profile");
define("LAN_EURL_NAME_ALIASES", "Aliasy");
define("LAN_EURL_NAME_SETTINGS", "Ustawienia główne");
define("LAN_EURL_NAME_HELP", "Pomoc");

define("LAN_EURL_EMPTY", "Lista jest pusta");
define("LAN_EURL_LEGEND_CONFIG", "Wybierz profil url dla obszaru strony");//Choose URL profile per site area
define("LAN_EURL_LEGEND_ALIASES", "Ustawienia głównych aliasów url na profil url");

define("LAN_EURL_DEFAULT", "Domyślnie");
define("LAN_EURL_PROFILE", "Profil");

define("LAN_EURL_INFOALT", "Informacja");
define("LAN_EURL_PROFILE_INFO", "Informacja o profilu niedostępna");
define("LAN_EURL_LOCATION", "Lokalizacja profilu");
define("LAN_EURL_LOCATION_NONE", "Plik konfiguracyjny nie jest dostępny");
define("LAN_EURL_FORM_HELP_DEFAULT", "Alias, gdy w języku domyślnym.");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Domyślną wartością jest ");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Alias gdy w ");
define("LAN_EURL_FORM_HELP_EXAMPLE", "url bazowy");

// messages
define("LAN_EURL_ERR_ALIAS_MODULE", "Alias &quot;%1\$s&quot; nie może być zapisany - w systemie jest profil url o takiej samej nazwie. Proszę wybrać inną nazwę aliasu  &quot;%2\$s&quot;"); // FIXME HTML IN LAN
define("LAN_EURL_SURL_UPD",    "&nbsp; Adresy SEF zostały zaktualizowane.");
define("LAN_EURL_SURL_NUPD",    "&nbsp; Adresy SEF nie zostały zaktualizowane.");

// settings
define("LAN_EURL_SETTINGS_PATHINFO", "Usuń nazwę z adresu url");
define("LAN_EURL_SETTINGS_MAINMODULE", "Kojarzenie głównego obszaru nazw");//Associate Root namespace
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Wybierz obszar strony, który będzie połaczony z głównym adresem url. Przykład: Gdy News jest ustawiony na jako główny obszar http://yoursite.com/News-Item-Title będzie powiązane z aktualnościami (podgląd strony zostanie odłaczony)");
define("LAN_EURL_SETTINGS_REDIRECT", "Nie znaleziono strony przekierowanie do systemu");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "Jeżeli ustawiono na Wyłaczone, to Strony nie znaleziono, będzie wyświetlane bezpośrednio (bez przekierowania przeglądarki)");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "Automatyczne tworzenie ciągu SEF");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Wybierz w jaki sposób ma być wyświetlany ciąg SEF gdy jest automatycznie zbudowany z tytułu (np. w nowości, własne strony, itd.)");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Wystarczy wybrać");//Just secure it
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "zamień-na-małe-litery");                 //dasherize-to-lower-case
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "Zamień-Na-Z-Wielkiej-Litery");                //Dasherize-To-Camel-Case
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "Zamień-with-no-case-CHANGE");           //Dasherize-with-no-case-CHANGE
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "małe_litery_oddzielaj_podkreślnikiem");         //underscore_to_lower_case
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Dolny_Podkreślnik_Z_Dużych_Liter");         //Underscore_To_Camel_Case
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Dolny_podkreślnik_with_no_case_CHANGE");    //Underscore_with_no_case_CHANGE
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "dodaj+znak_plus+małe+litery");           //plus+separator+to+lower+case
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "Dodaj+Znak+Plus+Z+Dużej+Litery");           //Plus+Separator+To+Camel+Case
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "Dodaj+znak+plus++separator+with+no+case+CHANGE");      //Plus+separator+with+no+case+CHANGE

define("LAN_EURL_MODREWR_DESCR", "Usunięcie nazwy skryptu (index.php/) z adresu url. Potrzebujesz zainstalowanego i działającego mod_rewrite na swoim serwerze (Apache Web Server). Po włączeniu tych ustawień, zmień nazwę pliku htaccess.txt na .htaccess w głównym folderze oraz zmodyfikuj <em>&quot;RewriteBase&quot;</em> prawa dostępu, jeśli są wymagane.");//Directive if required

// navigation
define("LAN_EURL_MENU", "Adresy url");
define("LAN_EURL_MENU_CONFIG", "Profile url");
define("LAN_EURL_MENU_ALIASES", "Aliasy");
define("LAN_EURL_MENU_SETTINGS", "Ustawienia");
define("LAN_EURL_MENU_HELP", "Pomoc");
//define("LAN_EURL_MENU_REDIRECTS", "Przekierowania");
define("LAN_EURL_MENU_PROFILES", "Profile");

define("LAN_EURL_UC", "W budowie");


define("LAN_EURL_CORE_MAIN", "Główna nazwa strony - alias nie będzie użyty.");//Site Root Namespace - alias not in use



define("LAN_EURL_FRIENDLY",   "Przyjazny");
define("LAN_EURL_LEGACY", "Dziedziczenie bezpośrednich adresów url.");//Legacy direct URLs

define("LAN_EURL_REWRITE_LABEL", "Przyjazne adresy url");
define("LAN_EURL_REWRITE_DESCR", "Wyszukiwarka oraz przyjazne adresy url.");//Search engine and user friendly URLs


// News
define("LAN_EURL_CORE_NEWS", "Nowości");
//define("LAN_EURL_NEWS_DEFAULT_LABEL", "Default");
//define("LAN_EURL_NEWS_DEFAULT_DESCR", "Legacy direct URLs.");

define("LAN_EURL_NEWS_REWRITEF_LABEL", "Pełne Przyjazne adresy url (większa wydajność oraz bardziej przyjazny)");//(no performance, more friendly)
define("LAN_EURL_NEWS_REWRITEF_DESCR", "");

define("LAN_EURL_NEWS_REWRITE_LABEL", "Przyjazne adresy url bez ID (większa wydajność oraz bardziej przyjazny)");//(no performance, more friendly)
define("LAN_EURL_NEWS_REWRITE_DESCR", "Demonstruje własne linki oraz ich wyświetlanie.");//Demonstrates manual link parsing and assembling

define("LAN_EURL_NEWS_REWRITEX_LABEL", "Przyjazne adresy url wraz z ich ID (rozsądne wydajności)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Demonstruje automatyczne przeanalizowane linki zamontowane na podstawie predefiniowanych regół tras.");


// Downloads
//define("LAN_EURL_CORE_DOWNLOADS", "Downloads");

// Users
define("LAN_EURL_CORE_USER", "Użytkownicy");
//define("LAN_EURL_USER_DEFAULT_LABEL", "Default");
//define("LAN_EURL_USER_DEFAULT_DESCR", "Legacy direct URLs.");

define("LAN_EURL_USER_REWRITE_LABEL", "Przyjazne adresy url");
define("LAN_EURL_USER_REWRITE_DESCR", "Wyszukiwarka oraz przyjazne adresy url.");

// Users
define("LAN_EURL_CORE_PAGE", "Własne strony");
//define("LAN_EURL_PAGE_DEFAULT_LABEL", "Default");
//define("LAN_EURL_PAGE_DEFAULT_DESCR", "Legacy direct URLs. ");

define("LAN_EURL_PAGE_SEF_LABEL", "Przyjazne adresy url wraz z ID (wydajność)");
define("LAN_EURL_PAGE_SEF_DESCR", "Wyszukiwarka oraz przyjazne adresy url.");

define("LAN_EURL_PAGE_SEFNOID_LABEL", "Przyjazne adresy url bez ID (większa wydajność oraz bardziej przyjazny)");//(no performance, more friendly)
define("LAN_EURL_PAGE_SEFNOID_DESCR", "Wyszukiwarka oraz przyjazne adresy url.");

// Search
define("LAN_EURL_CORE_SEARCH", "Szukaj");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "Domyślne adresy url wyszukiwania");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "Dziedziczenie bezpośrednich adresów url.");//Legacy direct URLs
define("LAN_EURL_SEARCH_REWRITE_LABEL", "Przyjazne adresy url");
define("LAN_EURL_SEARCH_REWRITE_DESCR", "");

// System
define("LAN_EURL_CORE_SYSTEM", " System");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "Domyślne adresy url systemu");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "Adresy url dla stron Nie Znaleziono, Odmowa Dostępu itp.");

define("LAN_EURL_SYSTEM_REWRITE_LABEL", "Domyślne adresy url systemu");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "Adresy url dla stron Nie Znaleziono, Odmowa Dostępu itp.");

// System
define("LAN_EURL_CORE_INDEX", "Strona Startowa");
define("LAN_EURL_CORE_INDEX_INFO", "Strona Startowa nie może mieć aliasu.");
define("LAN_EURL_REBUILD",    "Odbudowa");
define("LAN_EURL_REGULAR_EXPRESSION", "Wyrażenie regularne");
define("LAN_EURL_KEY", "Klucz");