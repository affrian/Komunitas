
        <?php
			$query=mysql_query("select*from tbl_member order by nama_depan asc");
			while($record=mysql_fetch_array($query))
			{
		?>
  		<div class="media">
        	<a class="pull-left" href="javascript:;">
            	<img class="img-rounded" src="./foto/<?php echo $record['foto']; ?>" width="80" height="80" alt="">
            </a>
            <div class="media-body">
            	<h4 class="media-heading">
                	<a href="forum.php?page=forum_profil_teman&id_member=<?php echo $record['id_member']; ?>"><?php echo $record['nama_depan']; ?>&nbsp;<?php echo $record['nama_belakang']; ?></a> 
                    
        <?php
        //Menyesuaikan gambar / avatar
		$user = $record['id_member'];
		$status=mysql_fetch_array(mysql_query("select * from tbl_status where id_member='$user' order by id_status desc"));
		?>
                    <i class="fa fa-calendar"></i> <?php echo $status['tanggal_status']; ?> &nbsp; 
                    <i class="fa fa-clock-o"></i>&nbsp; <?php echo $status['jam']; ?>
                    
                 </h4>
                 <p>
                 	<blockquote><?php echo $status['isi_status']; ?></blockquote>
                 </p>
                    <!--end media-->
                  </div>
                </div>
          <?php
			}
		  ?>
    	</div>