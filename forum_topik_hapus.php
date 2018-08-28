<?php
	include "koneksi.php";
	
	$id_topik=$_GET['id_topik'];
	
	$query=mysql_query("delete from tbl_topik WHERE id_topik='$id_topik'");
	
	if($query)
	{
		echo "<script>window.alert('Topik telah berhasil dihapus');
				  	  window.location='forum.php'
			  </script>";
	}
	else
	{
		echo "<script>window.alert('Maaf, Proses Gagal !!!');
					  window.location='forum.php?page=forum_diskusi&id_topik=$id_topik'
			  </script>";
	}	
?>