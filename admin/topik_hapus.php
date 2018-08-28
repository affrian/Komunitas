<?php
include_once "koneksi.php";
$idhapus=$_GET['idhapus'];

$hapus=$pdo->prepare("DELETE FROM tbl_topik  WHERE id_topik='$idhapus'"); 
$hapus->execute();
?>
<script language="JavaScript">alert('Data Berhasil Di Hapus !');
document.location=('index.php?page=topik')</script>
