<?php
	
$id_foto = $_GET['id_foto'];

$hapus=mysql_query("DELETE FROM tbl_foto WHERE id_foto=$id_foto");

	
	if($hapus)
	{
		echo "<script>
				  	  window.location='forum.php?page=forum_galeri'
			  </script>";
	}
	else
	{
		echo "<script>window.alert('Maaf, Proses Gagal !!!');
					  window.location='forum.php?page=forum_galeri'
			  </script>";
	}	
?>