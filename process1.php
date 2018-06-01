<?php
session_start();
require_once ('connect.php');

if ($_POST['Signup'] != "") {
	$_SESSION["fname"]=$_POST['fname'];
$_SESSION["lname"]=$_POST['lname'];

$password=$_POST['password'];
$password=md5($password);


$_SESSION["password"]=$password;



$cpassword=$_POST['cpassword'];
$cpassword=md5($cpassword);


$_SESSION["cpassword"]=$cpassword;

$_SESSION["phone"]=$_POST['phone'];
$_SESSION["city"]=$_POST['city'];
$_SESSION["cat"]=$_POST['cat'];
$cat=$_SESSION["cat"];
$_SESSION["promo"]=$_POST['promo'];

$_SESSION["email"]=$_POST['email'];
$email=$_SESSION["email"];


$SelSql = "SELECT * FROM `basic_info` where email='".$email."'";

//echo $SelSql;exit;

$ress = mysqli_query($connection, $SelSql);
$r = mysqli_fetch_assoc($ress);


if(empty($r)){


	
	


if($password==$cpassword and $cat !="0" ){

	header('Location: signup2.php');
}else {
$_SESSION["fmsg1"] = "please select one category";
	header('Location: signup1.php');
}

}else{
	$_SESSION["fmsg1"] = "Email already exist, try another one";
	header('Location: signup1.php');
		exit;
		}
		

}


?>