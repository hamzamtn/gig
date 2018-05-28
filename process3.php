<?php
session_start();
require_once ('connect.php');

if ($_REQUEST['Signup'] != "") {
	
	
$fname=$_SESSION["fname"];
$lname=$_SESSION["lname"];
$email=$_SESSION["email"];
$phone=$_SESSION["phone"];
$city=$_SESSION["city"];
$cat=$_SESSION["cat"];
$sub_cat=$_SESSION["sub_cat"];

$pname=$_SESSION["pname"];

$sql = "INSERT INTO basic_info (fname, lname, email, phone, city, cat, sub_cat, pname) VALUES ('$fname', '$lname', '$email','$phone','$city','$cat', '$sub_cat', '$pname')";

$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if($res){
		$_SESSION["smsg"] = "Successfully inserted data, Insert New data.";
		
		
		}else{
			$_SESSION["fmsg"] = "Data not inserted, please try again later.";
			
		}
		
		header('location: signup3.php');
		exit;
}


?>