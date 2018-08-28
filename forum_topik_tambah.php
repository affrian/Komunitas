<div class="col-md-9">
    	<div class="center">
        	<h3>TAMBAHKAN TOPIK BARU UNTUK KATEGORI <?php echo $_GET['nama_kategori'];?></h3>
            <hr>
  <div class="bs-example">
    <form enctype="multipart/form-data" class="form-horizontal" method="post" action="forum_topik_simpan.php">
      <div class="form-group">  
        <div class="col-sm-12">
          <input type="hidden" name="id_member" value="<?php echo $id_member;?> " />
          <input type="hidden" name="pengirim" value="<?php echo $nama_depan;?> <?php echo $nama_belakang;?> " />
          <input type="hidden" name="id_kategori" value="<?php echo $_GET['id_kategori'];?>" />
          <input type="hidden" name="kategori" value="<?php echo $_GET['nama_kategori'];?>" />
          <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Topik" required/>
        </div>
      </div>
      
      <div class="form-group">  
        <div class="col-sm-12">
          <textarea class="form-control ckeditor" rows="5" name="isi_topik" id="isi_topik" placeholder="Isi Topik Pembahasan"></textarea>
        </div>
      </div>
      
      <div class="form-group">
        <div class="col-sm-12">
        	<button type="submit" name="simpan" class="btn btn-primary">SIMPAN</button>
        </div>
      </div>
      </form>
    </div>
</div>
</div>
 