<div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Edit Artikel</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
<?php include"koneksi.php";
$idubah=$_GET['idubah'];
$ubah=$pdo->prepare("select * from tbl_artikel where id_artikel=$idubah");
$ubah->execute();
$tampilagi=$ubah->fetch();
?>
                <form action="artikel_update.php" method="post" role="form">
				<input type="hidden" name="id_admin" value="<?php echo $_SESSION['id_admin'];?>" />
                <input type="hidden" name="idubah" value="<?php echo $idubah;?>" />
                <div class="box-body">
                  <div class="form-group">
                    <input class="form-control" placeholder="Judul" id="judul" name="judul" value="<?php echo $tampilagi['judul_artikel'];?>"/>
                  </div>
                  <div class="form-group">
                  <select name="kategori" id="kategori" class="form-control" required>
    					<option></option>
                        <option>Kepemudaan</option>
       					<option>Tentang PERSIS</option>
        				<option>Umat</option>
                        <option>Fakta</option>
                        <option>Website</option>
                        <option>Lain-lain</option>
    				</select>
                  </div>
                  <div class="form-group">
                  	Tambahkan Gambar untuk <code>Cover</code>
                  	<input type="hidden" name="cover" value="<?php echo $tampilagi['cover'];?>" />
                    <input type="file" name="cover" id="cover" class="text-center left-block well well-sm" value="<?php echo $tampilagi['cover'];?>" required>
                  </div>
                  <div class="form-group">
                    <textarea id="isi" name="isi" class="form-control ckeditor" style="height: 300px"><?php echo $tampilagi['isi_artikel'];?></textarea>
                	
                  </div>
                 
                  
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                  </div>
                
               	
                </form>
                <div class="box-footer">
                  
                  
                </div><!-- /.box-footer -->
              </div><!-- /. box -->
            </div>