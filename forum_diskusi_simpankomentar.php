<?php
	include "koneksi.php";
	
	$id_topik=$_GET['id_topik'];
	$id_member=$_POST['id_member'];
	$pengirim=$_POST['pengirim'];
	$komentar=mysql_real_escape_string($_POST['komentar']);
	$tanggal=date("Y-m-d");
	date_default_timezone_set("Asia/Jakarta");
	$jam= date("H:i");
	
	$query=mysql_query("insert into tbl_komentar values ('','$id_topik','$id_member','$pengirim','$komentar','$tanggal','$jam')");
	
	if($query)
	{
		echo "<script>window.alert('Komentar telah berhasil ditambahkan');
				  	  window.location='forum.php?page=forum_diskusi&id_topik=$id_topik'
			  </script>";
	}
	else
	{
		echo "<script>window.alert('Maaf, Proses Gagal !!!');
					  window.location='forum.php?page=forum_diskusi&id_topik=$id_topik'
			  </script>";
	}	
?>