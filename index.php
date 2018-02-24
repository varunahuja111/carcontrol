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

      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Parking Assist</dtitle>
	      		<hr>
				<div class="thumbnail">
					<a href="first.php"> <img src="images/parking.jpg" alt="Marcel Newman"></a>
				</div><!-- /thumbnail -->
				
		</div>
        </div>
		<div class="col-sm-3 col-lg-3">
		      		<div class="dash-unit">
			      		<dtitle>Car Diagnostics</dtitle>
			      		<hr>
						<div class="thumbnail">
							<a href="diag.php"> <img src="images/diagnostics.jpg" alt="Marcel Newman"></a>
						</div><!-- /thumbnail -->
						
		</div>
		</div>
		<div class="col-sm-3 col-lg-3">
		      		<div class="dash-unit">
			      		<dtitle>User Profile</dtitle>
			      		<hr>
						<div class="thumbnail">
							<a href="user.php"><img src="images/driver.png" alt="Marcel Newman"></a>
						</div><!-- /thumbnail -->
					
					</div>
		</div>
      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle>Fuel Left</dtitle>
		  		<hr>
	        	<div id="load"></div>
	        	<h2>45%</h2>
			</div>
        </div>

      <!-- DONUT CHART BLOCK -->
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
		  		<dtitle>Next Service in</dtitle>
		  		<hr>
	        	<div id="space"></div>
	        	<h2>450 km</h2>
			</div>
        </div>

	  <!-- GRAPH CHART - lineandbars.js file -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
      		<dtitle>Real Time Speed Graph</dtitle>
      		<hr>
			    <div class="section-graph">
			      <div id="importantchart"></div>
			      <br>
			      <div class="graph-info">
			        <i class="graph-arrow"></i>
			        <span class="graph-info-big">34%</span>
			        <span class="graph-info-small">+2.18 (3.71%)</span>
			      </div>
			    </div>
			</div>
        </div>

	  <!-- LAST MONTH REVENUE -->     
        <div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Last Month Revenue</dtitle>
	      		<hr>
	      		<div class="cont">
					<p><bold>28 km/l</bold> | <ok>Mileage</ok></p>
					<br>
					<p><bold>257    &#8451;</bold> | Oil Temp</p>
					<br>
					<p><bold>34%</bold> | <bad>Rash Driving</bad></p>
					<br>
				</div>

			</div>
        </div>

 
	  <!-- THIRD ROW OF BLOCKS -->     
      	<div class="col-sm-3 col-lg-3">
	  		
	  <!-- PAGE VIEWS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle>Emergency</dtitle>
	      		<hr>
	      		<div class="cont">
      			<a href="#"><p><bold>Send SOS</bold></p></a>
	      		</div>
      		</div>
      	</div>

      	<div class="col-sm-3 col-lg-3">
	  		
	  <!-- FOLLOWERS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle>Music</dtitle>
	      		<hr>
	      		<div class="cont">
      			<a href="#"><p><bold>Play Music</bold></p></a>
	      		</div>
      		</div>
      	</div>
      </div><!-- /row -->      
</body></html>