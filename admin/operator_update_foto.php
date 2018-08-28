<?php
include"koneksi.php";
$id_admin=$_POST['id_admin'];
$foto=$_FILES['foto'];
if(empty($_FILES['foto']['name']))
			$foto=$_POST['foto'];
	else
	{
		$foto=$_FILES['foto']['name'];
		//definisikan variabel file dan alamat file
		$uploaddir='./img/';
		$alamatfile=$uploaddir.$foto;

		//periksa jika proses upload berjalan sukses
		$upload=move_uploaded_file($_FILES['foto']['tmp_name'],$alamatfile);
	}

$update=$pdo->prepare("UPDATE tbl_admin SET
  			    foto='$foto'
				WHERE id_admin='$id_admin'");	

$update->execute();	
						
	if($update)
	{
		echo "<script>window.alert('Data berhasil diperbaharui');
				  	  window.location='index.php?page=operator_edit&id_admin=$id_admin'
			  </script>";
	}
	else
	{
		echo "<script>window.alert('Maaf, Proses Gagal !!!');
					  window.location='index.php?page=operator_edit&id_admin=$id_admin'
			  </script>";
	}			
?>