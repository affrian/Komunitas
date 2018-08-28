<style>
.comments .media-heading {
    margin-top: 25px;
}

.comments .comment-info {
    margin-left: 6px;
    margin-top: 21px;
}

.comments .comment-info .btn {
    font-size: 0.8em;
}

.comments .comment-info .fa {
    line-height: 10px;
}

.comments .media-body p {
    position: relative;
    background: #F7F7F7;
    padding: 15px;
    margin-top: 50px;
}

.comments .media-body p::before {
    background-color: #F7F7F7;
    box-shadow: -2px 2px 2px 0 rgba( 178, 178, 178, .4 );
    content: "\00a0";
    display: block;
    height: 30px;
    left: 20px;
    position: absolute;
    top: -13px;
    transform: rotate( 135deg );
    width:  30px;
}

.white {
    color: #fff;
}
</style>
<div class="col-md-9">
    	<div class="center">
        	<h3>Hasil Pencarian</h3>
            <div id="header">
<?php                    
if ((isset($_POST['cari'])) AND ($_POST['search'] <> "")) 
{
  $search = $_POST['search'];
  $sql = mysql_query("SELECT * FROM tbl_member WHERE nama_depan or nama_belakang or email LIKE '%$search%' ") or die(mysql_error());
  //menampilkan jumlah hasil pencarian
  $jumlah = mysql_num_rows($sql); 
  if ($jumlah > 0) {
?> 	
<h2>
<small>
	Jumlah data yang sesuai dengan kata "<code><?php echo $search;?></code>" ada :&nbsp;<?php echo $jumlah;?> data
</small>
</h2>
<?php
  }
}
  ?>
            </div>
            <hr>
<div class="row">
  <div class="col-lg-12 col-sm-12 col-xs-12">
    <?php
	while($record=mysql_fetch_array($sql))
	{
	?>            

    <ul class="media-list comments">
      <li class="media">
        <a class="pull-left" href="#">
        <img class="media-object img-circle img-thumbnail" src="./foto/<?php echo $record['foto']; ?>" width="64" alt="foto">
        </a>
        <div class="media-body">
          <h4 class="media-heading pull-left">
          <?php
		  	if($record['id_member']==$id_member)
				{
	      ?>
          <a href="forum.php?page=forum_profil&id_member=<?php echo $id_member;?>"><?php echo $record['nama_depan']; ?>&nbsp;<?php echo $record['nama_belakang']; ?>
          </a>
          <?php
				}
			else
				{
		  ?>
          <a href="forum.php?page=forum_profil_teman&id_member=<?php echo $record['id_member']; ?>"><?php echo $record['nama_depan']; ?>&nbsp;<?php echo $record['nama_belakang']; ?>
          </a>
          <?php
				}
		  ?>
          </h4>
          <?php
        //Menyesuaikan gambar / avatar
		$user = $record['id_member'];
		$status=mysql_fetch_array(mysql_query("select * from tbl_status where id_member='$user' order by id_status desc"));
		?>
          <div class="comment-info pull-left">
            <div class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="<?php echo $record['nomor_telp']; ?>"><i class="fa fa-phone"></i></div>
            <?php
				if($record['id_member']!=$id_member)
				{
			?>
            <a href="forum.php?page=forum_pesan_tulis&id_member=<?php echo $record['id_member']; ?>&tujuan=<?php echo $record['nama_depan']; ?><?php echo $record['nama_belakang']; ?>">
            <div class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" title="Mengirim Pesan">
            <i class="fa fa-envelope white"></i>
            </div>
            </a>
            <?php
				}
			?>
            <?php
				if(!empty($status['isi_status']))
				{
			?>
            <i class="fa fa-calendar"></i> <?php echo $status['tanggal_status']; ?> &nbsp;  
            <i class="fa fa-clock-o"></i>&nbsp; <?php echo $status['jam']; ?>
            
          </div>
          <br class="clearfix">
          <p class="well"><?php echo $status['isi_status']; ?></p>
          <?php
	      	}
		  ?>
        </div>
      </li>
      
      
    </ul>
    <?php
			}
		  ?>
  </div>
  
</div>

            
            
        </div>    
</div>
        
        