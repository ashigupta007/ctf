<?php
session_start();
if (isset($_SESSION["user_id"])) {
	session_destroy();
}
?><html>
<head>
	<title>CRACK THE WEB | REGISTER</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 

	<link rel="stylesheet" type="text/css" href="css/mycss.css">

	<link href="https://fonts.googleapis.com/css?family=Righteous|Russo+One" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 

</head>

<body>

	<div id="overlayer"></div>
	<center>
		<span class="loader">
  		<span class="loader-inner"></span>
		</span>
	</center>

	<div id="cover" style="min-height:100%;min-width:100%; position: absolute;z-index: -2"></div>
	<div class="login">
		<h1 style="z-index: 2">Technical Fest 2017</h1>

		<h2 style="z-index: 2">CRACK THE WEB</h2>

		<div id="myCarousel2" class="carousel slide" data-ride="carousel" data-interval="false" data-wrap="false">
  					<div class="carousel-inner">
    					<div class="item active">
      						<form action="pages/login.php" method="POST">
      							<input type="text" name="username" class="txt" placeholder="Username" required><br>

      							<input type="password" name="pass" class="txt" placeholder="Password" required><br>

      							<button type="submit" class="submit-btn">Login</button>
      						</form>
    					</div>

    					<div class="item">
    						<form action="pages/register.php" method="POST">
    							<input type="text" name="username" class="txt" placeholder="Username" required><br>

      							<input type="password" name="pass" class="txt" placeholder="Password" required><br>

      							<input type="text" name="team_name" class="txt" placeholder="Team Name" required><br>

      							<button type="submit" class="submit-btn more">Register</button>
    						</form>
    					</div>

    				<button href="#myCarousel2" data-slide="next" class="nxt-btn">
  						REGISTER
  					</button>

  					<button href="#myCarousel2" data-slide="prev" class="nxt-btn">
  						LOGIN
  					</button>
    				</div>
				</div>
	</div>
</body>

	<script type='text/javascript' src='js/jquery.particleground.js'></script>

	<script type="text/javascript">
		particleground(document.getElementById('cover'), {
			dotColor: 'rgba(255,255,255,0.1)',
    		lineColor: 'rgba(255,255,255,0.1)',
    		density:10000,
    		maxSpeedX:0.1,
    		maxSpeedY:0.1
		});
	</script>

	<script>
		$(window).on('load',(function() {
		$(".loader").delay(2000).fadeOut("slow");
  		$("#overlayer").delay(2000).fadeOut("slow");
		}));
	</script>
</html>