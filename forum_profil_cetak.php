<div class="col-md-9" >
    	<div class="center">
            
            <hr>
            <h3 align="center"><i class="fa fa-warning"></i>&nbsp;PERHATIAN</h3>
  <p>Jika anda membawa Cetakan Kartu ini pada event Pemuda PERSIS Cipedes, maka anda <code>tidak akan dipungut biaya</code>
  <br>
   <div align="center">
 <a href="#"><button type="submit" class="btn btn-primary" name="cetak" onClick="window.print();">CETAK ID CARD</button></a>
</div>
<br>
  <div align="center">
  <table width="524" height="325" border="1" bordercolor="#555A59">
  <tbody>
    <tr>
      <td><img src="asset/images/id_depan.jpg"></td>
    </tr>
  </tbody>
</table>

<br><br>
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
<table width="510" height="325" border="1px" bordercolor="#3B3B3B">
  <tbody style="border-color:#FFFFFF">
    <tr>
      <td height="90" colspan="4" align="center" valign="middle"><img src="asset/images/header_card.jpg"></td>
    </tr>
    
      <td width="167" rowspan="5" align="center" valign="middle">
      	<img class="img-rounded" width="150" height="180"  src="./foto/<?php echo $foto;?>">
      </td>
      <td width="110" height="40" align="left" valign="middle">&nbsp;<strong>Nama</strong></td>
      <td width="8" height="40" align="left" valign="middle">:</td>
      <td width="221" height="40" align="left" valign="middle">
	  	<?php echo $nama_depan; ?>&nbsp;<?php echo $nama_belakang; ?>
      </td>
    </tr>
    <tr>
      <td height="40" align="left" valign="middle" bgcolor="#FFFFFF">&nbsp;<strong>Alamat</strong></td>
      <td height="40" align="left" valign="middle" bgcolor="#FFFFFF">:</td>
      <td height="40" align="left" valign="middle" bgcolor="#FFFFFF"><?php echo $alamat;?></td>
    </tr>
    <tr>
      <td height="40" align="left" valign="middle">&nbsp;<strong>Tanggal Lahir</strong></td>
      <td height="40" align="left" valign="middle">:</td>
      <td height="40" align="left" valign="middle"><?php echo $tanggal_lahir;?></td>
    </tr>
    <tr>
      <td height="40" align="left" valign="middle">&nbsp;<strong>Pekerjaan</strong></td>
      <td height="40" align="left" valign="middle">:</td>
      <td height="40" align="left" valign="middle"><?php echo $pekerjaan;?></td>
    </tr>
    <tr>
      <td height="40" align="left" valign="middle">&nbsp;<strong>Nomor Telp</strong></td>
      <td height="40" align="left" valign="middle">:</td>
      <td height="40" align="left" valign="middle"><?php echo $nomor_telp;?></td>
    </tr>
  </tbody>
  <tfoot style="border-color:#18bc9c">
  	<tr>
      <td colspan="4" align="center" valign="middle"><p>Kartu ini wajib dibawa saat menghadiri kegiatan PC Pemuda PERSIS Cipedes</p></td>
      </tr>
  </tfoot>
</table>
  
        </div>
</div>
        
</div>
</body>
</html>