<div class="col-md-9">
	<div class="center">   
<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Tulis Pesan Baru</h3>
                </div><!-- /.box-header -->
             
      <div class="box-body">
    <div class="form-group">
	<form enctype="multipart/form-data" class="form-horizontal" method="post" action="forum_pesan_simpan.php"> 
    <input type="hidden" name="id_member" value="<?php echo $_SESSION['id_member'];?> " />
    <input type="hidden" name="pengirim" value="<?php echo $nama_depan;?> <?php echo $nama_belakang;?> " />
    <?php
	$sql_tujuan=mysql_query("select*from tbl_member where id_member='$_GET[id_member]'");
	?>
    <?php
	$data=mysql_fetch_array($sql_tujuan);
	$id_tujuan=$data['id_member'];
	$depan=$data['nama_depan'];
	$belakang=$data['nama_belakang'];
	$kepada="$depan $belakang";
	?>
    <input type="hidden" name="id_tujuan" value="<?php echo $id_tujuan;?> " />
    <input type="hidden" name="kepada" value="<?php echo $kepada;?> " />
    <label id="kepada"><?php echo $kepada;?></label>
    </div>
    <div class="form-group">
    	<input class="form-control" name="judul" id="judul" placeholder="Judul Pesan" required/>
    </div>
    <div class="form-group pull-right">
    	<textarea id="isi_pesan" name="isi_pesan" class="form-control ckeditor" style="height: 300px" required>
        </textarea>
     </div>
     <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Kirim</button>
     </form>
     
     </div><!-- /.box-body -->
     </div>
</div>
</div>              