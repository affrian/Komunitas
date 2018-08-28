<?php

	include "koneksi.php";
	
	$nama_depan=$_POST['nama_depan'];
	$nama_belakang=$_POST['nama_belakang'];
	$email=$_POST['email'];
	$alamat=mysql_real_escape_string($_POST['alamat']);
	$tanggal=$_POST['tanggal'];
	$nomor_telp=$_POST['nomor_telp'];
	$tujuan=mysql_real_escape_string($_POST['tujuan']);
	
	$query=mysql_query("insert into tbl_daftar values 	   ('','$nama_depan','$nama_belakang','$email','$alamat','$tanggal','$nomor_telp','$tujuan')");
	
	if($query)
	{
		echo "<script>window.alert('Data telah tersimpan');
				  	  window.location='daftar_cetak.php'
			  </script>";
	}
	else
	{
		echo "<script>window.alert('Maaf, Proses Gagal !!!');
					  window.location='daftar.php'
			  </script>";
	}	
?>