<div class="container">
  <h1 class="page-header">Edit Profil</h1>
  <div class="row">
    <!-- left column -->
    <?php
		$id_admin=$_SESSION['id_admin'];
		$query=$pdo->prepare("select*from tbl_admin where id_admin='$id_admin'");
		$query->execute();
		$tampil=$query->fetch();
		$nama=$tampil['nama'];
		$alamat=$tampil['alamat'];
		$tanggal_lahir=$tampil['tanggal_lahir'];
		$nomor_telp=$tampil['nomor_telp'];
		$username=$tampil['username'];
		$pass=$tampil['password'];
		$jabatan=$tampil['jabatan'];
		$level=$tampil['level'];
		$foto=$tampil['foto'];
	?>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="img/<?php echo $foto;?>" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Pilih jika ingin mengubah foto</h6>
        <form class="form-horizontal" method="post" enctype="multipart/form-data" name="postform" action="operator_update_foto.php">
        <input type="hidden" name="id_admin" value="<?php echo $id_admin;?>" />
        <input type="hidden" name="foto" value="<?php echo $foto?>" />
        <input type="file" name="foto" id="foto" class="text-center center-block well well-sm">
        <input class="btn btn-block btn-primary" id="simpan" name="simpan" value="Simpan" type="submit">
        </form>
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      <div class="alert alert-info alert-dismissable">
        <a class="panel-close close" data-dismiss="alert">×</a> 
        <i class="fa fa-coffee"></i>
        Selamat Datang <strong><?php echo $level;?></strong>. Anda dapat mengubah informasi pribadi anda.
      </div>
      <h3>Informasi Pribadi</h3>
      <form class="form-horizontal" method="post" enctype="multipart/form-data" name="postform" action="operator_update.php">
      	<input type="hidden" name="id_admin" value="<?php echo $id_admin;?>" />
    	<input type="hidden" name="pass" value="<?php echo $pass;?>" />
        <div class="form-group">
          <label class="col-lg-3 control-label">Nama:</label>
          <div class="col-lg-8">
            <input class="form-control" value="<?php echo $nama;?>" name="nama" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Alamat:</label>
          <div class="col-lg-8">
            <input class="form-control" value="<?php echo $alamat;?>" name="alamat" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Tanggal Lahir:</label>
          <div class="col-lg-8">
            <input class="form-control" value="<?php echo $tanggal_lahir;?>" name="tanggal_lahir" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label">Jabatan Organisasi:</label>
          <div class="col-lg-8">
            <input class="form-control" value="<?php echo $jabatan;?>" name="jabatan" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Username:</label>
          <div class="col-md-8">
            <input class="form-control"  value="<?php echo $username;?>" name="username" type="text">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Password:</label>
          <div class="col-md-8">
            <input type="text" class="form-control" id="password" name="password" placeholder="kosongkan jika tidak ada perubahan">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Nomor Telp:</label>
          <div class="col-md-8">
            <input class="form-control" type="text" name="nomor_telp" value="<?php echo $nomor_telp;?>" >
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" id="simpan" name="simpan" value="Simpan" type="submit">
            <span></span>
            <input class="btn btn-default" value="Batal" type="reset">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>