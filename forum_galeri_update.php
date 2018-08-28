<?php
include "koneksi.php";
if (isset($_POST["update"])) 
	{
	$keterangan=mysql_real_escape_string($_POST['keterangan']);	
	if(empty($_FILES['foto']['name']))
			$foto=$_POST['foto'];
	else
	{
			$foto=$_FILES['foto']['name'];
		
			//definisikan variabel file dan alamat file
			$uploaddir='./foto/';
			$alamatfile=$uploaddir.$foto;

			//periksa jika proses upload berjalan sukses
			$upload=move_uploaded_file($_FILES['foto']['tmp_name'],$alamatfile);
		}
	$update =mysql_query("UPDATE tbl_foto SET keterangan = '$keterangan',foto='$foto' WHERE id_foto = '$_POST[id_foto]'");
			
	if ($update)
		{
		echo "<script>window.alert('Data berhasil diperbaharui');
				  	  window.location='forum.php?page=forum_galeri'
			  </script>";
		}
	else
	{
		echo "<script>window.alert('Maaf, Proses Gagal !!!');
				  	  window.location='forum.php?page=forum_galeri'
			  </script>";
		
	}
}
?>