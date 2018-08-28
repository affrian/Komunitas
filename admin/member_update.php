<?php
include"koneksi.php";
$idubah=$_POST['idubah'];
$nama_depan=$_POST['nama_depan'];
$alamat=$_POST['alamat'];
$sql_simpan=$verlipdo->prepare("UPDATE tbl_member SET
  			    nama_depan='$nama_depan',
				alamat='$alamat'
				WHERE id_member='$idubah'");	

$sql_simpan->execute();
?>
<br/>
<script language="JavaScript">alert('Data Berhasil Di Ubah !');
document.location=('index.php')</script>
