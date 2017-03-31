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

define('LDAPLAN_1', 'Adres serwera');
define('LDAPLAN_2', 'Adres bazowy DN lub domena<br />LDAP - wpisz adres bazowy DN<br />AD - wpisz nazwę fqdn np. ad.nazwadomeny.co.uk <br /> - Distinguished Name ');
define('LDAPLAN_3', 'Użytkownik LDAP<br />Pełny kontekst użytkownika, który może przeszukiwać katalog.');
define('LDAPLAN_4', 'Hasło LDAP<br />Hasło przeglądarki LDAP.');
define('LDAPLAN_5', 'Wersja LDAP');
define('LDAPLAN_6', 'Ustawienia autentykacji LDAP');
define('LDAPLAN_7', 'Filtr wyszukiwarki w eKatalogu:');
define('LDAPLAN_8', "Będzie używane w celu utrzymania nazwy użytkownika w prawidłowej strukturze drzewa katalogu, <br />np. '(objectclass=inetOrgPerson)'");
define('LDAPLAN_9', 'Aktualny filtr będzie:');
define('LDAPLAN_10', 'Zaktualizowano ustawienia');
define('LDAPLAN_11', 'UWAGA:  Wydaje się, że moduł LDAP jest aktualnie nie dostępny; Ustawienia metody autentykacji LDAP prawdopodobnie nie będą działać!');
define('LDAPLAN_12', 'Typ serwera');
define('LDAPLAN_13', 'Zapisz ustawienia');
define('LDAPLAN_14', 'OU dla AD (np. ou=itdept)');


define('SHOW_COPY_HELP', TRUE);
define('SHOW_CONVERSION_HELP', TRUE);
define('LAN_AUTHENTICATE_HELP','Sposób ten może być wykorzystywany do uwierzytelniania w wielu serwerach LDAP, włączając Novell eKatalog oraz Microsoft Active Directory. Wymaga załadowanego rozszerzeniat PHP LDAP . Zapoznaj się z wiki aby uzyskać więcej informacji.');


?>