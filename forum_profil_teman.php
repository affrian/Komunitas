<div class="col-md-9">
    	<div class="center">
        	<h3>PROFIL ANGGOTA LAIN</h3>
            <hr>
  <?php
  	$query=mysql_fetch_array(mysql_query("select * from tbl_status where id_member='$_GET[id_member]' order by id_status desc"));
	
	$isi_status=$query['isi_status'];
  ?>
        
  <div class="bs-example">
    <?php
	$query=mysql_fetch_array(mysql_query("select * from tbl_member where id_member='$_GET[id_member]'"));
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
    <!-- NAVBAR CODE END -->
    
          <style>
/* USER PROFILE PAGE */
 .card {
    margin-top: 20px;
    padding: 30px;
    background-color: rgba(214, 224, 226, 0.2);
    -webkit-border-top-left-radius:5px;
    -moz-border-top-left-radius:5px;
    border-top-left-radius:5px;
    -webkit-border-top-right-radius:5px;
    -moz-border-top-right-radius:5px;
    border-top-right-radius:5px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.card.hovercard {
    position: relative;
    padding-top: 0;
    overflow: hidden;
    text-align: center;
    background-color: #fff;
    background-color: rgba(255, 255, 255, 1);
}
.card.hovercard .card-background {
    height: 130px;
}
.card-background img {
    -webkit-filter: blur(25px);
    -moz-filter: blur(25px);
    -o-filter: blur(25px);
    -ms-filter: blur(25px);
    filter: blur(25px);
    margin-left: -100px;
    margin-top: -200px;
    min-width: 130%;
}
.card.hovercard .useravatar {
    position: absolute;
    top: 15px;
    left: 0;
    right: 0;
}
.card.hovercard .useravatar img {
    width: 100px;
    height: 100px;
    max-width: 100px;
    max-height: 100px;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    border: 5px solid rgba(255, 255, 255, 0.5);
}
.card.hovercard .card-info {
    position: absolute;
    bottom: 14px;
    left: 0;
    right: 0;
}
.card.hovercard .card-info .card-title {
    padding:0 5px;
    font-size: 20px;
    line-height: 1;
    color: #262626;
    background-color: rgba(255, 255, 255, 0.1);
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
}
.card.hovercard .card-info {
    overflow: hidden;
    font-size: 12px;
    line-height: 20px;
    color: #737373;
    text-overflow: ellipsis;
}
.card.hovercard .bottom {
    padding: 0 20px;
    margin-bottom: 17px;
}
.btn-pref .btn {
    -webkit-border-radius:0 !important;
}

</style>

    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
        	<a class="preview" href="./foto/<?php echo $foto;?>" rel="prettyPhoto">
            <img alt="" src="./foto/<?php echo $foto;?>">
            </a>
        </div>
        <div class="card-info"> <span class="card-title"><?php echo $nama_depan;?><?php echo $nama_belakang; ?></span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Status</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Informasi</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                <div class="hidden-xs">Koleksi Foto</div>
            </button>
        </div>
    </div>

        <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <h3 align="center"><?php echo $isi_status;?></i></h3>
        </div>
        <div class="tab-pane fade in" id="tab2">
        <p>
                        	<a href="#" class="btn btn-social">
                   				<i class="fa fa-heart-o"></i>&nbsp; <?php echo $status;?>
                        	</a>
                            <a href="#" class="btn btn-social btn-email">
                   				<i class="fa fa-envelope-o"></i>&nbsp; <?php echo $email;?>
                   			</a>
                   			<a href="#" class="btn btn-social btn-phone">
                   				<i class="fa fa-phone-square"></i>&nbsp; <?php echo $nomor_telp;?>
                    		</a> 
                            <a href="#" class="btn btn-social btn-twitter">
                            	<i class="fa fa-twitter"></i>&nbsp; <?php echo $twiter;?>
                            </a>
                        	<a href="#" class="btn btn-social btn-facebook">
                            	<i class="fa fa-facebook-square"></i>&nbsp; <?php echo $facebook;?>
                            </a>
                            
                        </p>
          <p><b><?php echo $nama_depan;?>&nbsp;<?php echo $nama_belakang; ?></b> lahir pada <?php echo $tanggal_lahir;?>, alamat di <?php echo $alamat;?>. Saat ini <?php echo $nama_depan;?> bekerja sebagai <?php echo $pekerjaan;?> . <?php echo $nama_depan;?> mempunyai hobi <?php echo $hobi;?></p>
        </div>
        <div class="tab-pane fade in" id="tab3">
           <!-- CLIENT SLIDER STARTS-->
            <?php
				$data=mysql_query("select*from tbl_foto where id_member='$_GET[id_member]'");
			?> 
            <div class="bs-example">
<style>
.portfolio .thumbnail {
    position: relative;
}

.portfolio .thumbnail:hover {
    cursor: pointer;
}

.portfolio .caption {
    bottom: 0;
    position: absolute;
}

.portfolio .btn {
    opacity: 0.75;
}
</style>

  <div class="row portfolio">
	<?php
		while($record=mysql_fetch_array($data))
			{
	?>
    <div class="col-sm-6 col-md-3">
      <div class="thumbnail">
        <a class="preview" href="./foto/<?php echo $record['foto'];?>" rel="prettyPhoto">
                        <img class="img-responsive" src="./foto/<?php echo $record['foto'];?>" width="200" alt="<?php echo $record['keterangan']; ?> &nbsp; <?php echo $record['tanggal_posting']; ?>">
                        </a>
        
      </div>
    </div>
    <?php
			}
	?>
  </div>
  <!-- Modal -->
  
  
   </div>
        </div>
      </div>
    </div>
    
    
            
<script>
	$(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});
</script>   
       
    <!-- CONATINER END -->
          
        </div>
</div>
        
</div>