
    <style type="text/css">
    	
                        

                        


/*-------------------
-----News Styles-----
---------------------*/    
.timeline{
    position:relative;
    margin-bottom:100px;
    z-index:1;
}

.timeline:before{
    display:block;
    content:"";
    position:absolute;
    width:50%;
    height:100%;
    left:1px;
    top:0;
    border-right:1px solid #18bc9c;
    z-index:-1;
} 

.timeline:after{
    display:block;
    content:"";
    position:absolute;
    width:50%;
    height:100px;
    left:1px;
    bottom:-105px;
    border-right:1px dashed #18bc9c;
    z-index:-1;
} 

.timeline .date-title{
    text-align:center;
    margin:70px 0 50px;
}

.timeline .date-title span{
    padding:15px 30px;
    font-size:21px;
    font-weight:400;
    color:#fff;
    background:#18bc9c;
    border-radius:5px;
}

.news-item {
    padding-bottom:45px;
}

.news-item.right {
    float:right;
    margin-top:40px;
}

.news-item .news-content {
    margin:20px 30px 0 0;
    position:relative;
    padding:30px;
    padding-left:100px;
    background:#FFFFFF;
    border-radius:10px;
    box-shadow:-5px 5px 0 rgba(0,0,0,0.08);
    -webkit-transition:all .3s ease-out;
    transition:all .3s ease-out;
}

.news-item:hover .news-content {
    background:#18bc9c;
    color:#fff;
}

.news-item.right .news-content {
    margin:20px 0 0 30px;
    box-shadow:5px 5px 0 rgba(0,0,0,0.08);
}

.news-item .news-content:after {
    display:block;
    content:"";
    position:absolute;
    top:50px;
    right:-40px;
    width:0px;
    height:0px;
    background:transparent;
    border:20px solid transparent;
    border-left:20px solid #f5f5f5;
    -webkit-transition:border-left-color .3s ease-out;
    transition:border-left-color .3s ease-out;
}

.news-item.right .news-content:after {
    position:absolute;
    left:-40px;
    right:auto;
    border-left:20px solid transparent;
    border-right:20px solid #f5f5f5;
    -webkit-transition:border-right-color .3s ease-out;
    transition:border-right-color .3s ease-out;
}

.news-item:hover .news-content:after {
    border-left-color:#18bc9c;
}

.news-item.right:hover .news-content:after {
    border-left-color:transparent;
    border-right-color:#18bc9c;
}

.news-item .news-content:before {
    display:block;
    content:"";
    position:absolute;
    width:20px;
    height:20px;
    right:-55px;
    top:60px;
    background:#18bc9c;
    border:3px solid #fff;
    border-radius:50%;
    -webkit-transition:background .3s ease-out;
    transition:background .3s ease-out;
}

.news-item.right .news-content:before {
    left:-55px;
    right:auto;
}

.news-content .date {
    position:absolute;
    width:80px;
    height:80px;
    left:10px;
    text-align:center;
    color:#18bc9c;
    -webkit-transition:color .3s ease-out;
    transition:color .3s ease-out;
}

.news-item:hover .news-content .date {
    color:#fff;
}

.news-content .date p{
    margin:0;
    font-size:48px;
    font-weight:600;
    line-height:48px;
}

.news-content .date small{
    margin:0;
    font-size:26px;
    font-weight:300;
    line-height:24px;
}

.news-content .news-title{
    font-size:24px;
    font-weight:300;
	color:#000000;
}

.news-content p{
    font-size:16px;
    line-height:24px;
    font-weight:300;
    letter-spacing:0.02em;
    margin-bottom:10px;
}

.news-content .read-more,
.news-content .read-more:hover,
.news-content .read-more:active,
.news-content .read-more:focus{
    padding:10px 0;
    text-decoration:none;
    font-size:16px;
    color:#7A7C7F;
    line-height:24px;
}

.news-item:hover .news-content .read-more,
.news-item:hover .news-content .read-more:hover,
.news-item:hover .news-content .read-more:active,
.news-item:hover .news-content .read-more:focus{
    color:#fff;
}

.news-content .read-more{
    -webkit-transition:padding .3s ease-out;
    transition:padding .3s ease-out;
}

.news-content .read-more:hover {
    padding-left:7px;
}

.news-content .read-more:after{
    content:'\f054';
    padding-left:15px;
    font-family:'FontAwesome';
    font-size:21px;
    line-height:21px;
    color:#18bc9c;
    vertical-align:middle;
    -webkit-transition:padding .3s ease-out;
    transition:padding .3s ease-out;
}

.news-content .read-more:hover:after{
    padding-left:20px;
}

.news-item:hover .news-content .read-more:after{
    color:#fff;
}

.news-content .news-media{
    position:absolute;
    width:80px;
    bottom:-45px;
    right:40px;
    border-radius:8px;
}

.news-content .news-media img{
    border-radius:8px;
    transform:scale(1);
    -webkit-transition:-webkit-transform .3s ease-out;
    transition:transform .3s ease-out;
}

.news-content .news-media a{
    display:block;
	text-decoration:none;
    background:#fff;
    border-radius:8px;
    overflow:hidden;
    -webkit-mask-image: -webkit-radial-gradient(circle, white, black);
}

.news-content .news-media a:hover img{
    -webkit-transform:scale(1.3);
    transform:scale(1.3);
}

.news-content .news-media a:after{
    content:'\f065';
    position:absolute;
    width:100%;
    top:0;
    left:0;
    font-family:FontAwesome;
    font-size:32px;
    line-height:80px;
    text-align:center;
    color:#18bc9c;
    -webkit-transform:scale(0);
    transform:scale(0);
    opacity:0;
    -webkit-transition:all .2s ease-out .1s;
    transition:all .2s ease-out .1s;
}

.news-content .news-media.video a:after{
    content:'\f04b';
}

.news-content .news-media a:hover:after{
    -webkit-transform:scale(1);
    transform:scale(1);
    opacity:1;
}

.news-content .news-media.gallery{
    box-shadow:4px 4px 0 #bbb,8px 8px 0 #ddd;
}
                                        
    </style>
    <section id="news" class="white-bg padding-top-bottom">
    	
			<div class="timeline">
				<div class="date-title">
					<span>Sejarah Organisasi Pemuda Persatuan Islam (PERSIS)</span>
				</div>
				<div class="row">
					<div class="col-sm-6 news-item">
						<div class="news-content">
							<div class="date">
                            <div class="news-media">
								<a class="preview" href="asset/images/524729_574922859207287_675200531_n.jpg" rel="prettyPhoto">
                                    <img class="img-responsive" src="asset/images/524729_574922859207287_675200531_n.jpg" alt="">
                                </a>
							</div>
								
							</div>
							<h2 class="news-title">Latar Belakang</h2>
							<div class="news-media">
                            	<a class="preview" href="asset/images/Ahmad Hasan.jpg" rel="prettyPhoto">
                                <img class="img-responsive" src="asset/images/Ahmad Hasan.jpg" alt="">
                                </a>
							</div>
							<p>
                            Perjuangan yang tidak melibatkan generasi muda adalah mandul. Sedang pemuda yang tidak terlibat dalam perjuangan adalah generasi pemutus garis sejarah. Perjuangan dakwah menyeru manusia kepada jalan Allah adalah perjuangan sepanjang sejarah. Keterputusan kaderisasi akan berakibat keterputusan perjuangan dakwah.
                            </p>
							
						</div>
					</div>
					
					<div class="col-sm-6 news-item right">
						<div class="news-content">
							<div class="date">
								<div class="news-media">
								<a class="preview" href="asset/images/logopemuda1.jpg" rel="prettyPhoto">
                                    <img class="img-responsive" src="asset/images/logopemuda1.jpg" alt="">
                                </a>
							</div>
							</div>
							<h2 class="news-title">Maksud dan Tujuan</h2>
							<div class="news-media gallery">
								<a class="preview" href="asset/images/M Natsir.jpg" rel="prettyPhoto">
									<img class="img-responsive" src="asset/images/M Natsir.jpg" alt="">
								</a>
								<a class="colorbox cboxElement" href="#"></a>
							</div>
							<p>
                            Kesadaran ini memotivasi para ulama Islam dalam organisasi Persatuan Islam (Persis) yang berpusat di Bandung untuk mengkader para pemuda Islam potensial pada zaman itu menjadi pejuang dakwah. Mereka harus mengajak kaum muslimin kembali kepada kemurnian al-Qur`an dan al-Sunnah.
                            </p>
							
						</div>
					</div>
				</div>
				
				<div class="row">
					<div class="col-sm-6 news-item">
						<div class="news-content">
							<div class="date">
								<div class="news-media video">
								<a class="preview" href="asset/images/Zamzam.jpg" rel="prettyPhoto">
									<img class="img-responsive" src="asset/images/Zamzam.jpg" alt="">
								</a>
							</div>
							</div>
							<h2 class="news-title">Pemrakarsa</h2>
							<div class="news-media video">
								<a class="preview" href="asset/images/M Isa Anshari.jpg" rel="prettyPhoto">
									<img class="img-responsive" src="asset/images/M Isa Anshari.jpg" alt="">
								</a>
							</div>
							<p>
                            Tuan A. Hassan, sebagai guru Persatuan Islam, telah berjasa menanamkan ruh perjuangan dan pemurnian Islam pada generasi muda waktu itu. Mereka adalah Mohammad Natsir, Fakhruddin al-Kahiri, E. Abdurrahman, O. Qomaruddin, dan Abdul Qadir Hassan.
                            </p>
							
						</div>
					</div>
					
					<div class="col-sm-6 news-item right">
						<div class="news-content">
							<div class="date">
								<div class="news-media">
								<a class="preview" href="asset/images/logo-persis2.png" rel="prettyPhoto">
                                    <img class="img-responsive" src="asset/images/logo-persis2.png" alt="">
                                </a>
							</div>
							</div>
							<h2 class="news-title">Gerakan Pembaharuan</h2>
							<div class="news-media gallery">
								<a class="preview" href="asset/images/Abdurrahman.jpg" rel="prettyPhoto">
									<img class="img-responsive" src="asset/images/Abdurrahman.jpg" alt="">
								</a>
								<a class="colorbox cboxElement" href="#"></a>
							</div>
							<p>
                            Semangat pembelaan terhadap Islam dari hinaan kaum penjajah-kristen mendorong Natsir dan kawan-kawan mendirikan Komite Pembela Islam di bawah bimbingan A. Hassan dan dalam naungan Persatuan Islam secara kelembagaan.
                            </p>
							
						</div>
					</div>
				</div>
				
				<div class="date-title">
					<span>Awal Mula Terbentuk dan Estapet Kepemimpinan</span>
				</div>
				<div class="row">	
					<div class="col-sm-6 news-item">
						<div class="news-content">
							<div class="date">
								<div class="news-media video">
								<a class="preview" href="asset/images/Abdul Latif M.jpg" rel="prettyPhoto">
									<img class="img-responsive" src="asset/images/Abdul Latif M.jpg" alt="">
								</a>
								</div>
								
							</div>
							<h2 class="news-title">Awal Berdiri</h2>
							<div class="news-media video">
								<a class="preview" href="asset/images/Shiddiq Amien.jpg" rel="prettyPhoto">
									<img class="img-responsive" src="asset/images/Shiddiq Amien.jpg" alt="">
								</a>
							</div>
                           
							<p>
                            Memperhatikan perkembanagn, perlu adanya wadah khusus pembinaan dan pembibitan para aktivis dakwah. Atas gagasan Fakhruddin al-Kahiri dan Kemas Ahmad, para pemuda tersebut mengadakan rapat pembentukan wadah pergerakan pemuda di bawah Persis. Maka secara resmi berdirilah Pemuda Persatuan Islam pada tanggal 22 Maret 1936 di Bandung sebagai organisasi otonom dari Persis.
                            </p>
                             
							
						</div>
					</div>
					
					<div class="col-sm-6 news-item right">
						<div class="news-content">
							<div class="date">
								
							</div>
							<h2 class="news-title">Kepemimpinan</h2>
                            <div class="news-media video">
								<a class="preview" href="asset/images/Maman Abdurrahman.jpg" rel="prettyPhoto">
									<img class="img-responsive" src="asset/images/Maman Abdurrahman.jpg" alt="">
								</a>
							</div>
							<p>
Kepemimpinan pertama adalah masa Djoedjoe Danuwikarta, Rusyad Nurdin, dan Eman Syar’an (th. 1936-1942). Selanjutnya oleh A. Latif Mukhtar hingga 1956. Yahya Wardi melanjutkan sampai tahun 1962. Hingga tahun 1967 dipimpin oleh Suraedi. Empat tahun kemudian, tahun 1967 – 1981, dipimpin oleh Yaman AS. Kemudian dilanjutkan oleh Ikin Sodikin sampai tahun 1990. Pada kepemimpinan tahun 1990 – 1995, Pemuda Persis dipegang oleh E. Muchtar ZA. Lima tahun kemudian dipimpin oleh Atif Latiful Hayat. Tahun 2000, jabatan ketua dipegang oleh Uus Muhammad Ruhiyat. Selanjutnya, Muktamar di Pondok Gede Bekasi mengamanatkan kepemimpian kepada Jeje Jaenudin Amsari hingga 2010. Kini, berdasarkan Muktamar 2010 di Rajapolah Tasikmalaya, Pemuda Persis diamanahkan kepad Tiar Anwar Bachtiar hingga 2015.
                            </p>
							
						</div>
					</div>
				</div>
			</div>
		
	</section>
				                                                      
