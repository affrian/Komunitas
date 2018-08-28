       <div class="wrapper row-offcanvas row-offcanvas-left">
<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
<!-- Sidebar user panel -->
<div class="user-panel">
<div class="pull-left image">
<img src="img/<?php echo $foto;?>" class="img-circle" alt="User Image" />
</div>
<div class="pull-left info">
<p>Hello, <?php echo $nama;?></p>
</div>
</div>
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu">
<li>
<a href="index.php">
<i class="fa fa-dashboard"></i> <span>Menu Utama</span>
</a>
</li> 
<li>
<a href="index.php?page=topik&id_admin=<?php if(isset($_GET['id_admin'])){ echo $_GET['id_admin']; }else{ echo $_SESSION['id_admin'];}?>" class="scroll-link"> <i class="fa fa-comment"></i> <span>Topik Pembahasan Forum</span></a>
</li>
<li>
<a href="index.php?page=operator&id_admin=<?php if(isset($_GET['id_admin'])){ echo $_GET['id_admin']; }else{ echo $_SESSION['id_admin'];}?>" class="scroll-link"> <i class="fa fa-shield"></i> <span>Operator</span></a>
</li>
<li>
<a href="index.php?page=member&id_admin=<?php if(isset($_GET['id_admin'])){ echo $_GET['id_admin']; }else{ echo $_SESSION['id_admin'];}?>" class="scroll-link"> <i class="fa fa-users"></i> <span>Member</span></a>
</li>
<li>
<a href="index.php?page=informasi&id_admin=<?php if(isset($_GET['id_admin'])){ echo $_GET['id_admin']; }else{ echo $_SESSION['id_admin'];}?>" class="scroll-link">
<i class="fa fa-info"></i> <span>Informasi</span>
</a>
</li>
<li>
<a href="index.php?page=artikel&id_admin=<?php if(isset($_GET['id_admin'])){ echo $_GET['id_admin']; }else{ echo $_SESSION['id_admin'];}?>" class="scroll-link">
<i class="fa fa-paperclip"></i> <span>Artikel</span>
</a>
</li>
<li>
<a href="index.php?page=galeri&id_admin=<?php if(isset($_GET['id_admin'])){ echo $_GET['id_admin']; }else{ echo $_SESSION['id_admin'];}?>" class="scroll-link">
<i class="fa fa-camera-retro"></i> <span>Galeri Foto</span>
</a>
</li>
<li>
<a href="index.php?page=pesan&id_admin=<?php if(isset($_GET['id_admin'])){ echo $_GET['id_admin']; }else{ echo $_SESSION['id_admin'];}?>" class="scroll-link">
<i class="fa fa-inbox"></i> <span>Pesan</span>
</a>
</li>
<li>
<a href="logout.php" onclick="return confirm('Hey <?php echo $nama;?> , apakah yakin akan keluar?')">
<i class="fa fa-sign-out"></i> <span>Logout</span>
</a>
</li>      
</ul>
</section>
<!-- /.sidebar -->
</aside>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
<!-- Content Header (Page header) -->
<section class="content-header">
<h1>
SELAMAT DATANG DI HALAMAN PENGATURAN WEBSITE DAN FORUM
</h1>

</section>
<!-- Main content -->
<section class="content">