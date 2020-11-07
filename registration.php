<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
  <link rel="stylesheet" href="css/registration.css">
<link rel="shortcut icon" href="img/mortarboard.png" type="image/png">
  <title>FbShoes</title>
</head>
<body>
	
<header>
	<div id="toggle"></div>
	<div class="overlay"></div>
	<div class="menuu">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="feed.php">Feed Back</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="service.php">Service</a></li>
			<li><a href="magazine.php">Buy</a></li>
			<!-- <li><a href="#">Profile</a></li> -->
		</ul>
	</div>
 <center>



  <div class="block_red">
  	<h2 class="UnApp">
  		<a href="index.php" class="text" style="font-family: CENTURY GOTHIC,sans-serif;">
  			FbShoes
  		</a>
  	</h2>
  </div>

<!--registration-->
<div class="box">
	<form>
		<span class="text-center">Registration</span>
	<div class="input-container">
		<input type="text" required=""/>
		<label>Full Name</label>		
	</div>
	<div class="input-container">		
		<input type="mail" required=""/>
		<label>Nickname</label>
	</div>
		<div class="input-container">
		<input type="password" required=""/>
		<label>Password</label>		
	</div>
		<div class="input-container">
		<input type="mail" required=""/>
		<label>Email</label>		
	</div>
		<button type="button" class="btn">submit</button>
		<p class="reg_text">If you have account<a href="login.php"> Login</a></p>
</form>	
</div>

<!--BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
<!-- JQUERY CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

	<script type="text/javascript">

  //nav toggle click
  $(document).ready(function() {
  	$('#toggle').click(function() {
  		$('#toggle').toggleClass('active_toggle');
  		$('.overlay').toggleClass('active_toggle');
  		

  		setTimeout(() => {
        $('.menuu').toggleClass('active_toggle');
      },200);

  	})
  })
</script>
</body>
</html>