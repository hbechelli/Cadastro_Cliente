<?php
$host = "localhost";
$user = "root";
$pass = "hbechelli";
$banco = "cadastro";
$conn = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco, $conn) or die (mysql_error());
?>