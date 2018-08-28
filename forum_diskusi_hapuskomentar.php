<?php
	include "koneksi.php";
	
	$id_topik=$_GET['id_topik'];
	$id_komentar=$_GET['id_komentar'];	
	
	$query=mysql_query("delete from tbl_komentar WHERE id_komentar='$id_komentar'");
	
	if($query)
	{
		echo "<script>window.alert('Komentar telah berhasil dihapus');
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