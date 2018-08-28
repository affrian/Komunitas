<div class="row">
<!-- Left col -->
<section class="col-lg-12 connectedSortable">  
<div class="col-md-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">DAFTAR TOPIK YANG TELAH DITAMBAHKAN MEMBER</h3>
</div><!-- /.box-header -->
<div class="box-body">
<table class="table table-striped">
<tr>
<form method="post" action="kategori_simpan.php" role="form" enctype="multipart/form-data">
<input type="hidden" name="id_admin" value="<?php echo $_SESSION['id_admin'];?>" />
</form>
</tr>
<tr>
<th style="width: 10px">#</th>
<th>Judul Topik</th>
<th>Kategori</th>
<th>Pengirim</th>
<th>Banyak Dilihat</th>
<th>Jumlah Komentar</th>
<th>Tanggal Posting</th>
<th style="width: 40px">Option</th>
</tr>
<?php include"koneksi.php";
$query=$pdo->prepare("select*from tbl_topik order by tanggal_posting");
$query->execute();
$no = 0; //variabel no untuk nomor urutnya.
while($tampil=$query->fetch()){
$judul=$tampil['judul'];
$kategori=$tampil['kategori'];
$pengirim=$tampil['pengirim'];
$dilihat=$tampil['dilihat'];
$tanggal_posting=$tampil['tanggal_posting'];
$no++; // ini sama saja dengan $no = $no + 1
?>
<tr>
<td><?php echo $no;?></td>
<td><?php echo $judul;?></td>
<td><?php echo $kategori;?></td>
<td><?php echo $pengirim;?></td>
<td><?php echo $dilihat;?></td>
<?php
$komentar=$pdo->prepare("select*from tbl_komentar where id_topik='$tampil[id_topik]'");
$komentar->execute();
$jml_komentar = $komentar->rowCount();//ini ibaratnya mysql_numrows mengngitung rows
?>
<td><?php echo $jml_komentar;?></td>
<td><?php echo $tanggal_posting;?></td>
<td><a href="topik_hapus.php?idhapus=<?php echo $tampil['id_topik'];?>"onclick="return confirm('Apakah Anda yakin akan menghapus Judul Topik <?php echo $judul;?> ?')"><span class="badge bg-red">Hapus</span></a></td>
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