<?php
include "koneksi.php";

#jika ditekan tombol login
session_start();
$username = $_POST['username'];
$password=md5($_POST['password']);
$op = $_GET['login'];
if($op=="masuk"){
$query=$pdo->prepare("select * from tbl_admin where id_admin and username=:username and password=:password");
$query->bindParam(':username', $username);//cek username
$query->bindParam(':password', $password);//cek password
$query->execute();//eksesuksi 
$rows = $query->rowCount();//ini ibaratnya mysql_numrows mengngitung rows
if($rows== 1){//jika berhasil akan bernilai 1 baru masuk jika 0 gagal
$rows=$query->fetch();

//Declare session for CKEDITOR and KCFINDER
	$_SESSION['KCFINDER']=array();
	$_SESSION['KCFINDER']['disabled'] = false;
	$_SESSION['KCFINDER']['uploadURL'] = "/upload";
	$_SESSION['KCFINDER']['uploadDir'] = "";
//declare two session variables and assign them
    $_SESSION['MM_Username'] = $username;
    $_SESSION['MM_UserGroup'] = $op;	   

$_SESSION['id_admin']      = $rows['id_admin'];
$_SESSION['username']      = $rows['username'];
$_SESSION['password']      = $rows['password'];
$_SESSION['level']         = $rows['level'];
// HTACCESS
$homepage="index.php";
// HTACCESS END
 if($rows['level']=="Administrator" or $rows['level']=="Admin" or $rows['level']=="Operator")
{
	
	header("location:index.php");
}
}else{
	echo "<script>window.alert('Maaf, Login anda Gagal !!! Periksa kembali Username dan Password Anda');
					window.location='login.php'</script>";
}
}else if($op=="out"){
unset($_SESSION['id_admin']);
unset($_SESSION['username']);
unset($_SESSION['level']);
header("location:login.php");
}
?>

