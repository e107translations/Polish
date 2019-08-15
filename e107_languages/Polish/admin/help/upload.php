<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/upload.php                    *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/

if (!defined('e107_INIT')) { exit; }
if (e_QUERY) list($action,$junk) = explode('.',e_QUERY); else $action = 'list';

switch ($action)
{
  case 'filetypes' :
    $text = "Typy plików i maksymalny rozmiar pliku, które mogą być przesyłane są ustawiane przez użytkownika klasy. Ta opcja generuje plik o nazwie ".e_UPLOAD_TEMP_DIR.e_SAVE_FILETYPES.",
		który musi być skopiowany lub przeniesiony do katalogu ".e_ADMIN_ABS." i zmieniony na ".e_READ_FILETYPES." zanim odniesie skutek.<br />
		Jedna definicja w danej klasie jest dozwolona.<br />
		Zauważ, że te definicje zostaną dodane dla całego Twojego serwisu, nawet gdy przesyłanie publiczne jest wyłączone.";
    break;
  case 'options' :
    $text = "Tutaj, możesz wyłączyć publiczne nadsyłanie.<br />
		Rozmiar przechowywanych plików jest do przyjęcia (inaczej, maksymalny rozmiar pliku to 500kb).<br />
		Maksymalny rozmiar pliku zastępuje wszystkie definicje zawarte w pliku filetypes.xml.<br />
		Publiczne nadsyłanie może być ograniczone dla określonej klasy użytkowników ale, te ustawienia mają zastosowanie również dla innych obszarów strony dla których publiczne nadsyłanie jest dozwolone np. news, forum.";
	break;
  case 'view' :
  default :
	$text = "Ta strona zawiera listę wszystkich nadesłanych plików. Możesz wybrać aby je skasować, przenieść do działu download lub dodać je do aktualności.";
}
$ns -> tablerender("Publiczny upload", $text);