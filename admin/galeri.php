<style>
.portfolio .thumbnail {
    position: relative;
}

.portfolio .thumbnail:hover {
    cursor: pointer;
}

.portfolio .caption {
    bottom: 0;
    position: absolute;
}

.portfolio .btn {
    opacity: 0.75;
}
</style>
<div class="row">
<!-- Left col -->
<section class="col-lg-12 connectedSortable">  
<div class="col-md-8">
<div class="box">
<div class="box-header">
<h3 class="box-title">GALERI</h3>
</div><!-- /.box-header -->
<div class="box-body">
<table class="table table-striped">
<tr>
<th style="width: 10px">#</th>
<th>Foto</th>
<th>Album</th>
<th>Keterangan</th>
<th>Tanggal</th>
<th style="width: 40px">Option</th>
</tr>
<?php include"koneksi.php";
$query=$pdo->prepare("select*from tbl_galeri order by id_foto desc");
$query->execute();
$no = 0; //variabel no untuk nomor urutnya.
while($tampil=$query->fetch()){
$foto=$tampil['foto'];
$album=$tampil['album'];
$keterangan=$tampil['keterangan'];
$tanggal_posting=$tampil['tanggal_posting'];
$no++; // ini sama saja dengan $no = $no + 1
?>
<tr>
<td><?php echo $no;?></td>
<td>
	<a class="preview" href="../galeri/<?php echo $foto;?>" rel="prettyPhoto">
		<img class="img-responsive" src="../galeri/<?php echo $foto;?>" width="200" alt="<?php echo $keterangan;?>&nbsp;<?php echo $tanggal_posting;?>">
	</a>
</td>
<td><?php echo $album;?></td>
<td><?php echo $keterangan;?></td>
<td><?php echo $tanggal_posting;?></td>
<td>
<a href="index.php?page=galeri_edit&idubah=<?php echo $tampil['id_foto'];?>"><span class="badge bg-blue">Ubah</span></a>
<a href="galeri_hapus.php?idhapus=<?php echo $tampil['id_foto'];?>"onclick="return confirm('Apakah Anda yakin akan menghapus foto ini?')"><span class="badge bg-red">Hapus</span></a>
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
<div class="col-md-4">

<!-- general form elements -->
<div class="box box-primary">
<div class="box-header">
<h3 class="box-title"><a href="logout.php">Form Tambah Foto Galeri</a></h3>
</div><!-- /.box-header -->
<!-- form start -->
<form action="galeri_simpan.php" method="post" role="form" enctype="multipart/form-data">
<div class="box-body">
<div class="form-group">
<label for="exampleInputPassword1">Foto</label>

<input type="hidden" name="id_admin" value="<?php echo $_SESSION['id_admin'];?>" />
<input type="file" id="foto" name="foto" required></p>
</div>
<div class="form-group">
<label for="exampleInputPassword1">Album</label>
 <div class="form-group">
	<select name="album" id="album" class="form-control" required>
    	<option></option>
    	<option>Kepemudaan</option>
        <option>Tentang PERSIS</option>
        <option>Lain-lain</option>
    </select>
</div>
</div>
<div class="form-group">
<label for="exampleInputPassword1">Keterangan</label>
<textarea id="keterangan" name="keterangan" class="form-control" required></textarea>
</div>
<input type="submit" value="Simpan">

</div><!-- /.box-body -->   
</form>                       
</section>
</div><!-- /.row (main row) -->
</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

