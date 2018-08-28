<?php
include"koneksi.php";
$idubah=$_POST['idubah'];
$nama_kegiatan=mysql_real_escape_string($_POST['nama_kegiatan']);
$tanggal=$_POST['tanggal'];
$jam=$_POST['jam'];
$tempat=mysql_real_escape_string($_POST['tempat']);
$tanggal_update=date("Y-m-d");
$sql_simpan=$pdo->prepare("UPDATE tbl_informasi SET
  			    nama_kegiatan='$nama_kegiatan',
				tanggal='$tanggal',
				jam='$jam',
				tempat='$tempat',
				tanggal_update='$tanggal_update'
				WHERE id_informasi='$idubah'");	

$sql_simpan->execute();
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Ubah !');
document.location=('index.php?page=informasi')</script>
