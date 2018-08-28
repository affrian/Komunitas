<div class="col-md-9">
    	<div class="center">
        	<h3>UPDATE INFORMASI PRIBADI</h3>
            <hr>
  <p>Anda bisa <code>mengubah</code> informasi pribadi anda
  <div class="bs-example">
    <form class="form-horizontal" method="post" enctype="multipart/form-data"name="postform" action="forum.php?page=forum_profil_update&id_member=<?php if(isset($_GET['id_member'])){ echo $_GET['id_member']; }else{ echo $_SESSION['id_member'];}?>">
    <?php
		
	$query=mysql_fetch_array(mysql_query("select * from tbl_member where id_member='$id_member'"));

	$nama_depan=$query['nama_depan'];
	$nama_belakang=$query['nama_belakang'];
	$email=$query['email'];
	$tanggal_lahir=$query['tanggal_lahir'];
	$status=$query['status'];
	$alamat=$query['alamat'];
	$pekerjaan=$query['pekerjaan'];
	$hobi=$query['hobi'];
	$nomor_telp=$query['nomor_telp'];
	$twiter=$query['twiter'];
	$facebook=$query['facebook'];
	$pass=$query['password'];
	$foto=$query['foto'];
	?>
    
      <div class="form-group">
      	<input type="hidden" name="id_member" value="<?php echo $id_member;?>" />
    	<input type="hidden" name="pass" value="<?php echo $pass;?>" />
    	<input type="hidden" name="foto" value="<?php echo $foto?>" />
        <label for="inputnamadepan" class="col-sm-2 control-label">Nama Depan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama_depan" name="nama_depan" value="<?php echo $nama_depan;?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputnamabelakang" class="col-sm-2 control-label">Nama Belakang</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nama_belakang" name="nama_belakang" value="<?php echo $nama_belakang; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputemail" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputpassword" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="password" name="password" placeholder="Kosongkan password jika tidak ada perubahan">
        </div>
      </div>
      <div class="form-group">
        	<label for="inputtanggal" class="col-sm-2 control-label">Tanggal</label>
        <div class="col-sm-5">
        	<input type="date" class="form-control" id="tanggal_lahi" name="tanggal_lahir" value="<?php  echo $tanggal_lahir;?>">   
        </div>
        <div class="col-md-2">
        <a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal_lahir);return false;" ><img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" width="34" height="29" border="0" alt=""></a>	        
        </div>
      </div>
      <div class="form-group">
        <label for="inputstatus" class="col-sm-2 control-label">Status</label>
        <div class="col-sm-3">
          <select name="status">
          	<option value="0">--Silahkan dipilih--
            <option value="lajang" <?php if($status=='lajang'){ echo "selected='selected'";} ?>>Lajang
            <option value="pacaran" <?php if($status=='pacaran'){ echo "selected='selected'";} ?>>Pacaran
            <option value="menikah" <?php if($status=='menikah'){ echo "selected='selected'";} ?>>Menikah
            <option value="duda" <?php if($status=='duda'){ echo "selected='selected'";} ?>>Duda
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="inputalamat" class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
        	<textarea name="alamat" id="alamat" rows="3" cols="50"><?php echo $alamat;?></textarea>
        </div>
      </div>
      <div class="form-group">
        <label for="inputnomor" class="col-sm-2 control-label">Nomor HP</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="nomor_telp" name="nomor_telp" value="<?php echo $nomor_telp;?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputtwiter" class="col-sm-2 control-label">Twiter</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="twiter" id="twiter" value="<?php echo $twiter; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputfacebook" class="col-sm-2 control-label">Facebook</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="facebook" id="facebook" value="<?php echo $facebook; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputpekerjaan" class="col-sm-2 control-label">Pekerjaan</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" value="<?php echo $pekerjaan; ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="inputhobi" class="col-sm-2 control-label">Hobi</label>
        <div class="col-sm-10">
          <textarea name="hobi" id="hobi" rows="3" cols="50"><?php echo $hobi; ?></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-10"></div>
      </div>
      <div class="form-group">
        <label for="inputfoto" class="col-sm-2 control-label">Foto</label>
        <div class="col-sm-10">
        <p class="help-block">Ukuran file <code>maksimal 25 Mb</code>
        <input type="file" id="foto" name="foto"> <?php echo $foto;?></p>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" name="simpan" class="btn btn-primary" onclick="return confirm('Hey <?php echo $nama_depan;?> , yakin ingin memperbaharui informasi anda?')">SIMPAN</button>
        </div>
      </div>
  </div><!-- /.bs-example -->
  </form>          
        </div>
</div>
        
</div>
<!--  PopCalendar(tag name and id must match) Tags should not be enclosed in tags other than the html body tag. -->
<iframe width=174 height=189 name="gToday:normal:.calender/agenda.js" id="gToday:normal:.calender/agenda.js" 
src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>