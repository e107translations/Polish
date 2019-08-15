<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/frontpage.php                 *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Strona główna";
/* FIXME - English native speakers: what should stay and what should go?
	<p>
		The list of rules are scanned in turn, until the class of the current user matches.
		This then determines the user's front (home) page, and also the page he sees immediately after login.
	</p>
 */
$text = "
<p>
	W tym miejscu możesz wybrać stronę, która będzie wyświetlana jako strona główna Twojego serwisu, domyślnie są to aktualności. Można również określić, czy użytkownicy są przekierowani do konkretnej strony po zalogowaniu.
</p>
<p>
	Zasady są przeszukiwane w kolejności aby znaleźć pierwszą, gdzie bieżący użytkownik należy do klasy określonej w regule.
	To reguła określa stronę tytułową i żadnej konkretnej strony po zalogowaniu. Jeśli żadna reguła nie pasuje, news.php jest ustawiona jako strona główna.
</p>
<p>
	Użytkownik zostanie wysłany do określonej &quot;strony po zalogowaniu&quot; (jeśli określono) zaraz po zalogowaniu.
</p>
";
$ns->tablerender($caption, $text, 'admin_help');
?>