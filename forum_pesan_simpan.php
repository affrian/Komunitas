<?php
	include "koneksi.php";
	$id_member=$_POST['id_member'];
	$pengirim=$_POST['pengirim'];
	$id_tujuan=$_POST['id_tujuan'];
	$kepada=$_POST['kepada'];
	$judul=mysql_real_escape_string($_POST['judul']);
	$isi_pesan=mysql_real_escape_string($_POST['isi_pesan']);
	date_default_timezone_set("Asia/Jakarta");
	$tanggal_kirim=date("d M Y");
	$jam= date("H:i");
	$query=mysql_query
			("insert into tbl_pesan values 		 			('','$id_member','$pengirim','$id_tujuan','$kepada','$judul','$isi_pesan','$tanggal_kirim','$jam','BELUM DIBACA')");
	
	if($query)
	{
		echo "<script>window.alert('Pesan terkirim');
				  	  window.location='forum.php?page=forum_teman&id_member=$id_member'
			  </script>";
	}
	else
	{
		echo "<script>window.alert('Maaf, Proses Gagal !!!');
					  window.location='forum.php?page=forum_teman&id_member=$id_member'
			  </script>";
	}	
?>