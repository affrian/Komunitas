<?php
include"koneksi.php";
$idubah=$_POST['idubah'];
$nama_kategori=mysql_real_escape_string($_POST['nama_kategori']);
$tanggal_update=date("Y-m-d");
$sql_simpan=$pdo->prepare("UPDATE tbl_kategori SET
  			    nama_kategori='$nama_kategori',
				tanggal_update='$tanggal_update'
				WHERE id_kategori='$idubah'");	

$sql_simpan->execute();
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Ubah !');
document.location=('index.php')</script>
