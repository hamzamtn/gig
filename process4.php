<?php
require_once ('connect.php');
  $a=$_POST['txt1']; 

if(isset($_REQUEST) & !empty($_REQUEST)) {
	
	
$ReadSql = "SELECT * FROM `cat` where cat='$a'";
$res = mysqli_query($connection, $ReadSql);

$r = mysqli_fetch_assoc($res);
echo $r['sub_cat'];

header('Location: a.php');

}


?>