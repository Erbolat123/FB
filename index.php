<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
<link rel="shortcut icon" href="img/mortarboard.png" type="image/png">
  <title>FbShoes</title>
</head>
<body>



  <!--header-->
  <div class="list_1">
 
<header>
	<div id="toggle"></div>
	<div class="overlay"></div>
	<div class="menuu">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Feed Back</a></li>
			<li><a href="#">Registration</a></li>
			<li><a href="#">Service</a></li>
			<li><a href="#">Buy</a></li>
			<!-- <li><a href="#">Profile</a></li> -->
		</ul>
	</div>
 <center>



  <div class="block_red"><h2 class="UnApp"><a href="index.php" class="text">FbShoes</a></h2></div>

          
          
</header>
</center>
  <!--/header-->
  
<!--WHY WE-->
<center>
<div class="container">
  <div class="row">
    <div class="col-md-5">
      <img src="https://www.photoshop-master.ru/lessons/les1375/1.jpg" class="imageAfterHeader">
    </div>
    <div class="col-md-5">
     <div class="textAfterHeader">
      <h1 class="h1_after_header">Why We?</h1>
      <p>Girl quit if case mr sing as no have. Made neat an on be gave show snug tore. In expression an solicitude principles in do. At principle perfectly by sweetness do. Strictly numerous outlived kindness whatever on we no on addition. Strictly numerous outlived kindness whatever on we no on addition. Secure shy favour length all</p>
      <div class="block_buttons" >
      <a href="#" class="buttons" id="buttons" class="float-right">Read More</a>
      </div>
     </div>
    </div>
  </div>
</div>
</center>
<!-- /WHY WE -->

<!--ABOUT US -->

<section>
  <center>
  <h2 class="h2_about" style="margin-bottom: 0;">About Us</h2>
  <p>Indulgence contrasted sufficient to unpleasant in in insensible favourable. Bed uncommonly his discovered for estimating far. Whatever throwing we on resolved entrance together graceful.<br>

Expression alteration entreaties mrs can terminated estimating. Small for ask shade water manor think men begin. In expression an solicitude principles in do. Steepest speaking up attended it as. Small for ask shade water manor think men begin. Uncommonly no it announcing melancholy an in. Ecstatic elegance gay but dispose</p>.
</center>
</section>
<!-- /ABOUT US -->



<!-- CARD -->
<center>
<div class="wrapper">
	<!--card1 -->
	<div class="cardss">
		<div class="imgBx" data-text="Design">
			<img src="img/design.png" alt="">
		</div>
		<div class="content">
			<div>
				<h3>Design</h3>
				<p>In expression an solicitude principles in do. Fat new smallness few supposing suspicion two. Effect if in up no depend seemed. Fortune day out married part</p>
				<a href="#">Read More</a>
			</div>	
		</div>
	</div>
	<!--card2-->

	<div class="cardss">
		<div class="imgBx" data-text="Code">
			<img src="img/data.png" alt="">
		</div>
		<div class="content">
			<div>
				<h3>Code</h3>
				<p>In expression an solicitude principles in do. Fat new smallness few supposing suspicion two. Effect if in up no depend seemed. Fortune day out married part</p>
				<a href="#">Read More</a>
			</div>	
		</div>
	</div>
	<!--card3-->

	<div class="cardss">
		<div class="imgBx" data-text="Think">
			<img src="img/thinking.png" alt="">
		</div>
		<div class="content">
			<div>
				<h3>Think</h3>
				<p>In expression an solicitude principles in do. Fat new smallness few supposing suspicion two. Effect if in up no depend seemed. Fortune day out married part</p>
				<a href="#">Read More</a>
			</div>	
		</div>
	</div>

<!--card4-->

	<div class="cardss">
		<div class="imgBx" data-text="Money">
			<img src="img/money.png" alt="">
		</div>
		<div class="content">
			<div>
				<h3>Money</h3>
				<p>In expression an solicitude principles in do. Fat new smallness few supposing suspicion two. Effect if in up no depend seemed. Fortune day out married part</p>
				<a href="#">Read More</a>
			</div>	
		</div>
	</div>
</div>
</center>
<!-- /CARD -->


<!--BOOTSTRAP JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
<!-- JQUERY CDN -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script type="text/javascript">
  const buttons = document.getElementById("buttons");
  
    buttons.addEventListener('click', function(e) {
      let x = e.clientX - e.target.offsetLeft;
      let y = e.clientY - e.target.offsetTop;

      let ripples = document.createElement('span');
      ripples.style.left = x + 'px';
      ripples.style.top = y + 'px';
      this.appendChild(ripples);

      setTimeout(() => {
        ripples.remove()
      },500);
    })
  
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