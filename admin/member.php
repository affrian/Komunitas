<div class="row">
<!-- Left col -->
<section class="col-lg-12 connectedSortable">  
<div class="col-md-12">
<div class="box">

<div class="box-body">

  <div class="panel panel-default panel-order">
    <div class="panel-heading">
      <strong>DAFTAR ANGGOTA</strong>
      <div class="btn-group pull-right">
        <div class="btn-group">
        <a href="index.php?page=member_tambah">
          <button type="button" class="btn btn-primary btn-xs ">
          Tambah Anggota <i class="fa fa-users"></i>
          </button>
       </a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="#">Active orders</a></li>
            <li><a href="#">Pending orders</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="panel-body">

      <div class="row">
      <?php include"koneksi.php";
$query=$pdo->prepare("select*from tbl_member order by nama_depan");
$query->execute();
while($tampil=$query->fetch()){
$nama_depan=$tampil['nama_depan'];
$nama_belakang=$tampil['nama_belakang'];
$email=$tampil['email'];
$tanggal_lahir=$tampil['tanggal_lahir'];
$alamat=$tampil['alamat'];
$pekerjaan=$tampil['pekerjaan'];
$nomor_telp=$tampil['nomor_telp'];
$foto=$tampil['foto'];
?>
        <div class="col-md-1"><img src="../foto/<?php echo $foto;?>" class="img-rounded"></div>
        <div class="col-md-11">
        
          <div class="row">
            <div class="col-md-12">
              <div class="pull-right">
              	<a href="member_hapus.php?idhapus=<?php echo $tampil['id_member'];?>"
                onclick="return confirm('Apakah Anda yakin akan menghapus anggota <?php echo "$nama_depan $nama_belakang";?>?')">
                <i class="fa fa-trash-o"></i>&nbsp;Hapus
                </a>
              </div>
              <span><strong><?php echo "$nama_depan $nama_belakang" ;?></strong></span>
              <span class="label label-info"><?php echo $email;?></span>
              <br>
              <span><?php echo $nomor_telp;?></span>
              <br>
              <span><?php echo $tanggal_lahir;?></span>
              <br>
              <span><?php echo $alamat;?></span>
              <br>
              <span><strong><?php echo $pekerjaan;?></strong></span>
            </div>
            <div class="col-md-12">
              
            </div>
          </div>
         
        </div>
        <?php } ?> 
      </div>
    
   
  </div>
</div>

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
