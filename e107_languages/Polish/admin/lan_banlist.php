<?php
/*
+====================================================================+
* Copyright e107 Inc e107.org, Licensed under GNU GPL (http://www.gnu.org/licenses/gpl.txt)
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/lan_banlist.php                    *
   *                                                                 *
	* e107 Polish Team                                                *
	* www.d4e.pl                                                      *
	* $Date: 2016/01/20                                               *
	* $Author: JacekCich                                              *
+--------------------------------------------------------------------+
+====================================================================+
*/

// define("BANLAN_1", "Ban removed.");
define("BANLAN_2", "Obecnie niema żadnych blokad.");
define("BANLAN_3", "Istniejące blokady.");
// define("BANLAN_4", "Remove ban");
define("BANLAN_5", "Wpisz IP, adres e-mail, lub nazwę hosta");
define("BANLAN_7", "Powód");
define("BANLAN_8", "Zablokuj adres");
define("BANLAN_9", "Zablokuj użytkowników strony po adresie e-mail, numerze IP lub nazwie hosta");
define("BANLAN_10", "IP / e-mail / Powód");
define("BANLAN_11", "Auto-blokowanie: Więcej niż 10 błędnych prób logowania");
define("BANLAN_12", "Uwaga: rDNS (Reverse DNS - odwrotny DNS) jest obecnie niedostępny. rDNS musi być dostępny, aby umożliwić blokowanie poprzez nazwę hosta. Blokowanie ze względu na adres IP oraz adres e-mail wciąż funkcjonuje normalnie.");
define("BANLAN_13", "Uwaga: Aby zablokować użytkownika po jego nazwie, przejdź do podstrony Użytkownicy w Panelu admina: ");
define("BANLAN_14", "Lista blokad");
define("BANLAN_15", "Komunikaty/Okresy blokad");
define("BANLAN_16", "Zablokowany");
define("BANLAN_17", "Data blokady");
define("BANLAN_18", "Zakończenie blokady");
define("BANLAN_19", "Notatka");
define("BANLAN_20", "Typ");
//define("BANLAN_21", "Never");
define("BANLAN_22", "Nieznany");
define("BANLAN_23", "dzień/dni");
define("BANLAN_24", "godzin");
define("BANLAN_25", "Dadaj do blokad");
define("BANLAN_26", "Aktualnie ");
define("BANLAN_27", "Nieprawidłowe znaki w adresie IP -teraz:");
define("BANLAN_28", "Typ blokady");
define("BANLAN_29", "Wiadomość do pokazania zablokowanemu użytkownikowi");
define("BANLAN_30", "Okres trwania blokady");
define("BANLAN_31", "(Zostaw pustą wiadomość, aby wyświetlić czystą stronę)");
define("BANLAN_32", "Nieokreślony");
//define("BANLAN_33", "Settings Updated");
define("BANLAN_34", "Przedawniony");
define("BANLAN_35", "Import/Eksport");
define("BANLAN_36", "Eksport Typów");
define("BANLAN_37", "Separator pola");
define("BANLAN_38", "Cytat (zaokrąglenie dla każdej wartości)");
define("BANLAN_39", "Eksport");
define("BANLAN_40", "Eksport listy blokad");
define("BANLAN_41", "Import listy blokad");
define("BANLAN_42", "Wybór importowania");
define("BANLAN_43", "Zastąp wszystkie istniejące importowane blokady ");
define("BANLAN_44", "Użyj daty/czasu wygaśnięcia z importowania");
define("BANLAN_45", "Importowanie");
define("BANLAN_46", "Import Pliku:");
define("BANLAN_47", "Błąd ładowania pliku");
define("BANLAN_48", "Skasowano --NUM-- wpisów z listy wygasłych blokad.");
define("BANLAN_49", "CSV import: niesymetryczne cudzysłowia w linii ");
define("BANLAN_50", "CSV import: Błąd zapisu blokad w linii ");
define("BANLAN_51", "CSV import: Sukces, --NUM-- linii zaimportowano z pliku ");
define("BANLAN_52", "Biała lista");
define("BANLAN_53", "Dodaj do Białej listy");
define("BANLAN_54", "Brak wpisów w białej liście");
define("BANLAN_55", "Data wpisu");//Entry Date
define("BANLAN_56", "IP/e-mail, Użytkownik");
define("BANLAN_57", "Użytkownik");
define("BANLAN_58", "Dodaj użytkowników do białej listy");
define("BANLAN_59", "Edytuj istniejące wpisy białej listy");
define("BANLAN_60", "Edytuj istniejące wpisy blokad");
define("BANLAN_61", "Istniejące wpisy białej listy");
// define("BANLAN_62", "Options");
define("BANLAN_63", "Użyj odwrotnej translacji adresów DNS'a, aby zezwolić na blokowanie hosta");
define("BANLAN_64", "Odwrotny DNS dostępny, podczas dodawania blokady");
define("BANLAN_65", "Właczenie tej opcji umożliwi blokowanie użytkowników po nazwie hosta,Turning this option on will allow you to ban users by hostname, zamiast .  <br />UWAGA: Może to mieć wpływ na czas ładowania strony na niektórych hostach, lub gdy serwer nie odpowiada");
define("BANLAN_66", "Gdy następuje blokada, to ta opcja dodaje domenę do adresów zablokowanych z powodu");
define("BANLAN_67", "Ustaw maksymalny wskaźnik dostępu");//Set maximum access rate
define("BANLAN_68", "Określa maksymalną liczbę stron dostępnych w ciągu 5 min.");
define("BANLAN_69", "dla użytkowników");
define("BANLAN_70", "dla gości");
define("BANLAN_71", "Wywolanie okresu blokady");
define("BANLAN_72", "Opcje blokad");
define("BANLAN_73", "Spowoduje to restart okresu blokady, gdy zablokowany użytkownik uzyska ponowny dostęp do strony.");
define("BANLAN_74", "Konserwacja listy blokad");
define("BANLAN_75", "Usuń z listy przedawnione blokady");
define("BANLAN_76", "Wykonaj");
define("BANLAN_77", "Wiadomości/Okresy Blokad");

define("BANLAN_78", "Licznik trafień przekroczył ([x] żądania w wyznaczonym terminie)");
define("BANLAN_79", "Format eksportu pliku CSV:");
define("BANLAN_80", "Format importu pliku CSV:");
define("BANLAN_81", "Dziennik wykonanych blokad");
define("BANLAN_82", "Brak wpisów w dzienniku blokad");
define("BANLAN_83", "Data/Czas");
define("BANLAN_84", "Adres IP");
define("BANLAN_85", "Dodatkowe informacje");
define("BANLAN_86", "Zdarzenia związane z blokadami");
define("BANLAN_87", "Łącznie --NUM-- wpisów w liście");
define("BANLAN_88", "Pusty dziennik blokad");
define("BANLAN_89", "Plik dziennika usunięto");
define("BANLAN_90", "Bład kasowania pliku dziennika");
define("BANLAN_91", "Format daty/czasu dla dziennika blokad");
define("BANLAN_92", "Zobacz stronę funkcji strftime na php.net");
define("BANLAN_93", "");

// Ban types - block reserved 100-109
define("BANLAN_100", "Nieznany");
define("BANLAN_101", "Ręcznie");
define("BANLAN_102", "Zatykanie");
define("BANLAN_103", "Licznik odwiedzin");
define("BANLAN_104", "Bład logowania");
define("BANLAN_105", "Zaimportowane");
define("BANLAN_106", "Użytkownik");
define("BANLAN_107", "Nieznane");
define("BANLAN_108", "Nieznane");
define("BANLAN_109", "Starsze");

// Detailed explanations for ban types - block reserved 110-119
define("BANLAN_110", "Najczęściej używane blokady, które były nałożone zanim e107 został uaktualniony z wersji 0.7.x");
define("BANLAN_111", "Wpisane przez admina");
define("BANLAN_112", "Przy próbie częstego szybkiego odświeżania strony");
define("BANLAN_113", "Przy próbie częstego szybkiego uzyskania dostępu do strony z tego samego adresu");
define("BANLAN_114", "Wielokrotne błędne logowanie dla tego samego użytkownika");
define("BANLAN_115", "Dodane z zewnętrznej listy");
define("BANLAN_116", "Zablokowany adres IP ze względu na blokadę użytkownika");
define("BANLAN_117", "Dodatkowy powód");
define("BANLAN_118", "Dodatkowy powód");
define("BANLAN_119", "Wykazuje bład importu - wcześniej zaimportowanych blokad");

define("BANLAN_120", "Wpisy Białej listy");
define("BANLAN_121", "Wpisy czarnej listy");
define("BANLAN_122", "Czarna lista");
define("BANLAN_123", "Dodaj do czarnej listy");
define("BANLAN_124", "Wygasa");   // not ban_lan_34
define("BANLAN_125", "Użyj mojego IP");

?>