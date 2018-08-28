<section id="galeri" class="page-section" >	
	<div class="container">
       <div class="card hovercard">
       
        <div class="useravatar">
        	
        <div class="card-info"> <span class="card-title"></span>
		<h2 align="center">GALERI FOTO</h2>
        	<p class="lead page-header" align="center">
            	Beberapa foto kegiatan pergerakan PC Pemuda PERSIS Cipedes
            </p>
        </div>
        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                <div class="hidden-xs">Kegiatan Kepemudaan</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-certificate" aria-hidden="true"></span>
                <div class="hidden-xs">Tentang PERSIS</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-cloud" aria-hidden="true"></span>
                <div class="hidden-xs">Lainnya</div>
            </button>
        </div>
    </div>
            
            <div class="well">
      <div class="tab-content">
        <div class="tab-pane fade in active" id="tab1">
          <!-- Page Content -->
        <div class="row">
		<?php
			$sql=mysql_query("select*from tbl_galeri where album='Kepemudaan' order by id_foto desc");
			while($foto=mysql_fetch_array($sql))
			{
		?>
           

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="preview thumbnail" href="galeri/<?php echo $foto['foto'];?>" rel="prettyPhoto">
                    <img width="960" height="350" src="galeri/<?php echo $foto['foto'];?>" alt="">
                </a>
            </div>
        <?php
			}
		?>    
    	</div>
    <!-- /.container -->
        </div>
        <div class="tab-pane fade in" id="tab2">
        <div class="row">
		<?php
			$sql=mysql_query("select*from tbl_galeri where album='Tentang PERSIS' order by id_foto desc");
			while($persis=mysql_fetch_array($sql))
			{
		?>
           

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="preview thumbnail" href="galeri/<?php echo $persis['foto'];?>" rel="prettyPhoto">
                    <img width="960" height="350" src="galeri/<?php echo $persis['foto'];?>" alt="">
                </a>
            </div>
        <?php
			}
		?>    
    	</div>
        </div>
        <div class="tab-pane fade in" id="tab3">
        <div class="row">
		<?php
			$sql=mysql_query("select*from tbl_galeri where album='Lain-lain' order by id_foto desc");
			while($other=mysql_fetch_array($sql))
			{
		?>
           

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="preview thumbnail" href="galeri/<?php echo $other['foto'];?>" rel="prettyPhoto">
                    <img width="960" height="350" src="galeri/<?php echo $other['foto'];?>" alt="">
                </a>
            </div>
        <?php
			}
		?>    
    	</div>  
        </div>
      </div>
    </div> 
            
    </div>
</section>