<!--INFORMASI-->    
<div class="col-md-9">
    <div class="center">
	<div class="text-info">
    	<h4><i class="fa fa-info-circle color"></i> INFORMASI</h4>
        <i class="fa fa-bookmark"></i> PENGAJIAN RUTIN &nbsp; 
        <i class="fa fa-calendar"></i> RABU, 16.00 &nbsp;
        <i class="fa fa-share color"></i> Masjid Baiturrohman &nbsp;
    </div>
    </div>
    <br>
</div>

<!--KONTEN-->
<!--DAFTAR KATEGORI-->
<div class="col-md-9"> 
		<?php
			$query=mysql_fetch_array(mysql_query("select * from tbl_kategori where id_kategori='$_GET[id_kategori]'"));
			$kategori=$_GET['id_kategori'];
			$nama=$query['nama_kategori'];
			
			//mencari total view (dilihat)
			$lihat=mysql_fetch_array(mysql_query("select dilihat from tbl_kategori where id_kategori='$_GET[id_kategori]'"));
			$dilihat = $lihat ['dilihat'] + 1;
			$sql = "UPDATE tbl_kategori SET dilihat='$dilihat' WHERE id_kategori='$_GET[id_kategori]'";
			$hasil = mysql_query($sql, $koneksi);
		?>     
	<p>Daftar Topik Berdasarkan Kategori <code><?php echo $nama ; ?></code></p>
			<div class="bs-example">
  				<table class="table table-condensed">
    				<thead bgcolor="#18bc9c">
      				<tr>
        				<th>Judul Topik</th>
        				<th>Pengirim </th>
        				<th>Komentar</th>
        				<th>Keterangan</th>
      				</tr>
    				</thead>
    				
                    <tbody>
                    <?php 	
		$sql="select*from tbl_topik where id_kategori='$kategori'";
		$topik=mysql_query($sql);
				

		while($record=mysql_fetch_array($topik)){ 
		?>
      				<tr>
        				<td><a href="forum.php?page=forum_diskusi&id_topik=<?php echo $record['id_topik']; ?>"><?php echo $record['judul']; ?></a></td>
        				<td>
						<?php
		  				if($record['id_member']==$id_member)
							{
	      				?>
						<a href="forum.php?page=forum_profil&id_member=<?php echo $id_member;?>">
						<?php echo $record['pengirim'];?>
                        </a>
                        <?php
							}
						else
							{
						?>
                        <a href="forum.php?page=forum_profil_teman&id_member=<?php echo $record['id_member']; ?>">
						<?php echo $record['pengirim'];?>
                        </a>
                        <?php
							}
						?>
                        </td>
                        <?php
						$id=$record['id_topik'];
                        $sql=mysql_query("select*from tbl_komentar where id_topik='$id'");
						$jml_topik=mysql_num_rows($sql);
						?>
        				<td><?php echo $jml_topik;?></td>
        				<td>Diposting Pada <?php echo $record['tanggal_posting']; ?></td>
      				</tr>
                    <?php } ?>
      				
    				</tbody>
  				</table>
          		<a href="forum.php?page=forum_topik_tambah&nama_kategori=<?php echo $nama; ?>&id_kategori=<?php echo $kategori?>"><button type="submit" class="btn btn-primary">TAMBAH TOPIK</button></a>
        		
      </div>
    	</div>
     
</div>   

