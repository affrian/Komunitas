<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>FORMULIR PENDAFTARAN ANGGOTA</title>
    <!-- BOOTSTRAP STYLE SHEET -->
    <link href="asset/css/bootstrap.css" rel="stylesheet" />
    <link href="asset/font/css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONT FOR BETTER FONT STYLE -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css' />
     <!-- CUSTOM STYLE CSS -->
    <style type="text/css">
        body {
            background-color:#f4f4f4;
             font-family: 'Open Sans Condensed', sans-serif;
             font-size:17px;
        }
      
        .panel-set {
            border-radius:0px;
        }
    </style>
</head>
<body>
    <div class="container back">
    
            <div class="row text-center pad-top">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <img src="assets/img/vivaldi-font-logo.png" alt=""  />
                    <br /><br />
                </div>
                
                </div>         
              
            <!-- ROW END -->
        <div class="row ">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="panel panel-primary panel-set">
                            <div class="panel-heading">
                            <center>
                             Formulir Pendafraran Anggota <br>
                             <b>PC Pemuda PERSIS Cipedes </b>
                            </center> 
                            </div>
                    <form method="post" action="daftar_simpan.php">        
                            <div class="panel-body"> 
                    <label>Nama Depan</label>
                    <input type="text" class="form-control" name="nama_depan" id="nama_depan" required >
                    <label>Nama Belakang</label>
                    <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" required>
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                    <label>Alamat </label>
                    <input type="text" class="form-control" name="alamat" id="alamat" required>
                    <label>Tanggal Lahir</label>
                    <input type="text" class="form-control col-sm-3" name="tanggal" id="tanggal" required>
                    <br>
                    <label>Nomor Telp</label>
                    <input type="text" class="form-control col-sm-3" name="nomor_telp" id="nomor_telp" required>
                    <br>
                    <label>Tujuan mengikuti kegiatan</label>
                    <textarea name="tujuan" id="tujuan" rows="3" cols="35"></textarea>
                                <hr />
                    <button type="submit" name="daftar" id="daftar" class="btn btn-primary"><i class="fa fa-check-square-o"></i>&nbsp;DAFTAR</button>
                    <hr /> 
                    <p class="small" align="center">
                        <code>Harus</code> <u>dicetak</u> dan <u>dibawa</u> pada saat <strong>ma'ruf</strong> <br>
                        Untuk jadwal kegiatan bisa dilihat pada halaman informasi atau bisa hubungi sekretariat 
                        PC Pemuda PERSIS Cipedes 				
                    </p>
                        <a href="index.php" class="btn btn-default center-block">Kembali ke halaman utama</a>    
                                

                    </div>
   
					
                    </form>
   
                            </div>
                        </div>
                </div>
         <!-- ROW END -->
          
    </div>
    <!-- CONATINER END -->

    <!-- REQUIRED SCRIPTS FILES -->
    <!-- CORE JQUERY FILE -->
    <script src="asset/js/jquery-1.8.2.min.js"></script>
    <!-- REQUIRED BOOTSTRAP SCRIPTS -->
    <script src="asset/js/bootstrap.js"></script>
</body>

</html>
