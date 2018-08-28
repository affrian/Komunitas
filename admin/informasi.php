<div class="row">
<!-- Left col -->
<section class="col-lg-12 connectedSortable">  
<div class="col-md-9">
<div class="box">
<div class="box-header">
<h3 class="box-title">INFORMASI</h3>
</div><!-- /.box-header -->
<div class="box-body">
<table class="table table-striped">
<tr>
<th style="width: 10px">#</th>
<th>Nama Kegiatan</th>
<th>Tanggal</th>
<th>Jam</th>
<th>Tempat</th>
<th>Tanggal Posting</th>
<th>Tanggal Update</th>
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
$query=$pdo->prepare("select*from tbl_informasi order by tanggal_posting");
$query->execute();
$no = 0; //variabel no untuk nomor urutnya.
while($tampil=$query->fetch()){
$nama_kegiatan=$tampil['nama_kegiatan'];
$tanggal=$tampil['tanggal'];
$jam=$tampil['jam'];
$tempat=$tampil['tempat'];
$tanggal_posting=$tampil['tanggal_posting'];
$tanggal_update=$tampil['tanggal_update'];
$petugas=$tampil['petugas'];
$no++; // ini sama saja dengan $no = $no + 1
?>
<tr>
<td><?php echo $no;?></td>
<td><?php echo $nama_kegiatan ;?></td>
<td><?php echo $tanggal;?></td>
<td><?php echo $jam;?></td>
<td><?php echo $tempat;?></td>
<td><?php echo $tanggal_posting;?></td>
<td><?php echo $tanggal_update;?></td>
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
<a href="index.php?page=informasi_edit&idubah=<?php echo $tampil['id_informasi'];?>"><span class="badge bg-blue">Ubah</span></a>
<a href="informasi_hapus.php?idhapus=<?php echo $tampil['id_informasi'];?>"onclick="return confirm('Apakah Anda yakin akan menghapus informasi tentang <?php echo $nama_kegiatan;?> ?')"><span class="badge bg-red">Hapus</span></a>
</td>
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
<div class="col-md-3">

<!-- general form elements -->
<div class="box box-primary">
<div class="box-header">
<h3 class="box-title"><a href="logout.php">Form Pengisian Agenda Kegiatan dan Informasi</a></h3>
</div><!-- /.box-header -->
<!-- form start -->
<form action="informasi_simpan.php" method="post" role="form">
<input type="hidden" name="id_admin" value="<?php echo $_SESSION['id_admin'];?>" />
<input type="hidden" name="petugas" value="<?php echo $nama;?>" />
<div class="box-body">
<div class="form-group">
<label for="exampleInputEmail1">Nama Kegiatan</label>
<input type="text" class="form-control" name="nama_kegiatan" required>
</div>
<div class="form-group">
<label for="exampleInputPassword1">Tanggal</label>
<input type="text" class="form-control" name="tanggal" required>
</div>
<div class="form-group">
<label for="exampleInputPassword1">Jam</label>
<input type="text" class="form-control" name="jam" required>
</div>
<div class="form-group">
<label for="exampleInputPassword1">Tempat</label>
<input type="text" class="form-control" name="tempat" required>
</div>
<input type="submit" value="Simpan">

</div><!-- /.box-body -->   
</form>                       
</section>
</div><!-- /.row (main row) -->
</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->