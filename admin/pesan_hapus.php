<!--VERLY DELETED DATA -->
<?php
include_once "koneksi.php";
$id_pesan=$_GET['id_pesan'];

$hapus=$pdo->prepare("DELETE FROM tbl_kontak WHERE id_pesan='$id_pesan'"); 
$hapus->execute();
?>
<script language="JavaScript">alert('Data Berhasil Di Hapus !');
document.location=('index.php?page=pesan')</script>
