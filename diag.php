<?php
include ("include/connection1.php");
SESSION_START();
?>
<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>Car Control</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

    <link href="css/main.css" rel="stylesheet">
    <link href="css/font-style.css" rel="stylesheet">
    <link href="css/flexslider.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.js"></script>    
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="js/lineandbars.js"></script>
    
	<script type="text/javascript" src="js/dash-charts.js"></script>
	<script type="text/javascript" src="js/gauge.js"></script>
	
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src="js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="js/noty/layouts/top.js"></script>
	<script type="text/javascript" src="js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src="js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src="js/noty/layouts/topCenter.js"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
	<script src="js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="js/admin.js"></script>  
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

<script type="text/javascript">
    $(document).ready(function () {

        $("#btn-blog-next").click(function () {
            $('#blogCarousel').carousel('next')
        });
        $("#btn-blog-prev").click(function () {
            $('#blogCarousel').carousel('prev')
        });

        $("#btn-client-next").click(function () {
            $('#clientCarousel').carousel('next')
        });
        $("#btn-client-prev").click(function () {
            $('#clientCarousel').carousel('prev')
        });

    });

    $(window).load(function () {

        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: true,
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

</script>    
  </head>
  <body>
  
  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><img src="images/logo30.png" alt="">Car Control</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php"><i class="icon-home icon-white"></i> Home</a></li>                            
              <li><a href="tables.php"><i class="icon-th icon-white"></i> OBD Table</a></li>
              <li><a href="user.php"><i class="icon-user icon-white"></i> User Profile</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">


	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">
      <!-- LOCAL TIME BLOCK -->
      		<div class="half-unit">
	      		<dtitle>Propellant</dtitle>
	      		<hr>
		      		<div class="clockcenter">
			      		<p><bold>Fuel:      20 Litres</bold></p>
		      		</div>
			</div>
			<div class="half-unit">
	      		<dtitle>Dynamic</dtitle>
	      		<hr>
		      		<div class="clockcenter">
			      		<p><bold>Rash Driving:      34%</bold></p>
		      		</div>
			</div>
			<div class="half-unit">
	      		<dtitle>Span</dtitle>
	      		<hr>
		      		<div class="clockcenter">
			      		<p><bold>Mileage:      28 KM/L</bold></p>
		      		</div>
			</div>
			<div class="half-unit">
	      		<dtitle>Avocation</dtitle>
	      		<hr>
		      		<div class="clockcenter">
			      		<p><bold>Next Servicing:      After 450 KM</bold></p>
		      		</div>
			</div>
			<div class="half-unit">
	      		<dtitle>Febricity</dtitle>
	      		<hr>
		      		<div class="clockcenter">
			      		<p><bold>Oil Temperature:      257 Degree Celsius</bold></p>
		      		</div>
			</div>
		</div>
	</div>	
          
</body></html>
