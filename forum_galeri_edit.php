<div class="col-md-9">
    	<div class="center">
        	<h3>UBAH FOTO PADA GALERI ANDA</h3>
            <hr>          
  <p>Anda Bisa <code>mengubah</code> Koleksi<code>Foto</code> anda.
  <div class="bs-example">
	<?php
		
	$query=mysql_fetch_array(mysql_query("select * from tbl_foto where id_foto='$_GET[id_foto]'"));
	$foto=$query['foto'];
	$keterangan=$query['keterangan'];
	?>
    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="forum_galeri_update.php"> 
    <input type="hidden" name="id_foto" value="<?php echo $_GET['id_foto'];?>" />
    <input type="hidden" name="id_member" value="<?php echo $_SESSION['id_member'];?>" />
    <input type="hidden" name="foto" value="<?php echo $foto;?>" />
    <input type="hidden" name="keterangan" value="<?php echo $keterangan;?>" />
      <div class="form-group">
      	
        <label for="inputfoto" class="col-sm-2 control-label">Foto</label>
        <div class="col-sm-10">
        <p class="help-block">Ukuran foto <code>maksimal 25 Mb</code> dan <code>minimal 20 Kb</code>
        <input type="file" id="foto" name="foto"><?php echo $foto;?></p>
        </div>
      </div>
      <div class="form-group">
        <label for="inputnfoto" class="col-sm-2 control-label">Keterangan</label>
        <div class="col-sm-10">
          <textarea class="form-control" rows="2" name="keterangan" id="keterangan"><?php echo $keterangan;?></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary" name="update" id="update">UPDATE</button>
        </div>
      </div>
      </form>

                
    </div>
</div>

</div>