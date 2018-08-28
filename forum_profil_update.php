<?php
if(isset($_POST['simpan']))

{	$id_member=$_POST['id_member'];
	$nama_depan=mysql_real_escape_string(ucwords($_POST['nama_depan']));
	$nama_belakang=mysql_real_escape_string(ucwords($_POST['nama_belakang']));
	$email=$_POST['email'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$status=$_POST['status'];
	$alamat=mysql_real_escape_string($_POST['alamat']);
	$pekerjaan=$_POST['pekerjaan'];
	$hobi=mysql_real_escape_string($_POST['hobi']);
	$nomor_telp=$_POST['nomor_telp'];
	$twiter=$_POST['twiter'];
	$facebook=$_POST['facebook'];
	//exception
	if(empty($_POST['password'])){
		$password=$_POST['pass'];
	}else{
		$password=md5($_POST['password']);
	}
	
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


	$query=mysql_query
		   ("UPDATE tbl_member SET   	nama_depan='$nama_depan',nama_belakang='$nama_belakang',email='$email',password='$password',tanggal_lahir='$tanggal_lahir', foto='$foto',status='$status',alamat='$alamat',pekerjaan='$pekerjaan',hobi='$hobi',nomor_telp='$nomor_telp',twiter='$twiter',facebook='$facebook' WHERE id_member='$id_member'");
						
	if($query)
	{
		echo "<script>window.alert('Data berhasil diperbaharui');
				  	  window.location='forum.php?page=forum_profil'
			  </script>";
	}
	else
	{
		echo "<script>window.alert('Maaf, Proses Gagal !!!');
					  window.location='forum.php?page=forum_info_edit'
			  </script>";
	}	

}
else
	{
		unset($_POST['simpan']);
	}
?>
