<?php
	include "koneksi.php";
	
	$nama=mysql_real_escape_string($_POST['nama']);
	$email=$_POST['email'];
	$nomor_telp=$_POST['nomor_telp'];
	$pesan=mysql_real_escape_string($_POST['pesan']);
	date_default_timezone_set("Asia/Jakarta");
	$tanggal=date("H:i d M Y");
	
	$query=mysql_query("insert into tbl_kontak values ('','$nama','$email','$nomor_telp','$pesan','$tanggal')");
	
	if($query)
	{
		echo "<script>window.alert('Pesan terkirim');
				  	  window.location='index.php'
			  </script>";
	}
	else
	{
		echo "<script>window.alert('Maaf, Proses Gagal !!!');
					  window.location='index.php'
			  </script>";
	}	
?>