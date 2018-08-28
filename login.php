 <?php session_start();
include "koneksi.php";
$email=$_POST['email'];
$password=md5($_POST['password']);
$query=mysql_query("select * from tbl_member where email='$email' and password='$password'");
$cek=mysql_num_rows($query);
$row = mysql_fetch_assoc($query);

if($cek){
$_SESSION['id_member'] = $row['id_member'];
//Declare session for CKEDITOR and KCFINDER
	$_SESSION['KCFINDER']=array();
	$_SESSION['KCFINDER']['disabled'] = false;
	$_SESSION['KCFINDER']['uploadURL'] = "/upload";
	$_SESSION['KCFINDER']['uploadDir'] = "";
//declare two session variables and assign them
    $_SESSION['MM_Username'] = $email;
    $_SESSION['MM_UserGroup'] = $cek;	


			
				
					echo "<script>window.alert('Anda Sukses Login.');
					window.location='forum.php'</script>";
}else{
					echo "<script>window.alert('Maaf, Login anda Gagal !!! Periksa kembali Username dan Password Anda');
					window.location='index.php'</script>";
echo mysql_error();
}
?> 

