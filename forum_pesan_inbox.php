
<?php
	$sql=mysql_query("select*from tbl_pesan where id_tujuan='$id_member' order by id_pesan desc");
?>    	
    <div class="wrapper">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Pesan Masuk
          <?php
		  	$jumlah=mysql_num_rows($sql);
		  ?>  
          <small class="pull-right">Total Pesan :&nbsp;<?php echo $jumlah;?></small></h1>
        </section>
        <section class="content">
          <div class="row">
            <div class="col-sm-12">
              <div class="box box-primary">
                
                <br>
                <div class="box-body no-padding">
                 
                  <div class="table-responsive mailbox-messages">
                    <table class="table table-striped">
                    <tr>
<th style="width: 10px">#</th>
<th>Pengirim</th>
<th>Isi Pesan</th>
<th>Tanggal Kirim</th>
<th>Status</th>
<th style="width: 80px">Option</th>
</tr>
                      <tbody>
               <?php
			   	$no = 0; //variabel no untuk nomor urutnya.
			   	while($data=mysql_fetch_array($sql))
				{
					$no++; // ini sama saja dengan $no = $no + 1
			   ?>   
                        <tr>
                        <td><?php echo $no;?></td>
                        <?php
							$query=mysql_query("select*from tbl_member where id_member='$data[id_member]'");
							$pengirim=$data['id_member'];
						?>
                          <td class="mailbox-name">
						  <a href="forum.php?page=forum_profil_teman&id_member=<?php echo $pengirim; ?>">
						  <?php echo $data['pengirim'];?>
                          </a>
                          </td>
                          <td class="mailbox-subject"><a href="forum.php?page=forum_pesan_baca&id_pesan=<?php echo $data['id_pesan']?>"><b><?php echo $data['judul']; ?></b></a> -
                          <?php 
							$artikel = $data['isi_pesan']; 
							$potong_pesan = substr($artikel,0,50); //substr()
							echo $potong_pesan;
						  ?>
                          </td>
                          <td class="mailbox-date"><?php echo $data['tanggal_kirim']; ?></td>
                          <td align="center">
                          <?php
						  	if($data['status']=="BELUM DIBACA")
							{
						  ?>
                          <p class="label-danger" style="color:#FFFFFF"><?php echo $data['status']; ?></p>
                          <?php
							}
							else
							{
						  ?>
                          <p class="label-success" style="color:#FFFFFF"><?php echo $data['status']; ?></p>
                          <?php
							}
						  ?>
                          </td>
                          <td class="mailbox-date"><a href="forum.php?page=forum_pesan_hapus&id_pesan=<?php echo $data['id_pesan'];?>" onclick="return confirm('Apakah Anda yakin akan menghapus pesan dari <?php echo $data['pengirim'];?>?')"><i class="fa fa-trash-o"></i>&nbsp;Hapus</a></td>
                        </tr>
               <?php
				}
			   ?>         
                      </tbody>
                    </table><!-- /.table -->
                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
                
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      
    </div><!-- ./wrapper -->