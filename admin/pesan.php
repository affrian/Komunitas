<div class="col-md-10">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Pesan Masuk</h3>
                  <div class="box-tools pull-right">
                    <div class="has-feedback">
                      <input type="text" class="form-control input-sm" placeholder="Cari Pesan"/>
                    </div>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body">
                	
                  <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button>
                    
                    <button class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                    <div class="pull-right">
                      1-50/200
                      <div class="btn-group">
                        <button class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                        <button class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                      </div><!-- /.btn-group -->
                    </div><!-- /.pull-right -->
                  </div>
                  <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                      <tbody>
                      	<?php 
						include"koneksi.php";
					  	$query=$pdo->prepare("select*from tbl_kontak order by tanggal_posting");
						$query->execute();

						while($tampil=$query->fetch()){
						
						$pengirim=$tampil['pengirim'];
						$email=$tampil['email'];
						$isi_pesan=$tampil['isi_pesan'];
						$tanggal_posting=$tampil['tanggal_posting'];
						?>
                        <tr>
                          <td class="mailbox-star"><a href="index.php?page=pesan_baca"><i class="fa fa-star text-yellow"></i></a></td>
                          <td class="mailbox-name"><a href="index.php?page=pesan_baca&id_pesan=<?php echo $tampil['id_pesan'];?>"><?php echo $pengirim;?></a></td>
                          <td class="mailbox-subject"><b><?php echo $email;?></b> &nbsp; - <small> <?php echo $isi_pesan;?></small></td>
                          <td class="mailbox-date"><?php echo $tanggal_posting;?></td>
                          <td><a href="pesan_hapus.php?id_pesan=<?php echo $tampil['id_pesan'];?>"onclick="return confirm('Apakah Anda yakin akan menghapus pesan dari <?php echo $tampil['pengirim'];?> ?')"><button class="btn btn-default"><i class="fa fa-trash-o"></i></button></a></td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table><!-- /.table -->
                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
               
              </div><!-- /. box -->
            </div>