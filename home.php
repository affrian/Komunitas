<div id="#top"></div>
<section id="home" class="page-section">
    <div class="banner-container">
        <div class="bannerOverlay"></div>
            <div class="container banner-content">
               <div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2>Alloh Ghoyaatunaa</h2>
					<p>Allah adalah Tujuan Kami</p>
				</div>
				<div class="da-slide">
					<h2>Rasululloh Qudwatunaa</h2>
					<p>Rasululloh Teladan Kami</p>
				</div>
				<div class="da-slide">
					<h2>Al-Qur'an Dusturunaa</h2>
					<p>Al-Qur'an Pedoman Hidup Kami</p>
				</div>
				<div class="da-slide">
					<h2>Al-Jihaad sabiilunaa</h2>
					<p>Jihad adalah Jalan Juang Kami</p>
				</div>
                <div class="da-slide">
					<h2>Al-Maut Fii Saabiilillah Asma Amaanina</h2>
					<p>Mati di Jalan Allah adalah Cita-cita kami tertinggi</p>
				</div>
				<nav class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
	    </div>
    </div>		
    <br>
	<section class="sub-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2 align="center"  style="font-size:24px"><i class="fa fa-info-circle color"></i>&nbsp;INFORMASI KEGIATAN</h2>
            <?php
				$sql="select*from tbl_informasi order by id_informasi desc";
				$informasi=mysql_query($sql);
			?>
    		<?php
			$record=mysql_fetch_array($informasi);
			?>
            <p align="center">
            	<i class="fa fa-bookmark"></i> <?php echo $record['nama_kegiatan']; ?>&nbsp; &nbsp; 
        		<i class="fa fa-calendar"></i> <?php echo $record['tanggal']; ?> &nbsp; &nbsp;
				<i class="fa fa-clock-o"></i> <?php echo $record['jam']; ?>  &nbsp; &nbsp;
        		<i class="fa fa-share color"></i> <?php echo $record['tempat']; ?>  &nbsp;
            </p>
          </div>
        </div>
      </div><!-- END container -->
    </section>
    <!--/.container-->
</section> 