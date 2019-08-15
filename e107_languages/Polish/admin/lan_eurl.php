<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/lan_eurl.php                       *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/
define("LAN_EURL_NAME", "Zarządzanie");
define("LAN_EURL_NAME_CONFIG", "Profile");
define("LAN_EURL_NAME_ALIASES", "Aliasy");
define("LAN_EURL_NAME_SETTINGS", "Ustawienia główne");
define("LAN_EURL_NAME_HELP", "Pomoc");
define("LAN_EURL_EMPTY", "Lista jest pusta");
define("LAN_EURL_LEGEND_CONFIG", "Wybierz profil url dla obszaru strony");
define("LAN_EURL_LEGEND_ALIASES", "Ustawienia głównych aliasów url na profil url");
define("LAN_EURL_DEFAULT", "Domyślnie");
define("LAN_EURL_PROFILE", "Profil");
define("LAN_EURL_INFOALT", "Informacja");
define("LAN_EURL_PROFILE_INFO", "Informacja o profilu niedostępna");
define("LAN_EURL_LOCATION", "Lokalizacja profilu");
define("LAN_EURL_LOCATION_NONE", "Plik konfiguracyjny nie jest dostępny");
define("LAN_EURL_FORM_HELP_DEFAULT", "Alias, gdy w języku domyślnym.");
define("LAN_EURL_FORM_HELP_ALIAS_0", "Domyślną wartością jest");
define("LAN_EURL_FORM_HELP_ALIAS_1", "Alias gdy w");
define("LAN_EURL_FORM_HELP_EXAMPLE", "url bazowy");
define("LAN_EURL_ERR_ALIAS_MODULE", "Alias &quot;%1\$s&quot; nie może być zapisany - w systemie jest profil url o takiej samej nazwie. Proszę wybrać inną nazwę aliasu  &quot;%2\$s&quot;");
define("LAN_EURL_SURL_UPD", "&nbsp; Adresy SEF zostały zaktualizowane.");
define("LAN_EURL_SURL_NUPD", "&nbsp; Adresy SEF nie zostały zaktualizowane.");
define("LAN_EURL_SETTINGS_PATHINFO", "Usuń nazwę z adresu url");
define("LAN_EURL_SETTINGS_MAINMODULE", "Kojarzenie głównego obszaru nazw");
define("LAN_EURL_SETTINGS_MAINMODULE_HELP", "Wybierz obszar strony, który będzie połączony z głównym adresem url. Przykład: Gdy news jest ustawiony jako obszar główny http://yoursite.com/News-Item-Title to będzie powiązany z aktualnościami (podgląd strony zostanie odłączony)");
define("LAN_EURL_SETTINGS_REDIRECT", "Nie znaleziono strony przekierowanie do systemu");
define("LAN_EURL_SETTINGS_REDIRECT_HELP", "Jeżeli ustawiono na Wyłączone, to informacja o nieznalezieniu strony, będzie wyświetlana bezpośrednio (bez przekierowania przeglądarki)");
define("LAN_EURL_SETTINGS_SEFTRANSLATE", "Automatyczne tworzenie ciągu SEF");
define("LAN_EURL_SETTINGS_SEFTRANSLATE_HELP", "Wybierz w jaki sposób ma być wyświetlany ciąg SEF gdy jest automatycznie zbudowany z tytułu (np. w nowości, własne strony, itd.)");
define("LAN_EURL_SETTINGS_SEFTRTYPE_NONE", "Wystarczy wybrać");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHL", "zamień-na-małe-litery");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASHC", "Zamień-Na-Z-Wielkiej-Litery");
define("LAN_EURL_SETTINGS_SEFTRTYPE_DASH", "Zamień-with-no-case-CHANGE");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREL", "małe_litery_oddzielaj_podkreślnikiem");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCOREC", "Dolny_Podkreślnik_Z_Dużych_Liter");
define("LAN_EURL_SETTINGS_SEFTRTYPE_UNDERSCORE", "Dolny_podkreślnik_with_no_case_CHANGE");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSL", "dodaj+znak_plus+małe+litery");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUSC", "Dodaj+Znak+Plus+Z+Dużej+Litery");
define("LAN_EURL_SETTINGS_SEFTRTYPE_PLUS", "Dodaj+znak+plus++separator+with+no+case+CHANGE");
define("LAN_EURL_MODREWR_DESCR", "Usunięcie nazwy skryptu (index.php/) z adresu url. Potrzebujesz zainstalowanego i działającego mod_rewrite na swoim serwerze (Apache Web Server). Po włączeniu tych ustawień, zmień nazwę pliku htaccess.txt na .htaccess w głównym folderze oraz zmodyfikuj <em>&quot;RewriteBase&quot;</em> prawa dostępu, jeśli są wymagane.");
define("LAN_EURL_MENU", "Adresy url");
define("LAN_EURL_MENU_CONFIG", "Profile url");
define("LAN_EURL_MENU_ALIASES", "Aliasy");
define("LAN_EURL_MENU_SETTINGS", "Ustawienia");
define("LAN_EURL_MENU_HELP", "Pomoc");
define("LAN_EURL_MENU_PROFILES", "Profile");
define("LAN_EURL_UC", "W budowie");
define("LAN_EURL_CORE_MAIN", "Główna nazwa strony - alias nie będzie użyty.");
define("LAN_EURL_FRIENDLY", "Przyjazny");
define("LAN_EURL_LEGACY", "Dziedziczenie bezpośrednich adresów url.");
define("LAN_EURL_REWRITE_LABEL", "Przyjazne adresy url");
define("LAN_EURL_REWRITE_DESCR", "Wyszukiwarka oraz przyjazne adresy url.");
define("LAN_EURL_CORE_NEWS", "Nowości");
define("LAN_EURL_NEWS_REWRITEF_LABEL", "Pełne Przyjazne adresy url (większa wydajność oraz bardziej przyjazny)");
define("LAN_EURL_NEWS_REWRITEF_DESCR", "?");
define("LAN_EURL_NEWS_REWRITE_LABEL", "Przyjazne adresy url bez ID (większa wydajność oraz bardziej przyjazny)");
define("LAN_EURL_NEWS_REWRITE_DESCR", "Demonstruje własne linki oraz ich wyświetlanie.");
define("LAN_EURL_NEWS_REWRITEX_LABEL", "Przyjazne adresy url wraz z ich ID (rozsądne wydajności)");
define("LAN_EURL_NEWS_REWRITEX_DESCR", "Demonstruje automatyczne przeanalizowane linki zamontowane na podstawie predefiniowanych reguł tras.");
define("LAN_EURL_CORE_USER", "Użytkownicy");
define("LAN_EURL_USER_REWRITE_LABEL", "Przyjazne adresy url");
define("LAN_EURL_USER_REWRITE_DESCR", "Wyszukiwarka oraz przyjazne adresy url.");
define("LAN_EURL_CORE_PAGE", "Własne strony");
define("LAN_EURL_PAGE_SEF_LABEL", "Przyjazne adresy url wraz z ID (wydajność)");
define("LAN_EURL_PAGE_SEF_DESCR", "Wyszukiwarka oraz przyjazne adresy url.");
define("LAN_EURL_PAGE_SEFNOID_LABEL", "Przyjazne adresy url bez ID (większa wydajność oraz bardziej przyjazny)");
define("LAN_EURL_PAGE_SEFNOID_DESCR", "Wyszukiwarka oraz przyjazne adresy url.");
define("LAN_EURL_CORE_SEARCH", "Szukaj");
define("LAN_EURL_SEARCH_DEFAULT_LABEL", "Domyślne adresy url wyszukiwania");
define("LAN_EURL_SEARCH_DEFAULT_DESCR", "Dziedziczenie bezpośrednich adresów url.");
define("LAN_EURL_SEARCH_REWRITE_LABEL", "Przyjazne adresy url");
define("LAN_EURL_SEARCH_REWRITE_DESCR", "?");
define("LAN_EURL_CORE_SYSTEM", " System");
define("LAN_EURL_SYSTEM_DEFAULT_LABEL", "Domyślne adresy url systemu");
define("LAN_EURL_SYSTEM_DEFAULT_DESCR", "Adresy url dla stron Nie Znaleziono, Odmowa Dostępu itp.");
define("LAN_EURL_SYSTEM_REWRITE_LABEL", "Domyślne adresy url systemu");
define("LAN_EURL_SYSTEM_REWRITE_DESCR", "Adresy url dla stron Nie Znaleziono, Odmowa Dostępu itp.");
define("LAN_EURL_CORE_INDEX", "Strona Startowa");
define("LAN_EURL_CORE_INDEX_INFO", "Strona Startowa nie może mieć aliasu.");
define("LAN_EURL_REBUILD", "Odbudowa");
define("LAN_EURL_REGULAR_EXPRESSION", "Wyrażenie regularne");
define("LAN_EURL_KEY", "Klucz");
define("LAN_EURL_TABLE", "Tabela");
