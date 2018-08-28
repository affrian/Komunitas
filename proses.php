<?php
	include "koneksi.php";
	
	if(isset($_GET['id_member']) && isset($_GET['id_member'])!=="")
	$id_member=$_GET['id_member'];
	$isi_status=$_POST['isi_status'];
	$tanggal=$_POST['tanggal'];
	
	$query=mysql_query("insert into tbl_status values('','$id_member','$isi_status','$tanggal')");
	
	if($query){
		echo "<script>window.alert('Data berhasil diperbaharui');
				  	  window.location='forum.php?page=forum_info_pribadi'
			  </script>";
	}else{
		echo mysql_error();
	}

?>