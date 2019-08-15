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

define('LDAPLAN_1', 'Adres serwera');
define('LDAPLAN_2', 'Bazowy DN lub domena<br />Jeśli LDAP - wprowadź bazowy DN<br />Jeśli AD - wprowadź domenę');
define('LDAPLAN_3', 'Przeglądanie LDAP - użytkownik<br />Pełna nazwa użytkownika, który będzie w stanie przeszukiwać katalog.');
define('LDAPLAN_4', 'Przeglądanie LDAP - hasło<br />Hasło do przeglądania użytkowników LDAP.');
define('LDAPLAN_5', 'Wersja LDAP');
define('LDAPLAN_6', 'Konfiguracja autoryzacji LDAP');
define('LDAPLAN_7', 'eDirectory - filtr wyszukiwania:');
define('LDAPLAN_8', 'Zostanie użyty do zapewnienia, że nazwa użytkownika jest w poprawnym drzewie, <br />np: \'(objectclass=inetOrgPerson)\'');
define('LDAPLAN_9', 'Obecnym filtrem wyszukiwania jest:');
define('LDAPLAN_10', 'OSTRZEŻENIE:  Wystąpił problem! Moduł LDAP jest obecnie niedostępny, w związku z czym Twoje ustawienia autentykacji LDAP nie będą działać!'); // It appears as if the ldap module is not currently available, setting your auth method to LDAP will probably not work!
define('LDAPLAN_11', 'Typ serwera');