<?php
	$sql=mysql_query("select*from tbl_pesan where id_pesan='$_GET[id_pesan]'");
	//set sudah dibaca = kalau sudah dibaca
	$update = mysql_query("UPDATE tbl_pesan SET status='SUDAH DIBACA'
	WHERE id_pesan='$_GET[id_pesan]'");
?>
<div class="col-md-9">
	<div class="center">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Baca Pesan</h3>
                  <hr>
                  
                </div><!-- /.box-header -->
                <div class="box-body no-padding">
                <?php
					$data=mysql_fetch_array($sql)
				?>
                  <div class="mailbox-read-info">
                    <h3><b><?php echo $data['judul'];?></b></h3>
                    <h5>Dari: <a href="forum.php?page=forum_profil_teman&id_member=<?php echo $data['id_member']; ?>"><?php echo $data['pengirim'];?></a> <span class="mailbox-read-time pull-right"><?php echo $data['tanggal_kirim'];?> <?php echo $data['jam'];?></span></h5>
                  </div><!-- /.mailbox-read-info --><!-- /.mailbox-controls -->
                  <div class="mailbox-read-message">
                    
                    <p>
                    	<?php echo $data['isi_pesan'];?>
                    </p>
                    
                    <p>Wasalam,<br><?php echo $data['pengirim'];?></p>
                  </div><!-- /.mailbox-read-message -->
                </div><!-- /.box-body --><!-- /.box-footer -->
                <hr>
                <div class="box-footer">
                  <div class="pull-right"></div>
                  <a href="forum.php?page=forum_pesan_hapus&id_pesan=<?php echo $data['id_pesan'];?>" onclick="return confirm('Apakah Anda yakin akan menghapus pesan dari <?php echo $data['pengirim'];?>?')"><button class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button></a>
                  <a href="forum.php?page=forum_pesan_tulis&id_member=<?php echo $data['id_member']; ?>&tujuan=<?php echo $data['pengirim']; ?>">
                  <button class="btn btn-default"><i class="fa fa-reply"></i> Balas</button>
                  </a>
                </div><!-- /.box-footer -->
              </div><!-- /. box -->
            </div><!-- /.col -->
</div>            