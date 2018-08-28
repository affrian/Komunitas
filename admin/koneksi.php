<?php
$host = "localhost";
$user = "root";
$password = "";
$database_name = "forum_pemudapersis";
$pdo=new PDO("mysql:host=$host;dbname=$database_name",$user,$password,array(
	PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
?>
