<?php session_start();

if(isset($_SESSION['id_member'])){

	include "koneksi.php";
	
	if(isset($_GET['id_member'])){
		$id_member=$_GET['id_member'];
	}
	
	if(empty($_GET['id_member'])){
		$id_member=$_SESSION['id_member'];
	}

	$query=mysql_fetch_array(mysql_query("select * from tbl_member where id_member='$_SESSION[id_member]'"));
	$nama_depan=$query['nama_depan'];
	$nama_belakang=$query['nama_belakang'];
	$tanggal_lahir=$query['tanggal_lahir'];
	$alamat=$query['alamat'];
	$nomor=$query['nomor_telp'];
	$pekerjaan=$query['pekerjaan'];
	$foto=$query['foto'];
?>
<?php
include"koneksi.php";
require('html2fpdf.php');
ob_start();

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta charset="utf-8">
<title>Home -- <?php echo ucwords($nama_depan);?></title>
<!--Bootstrap-->  
<link href="admin/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="asset/font/css/font-awesome.min.css" rel="stylesheet">
<!--CSS Penyesuaian-->
<link rel="stylesheet" href="asset/css/styles.css"/>
<!--Foto Galeri-->
<link rel="stylesheet" href="asset/css/prettyPhoto.css"/>
<!-- bootstrap wysihtml5 - text editor -->
<link href="asset/js/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

<link rel="icon" href="asset/ico/favicon.png">

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
<!--CKEDITOR-->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="ckeditor/config.js"></script>
</head>

<body>

<?php include("forum_profil_cetak.php"); ?>


<!--BOOTSTRAP-->
<script src="asset/js/jquery-1.8.2.min.js" type="text/javascript"></script>
<script src="asset/js/bootstrap.min.js" type="text/javascript"></script>
   
<script src="asset/js/galeri.js"></script>
<script src="asset/js/jquery.prettyPhoto.js"></script>
<script src="asset/js/main.js"></script>
<script src="asset/js/wow.min.js"></script>
<!--Slide Foto Album-->    
    <script>
        $(document).ready(function () {
            $("#client-slider").carousel({
                interval: 2000 //TIME IN MILLI SECONDS
            });
        });
    </script>
    
<!-- Bootstrap WYSIHTML5 -->
<script src="asset/js/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<!-- Page Script -->
    <script>
      $(function () {
        //Add text editor
        $("#status").wysihtml5();
      });
    </script>    
</body>
</html>
<?php
// Output-Buffer in variable:
$html=ob_get_contents();
ob_end_clean();
$pdf=new HTML2FPDF();
$pdf->AddPage();
$pdf->WriteHTML($html);
if (preg_match("/MSIE/i", $_SERVER["HTTP_USER_AGENT"])){
    header("Content-type: application/PDF");
} else {
    header("Content-type: application/PDF");
    header("Content-Type: application/pdf");
}
$pdf->Output("sample2.pdf","I");

?>
<?php
}else{
	header("Location:index.php?status=denied");
}
?>