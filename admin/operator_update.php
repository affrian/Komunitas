<?php
	include"koneksi.php";
	$id_admin=$_POST['id_admin'];
	$nama=mysql_real_escape_string($_POST['nama']);
	$alamat=mysql_real_escape_string($_POST['alamat']);
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$jabatan=mysql_real_escape_string($_POST['jabatan']);
	$username=mysql_real_escape_string($_POST['username']);
	$nomor_telp=$_POST['nomor_telp'];
	//exception
	if(empty($_POST['password'])){
		$password=$_POST['pass'];
	}else{
		$password=md5($_POST['password']);
	}
	
$update=$pdo->prepare("UPDATE tbl_admin SET
  			    nama='$nama',
				username='$username',
				password='$password',
				alamat='$alamat',
				tanggal_lahir='$tanggal_lahir',
				nomor_telp='$nomor_telp',
				jabatan='$jabatan'
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
