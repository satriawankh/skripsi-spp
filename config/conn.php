<?php
require "mysql_mysqli.inc.php";
error_reporting(E_ALL ^ (E_NOTICE) - (E_DEPRECATED));
$con = mysql_connect("localhost", "root", "");
mysql_select_db("spp");
?>
