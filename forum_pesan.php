<div class="col-md-9">
	<div class="center">

   	<div class="row">
		<div class="col-md-12">
        <!-- Nav tabs -->
        	<div class="card">
            	<ul class="nav nav-tabs" role="tablist">
                <?php
					$masuk=mysql_query("select*from tbl_pesan where id_tujuan='$id_member' and status='BELUM DIBACA' order by id_pesan desc");
					$keluar=mysql_query("select*from tbl_pesan where id_member='$id_member' order by id_pesan desc");
		  			$jumlah_masuk=mysql_num_rows($masuk);
					$jumlah_keluar=mysql_num_rows($keluar);
				?> 
                	<li role="presentation" class="active"><a href="#inbox" aria-controls="inbox" role="tab" data-toggle="tab"><strong>Pesan Masuk&nbsp;<span class="badge pull-right"><?php echo $jumlah_masuk;?></span></strong></a></li>
                    <li role="presentation"><a href="#outbox" aria-controls="outbox" role="tab" data-toggle="tab"><strong>Pesan Keluar&nbsp;<span class="badge pull-right"><?php echo $jumlah_keluar;?></span></strong></a></li>
                                        
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                	<div role="tabpanel" class="tab-pane active" id="inbox">
                    <?php include("forum_pesan_inbox.php"); ?>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="outbox">
                    <?php include("forum_pesan_outbox.php"); ?>
                    </div>
                    
                    
                </div>
		  </div>
      </div>
	</div>
        
        
	</div>    
</div>