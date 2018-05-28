<?php
session_start();

if ($_REQUEST['Signup'] != "") {
	
	
$_SESSION["fname"]=$_REQUEST['fname'];
$_SESSION["lname"]=$_REQUEST['lname'];
$_SESSION["email"]=$_REQUEST['email'];
$_SESSION["phone"]=$_REQUEST['phone'];
$_SESSION["city"]=$_REQUEST['city'];
$_SESSION["cat"]=$_REQUEST['cat'];

header('Location: signup2.php');
}


?>