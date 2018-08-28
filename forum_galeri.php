<div class="col-md-9">
    	<div class="center">
        	<h3>GALERI FOTO PRIBADI</h3>
            <hr>          
  <p>Anda Bisa Berbagi Koleksi<code>Foto</code> anda.
  <div class="bs-example">
 
    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="forum_galeri_simpan.php"> 
      <div class="form-group">
      	
        <label for="inputfoto" class="col-sm-2 control-label">Foto</label>
        <div class="col-sm-10">
        <p class="help-block">Ukuran foto <code>maksimal 25 Mb</code>
        <input type="hidden" name="id_member" value="<?php echo $id_member;?>" /> 
        <input type="file" id="foto" name="foto" required></p>
        </div>
      </div>
      <div class="form-group">
        <label for="inputnfoto" class="col-sm-2 control-label">Keterangan</label>
        <div class="col-sm-10">
          <textarea class="form-control" rows="2" name="keterangan" id="keterangan" required></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-primary" name="simpan" id="simpan">SIMPAN</button>
        </div>
      </div>
      </form>
    </div>
</div>

</div>

<div class="col-md-9">
<?php
$query=mysql_query("select*from tbl_foto where id_member='$id_member' order by id_foto desc");
$jumlah_foto=mysql_num_rows($query);
?>
	<h3>KOLEKSI FOTO</h3>
    <code>Jumlah koleksi foto anda : <?php echo $jumlah_foto;?></code>
	<hr>
    
	<div class="bs-example">
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

  <div class="row portfolio">
	<?php
		while($record=mysql_fetch_array($query))
			{
	?>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <a class="preview" href="./foto/<?php echo $record['foto'];?>" rel="prettyPhoto">
                        <img class="img-responsive" src="./foto/<?php echo $record['foto'];?>" width="200" alt="<?php echo $record['keterangan']; ?> &nbsp; <?php echo $record['tanggal_posting']; ?>">
                        </a>
        <div class="caption">
          <p class="btn btn-default btn-xs btn-lg pull-right" rel="tooltip">
          <a href="forum.php?page=forum_galeri_edit&id_foto=<?php echo $record['id_foto'];?>" ><i class="fa fa-edit">&nbsp;</i></a>
                            <a href="forum.php?page=forum_galeri_hapus&id_foto=<?php echo $record['id_foto'];?>" onclick="return confirm('Apakah Anda yakin akan menghapus foto ini ?')"><i class="fa fa-trash-o">&nbsp;</i></a>
          </p>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
    <?php
			}
	?>
  </div>
  <!-- Modal -->
  
  
   </div>
</div>