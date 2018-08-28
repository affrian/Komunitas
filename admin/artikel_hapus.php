<!--HAPUS DATA -->
<?php
include_once "koneksi.php";
$idhapus=$_GET['idhapus'];

$hapus=$pdo->prepare("DELETE FROM tbl_artikel WHERE id_artikel='$idhapus'"); 
$hapus->execute();
?>
<script language="JavaScript">alert('Data Berhasil Di Hapus !');
document.location=('index.php?page=artikel')</script>
