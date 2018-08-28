<div class="row">
<!-- Left col -->
<section class="col-lg-12 connectedSortable">  
<div class="col-md-12">
<div class="box">
<div class="box-header">
<h3 class="box-title">DAFTAR OPERATOR</h3>
</div><!-- /.box-header -->
<div class="box-body">
<table class="table table-striped">
<tr>
<th style="width: 10px">#</th>
<th>Nama</th>
<th>Username</th>
<th>Jabatan</th>
<th>Alamat</th>
<th>Nomor Telp</th>
<?php
	if(($level!="Administrator") and ($level!="Admin"))
	{
		echo"";
	}
	else
	{
?>
<th style="width: 40px">Option</th>
<?php
	}
?>
</tr>
<?php include"koneksi.php";
$query=$pdo->prepare("select*from tbl_admin order by nama");
$query->execute();
$no = 0; //variabel no untuk nomor urutnya.
while($tampil=$query->fetch()){
if(($tampil['level']=="Administrator") or ($tampil['level']=="Admin"))
{
	echo "";
}
else
{
$nama=$tampil['nama'];
$username=$tampil['username'];
$jabatan=$tampil['jabatan'];
$alamat=$tampil['alamat'];
$nomor_telp=$tampil['nomor_telp'];
$no++; // ini sama saja dengan $no = $no + 1
?>
<tr>
<td><?php echo $no;?></td>
<td><?php echo $nama ;?></td>
<td><?php echo $username;?></td>
<td><?php echo $jabatan;?></td>
<td><?php echo $alamat;?></td>
<td><?php echo $nomor_telp;?></td>
<td>
<?php
	if(($level!="Administrator") and ($level!="Admin"))
	{
		echo"";
	}
	else
	{
?>
<a href="operator_hapus.php?idhapus=<?php echo $tampil['id_admin'];?>"onclick="return confirm('Apakah Anda yakin akan menghapus operator <?php echo "$nama";?> ?')"><span class="badge bg-red">Hapus</span></a>
<?php
	}
?>
</td>
</tr>
<?php }} ?>
</table>
<?php
	if(($level!="Administrator") and ($level!="Admin"))
	{
		echo"";
	}
	else
	{
?>
<a href="index.php?page=operator_tambah"><input type="submit" name="tambah_operator" id="tambah_operator" value="Tambah Operator" class="btn btn-warning"></a>
<?php
	}
?>
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
