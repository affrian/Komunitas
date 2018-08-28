<div class="col-md-9">
    	<div class="center">
        	<h3>UBAH TOPIK <?php echo $_GET['judul'];?></h3>
            <hr>
  <div class="bs-example">
  <?php
  	$query=mysql_query("select*from tbl_topik where judul='$_GET[judul]' and id_member='$id_member'");
  ?>
  <?php
  	$record=mysql_fetch_array($query)
   ?>
    <form enctype="multipart/form-data" class="form-horizontal" method="post" action="forum_topik_update.php?id_topik=<?php echo $record['id_topik'];?>">
      <div class="form-group">  
        <div class="col-sm-12">
          <input type="hidden" name="id_topik" value="<?php echo $record['id_topik'];?> " />
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Topik" value="<?php echo $record['judul'];?>">
        </div>
      </div>
      
      <div class="form-group">  
        <div class="col-sm-12">
          <textarea class="form-control ckeditor" rows="5" name="isi_topik" id="isi_topik" placeholder="Isi Topik Pembahasan"><?php echo $record['isi_topik'];?></textarea>
        </div>
      </div>
      
      <div class="form-group">
        <div class="col-sm-12">
        	<button type="submit" name="simpan" id="simpan" class="btn btn-primary">SIMPAN</button>
        </div>
      </div>
      </form>
    </div>
</div>
</div>
 