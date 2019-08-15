<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/menus.php                     *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/

if(!defined('e107_INIT')){ die("Nieautoryzowany dostęp");}
if (!getperms("2")) {
	header("location:".e_BASE."index.php");
	 exit;
}

$sql = e107::getDb();
$tp = e107::getParser();

if(isset($_POST['reset']))
{
		for($mc=1;$mc<=5;$mc++)
		{
			$sql -> db_Select("menus","*", "menu_location='".$mc."' ORDER BY menu_order");
			$count = 1;
			$sql2 = new db;
			while(list($menu_id, $menu_name, $menu_location, $menu_order) = $sql-> db_Fetch())
			{
				$sql2 -> db_Update("menus", "menu_order='$count' WHERE menu_id='$menu_id' ");
				$count++;
			}
			$text = "<b>Menu zostały zresetowane w bazie danych</b><br /><br />";
		}
}
else
{
	unset($text);
}

$frm = e107::getForm();

$text = "Na tej stronie możesz zarządzać gdzie i w jakiej kolejności będą wyświetlane Twoje menu.
Używaj rozwijalnej listy do przenoszenia menu w górę i w dół do momentu aż będziesz zadowolony z ich rozmieszczenia.

Jeśli znalezione menu nie aktualizują się poprawnie, kliknij w przycisk <i>Odśwież</i>.
[html]
<form method='post' id='menurefresh' action='".$_SERVER['PHP_SELF']."'>
<div>
".$frm->admin_button('reset','Odśwież','Zrezygnuj')."</div>
</form>
<div class='indent'><span class='required'><i class='icon-search icon-white'></i></span> Wskazuje menu, którego widoczność została zmodyfikowana.</div>
[/html]
";

$text = $tp->toHtml($text,true);
$ns -> tablerender("Układ menu", $text);