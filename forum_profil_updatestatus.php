<?php

	include "koneksi.php";
	
	$id_member=$_POST['id_member'];
	
	$status=mysql_real_escape_string($_POST['status']);
	date_default_timezone_set("Asia/Jakarta");
	$tanggal=date("d M Y");
	$jam= date("H:i");
	
	$query=mysql_query("insert into tbl_status values('','$id_member','$status','$tanggal','$jam')");
	if($query)
	{
		echo "<script>window.alert('Status berhasil dperbaharui');
				  	  window.location='forum.php?page=forum_profil'
			  </script>";
	}
	else
	{
		echo "<script>window.alert('Maaf, Proses Gagal !!!');
					  window.location='forum.php?page=forum_profil'
			  </script>";
	}	


?>
