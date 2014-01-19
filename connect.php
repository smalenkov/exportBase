<?php

include "config.php";

$link = mysql_connect($db_host, $db_user, $db_pass)
	or die("MySQl not connection. Error".mysql_error()."\n");

mysql_select_db($db_name);
mysql_set_charset("utf8");

?>