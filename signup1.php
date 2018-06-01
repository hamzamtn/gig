<?php
session_start();

 require_once ('connect.php');
  
 if(isset($_SESSION['fmsg1'])){ 
 echo $_SESSION['fmsg1'];
 }  
 unset($_SESSION['fmsg1']);


$SelSql = "SELECT * FROM `allowed`";
$rSelSql = "SELECT * FROM `required`";
$cSelSql = "SELECT * FROM `category`";

$ress = mysqli_query($connection, $SelSql);
$res = mysqli_query($connection, $rSelSql);
$rec = mysqli_query($connection, $cSelSql);


$rs = mysqli_fetch_assoc($res);{

$r = mysqli_fetch_assoc($ress);{

 

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<h1>Signup Page</h1>
</head>

<body>
<form name="form1" method="post" action="process1.php">
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
    <td><input type="text" name="email" id="email" placeholder="Email"  style="width: 100%; height: 100%;" value="<?php if(isset($_SESSION['email'])){ echo $_SESSION['email'];} unset($_SESSION['email']); ?>" <?php if($rs['email']=="true"){ echo "required";} ?> ></td>
<?php } ?>
    <?php if($r['phone']=="true"){ ?>
    <td><input type="text" name="phone" id="phone" onkeypress="return validatenumerics(event)" placeholder="Phone" style="width: 100%; height: 100%;" value="<?php if(isset($_SESSION['phone'])){ echo $_SESSION['phone'];} unset($_SESSION['phone']);?>" <?php if($rs['phone']=="true"){ echo "required";} ?> ></td>
    <?php } ?>
  </tr>
  <tr>
    <?php if($r['password']=="true"){ ?>
    <td><input type="password" name="password" id="password" placeholder="Password"   onclick="ValidateEmail(document.form1.email)"  style="width: 100%; height: 100%;"  <?php if($rs['password']=="true"){ echo "required";} ?> ></td>
    <?php } ?>

    <?php if($r['cpassword']=="true"){ ?>
    <td><input type="password" name="cpassword" id="cpassword" placeholder="Confirmed Password" onclick="ValidatemyForm(document.form1.password)" style="width: 100%; height: 100%;" <?php if($rs['cpassword']=="true"){ echo "required";} ?> ></td>
    <?php } ?>
  </tr>
  <tr>


    <?php if($r['city']=="true"){ ?>
    <td><input type="text" name="city" id="city" placeholder="State,city" style="width: 100%; height: 100%;" value="<?php if(isset($_SESSION['city'])){ echo $_SESSION['city'];} unset($_SESSION['city']); ?>"  <?php if($rs['city']=="true"){ echo "required";} ?> ></td>
    <?php } ?>

   


    <?php if($r['cat']=="true"){ ?>
    <td><select name="cat" id="cat" style="width: 100%;" <?php if($rs['cat']=="true"){ echo "required";} ?> >
      <option value="0">Please select one category</option>
       <?php 
    while($rc = mysqli_fetch_assoc($rec)){
    ?>
      <option><?php echo $rc['cate_name']; ?></option>
      <?php } ?>
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

<script language="JavaScript" type="text/javascript">



  
function Validate() 
{
    var val = document.getElementById('fname').value;
    
    if (!val.match(/^[a-zA-Z\s]+$/)) 
    {
        alert('Only alphabets are allowed');
        return false;
    }
    
    return true;
}



function validatenumerics(key) {
           //getting key code of pressed key
           var keycode = (key.which) ? key.which : key.keyCode;
           //comparing pressed keycodes

           if (keycode > 31 && (keycode < 48 || keycode > 57)) {
               alert(" You can enter only characters 0 to 9 ");
               return false;
           }
           else return true;


       }


       function ValidateEmail(inputText)
{
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(inputText.value.match(mailformat))
{
//document.form1.email.focus();
return true;
}
else
{
alert("You have entered an invalid email address!");
document.form1.email.focus();
return false;
}
}

function ValidatemyForm(inputText)
{
if (inputText.value.length < 8)

{
   alert("Please enter at least 8 characters in the \"password\" field.");
   form1.password.focus();
   return false;
}
return true;
}

</script>


</body>
</html>