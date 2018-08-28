<?php
include"koneksi.php";
$id_admin=$_POST['id_admin'];
$nama=$_POST['nama'];
$judul=mysql_real_escape_string($_POST['judul']);
$kategori=mysql_real_escape_string($_POST['kategori']);
$isi=mysql_real_escape_string($_POST['isi']);
$tanggal=date("Y-m-d");
$cover=$_FILES['cover']['name'];
$cover=$_FILES['cover'];
if(empty($_FILES['cover']['name']))
			$cover=$_POST['cover'];
	else
	{
		$cover=$_FILES['cover']['name'];
		//definisikan variabel file dan alamat file
		$uploaddir='../galeri/';
		$alamatfile=$uploaddir.$cover;

		//periksa jika proses upload berjalan sukses
		$upload=move_uploaded_file($_FILES['cover']['tmp_name'],$alamatfile);
	}


$sql_simpan=$pdo->prepare("insert into  tbl_artikel values ('','$id_admin','$nama','$kategori','$judul','$cover','$isi','$tanggal')");
$sql_simpan->execute();
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Simpan !');
document.location=('index.php?page=artikel')</script>
