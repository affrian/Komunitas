<?php
session_start();
include "config.php";
$id_member = $_SESSION['id_member'];
$pesan = mysql_query("SELECT nomor FROM tbl_pesan
    WHERE kepada='$id_member' and sudahbaca='N'");
$j = mysql_num_rows($pesan);
if($j>0){
    echo $j;
}
?>
