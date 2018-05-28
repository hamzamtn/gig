<?php
session_start();

 if(isset($_SESSION['smsg'])){
	echo $_SESSION['smsg'];
	}
	unset($_SESSION['smsg']);
	
 if(isset($_SESSION['fmsg'])){ 
 echo $_SESSION['fmsg'];
 } 	
 unset($_SESSION['fmsg']);
 

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="process3.php">
<table width="60%" border="1" cellspacing="10" cellpadding="10">
  <tr>
    <td><?php if(isset($_SESSION['pname'])){ echo $_SESSION['pname'];} ?></td>
    <td><?php if(isset($_SESSION['city'])){ echo $_SESSION['city'];} ?></td>
  </tr>
  <tr>
    <td><?php if(isset($_SESSION['cat'])){ echo $_SESSION['cat'];} ?></td>
    <td><?php if(isset($_SESSION['sub_cat'])){ echo $_SESSION['sub_cat'];} ?></td>
  </tr>
  <tr>
    <td><?php if(isset($_SESSION['fname'])){ echo $_SESSION['fname'];} ?></td>
    <td><?php if(isset($_SESSION['lname'])){ echo $_SESSION['lname'];} ?></td>
  </tr>
  <tr>
    <td><?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];} ?></td>
    <td><?php if(isset($_SESSION['phone'])){ echo $_SESSION['phone'];} ?></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><input type="checkbox" name="checkbox" id="checkbox" onclick="myFunction();"><label for="checkbox">Checkbox </label>
    By entering information and clicking 'Start Now', you agree to the terms of GigMasters User Agreement and Privacy Policy.</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <!--<input type="submit" id="myBtn"  name="Signup" value="Signup" style="width:50%;" readonly>-->
      <button type="submit" id="myBtn"  name="Signup" value="Signup" disabled>Signup</button>
    </div></td>
  </tr>
</table>
</form>
<script>
var a=0;
//document.getElementById("myBtn").disabled = true;
function myFunction() { 
	if (a==0) { document.getElementById("myBtn").disabled = false; a = 1;}
	else {document.getElementById("myBtn").disabled = true; a = 0;}
}
</script>

</body>
</html>