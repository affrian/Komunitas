<?php
include"koneksi.php";
$nama=mysql_real_escape_string($_POST['nama']);
$username=mysql_real_escape_string($_POST['username']);
$password=md5($_POST['password']);
$tanggal=$_POST['tanggal'];
$jabatan=$_POST['jabatan'];
$level="Operator";

$sql_simpan=$pdo->prepare("insert into  tbl_admin
(id_admin,nama,username,password,tanggal_lahir,jabatan,level) values
('','$nama','$username','$password','$tanggal','$jabatan','$level')");
$sql_simpan->execute();

?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Simpan !');
document.location=('index.php?page=operator')</script>
