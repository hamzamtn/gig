<?php
session_start();
require_once ('connect.php');

if ($_REQUEST['Update'] != "") {
	
	
$fname=mysql_escape_string($_REQUEST['fname']); 
$lname=mysql_escape_string($_REQUEST["lname"]);
$email=mysql_escape_string($_REQUEST["email"]);
$phone=mysql_escape_string($_REQUEST["phone"]);

$password=mysql_escape_string($_REQUEST["password"]);
$cpassword=mysql_escape_string($_REQUEST["cpassword"]);


$city=mysql_escape_string($_REQUEST["city"]);
$cat=mysql_escape_string($_REQUEST["cat"]);
$sub_cat=mysql_escape_string($_REQUEST["sub_cat"]);

$pname=mysql_escape_string($_REQUEST["pname"]);
$promo=mysql_escape_string($_REQUEST["promo"]);





$sql = "UPDATE `allowed` SET fname='$fname', lname='$lname', email='$email', phone='$phone',city='$city', cat='$cat', sub_cat='$sub_cat', password='$password', cpassword='$cpassword', pname='$pname', promocode='$promo' WHERE id='1'";


$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if($res){
		$_SESSION["smsg1"] = "Successfully updated";
		
		
		
		}else{
			$_SESSION["fmsg1"] = "Not updated";
			
		}

		header('Location: custom.php');
		
}


?>