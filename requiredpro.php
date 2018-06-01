<?php
session_start();
require_once ('connect.php');

if ($_POST['Update'] != "") {
	
	
$fname=mysql_escape_string($_POST['fname']); 
$lname=mysql_escape_string($_POST["lname"]);
$email=mysql_escape_string($_POST["email"]);
$phone=mysql_escape_string($_POST["phone"]);

$password=mysql_escape_string($_POST["password"]);
$cpassword=mysql_escape_string($_POST["cpassword"]);


$city=mysql_escape_string($_POST["city"]);
$cat=mysql_escape_string($_POST["cat"]);
$sub_cat=mysql_escape_string($_POST["sub_cat"]);

$pname=mysql_escape_string($_POST["pname"]);
$promo=mysql_escape_string($_POST["promo"]);





$sql = "UPDATE `required` SET fname='$fname', lname='$lname', email='$email', phone='$phone',city='$city', cat='$cat', sub_cat='$sub_cat', password='$password', cpassword='$cpassword', pname='$pname', promocode='$promo' WHERE id='1'";


$res = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if($res){
		$_SESSION["smsg2"] = "Successfully updated";
		
		
		
		}else{
			$_SESSION["fmsg2"] = "Not updated";
			
		}

		header('Location: required.php');
		
}


?>