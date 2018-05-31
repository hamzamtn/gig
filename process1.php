<?php
session_start();
require_once ('connect.php');

if ($_REQUEST['Signup'] != "") {
	$_SESSION["fname"]=$_REQUEST['fname'];
$_SESSION["lname"]=$_REQUEST['lname'];

$password=$_REQUEST['password'];
$password=md5($password);


$_SESSION["password"]=$password;



$cpassword=$_REQUEST['cpassword'];
$cpassword=md5($cpassword);


$_SESSION["cpassword"]=$cpassword;

$_SESSION["phone"]=$_REQUEST['phone'];
$_SESSION["city"]=$_REQUEST['city'];
$_SESSION["cat"]=$_REQUEST['cat'];
$_SESSION["promo"]=$_REQUEST['promo'];

$_SESSION["email"]=$_REQUEST['email'];
$email=$_SESSION["email"];


$SelSql = "SELECT * FROM `basic_info` where email='".$email."'";

//echo $SelSql;exit;

$ress = mysqli_query($connection, $SelSql);
$r = mysqli_fetch_assoc($ress);


if(empty($r)){


	
	


if($password==$cpassword){

	header('Location: signup2.php');
}else {

	header('Location: signup1.php');
}

}else{
	$_SESSION["fmsg1"] = "Email already exist, try another one";
	header('Location: signup1.php');
		exit;
		}
		

}


?>