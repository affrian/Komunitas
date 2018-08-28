<div class="row">
<!-- Left col -->
<section class="col-lg-12 connectedSortable">  
<div class="col-md-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">EDIT KETEGORI&nbsp;<small>Lalu tekan enter</small></h3>
</div><!-- /.box-header -->
<div class="box-body">
<table class="table table-striped">
<tr>
<?php include"koneksi.php";
$idubah=$_GET['idubah'];
$ubah=$pdo->prepare("select * from tbl_kategori where id_kategori=$idubah");
$ubah->execute();
$tampil=$ubah->fetch();
?>
<form method="post" action="kategori_update.php" role="form" enctype="multipart/form-data">
<input type="hidden" name="id_admin" value="<?php echo $_SESSION['id_admin'];?>" />
<div class="form-group">
<input type="hidden"name="idubah" value="<?php echo $idubah;?>">
<input name="nama_kategori" type="text" required class="form-control" id="nama_kategori" value="<?php echo $tampil['nama_kategori'];?>"/>       
</div>
</form>
</tr>
<tr>
<th style="width: 10px">#</th>
<th>Nama Kategori</th>
<th>Jumlah Topik</th>
<th>Tanggal Posting</th>
</tr>
<?php include"koneksi.php";
$query=$pdo->prepare("select*from tbl_kategori order by nama_kategori");
$query->execute();
$no = 0; //variabel no untuk nomor urutnya.
while($lihat=$query->fetch()){
$nama_kategori=$lihat['nama_kategori'];
$jumlah_topik=$lihat['jumlah_topik'];
$tanggal_posting=$lihat['tanggal_posting'];
$no++; // ini sama saja dengan $no = $no + 1
?>
<tr>
<td><?php echo $no;?></td>
<td><?php echo $nama_kategori;?></td>
<td><?php echo $jumlah_topik;?></td>
<td><?php echo $tanggal_posting;?></td>
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