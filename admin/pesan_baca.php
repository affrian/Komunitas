<div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Baca Pesan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                <?php include"koneksi.php";
					$id_pesan=$_GET['id_pesan'];
					$ubah=$pdo->prepare("select * from tbl_kontak where id_pesan=$id_pesan");
					$ubah->execute();
					$tampil=$ubah->fetch();
				?>
                  <div class="mailbox-read-info">
                  <input type="hidden" name="id_admin" value="<?php echo $_GET['id_pesan'];?>" />
                    <h3><?php echo $tampil['pengirim'];?></h3>
                    <h5>Email: <?php echo $tampil['email'];?> <span class="mailbox-read-time pull-right"> Dikirim Pada :&nbsp;<?php echo $tampil['tanggal_posting'];?></span></h5>
                  </div><!-- /.mailbox-read-info -->
                  
                  <div class="mailbox-read-message">
                   
                    <p><i><blockquote><?php echo $tampil['isi_pesan'];?></blockquote></i></p>
                  
                  </div><!-- /.mailbox-read-message -->
                </div><!-- /.box-body -->
                
                <div class="box-footer">
                  <div class="pull-right">
                    <button class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                  </div>
                  <a href="pesan_hapus.php?id_pesan=<?php echo $_GET['id_pesan'];?>"onclick="return confirm('Apakah Anda yakin akan menghapus pesan dari <?php echo $tampil['pengirim'];?> ?')"><button class="btn btn-default"><i class="fa fa-trash-o"></i>&nbsp;Hapus</button></a>
                  
                </div><!-- /.box-footer -->
              </div><!-- /. box -->
            </div>