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
<td><img class="img-responsive" src="../galeri/<?php echo $foto;?>" width="200" alt=""></td>
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
<h3 class="box-title"><a href="logout.php">Form <code>Edit</code> Foto Galeri</a></h3>
</div><!-- /.box-header -->
<!-- form start -->
<?php include"koneksi.php";
$idubah=$_GET['idubah'];
$ubah=$pdo->prepare("select * from tbl_galeri where id_foto=$idubah");
$ubah->execute();
$tampilagi=$ubah->fetch();
$fotolagi=$tampilagi['foto'];
?>
<form action="galeri_update.php" method="post" role="form" enctype="multipart/form-data">
<div class="box-body">
<div class="form-group">
<label for="exampleInputPassword1">Foto</label>

<input type="hidden" name="id_admin" value="<?php echo $_SESSION['id_admin'];?>" />
<input type="hidden"name="idubah" value="<?php echo $idubah;?>">
    <input type="hidden" name="foto" value="<?php echo $fotolagi;?>" />
<p class="help-block">Ukuran foto <code>maksimal 25 Mb</code> dan <code>minimal 20 
</code>
<input type="file" id="foto" name="foto"><?php echo $tampilagi['foto'];?></p>
</div>
<div class="form-group">
<label for="exampleInputPassword1">Album</label>
<select name="album" id="album" class="form-control" required>
		<option></option>
    	<option>Kepemudaan</option>
        <option>Tentang PERSIS</option>
        <option>Lain-lain</option>
</select>
</div>
<div class="form-group">
<label for="exampleInputPassword1">Keterangan</label>
<textarea id="keterangan" name="keterangan" class="form-control" required><?php echo $tampilagi['keterangan'];?></textarea>
</div>
<input type="submit" value="Simpan" class="btn btn-primary">
</form> 
<a href="index.php?page=galeri" class="btn btn-default">Batal</a>
</div><!-- /.box-body -->   
                      
</section>
</div><!-- /.row (main row) -->
</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->