<?php
/*
+====================================================================+
+--------------------------------------------------------------------+
   * Spolszczenie systemu CMS e107                                   *
   * Polish language file - admin/help/cron.php                      *
	* $Date: 2019/08/14                                              *
	* $Author: JacekCich & akogo 									 *
+--------------------------------------------------------------------+
+====================================================================+
*/


$mes = e107::getMessage();
$mes->setTitle(LAN_STATUS, 'info');
echo $mes->render('default','info',false);
