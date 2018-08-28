<?php 
        if(isset($_GET['page'])){
        	$page=htmlentities($_GET['page']);
        }else{
       		$page="kategori";
        }
        
        $file="$page.php";
        $cek=strlen($page);
        
        if($cek>30 || !file_exists($file) || empty($page)){
        	include ("kategori.php");
        }else{
        	include ($file);
        }
        ?>