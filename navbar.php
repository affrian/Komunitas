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
                <img src="asset/images/logo.png" width="65" height="65">
	            <a href="#" class="navbar-brand scroll-top logo"><b>PEMUDA</b> PERSIS Cipedes</a>
        	</div>
        	<!--/.navbar-header-->
	        <div id="main-nav" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav" id="mainNav">
		            <li class="active"><a href="#home" class="scroll-link">Home</a></li>
					<li><a href="#profil" class="scroll-link">Profil</a></li>
					<li><a href="#galeri" class="scroll-link">Galeri</a></li>                    
					<li><a href="#contactUs" class="scroll-link">Kontak</a></li> 
                    <li><a href="artikel.php" class="scroll-link">Artikel</a></li>
					<li><a href="daftar.php" class="scroll-link">Daftar</a></li>
                    <li><a href="#forum" data-toggle="modal" class="scroll-link">Forum</a></li>
                    <!--<li><a href="forum/index.php" class="scroll-link">Forum</a></li>-->
              </ul>
	        </div>
	        <!--/.navbar-collapse-->
	    </nav>
	    <!--/.navbar-->
	</div>
	<!--/.container-->
</header>
<!--/.header-->

<div class="modal fade" id="forum" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal" method="post" action="login.php" enctype="multipart/form-data">
                        <div class="modal-header" style="background-color:#18bc9c">
                        	<h3 style="color:#FFFFFF" align="center"><i class="fa fa-lock icon-lg"></i> Form Login Forum</h3>
                        </div>
 
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="forum-username" class="col-lg-2 control-label">Email </label>
                                <div class="col-lg-8">
                                	<div class="input-group">
                    					<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    						<input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                  					</div>
                                </div>
                            </div>
 
                            <div class="form-group">
                                <label for="forum-password" class="col-lg-2 control-label">Password </label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                    					<span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    						<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                  					</div>
                                    <br>
                                    <button type="submit" name="login" class="btn btn-md btn-primary"><i class="fa fa-key"></i>&nbsp;Login</button>
                               </form> 
							   
                                <a href="index.php">
                        <button type="submit" name="daftar" class="btn btn-md btn-default"><i class="fa fa-sign-in"></i>&nbsp;Belum Punya Akun? Segera Daftar</button>
                        </a>    
                                </div>
                            </div>
                        </div>
						
						
                        
                        
                        <div class="modal-footer" >
                        <a class="btn btn-md btn-default" data-dismiss="modal">(x)</a>    
                        </div>
                    
                </div>
            </div>
        </div>
