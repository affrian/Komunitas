<?php
include"koneksi.php";
$idubah=$_POST['idubah'];
$album=mysql_real_escape_string($_POST['album']);
$tanggal_update=date("Y-m-d");
$keterangan=mysql_real_escape_string($_POST['keterangan']);
if(empty($_FILES['foto']['name']))
			$foto=$_POST['foto'];
	else
	{
			$foto=$_FILES['foto']['name'];
		
			//definisikan variabel file dan alamat file
			$uploaddir='../galeri/';
			$alamatfile=$uploaddir.$foto;

			//periksa jika proses upload berjalan sukses
			$upload=move_uploaded_file($_FILES['foto']['tmp_name'],$alamatfile);
		}
		
$tanggal_update=date("Y-m-d");
$sql_simpan=$pdo->prepare("UPDATE tbl_galeri SET
  			    album='$album',
				foto='$foto',
				keterangan='$keterangan',
				tanggal_posting='$tanggal_update'
				WHERE id_foto='$idubah'");	

$sql_simpan->execute();
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Ubah !');
document.location=('index.php?page=galeri')</script>
