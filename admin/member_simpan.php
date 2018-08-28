<?php
include"koneksi.php";
$nama_depan=mysql_real_escape_string($_POST['nama_depan']);
$nama_belakang=mysql_real_escape_string($_POST['nama_belakang']);
$email=$_POST['email'];
$password=md5($_POST['password']);
$tanggal=$_POST['tanggal'];

$query=$pdo->prepare("select*from tbl_member where email='$email'");
$query->execute();
$cek = $query->rowCount();//ini ibaratnya mysql_numrows mengngitung rows
if($cek>0)
	{
		echo "<script>alert ('Maaf! Email sudah terdaftar'); document.location=('index.php?page=member')</script>";
	}
else
	{
$sql_simpan=$pdo->prepare("insert into  tbl_member
(id_member,nama_depan,nama_belakang,email,password,tanggal_lahir) values
('','$nama_depan','$nama_belakang','$email','$password','$tanggal')");
$sql_simpan->execute();
	}
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Simpan !');
document.location=('index.php?page=member')</script>
