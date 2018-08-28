<!--Redirect Session-->
<?php
error_reporting(0);
if ((!$_SESSION['id_admin']) AND (!$_SESSION['username'])AND (!$_SESSION['password']))
{
header("location:login.php");
}
?>