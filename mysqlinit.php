<?php 
$localhost = '127.0.0.1';
$username = 'root';
$passwd = 'alpqow1';
$database = 'iguana';

mysql_connect($localhost,$username,$passwd) or die("can't connect");
@mysql_select_db($database) or die( "Unable to select database: ".$database);

?>

