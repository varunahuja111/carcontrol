<!doctype html>
<html><head>
    <meta charset="utf-8">
    <title>Car Control</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

    <!-- DATA TABLE CSS -->
    <link href="css/table.css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery.js"></script>    
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/admin.js"></script>

    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
        
  	<!-- Google Fonts call. Font Used Open Sans -->
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

  	<!-- DataTables Initialization -->
    <script type="text/javascript" src="js/datatables/jquery.dataTables.js"></script>
  			<script type="text/javascript" charset="utf-8">
  			    $(document).ready(function () {
  			        $('#dt1').dataTable();
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
          <a class="navbar-brand" href="index.php"><img src="images/logo30.png" alt=""> Car Control</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php"><i class="icon-home icon-white"></i> Home</a></li>              
              <li class="active"><a href="tables.php"><i class="icon-th icon-white"></i> OBD Data</a></li>
              <li><a href="user.php"><i class="icon-user icon-white"></i> User</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div>

    <div class="container">

      <!-- CONTENT -->
	<div class="row">
		<div class="col-sm-12 col-lg-12">
			<h4><strong>OBD DATA</strong></h4>
			  <table class="display">
	          <thead>
	            <tr>
	              <th>Fuel</th>
	              <th>Mileage (km)</th>
	              <th>Distance Travelled (km)</th>
	              <th>Oil Temperature (Degree Celcius)</th>
	              <th>Speed (km/hr)</th>
	            </tr>
	          </thead>
	          <tbody>
	            <tr class="odd">
	              <td>5L</td>
	              <td id="23" value="23">23 KM</td>
	              <td id="50" value="50">50 KM</td>
				  <td>237 </td>
	               <td>45 </td>
	            </tr>
	            <tr class="even">
	              <td>2L</td>
	              <td id="19" value="19">19 KM</td>
	              <td id="65" value="65">65 KM</td>
				   <td>240 </td>
				    <td>50 </td>
	            
	            </tr>
	            <tr class="odd">
	              <td>6L</td>
	             <td id="24" value="24">24 KM</td> 
				  <td id="67" value="67">67 KM</td>
	               <td>239 </td>
				    <td>60 </td>
	              </tr>
	            <tr class="even">
	              <td>8L</td>
	              <td id="26" value="26">26 KM</td>
	              <td id="75" value="75">75 KM</td>
				   <td>248 </td>
				   <td>70 </td>
				  
	              </tr>
	            <tr class="odd">
	              <td>10L</td>
	              <td id="30" value="30">30 KM</td>
	              <td id="90" value="90">90 KM</td><t>
				   <td>256 </td>
					<td>95 </td>  
				   </tr>
				<tr class="even">
	              <td>12L</td>
	              <td id="21" value="21">21 KM</td>
	              <td id="102" value="102">102 KM</td>
				   <td>243 </td>
				   <td>63 </td>
				  
	              </tr>
	            <tr class="odd">
	              <td>5L</td>
	              <td id="34" value="34">34 KM</td>
	              <td id="113" value="113">113 KM</td><t>
				   <td>243 </td>
					<td>57 </td>  
				  </tr>
				<tr class="even">
	              <td>3L</td>
	              <td id="15" value="15">15 KM</td>
	              <td id="124" value="124">124 KM</td>
				   <td>232 </td>
				   <td>23 </td>
				  
	              </tr>
	            <tr class="odd">
	              <td>20L</td>
	              <td id="28" value="28">28 KM</td>
	              <td id="138" value="138">138 KM</td><t>
				   <td>253 </td>
					<td>84 </td>  
				   </tr>
				   <tr class="even">
	              <td>2L</td>
	              <td id="11" value="11">11 KM</td>
	              <td id="150" value="150">150 KM</td>
				   <td>241 </td>
				   <td>61 </td>
				  
	              </tr>
	            <tr class="odd">
	              <td>15L</td>
	              <td id="30" value="30">30 KM</td>
	              <td id="170" value="170">170 KM</td><t>
				   <td>258 </td>
					<td>95 </td>  
				   </tr>
				   <tr class="even">
	              <td>14L</td>
	              <td id="16" value="16">16 KM</td>
	              <td id="186" value="186">186 KM</td>
				   <td>230 </td>
				   <td>40 </td>
				  
	              </tr>
	            <tr class="odd">
	              <td>16L</td>
	              <td id="20" value="20">20 KM</td>
	              <td id="200" value="200">200 KM</td><t>
				   <td>261 </td>
					<td>90 </td>  
				   </tr>
				   <tr class="even">
	              <td>1L</td>
	              <td id="15" value="15">15 KM</td>
	              <td id="209" value="209">209 KM</td>
				   <td>239 </td>
				   <td>100 </td>
				  
	              </tr>
	            <tr class="odd">
	              <td>20L</td>
	              <td id="30" value="30">30 KM</td>
	              <td id="235" value="235">235 KM</td><t>
				   <td>259 </td>
					<td>35 </td>  
				   </tr>
				   <tr class="even">
	              <td>3L</td>
	              <td id="15" value="15">15 KM</td>
	              <td id="250" value="250">250 KM</td>
				   <td>260 </td>
				   <td>80 </td>
				  
	              </tr>
	            <tr class="odd">
	              <td>2L</td>
	              <td id="20" value="20">20 KM</td>
	              <td id="279" value="279">279 KM</td><t>
				   <td>251 </td>
					<td>40 </td>  
				   </tr>
				   <tr class="even">
	              <td>1L</td>
	              <td id="20" value="20">20 KM</td>
	              <td id="290" value="290">290 KM</td>
				   <td>260 </td>
				   <td>70 </td>
				  
	              </tr>
	            <tr class="odd">
	              <td>6L</td>
	              <td id="10" value="10">10 KM</td>
	              <td id="310" value="310">310 KM</td><t>
				   <td>261 </td>
					<td>27 </td>  
				   </tr>
				   <tr class="even">
	              <td>5L</td>
	              <td id="20" value="20">20 KM</td>
	              <td id="330" value="330">330 KM</td>
				   <td>241 </td>
				   <td>65 </td>
				  
	              </tr>
	            <tr class="odd">
	              <td>20L</td>
	              <td id="28" value="28">28 KM</td>
	              <td id="138" value="138">138 KM</td><t>
				   <td>253 </td>
					<td>84 </td>  
				   </tr>
				   
				   
				   
				   
	          </tbody>
	         </table><!--/END First Table -->
			 <br>
			 <!--SECOND Table -->
			 <script type="text/javascript">
			var a = 33;
            var b = 10;
            var linebreak = "<br />";
         
            result = a - b;
            document.write(result);
            document.write(linebreak);
         
			</script>
</body></html>
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
 