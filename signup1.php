<?php
session_start();

 require_once ('connect.php');
  
 if(isset($_SESSION['fmsg1'])){ 
 echo $_SESSION['fmsg1'];
 }  
 unset($_SESSION['fmsg1']);




$SelSql = "SELECT * FROM `allowed`";
$rSelSql = "SELECT * FROM `required`";

$ress = mysqli_query($connection, $SelSql);
$res = mysqli_query($connection, $rSelSql);

$rs = mysqli_fetch_assoc($res);{

$r = mysqli_fetch_assoc($ress);{

 

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="process1.php">
<table width="60%" border="1" cellspacing="10" cellpadding="10">
  <tr>
<?php if($r['fname']=="true"){ ?>

    <td><input type="text" name="fname" id="fname" placeholder="First Name" onkeypress="Validate()" style="width: 100%; height: 100%;" value="<?php if(isset($_SESSION['fname'])){ echo $_SESSION['fname'];} unset($_SESSION['fname']); ?>" <?php if($rs['fname']=="true"){ echo "required";} ?> ></td>

  <?php } ?>

  <?php if($r['lname']=="true"){ ?>

    <td><input type="text" name="lname" id="lname" placeholder="Last Name" style="width: 100%; height: 100%;" value="<?php if(isset($_SESSION['lname'])){ echo $_SESSION['lname'];} unset($_SESSION['lname']); ?>" <?php if($rs['lname']=="true"){ echo "required";} ?> ></td>
 <?php } ?>

  </tr>
  <tr>
    <?php if($r['email']=="true"){ ?>
    <td><input type="text" name="email" id="email" placeholder="Email" style="width: 100%; height: 100%;" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];} unset($_SESSION['email']); ?>" <?php if($rs['email']=="true"){ echo "required";} ?> ></td>
<?php } ?>
    <?php if($r['phone']=="true"){ ?>
    <td><input type="text" name="phone" id="phone" placeholder="Phone" style="width: 100%; height: 100%;" value="<?php if(isset($_SESSION['phone'])){ echo $_SESSION['phone'];} unset($_SESSION['phone']);?>" <?php if($rs['phone']=="true"){ echo "required";} ?> ></td>
    <?php } ?>
  </tr>
  <tr>
    <?php if($r['password']=="true"){ ?>
    <td><input type="password" name="password" id="password" placeholder="Password" style="width: 100%; height: 100%;"  <?php if($rs['password']=="true"){ echo "required";} ?> ></td>
    <?php } ?>

    <?php if($r['cpassword']=="true"){ ?>
    <td><input type="password" name="cpassword" id="cpassword" placeholder="Confirmed Password" style="width: 100%; height: 100%;" <?php if($rs['cpassword']=="true"){ echo "required";} ?> ></td>
    <?php } ?>
  </tr>
  <tr>
    <?php if($r['city']=="true"){ ?>
    <td><input type="text" name="city" id="city" placeholder="State,city" style="width: 100%; height: 100%;" value="<?php if(isset($_SESSION['city'])){ echo $_SESSION['city'];} unset($_SESSION['city']); ?>"  <?php if($rs['city']=="true"){ echo "required";} ?> ></td>
    <?php } ?>

    <?php if($r['cat']=="true"){ ?>
    <td><select name="cat" id="cat" style="width: 100%;" <?php if($rs['cat']=="true"){ echo "required";} ?> >
      <option value="band">Band</option>
      <option value="dj">Dj</option>
    </select></td>
    <?php } ?>
  </tr>
   <tr>
    <?php if($r['promocode']=="true"){ ?>
    <td><input type="text" name="promo" id="promo" placeholder="Promocode" style="width: 100%; height: 100%;" value="<?php if(isset($_SESSION['promo'])){ echo $_SESSION['promo'];} unset($_SESSION['promo']); ?>" <?php if($rs['promocode']=="true"){ echo "required";} ?>  ></td>
    <?php } ?>
  </tr>
  <?php } ?>
  <?php } ?>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">By entering information and clicking 'Start Now', you agree to the terms of GigMasters User Agreement and Privacy Policy.</td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
    
      <input type="submit" name="Signup" value="Continue" style="width:50%">
    </div></td>
  </tr>
  </table>
</form>

<script>
  
function Validate() 
{
    var val = document.getElementById('fname').value;
    
    if (!val.match(/^[a-zA-Z]+$/)) 
    {
        alert('Only alphabets are allowed');
        return false;
    }
    
    return true;
}

</script>


</body>
</html>