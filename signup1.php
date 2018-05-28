



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
    <td><input type="text" name="fname" id="fname" placeholder="First Name" required></td>
    <td><input type="text" name="lname" id="lname" placeholder="Last Name" required></td>
  </tr>
  <tr>
    <td><input type="text" name="email" id="email" placeholder="Email" required></td>
    <td><input type="text" name="phone" id="phone" placeholder="Phone" required></td>
  </tr>
  <tr>
    <td><input type="text" name="city" id="city" placeholder="State,city" required></td>
    <td><select name="cat" required id="cat" style="width: 100%;">
      <option value="band">Band</option>
      <option value="dj">Dj</option>
    </select></td>
  </tr>
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
</body>
</html>