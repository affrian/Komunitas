<?php
include"koneksi.php";
$id_admin=$_POST['id_admin'];
$petugas=$_POST['petugas'];
$nama_kegiatan=mysql_real_escape_string($_POST['nama_kegiatan']);
$tanggal=$_POST['tanggal'];
$jam=$_POST['jam'];
$tempat=mysql_real_escape_string($_POST['tempat']);
$tanggal_posting=date("Y-m-d");

$sql_simpan=$pdo->prepare("insert into  tbl_informasi(id_informasi,id_admin,petugas,nama_kegiatan,tanggal,jam,tempat,tanggal_posting)
                values ('','$id_admin','$petugas','$nama_kegiatan','$tanggal','$jam','$tempat','$tanggal_posting')");
$sql_simpan->execute();
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Simpan !');
document.location=('index.php?page=informasi')</script>
