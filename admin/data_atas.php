 <?php session_start();
 		include("koneksi.php"); 
		$id_admin=$_SESSION['id_admin'];
		$query=$pdo->prepare("select*from tbl_admin where id_admin='$id_admin'");
		$query->execute();
		$tampil=$query->fetch();
		$nama=$tampil['nama'];
		$alamat=$tampil['alamat'];
		$tanggal_lahir=$tampil['tanggal_lahir'];
		$nomor_telp=$tampil['nomor_telp'];
		$username=$tampil['username'];
		$pass=$tampil['password'];
		$jabatan=$tampil['jabatan'];
		$level=$tampil['level'];
		$foto=$tampil['foto'];
	?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Control Panel PEMUDA PERSIS Cipedes</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />

        <!-- jvectormap -->
        <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- Date Picker -->
        <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
      
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
        
        

        <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<script type="text/javascript" src="ckeditor/config.js"></script>
        
        
        
     <!-- CUSTOM STYLE CSS -->
   <style>
.panel-order .row {
    border-bottom: 1px solid #ccc;
}

.panel-order .row:last-child {
    border: 0px;
}

.panel-order .row .col-md-1 {
    text-align: center;
    padding-top: 15px;
}

.panel-order .row .col-md-1 img {
    width: 100px;
    max-height: 100px;
}

.panel-order .row .row {
    border-bottom: 0;
}

.panel-order .row .col-md-11 {
    border-left: 1px solid #ccc;
}

.panel-order .row .row .col-md-12 {
    padding-top: 7px;
    padding-bottom: 7px;
}

.panel-order .row .row .col-md-12:last-child {
   
    color: #555;
    background: #efefef;
}

.panel-order .btn-group {
    margin: 0px;
    padding: 0px;
}

.panel-order .panel-body {
    padding-top: 0px;
    padding-bottom: 0px;
}

.panel-order .panel-deading {
    margin-bottom: 0;
}
</style>
<!--Foto Galeri-->
<link rel="stylesheet" href="../asset/css/prettyPhoto.css"/>
    </head>
    <body class="skin-blue">
   
    <?php include("session.php"); ?>
    <!-- header logo: style can be found in header.less -->
    <header class="header">
    <a href="index.html" class="logo">
    <!-- Add the class icon to your logo image or logo icon to add the margining -->
    <p><?php echo $level;?></p> 
    </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo $nama;?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="img/<?php echo $foto;?>" class="img-circle" alt="User Image" />
                                    <p>
                                     <?php echo $nama;?><br>
                                     <?php echo $jabatan;?>
                                        <small><?php echo $alamat;?></small>
                                        
                                    </p>
                                </li>
                                    <li class="user-body bg-light-blue">
                                        <a style="color:white" data-toggle="modal" href="index.php?page=operator_edit&id_admin=<?php if(isset($_GET['id_admin'])){ echo $_GET['id_admin']; }else{ echo $_SESSION['id_admin'];}?>">
                                        <i class="fa fa-cog fa-fw pull-right"></i>
                                            Edit Profil <?php echo $level;?> 
                                        </a>
                                    </li>
                                    

                                        <li class="divider"></li>

                                        <li>
                                            <a href="logout.php" onclick="return confirm('Hey <?php echo $nama;?> , apakah yakin akan keluar?')"><i class="fa fa-ban fa-fw pull-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </li>
                                
								
							</ul>
						</li>
                        
                    </ul>
				</div>
			</nav>
</header>