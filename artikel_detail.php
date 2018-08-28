<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Artikel | Pemuda PERSIS Cipedes</title>
    
    <!-- core CSS -->
    <!--Bootstrap-->  
<link rel="stylesheet" href="asset/css/bootstrap.css" />    

<!--CSS Penyesuaian-->
<link rel="stylesheet" href="asset/css/styles.css"/>

<!-- Font Awesome -->
<link href="asset/font/css/font-awesome.min.css" rel="stylesheet">

<!--Favicon-->
<link rel="icon" href="asset/ico/favicon.png">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

<style>
	#wrapper{
		padding-top:60px;
		padding-bottom:0px;
		margin-bottom:0px;
	}
	#konten{
		padding-top:90px;
	}
	.panel-footer{
		margin-top:20px;
		padding:10px;
		text-align:center;
		
	}
	.side {
    position: relative;
    padding: 15px 15px 15px;
    /* margin: 0 -15px 15px; */
    background-color: #18bc9c;
    /* box-shadow: inset 0 3px 6px rgba(0,0,0,.05); */
    border-color: #e5e5e5 #eee #eee;
    border-style: solid;
    border-width: 1px 1px;
	}
	
	.center {
    padding: 15px 15px 15px;
    /* margin: 0 -15px 15px; */
    background-color: #FFFFFF;
    /* box-shadow: inset 0 3px 6px rgba(0,0,0,.05); */
    border-color: #18bc9c #eee #eee;
    border-style: solid;
    border-width: 1px 1px;
	
	@media print {
	input.noPrint { display: none; }
	}



</style>


</head><!--/head-->

<body>
<?php include("koneksi.php"); ?>  
<?php include("navbar_artikel.php"); ?>  

<div id="konten"> 

  <!-- Page Content -->
    <div class="container">
    <div class="row">
<?php
	$sql="select*from tbl_artikel where id_artikel='$_GET[id_artikel]'";
	$artikel=mysql_query($sql);
	?>
    <?php
	$record=mysql_fetch_array($artikel);
	?>
            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->

                <!-- Title -->
                <h1><?php echo $record['judul_artikel'];?></h1>

                <!-- Author -->
                <p class="lead">
                    by <a href="#"><?php echo $record['pengirim']; ?></a>
                </p>
				
                <hr>

                <!-- Date/Time -->
                <!-- Preview Image -->
                <a class="preview" href="galeri/<?php echo $record['cover']; ?>" rel="prettyPhoto">
                <img class="img-responsive img-hover" src="galeri/<?php echo $record['cover']; ?>" alt="">
                </a>
                <hr>
                <p>
                	<i class="fa fa-clock-o"></i> Diposting pada <?php echo $record['tanggal']; ?>&nbsp; &nbsp; &nbsp;
                	<i class="fa fa-tag"></i> Kategori : <?php echo $record['kategori_artikel']; ?>
                </p>

                <hr>

               

                <!-- Post Content -->
                
                <p>
                	<?php echo $record['isi_artikel']; ?>
                </p>


                <!-- Blog Comments -->

                
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                  <div class="well">
    <?php
		$sql=mysql_query("select judul_artikel from tbl_artikel order by judul_artikel asc;");
	?>
                    <h4>Daftar Kategori</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                            <?php
								while($kategori=mysql_fetch_array($sql))
								{	
							?>
                                <li>
                                	<a href="#"><?php echo $kategori['judul_artikel'];?></a>
                                </li>
                           <?php
								}
						   ?>     
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                       
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Pengumuman</h4>
                    <p class="help-block">
                    	"Jika ada saran atau kritik tolong segera sampaikan pada menu kontak di halaman forum demi kenyamanan bersama"
                    </p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

       

    </div>
    <!-- /.container -->

</div>   

    


    <script src="asset/js/jquery.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
<div class="panel-footer">
	&copy; Copyright 2015 <strong><a href="#">PC Pemuda PERSIS Cipedes</a></strong>&nbsp;
</div>
</body>
</html>