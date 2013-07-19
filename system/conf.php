<?php

/** USER ID **/
$host = "mysql.exano.net";
$user = "reckless_a1d4s8";
$pass = "a1201ce23d5";
$db = "reckless_dbreck4545117454";


/** CONNECT PARAMS **/
$sql_connect = mysql_connect($host, $user, $pass);
$sql_dbselect = mysql_select_db($db, $sql_connect); 
@mysql_set_charset ("utf-8", $sql_dbselect);


/** ENCODING **/
mysql_query('SET NAMES UTF8');
?>

