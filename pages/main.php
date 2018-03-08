<?php
session_start();
?>
<html>
<head>
	<title>Welcome To The World Of Exploitation</title>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../css/jqvmap.css">

	<link rel="stylesheet" type="text/css" href="../css/jqvmap.min.css">

	<link rel="stylesheet" type="text/css" href="../css/animate.css">

	<script src="../js/jquery.vmap.js"></script>

	<script src="../js/jquery.vmap.min.js"></script>

	<script src="../js/maps/jquery.vmap.world.js"></script>

	<link rel="stylesheet" type="text/css" href="../css/mycss.css">

	<script type="text/javascript" src="../js/typed.js"></script>

	<script type="text/javascript" src="../js/typed.min.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 

	<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

  <script type='text/javascript' src='../js/jquery.particleground.js'></script>

  <link rel="stylesheet" type="text/css" href="../check/gethere/bla.css">

  <link rel="stylesheet" type="text/css" href="../check/gufamein/huluhulu.css">

  <link rel="stylesheet" type="text/css" href="../check/maybeheretoo/chalogufamein.css">

  <link rel="stylesheet" type="text/css" href="../check/maybhere/yhatonihai.css">

</head>
<body>
	<div id="overlayer"></div>
	<center>
		<span class="loader">
  		<span class="loader-inner"></span>
		</span>
	</center>

	<div class="main-cont">
		<center>
		<div id="vmap" style="width:90%; height:90%;"></div>
		</center>

		<div class="about" id="gameScreen" style="">

			<h5 style="display: inline-block;">Team Name :</h5> <font style="color:rgb(16,78,139);"><?php echo $_SESSION["team_name"];?></font><br>
			 
			Time Left : <span class="timer" id="count-time"></span><br>

			<h4 style="margin-top: 50px">Your Score : <font style="color:rgb(16,78,139);"><?php echo $_SESSION["score"];?></font></h4>

			<h4 style="margin-top: 50px">Tasks Completed : <font style="color:rgb(16,78,139);"><?php echo $_SESSION["completed_tasks"] . "/7";?></font></h4>

			<form action="logout.php">
			<button class="play" type="submit">END GAME</button>
			</form>
		</div>
	</div>

	<!-- ######################################################## MODAL CONTENT ###################################################-->
  <div id="fullscreen" class="modal animated fadeIn" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
               <div id="cover" style="min-height:100%;min-width:100%; position: absolute;z-index:-2; margin-top: -50px;"></div>
                <div class="modal-body">
                  <h1 style="color:rgb(16,78,139);font-family: 'Play', sans-serif; margin-top: 100px;">
                    <span class="typed"></span>
                  </h1>
                  <button class="play" id="startClock" data-dismiss="modal" style="color: white;">PLAY</button>
                </div>
            </div>
          </div>
    </div>

      <div id="fullscreen2" class="modal animated fadeIn" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
               <div id="cover" style="min-height:100%;min-width:100%; position: absolute;z-index:-2; margin-top: -50px;"></div>
                <div class="modal-body">
                  <h1 style="color:rgb(16,78,139);font-family: 'Play', sans-serif; margin-top: 100px;">
                    <span class="typed"></span>
                  </h1>
                  <a href="logout.php"><button class="play" style="color: white;">Logout</button></a>
                </div>
            </div>
          </div>
    </div>

		<div id="in" class="modal animated fadeIn" role="dialog">
  				<div class="modal-dialog">
    				<div class="modal-content">
      					<div class="modal-body">
        					Question: The Following Text is Encryted By the Oldest Known Crypto methods known to the man. Decrypt the text and the decrypted text will be the answer to this question.
        					<br>
        					<code>
        						jxu squiqh yi jxu ebtuij ademd shofjewhqfxo jusxdygku ademd je jxu cqd qdt yj zkij xubfut oek uqhd feydji
        					</code>
        					<br><br>
                  <i>25 Points.</i>
        					<form action="check1.php" method="POST">
        					<input type="text" name="answer" class="answer-input" placeholder="Your Answer">
        					<button class="answer-btn" id="btn1" type="submit">Submit</button>
        					</form>
      					</div>
    				</div>
  				</div>
		</div>


		<div id="au" class="modal animated fadeIn" role="dialog">
  				<div class="modal-dialog">
    				<div class="modal-content">
      					<div class="modal-body">
        					Question: Go to the <a href="../exploits/guessthepw.php">this page</a> and try to login in the system.
                  <br>The password for the username in cypher text is 
                  <code> 6475e11a9b3334b7aadd5ab42749327b </code><br><br>

                  <i>30 Points.</i>

                  <form action="check2.php" method="POST">
                  <input type="text" name="answer-in" class="answer-input" placeholder="Your Answer">
                  <input type="submit" class="answer-btn" id="btn1" value="Submit">
                  </form>
      					</div>
    				</div>
  				</div>
		</div>


		<div id="ca" class="modal animated fadeIn" role="dialog">
  				<div class="modal-dialog">
    				<div class="modal-content">
      					<div class="modal-body">
        					Question: Find Something Inside and Catch The Baba If you can.<br>

                  <i>40 Points.</i>

                  <form action="check3.php" method="POST">
                  <input type="text" name="answer-in" class="answer-input" placeholder="Your Answer">
                  <button class="answer-btn" id="btn1" type="submit">Submit</button>
                  </form>
      					</div>
    				</div>
  				</div>
		</div>


		<div id="br" class="modal animated fadeIn" role="dialog">
  				<div class="modal-dialog">
    				<div class="modal-content">
      					<div class="modal-body">
        					Question:Check If you Can Change the Size of the text "Team Name".

                  <i>20 Points</i>

                  <form action="check4.php" method="POST">
                  <input type="text" name="answer-in" class="answer-input" placeholder="Your Answer">
                  <button class="answer-btn" id="btn1" type="submit">Submit</button>
                  </form>
      					</div>
    				</div>
  				</div>
		</div>


		<div id="mn" class="modal animated fadeIn" role="dialog">
  				<div class="modal-dialog">
    				<div class="modal-content">
      					<div class="modal-body">
        					Question: Find The value of the data-testid of the like button of the facebook.

                  <i>20 Points</i>

                  <form action="check5.php" method="POST">
                  <input type="text" name="answer-in" class="answer-input" placeholder="Your Answer">
                  <button class="answer-btn" id="btn1" type="submit">Submit</button>
                  </form>
      					</div>
    				</div>
  				</div>
		</div>


		<div id="sd" class="modal animated fadeIn" role="dialog">
  				<div class="modal-dialog">
    				<div class="modal-content">
      					<div class="modal-body">
        				Question: Which Type of attack is Following
                <br>
                <code>
                    $redirectUrl = $_GET['url'];<br>
                    header("Location: $redirectUrl");
                </code> 

                 <form action="check6.php" method="POST">
                  <input type="text" name="answer-in" class="answer-input" placeholder="Your Answer">
                  <button class="answer-btn" id="btn1" type="submit">Submit</button>
                  </form>

      					</div>
    				</div>
  				</div>
		</div>



		<div id="na" class="modal animated fadeIn" role="dialog">
  				<div class="modal-dialog">
    				<div class="modal-content">
      					<div class="modal-body">
        					Question: A cookie named "Britarnia" fled away with your answer key. Find Him there to get the key.
                      <br>Get Him <a href="../exploits/cookie.php">HERE</a>
                  <br>
                  <br>
                  <i>50 Points</i>
                  <form action="check7.php" method="POST">
                  <input type="text" name="answer-in" class="answer-input" placeholder="Your Answer">
                  <button class="answer-btn" id="btn1" type="submit">Submit</button>
                  </form>
      					</div>
    				</div>
  				</div>
		</div>

	<!-- ##########################################################################################################################-->
</body>
<script type="text/javascript">
    jQuery(document).ready(function() {
      jQuery('#vmap').vectorMap({ 
      	map: 'world_en',
      	backgroundColor:'#04151F',
      	borderColor:'rgba(255,255,255,0.6)',
      	color: '#050505',
      	enableZoom :false,
      	hoverColor:'rgba(16,78,139,0.8)',
      	borderOpacity:0.1,
      	selectedColor:'rgba(255,255,255,0.5)',
      	onRegionClick: function (event, code, region) {
        switch (code) {
        case "in":
           $('#in').modal('show');
            break;
        case "au":
           $('#au').modal('show');
            break;
        case "ca":
           $('#ca').modal('show');
            break;
        case "br":
           $('#br').modal('show');
            break;
        case "mn":
           $('#mn').modal('show');
            break;
        case "sd":
           $('#sd').modal('show');
            break;
       	case "na":
           $('#na').modal('show');
            break;
            }
        },
        borderWidth:0,
      });
     var fc = 'rgba(205,149,12,0.8)'; // you'll need this if you'll want to change the whole group color someday
	jQuery('#vmap').vectorMap('set', 'colors', {in: fc, au: fc, ca: fc, br:fc, mn: fc, sd: fc, na: fc});
    });
</script>
<script>
		$(window).on('load',(function() {
		$(".loader").delay(2000).fadeOut("slow");
  		$("#overlayer").delay(2000).fadeOut("slow");
		}));
</script>

<script>
var typed = new Typed(".typed", {
strings: ["Hey!!","Welcome To", "CRACK THE WEB", "Technical Event Round", "Find Questions.", "Solve Them", "Earn Points", "See If You can beat them all", "All The Best!!"],
typeSpeed: 20,
});
</script>

<script type="text/javascript">
	$("#startClock").click(clock());
</script>

<script type="text/javascript">
  function clock() {
    console.log("Clock Started Ticking");
    var counter = 10;
    setInterval(function() {
     counter--;
      if (counter >= 0) {
         span = document.getElementById("count-time");
         span.innerHTML = parseInt(counter/60) + " mins " + counter%60 + " secs ";
      }
      if (counter === 0) {
         $('#fullscreen2').modal('toggle');
       }
     }, 1000);
  }
</script>

<?php
if ($_SESSION["in"]==1) 
{
echo "<script type='text/javascript'>
  var element = document.getElementById('in');
  element.outerHTML ='';
</script>";
}
if ($_SESSION["au"]==1) 
{
echo "<script type='text/javascript'>
  var element = document.getElementById('au');
  element.outerHTML ='';
</script>";
}
if ($_SESSION["ca"]==1) 
{
echo "<script type='text/javascript'>
  var element = document.getElementById('ca');
  element.outerHTML ='';
</script>";
}
if ($_SESSION["br"]==1) 
{
echo "<script type='text/javascript'>
  var element = document.getElementById('br');
  element.outerHTML ='';
</script>";
}
if ($_SESSION["mn"]==1) 
{
echo "<script type='text/javascript'>
  var element = document.getElementById('mn');
  element.outerHTML ='';
</script>";
}
if ($_SESSION["sd"]==1) 
{
echo "<script type='text/javascript'>
  var element = document.getElementById('sd');
  element.outerHTML ='';
</script>";
}
if ($_SESSION["na"]==1) 
{
echo "<script type='text/javascript'>
  var element = document.getElementById('na');
  element.outerHTML ='';
</script>";
}

?>
<script type="text/javascript">


  $("#fullscreen").modal()
</script>
<script type="text/javascript">
    particleground(document.getElementById('cover'), {
      dotColor: 'rgba(255,255,255,0.1)',
        lineColor: 'rgba(255,255,255,0.1)',
        density:10000,
        maxSpeedX:0.1,
        maxSpeedY:0.1
    });
  </script>

  <?php
  if($_SESSION["flag"]!=0)
  {
    echo "<script type='text/javascript'> $(function () {
       $('#fullscreen').modal('toggle');
    });
    clock();
    </script>";
  }
  
  $_SESSION["flag"]=10;

  ?>
</html>