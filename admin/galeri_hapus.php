<!--HAPUS DATA -->
<?php
include_once "koneksi.php";
$idhapus=$_GET['idhapus'];

$hapus=$pdo->prepare("DELETE FROM tbl_galeri WHERE id_foto='$idhapus'"); 
$hapus->execute();
?>
<script language="JavaScript">alert('Data Berhasil Di Hapus !');
document.location=('index.php?page=galeri')</script>
