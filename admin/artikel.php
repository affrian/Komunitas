<div class="row">
<!-- Left col -->
<section class="col-lg-12 connectedSortable">  
<div class="col-md-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">DAFTAR ARTIKEL</h3>
</div><!-- /.box-header -->

<div class="box-body">
<a href="index.php?page=artikel_tambah"><input type="submit" name="tambah_anggota" id="tambah_anggota" value="Tambah Artikel" class="btn btn-warning"></a>
<table class="table table-striped">
<tr>

</tr>
<tr>
<th style="width: 10px">#</th>
<th>Judul Artikel</th>
<th>Kategori Artikel/Berita</th>
<th>Isi Artikel</th>
<th>Tanggal Posting</th>
<?php
	if(($level!="Administrator") and ($level!="Admin"))
	echo "";
	else
	{
?>
<th>Petugas</th>
<?php
	}
?>
<th style="width: 40px">Option</th>
</tr>
<?php include"koneksi.php";
$query=$pdo->prepare("select*from tbl_artikel order by tanggal desc");
$query->execute();
$no = 0; //variabel no untuk nomor urutnya.
while($tampil=$query->fetch()){
$judul=$tampil['judul_artikel'];
$kategori=$tampil['kategori_artikel'];
$isi=$tampil['isi_artikel'];
$tanggal=$tampil['tanggal'];
$petugas=$tampil['pengirim'];
$no++; // ini sama saja dengan $no = $no + 1
?>
<tr>
<td><?php echo $no;?></td>
<td><?php echo $judul;?></td>
<td><?php echo $kategori;?></td>
<td>
	<?php 
	$artikel = $isi;
	$potong_artikel = substr($artikel,0,500); //substr()
	echo $potong_artikel.'... <a class="btn btn-dark" href="static.php?id='.$tampil['id_artikel'].'">Lihat Selengkapnya</a>';
	?>
</td>
<td><?php echo $tanggal;?></td>
<?php
	if(($level!="Administrator") and ($level!="Admin"))
	echo "";
	else
	{
?>
<td><?php echo $petugas;?></td>
<?php
	}
?>
<td>
<a href="index.php?page=artikel_edit&idubah=<?php echo $tampil['id_artikel'];?>"><span class="badge bg-blue">Ubah</span></a>
<a href="artikel_hapus.php?idhapus=<?php echo $tampil['id_artikel'];?>"onclick="return confirm('Apakah Anda yakin akan menghapus judul artikel <?php echo $judul;?> ?')"><span class="badge bg-red">Hapus</span></a></td>
</tr>
<?php } ?>
</table>
</div><!-- /.box-body -->
<div class="box-footer clearfix">
<ul class="pagination pagination-sm no-margin pull-right">
<li><a href="#">&laquo;</a></li>
<li><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">&raquo;</a></li>
</ul>
</div>
</div><!-- /.box -->
</div>
                          
</section>
</div><!-- /.row (main row) -->