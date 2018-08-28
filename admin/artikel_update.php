<?php
include"koneksi.php";
$idubah=$_POST['idubah'];
$judul=mysql_real_escape_string($_POST['judul']);
$kategori=$_POST['kategori'];
$isi=mysql_real_escape_string($_POST['isi']);
$cover=$_POST['cover'];
$tanggal=date("Y-m-d");
$tanggal_update=date("Y-m-d");
$sql_simpan=$pdo->prepare("UPDATE tbl_artikel SET
  			    kategori_artikel='$kategori',
				judul_artikel='$judul',
				cover='$cover',
				isi_artikel='$isi',
				tanggal='$tanggal'
				WHERE id_artikel='$idubah'");	

$sql_simpan->execute();
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Ubah !');
document.location=('index.php?page=artikel')</script>
