<?php
	include "koneksi.php";
	$id_member=$_POST['id_member'];
	$pengirim=$_POST['pengirim'];
	$id_kategori=$_POST['id_kategori'];
	$kategori=$_POST['kategori'];
	$judul=mysql_real_escape_string($_POST['judul']);
	$isi_topik=$_POST['isi_topik'];
	date_default_timezone_set("Asia/Jakarta");
	$tanggal=date("d M Y");
	$jam= date("H:i");
	
	$query=mysql_query("insert into tbl_topik (id_topik,id_kategori,kategori,id_member,pengirim,judul,isi_topik,tanggal_posting,jam)values ('','$id_kategori','$kategori','$id_member','$pengirim','$judul','$isi_topik','$tanggal','$jam')");
	
	if($query)
	{
		echo "<script>window.alert('Topik telah berhasil ditambahkan');
				  	  window.location='forum.php?page=forum_topik&id_kategori=$id_kategori'
			  </script>";
	}
	else
	{
		echo "<script>window.alert('Maaf, Proses Gagal !!!');
					  window.location='forum.php?page=forum_topik&id_kategori=$id_kategori'
			  </script>";
	}	
?>