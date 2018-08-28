<section id="contactUs" class="page-section">
	<div class="container">
    
		<div class="row">
                <div class="heading text-center">
								<!-- Heading -->
								<h2>Kontak Kami</h2> 
								<p>Kami menerima pertanyaan, kritik atau saran yang membangun untuk kemaslahatan bersama</p>
							</div>
						

					<div class="row mrgn30">
                        				<div class="col-sm-4">
									<h4>Alamat:</h4>
									<address>
										Kantor Sekretariat PC Pemuda PERSIS Cipedes<br>
										Jln. R.E. Martadinata No. 95<br>
										Cipedes Kota Tasikmalaya<br>
									</address>
									<h4>Telepon</h4>
									<address>
										0265-340496<br>
									</address>
								</div>
								<form method="post" action="kontak_simpan.php" id="contactfrm" role="form">

									<div class="col-sm-4"> 
										<div class="form-group">
											<label for="nama">Nama</label>
											<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukan nama" required title="Silahkan masukan nama anda">
										</div>
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" class="form-control" name="email" id="email" placeholder="Masukan Email" title="Silahkan masukan alamat email anda yang benar">
										</div>
										<div class="form-group">
											<label for="telepon">Telepon</label>
											<input class="form-control required digits" type="tel" id="nomor_telp" name="nomor_telp" size="30" value="" placeholder="Masukan nomor telepon" >
										</div>
									</div>
									<div class="col-sm-4">
										<div class="form-group">
											<label for="komentar">Pesan</label>
											<textarea name="pesan" class="form-control" id="pesan" cols="3" rows="5" placeholder="Silahkan masukan pesan anda" title="Silahkan masukan pesan anda"></textarea>
										</div>	
										<button name="kirim" type="submit" class="btn btn-lg btn-primary" id="submit"> Kirim</button>		
										<div class="result"></div>										
									</div>                        									
								</form>
							</div>
        </div>
	<!--/.container-->
</section>