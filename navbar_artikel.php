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
	            <a href="index.php" class="navbar-brand scroll-top logo"> <b>PEMUDA</b> PERSIS Cipedes </a>
        	</div>
        	<!--/.navbar-header-->
	        <div id="main-nav" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav" id="mainNav">
		            <li><a href="index.php" class="scroll-link">Home</a></li>
					<li class="active dropdown">
                    		<a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      		"dropdown" data-toggle="dropdown" href="#">Kategori <i class="fa fa-angle-down"></i>
                    	<ul class="dropdown-menu">
                        <?php
							include "koneksi.php";
							
							$sql=mysql_query("select * from tbl_artikel where id_artikel");
							
							while($data=mysql_fetch_array($sql))
							{
						?>
                          <li>
                              <a href=""><?php echo $data['kategori_artikel'];?></a>
                          </li>
                        <?php
							}
						?>  
                      </ul>
                    </li>
              </ul>
	        </div>
	        <!--/.navbar-collapse-->
	    </nav>
	    <!--/.navbar-->
	</div>
	<!--/.container-->
</header>
<!--/.header-->


