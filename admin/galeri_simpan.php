<?php
include"koneksi.php";
$id_admin=$_POST['id_admin'];
$album=mysql_real_escape_string($_POST['album']);
$keterangan=mysql_real_escape_string($_POST['keterangan']);
$tanggal_posting=date("Y-m-d");
$foto=$_FILES['foto']['name'];
$file_type = $_FILES['foto']['type']; 		
			//definisikan variabel file dan alamat file
			$uploaddir='../galeri/';
			$alamatfile=$uploaddir.$foto;

			//periksa jika proses upload berjalan sukses
			$upload=move_uploaded_file($_FILES['foto']['tmp_name'],$alamatfile);

$sql_simpan=$pdo->prepare("insert into  tbl_galeri
                values ('','$id_admin','$album','$foto','$keterangan','$tanggal_posting')");
$sql_simpan->execute();
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Simpan !');
document.location=('index.php?page=galeri')</script>
