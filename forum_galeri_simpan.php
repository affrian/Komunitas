<?php
	include "koneksi.php";
	
	$id_member=$_POST['id_member'];
	$keterangan=mysql_real_escape_string($_POST['keterangan']);
	$foto=$_FILES['foto']['name'];
		
			//definisikan variabel file dan alamat file
			$uploaddir='./foto/';
			$alamatfile=$uploaddir.$foto;

			//periksa jika proses upload berjalan sukses
			$upload=move_uploaded_file($_FILES['foto']['tmp_name'],$alamatfile);
			
	date_default_timezone_set("Asia/Jakarta");
	$tanggal=date("d M Y");
	$jam= date("H:i");
	
	$query=mysql_query("insert into tbl_foto values ('','$id_member','$foto','$keterangan','$tanggal','$jam')");
	
	if($query)
	{
		echo "<script>window.alert('Foto berhasil ditambahkan');
				  	  window.location='forum.php?page=forum_galeri&id_member=$id_member'
			  </script>";
	}
	else
	{
		echo "<script>window.alert('Maaf, Proses Gagal !!!');
					  window.location='forum.php?page=forum_galeri&id_member=$id_member'
			  </script>";
	}	
?>