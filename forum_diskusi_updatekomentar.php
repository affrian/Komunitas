<?php
include "koneksi.php";
if (isset($_POST["simpan"])) 
	{
	$id_topik=$_GET['id_topik'];
	$id_komentar=$_POST['id_komentar'];
	$komentar=mysql_real_escape_string($_POST['komentar']);	
	date_default_timezone_set("Asia/Jakarta");
	$tanggal=date("Y-m-d");
	$jam= date("H:i");
	
	$update =mysql_query("UPDATE tbl_komentar SET isi_komentar = '$komentar',tanggal='$tanggal',jam='$jam' WHERE id_komentar = '$id_komentar'");
			
	if ($update)
		{
		echo "<script>window.alert('Data berhasil diperbaharui');
				  	  window.location='forum.php?page=forum_diskusi&id_topik=$id_topik'
			  </script>";
		}
	else
	{
		echo "<script>window.alert('Maaf, Proses Gagal !!!');
				  	  window.location='forum.php?page=forum_diskusi&id_topik=$id_topik'
			  </script>";
		
	}
}
?>