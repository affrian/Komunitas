<link href="font/css/font-awesome.css" type="text/css" rel="stylesheet">
<header class="header">
	<div class="container">
		<nav class="navbar navbar-inverse" role="navigation">
        	<div class="navbar-header">
	            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
	            </button>
                <img src="asset/images/logo forum.jpg" height="65">
        	</div>
        	<!--/.navbar-header-->
	        <div id="main-nav" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav" id="mainNav">
		            <li><a href="forum.php" class="scroll-link">Home</a></li>
					<li><a href="forum.php?page=forum_profil" class="scroll-link">Profil</a></li>
					<li><a href="forum.php?page=forum_galeri" class="scroll-link">Galeri</a></li>
					<li><a href="forum.php?page=forum_teman" class="scroll-link">Anggota</a></li>
                    <li><a href="forum.php?page=forum_pesan" class="scroll-link">Pesan<span id="notifikasi"></span></a></li>
                    <li><a href="logout.php" onclick="return confirm('Hey <?php echo $nama_depan ;?>, Apakah Anda yakin akan keluar?')">Logout</a></li> 
              </ul>
	        </div>
	        <!--/.navbar-collapse-->
	    </nav>
	    <!--/.navbar-->
	</div>
	<!--/.container-->
</header>
<!--/.header-->

   