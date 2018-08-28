<!--INFORMASI-->    
<div class="col-md-9">
    <div class="center">
    
	<div class="text-info">
    <?php
	$sql="select*from tbl_informasi order by id_informasi desc";
	$informasi=mysql_query($sql);
	?>
    <?php
	$record=mysql_fetch_array($informasi);
	?>
    	<h4><i class="fa fa-info-circle color"></i> INFORMASI</h4>
        <i class="fa fa-bookmark"></i> <?php echo $record['nama_kegiatan']; ?> &nbsp;
        <i class="fa fa-calendar"></i> <?php echo $record['tanggal']; ?> &nbsp; 
		<i class="fa fa-clock-o"></i> <?php echo $record['jam']; ?>  &nbsp;
        <i class="fa fa-share color"></i> <?php echo $record['tempat']; ?>  &nbsp;
    	<br>
    </div>
    </div>
    <br>
    <?php
	$pesan=mysql_query("select*from tbl_pesan where id_tujuan = '$id_member' and status='BELUM DIBACA'");
	$jumlah_pesan=mysql_num_rows($pesan);
?>
<?php
	if(!empty($jumlah_pesan))
		{
?>
	<div class="alert alert-block alert-warning">
    <p>
    	<strong><i class="fa fa-envelope"></i>&nbsp;
        	Ada <?php echo $jumlah_pesan;?> pesan masuk yang belum dibaca
        </strong>
        <a href="forum.php?page=forum_pesan"><u>Lihat Pesan</u></a>
        
    </p>
                    </div>
<?php
		}
	else
		{
		echo "";
		}
?>
</div>

<!--KONTEN-->
<!--DAFTAR KATEGORI-->
<div class="col-md-9">      
	<p>Mari berdiskusi dan berbagi ilmu membahas permasalahan untuk <code>kemajuan umat</code></p>
	<?php 	
	$sql="select*from tbl_kategori where id_kategori";
	$kategori=mysql_query($sql);
?>		
  <table class="table table-condensed table-hover">
    				<thead bgcolor="#18bc9c">
      				<tr>
        				<th>Nama Kategori</th>
        				<th>Topik </th>
                        <th>Dilihat</th>
        				<th>Keterangan</th>
      				</tr>
    				</thead>
    				
                    <tbody>
                    <?php
					
					
	while($record=mysql_fetch_array($kategori))
	{ 
	?>
      				<tr>
        				<td><a href="forum.php?page=forum_topik&id_kategori=<?php echo $record['id_kategori']; ?>"><?php echo $record['nama_kategori']; ?></a></td>
                        <?php
						$id=$record['id_kategori'];
                        $sql=mysql_query("select*from tbl_topik where id_kategori='$id'");
						$jml_topik=mysql_num_rows($sql);
						?>
        				<td><?php echo $jml_topik; ?></td>
                        <td><?php echo $record['dilihat']; ?></td>
        				<td>Di Publish Tanggal <?php echo $record['tanggal_posting']; ?></td>
      				</tr>
      <?php } ?>    
    				</tbody>
  				</table>
    	
     
</div>   

<!--STATISTIK FORUM-->    
<div class="col-md-3"> 
<!--Menghitung total data-->
<?php
	
	//menampilkan data dari tabel user dan topik
	$member= mysql_query("SELECT * FROM tbl_member");
	$topik=mysql_query("select*from tbl_topik where id_topik");	
	$komentar=mysql_query("select*from tbl_komentar where id_komentar");	
	//menghutung data
	$total_member= mysql_num_rows($member);
	$total_kategori= mysql_num_rows($kategori);
	$total_topik= mysql_num_rows($topik);
	$total_komentar= mysql_num_rows($komentar);
?>
 
    	<table class="table table-striped">
    		<thead bgcolor="#18bc9c">
      			<tr>
        			<th colspan="3">Statistik Forum</th>
        		</tr>
    		</thead>
    
    		<tbody>
      			<tr>
        			<td>Jumlah Member</td>
        			<td>:</td>
        			<td><?php echo $total_member;?></td>
        		</tr>
      
      			<tr>
        			<td>Total Kategori</td>
        			<td>:</td>
        			<td><?php echo $total_kategori;?></td>
        		</tr>
      			
                <tr>
        			<td>Total Topik</td>
        			<td>:</td>
        			<td><?php echo $total_topik;?></td>
        		</tr>
                <tr>
                  <td>Total Komentar</td>
                  <td>:</td>
                  <td><?php echo $total_komentar;?></td>
                </tr>
    		</tbody>
  		</table>
</div>