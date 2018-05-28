<?php

session_start();

if ($_REQUEST['Continue'] != "") {
	
	
$_SESSION["sub_cat"]=$_REQUEST['sub_cat'];

$_SESSION["pname"]=$_REQUEST['pname'];


header('Location: signup3.php');
}

?>