<?php
include "koneksi.php";
if (isset($_POST["simpan"])) 
	{
	$id_topik=$_POST['id_topik'];
	$judul=mysql_real_escape_string($_POST['judul']);	
	$isi_topik=mysql_real_escape_string($_POST['isi_topik']);	
	date_default_timezone_set("Asia/Jakarta");
	$tanggal=date("Y-m-d");
	$jam= date("H:i");
	
	$update =mysql_query("UPDATE tbl_topik SET judul='$judul',isi_topik='$isi_topik',tanggal_posting='$tanggal',jam='$jam' WHERE id_topik = '$id_topik'");
			
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