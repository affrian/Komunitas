<div class="row">
<!-- Left col -->
<section class="col-lg-12 connectedSortable">  
<div class="col-md-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">DAFTAR KETEGORI PEMBAHASAN FORUM</h3>
</div><!-- /.box-header -->
<div class="box-body">
<table class="table table-striped">
<tr>
<form method="post" action="kategori_simpan.php" role="form" enctype="multipart/form-data">
<input type="hidden" name="id_admin" value="<?php echo $_SESSION['id_admin'];?>" />
<div class="form-group">
<input name="nama_kategori" type="text" required class="form-control" id="nama_kategori" placeholder="Tambahkan Kategori Baru, Lalu Tekan Enter"/>
</div>
</form>
</tr>
<tr>
<th style="width: 10px">#</th>
<th>Nama Kategori</th>
<th>Banyak Dilihat</th>
<th>Tanggal Posting</th>
<th>Tanggal Update</th>
<th style="width: 40px">Option</th>
</tr>
<?php include"koneksi.php";
$query=$pdo->prepare("select*from tbl_kategori order by nama_kategori");
$query->execute();
$no = 0; //variabel no untuk nomor urutnya.
while($tampil=$query->fetch()){
$nama_kategori=$tampil['nama_kategori'];
$dilihat=$tampil['dilihat'];
$tanggal_posting=$tampil['tanggal_posting'];
$tanggal_update=$tampil['tanggal_update'];
$no++; // ini sama saja dengan $no = $no + 1
?>
<tr>
<td><?php echo $no;?></td>
<td><?php echo $nama_kategori;?></td>
<td><?php echo $dilihat;?></td>
<td><?php echo $tanggal_posting;?></td>
<td><?php echo $tanggal_update;?></td>
<td>
<a href="index.php?page=kategori_edit&idubah=<?php echo $tampil['id_kategori'];?>"><span class="badge bg-blue">Ubah</span></a>
<a href="kategori_hapus.php?idhapus=<?php echo $tampil['id_kategori'];?>"onclick="return confirm('Apakah Anda yakin akan menghapus kategori <?php echo $nama_kategori;?> ?')"><span class="badge bg-red">Hapus</span></a></td>
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