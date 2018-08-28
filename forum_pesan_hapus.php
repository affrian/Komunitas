<?php
	
$id_pesan = $_GET['id_pesan'];

$hapus=mysql_query("DELETE FROM tbl_pesan WHERE id_pesan=$id_pesan");

	
	if($hapus)
	{
		echo "<script>
				  	  window.location='forum.php?page=forum_pesan'
			  </script>";
	}
	else
	{
		echo "<script>window.alert('Maaf, Proses Gagal !!!');
					  window.location='forum.php?page=forum_pesan'
			  </script>";
	}	
?>