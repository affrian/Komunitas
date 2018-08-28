<div class="col-md-9">
    	<div class="center">
        	<h3>INFORMASI PRIBADI</h3>
            <hr>
  <p>Tulis sesuatu untuk <code>dibagikan</code> kepada anggota lainnya
  <?php
  	$query=mysql_fetch_array(mysql_query("select * from tbl_status where id_member='$_SESSION[id_member]' order by id_status desc"));
	
	$status=$query['isi_status'];
  ?>
  <form role="form" method="post" action="forum_profil_updatestatus.php">
  		<input type="hidden" name="id_member" value="<?php echo $_SESSION['id_member'];?>" />
        
        <textarea class="form-control" name="status" id="status" rows="3" required><?php echo $status;?></textarea>
    	<button type="submit" name="update" class="btn btn-primary pull-right"><i class="fa fa-edit">&nbsp;UPDATE</i></button>
        </form>

                        <br>
  <div class="bs-example">
  <br>
    
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
	$foto=$query['foto'];
	$nomor_telp=$query['nomor_telp'];
	$twiter=$query['twiter'];
	$facebook=$query['facebook'];
	?>
    <table class="table table-striped">
    <tr>
      <td width="113"><strong>Nama Depan</strong></td>
      <td width="1">&nbsp;</td>
      <td width="271"><span class="style1"><?php echo $nama_depan; ?></span></td>
    </tr>
      <tr>
      <td width="113"><strong>Nama Belakang</strong></td>
      <td width="1">&nbsp;</td>
      <td width="271"><span class="style1"><?php echo $nama_belakang; ?></span></td>
    </tr>
    <tr>
      <td><strong>Email</strong></td>
      <td>&nbsp;</td>
      <td><span class="style1"><?php echo $email; ?></span></td>
    </tr>
    <tr>
      <td><strong>Tanggal Lahir</strong></td>
      <td>&nbsp;</td>
      <td><span class="style1"><?php echo $tanggal_lahir; ?></span></td>    
    </tr>
    <tr>
      <td><strong>Status</strong></td>
      <td>&nbsp;</td>
      <td><span class="style1"><?php echo $status; ?></span></td>
    </tr>
    <tr>
      <td><strong>Alamat</strong></td>
      <td>&nbsp;</td>
      <td>
        <span class="style1"><?php echo $alamat;?></span>      </td>
    </tr>
    <tr>
      <td><strong>Nomor Telp</strong></td>
      <td>&nbsp;</td>
      <td>
        <span class="style1"><?php echo $nomor_telp;?></span>      </td>
    </tr>
    <tr>
      <td><strong>Twiter</strong></td>
      <td>&nbsp;</td>
      <td>
        <span class="style1"><?php echo $twiter;?></span>      </td>
    </tr>
    <tr>
      <td><strong>Facebook</strong></td>
      <td>&nbsp;</td>
      <td>
        <span class="style1"><?php echo $facebook;?></span>      </td>
    </tr>
    <tr>
      <td><strong>Pekerjaan</strong></td>
      <td>&nbsp;</td>
      <td>
        <span class="style1"><?php echo $pekerjaan;?></span>      </td>
    </tr>
    <tr>
      <td><strong>Hobi</strong></td>
      <td>&nbsp;</td>
      <td>
        <span class="style1"><?php echo $hobi;?></span>      </td>
    </tr>
    <tr>
      <td colspan="3">
      	<a href="forum.php?page=forum_profil_cetak&id_member=<?php if(isset($_GET['id_member'])){ echo $_GET['id_member']; }else{ echo $_SESSION['id_member'];}?>" class="scroll-link"><button type="submit" class="btn btn-primary" name="cetak">LIHAT ID CARD</button></a>
      </td>

    </tr>
    
    </table>       
        </div>
</div>
        
</div>
