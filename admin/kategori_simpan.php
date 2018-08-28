<?php
include"koneksi.php";
$nama_kategori=mysql_real_escape_string($_POST['nama_kategori']);
$id_admin=$_POST['id_admin'];
$tanggal_posting=date("Y-m-d");
$sql_simpan=$pdo->prepare("insert into  tbl_kategori(id_kategori,id_admin,nama_kategori,tanggal_posting)
values ('','$id_admin','$nama_kategori','$tanggal_posting')");
$sql_simpan->execute();
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Simpan !');
document.location=('index.php')</script>
