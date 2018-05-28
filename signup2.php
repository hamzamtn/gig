<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Multiple Image Slider</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="container">
  <h2></h2>
    <div class="row">
      <div class="col-md-12 heroSlider-fixed">
        <div class="overlay">
      </div>
         <!-- Slider -->
        <div class="slider responsive">
          <div>
						<img src="http://placehold.it/200x150" alt="" />
					</div>
					<div>
						<img src="http://placehold.it/200x150" alt="" />
					</div>
					<div>
						<img src="http://placehold.it/200x150" alt="" />
					</div>
					<div>
						<img src="http://placehold.it/200x150" alt="" />
					</div>
					<div>
						<img src="http://placehold.it/200x150" alt="" />
					</div>
					<div>
						<img src="http://placehold.it/200x150" alt="" />
					</div>
					<div>
						<img src="http://placehold.it/200x150" alt="" />
					</div>
					<div>
						<img src="http://placehold.it/200x150" alt="" />
					</div>
        </div>
				 <!-- control arrows -->
				<div class="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				</div>
				<div class="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				</div>
				
      </div>
    </div>
  </div>
  <form  method="post" action="process2.php">
  
  <table style="margin-left: 20%;" width="60%" border="1" cellspacing="10" cellpadding="10">
  <tr>
    <td> <select name="sub_cat" style="width:100%;" multiple required>
  <option value="jazz band">jazz band</option>
  <option value="beach band">beach band</option>
  <option value="american band">american band</option>
  <option value="dj band">dj band</option>
</select></td>
   
  </tr>
 
</table>

  <p>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.5/slick.min.js'></script>
    
    
    
    <script  src="js/index.js"></script>  </p>
  <p>&nbsp;</p>
    <input type="text" name="pname" placeholder="Profile Name" style="width:60%; margin-left: 20%;" required>
  

<input type="submit" name="Continue" value="Continue" style="width:15%; height:40px; margin-left: 65%; margin-top: 25px;">

</form>
</body>

</html>
