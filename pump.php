<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>
 

 <style>
 
 
 #mymap{
 width:100%;
 height:700px;
 }
 .first{
width:5%;
}
h2{
text-align:center;

font-weight:bold;
font-size:28px;
}
 </style>
 

 </head>

<body>
<a href="final.jsp">
<img class="first" src="img/home.png">
</img>
</a>
 <h2>Nearest Petrol Pumps Near Me</h2>
 <div id="mymap"></div>
 <div id="info"></div>
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
 <script>
 function init(){
 var mapDiv = document.getElementById("mymap");
 var mapOptions = {
  center: new google.maps.LatLng(28.6287,77.2427),
  zoom: 15,
  mapTypeId: google.maps.MapTypeId.ROADMAP
 };
 var map = new google.maps.Map(mapDiv,mapOptions);
var locations=[];
locations.push({name:"Tilak Nagar Police Station",latlng:new google.maps.LatLng(28.573183,77.187337)});
locations.push({name:"Palam Village Police Station",latlng:new google.maps.LatLng(28.52323,77.17754)}); 
locations.push({name:"Moti Nagar Police Station",latlng:new google.maps.LatLng(28.545149,77.200166)}); 
locations.push({name:"Police station headquarters Delhi",latlng:new google.maps.LatLng(28.575207,77.20947)});
locations.push({name:"Mehrauli Police station",latlng:new google.maps.LatLng(28.568809,77.174013)});
locations.push({name:"Mehrauli Police station",latlng:new google.maps.LatLng(28.544788,77.18987)});
 
 
 
 
 
 var bounds=new google.maps.LatLngBounds();
for (var i=0;i<locations.length;i++)
{
var marker=new google.maps.Marker({position:locations[i].latlng,map:map,title:locations[i].name});
bounds.extend(locations[i].latlng);


} 
map.fitBounds(bounds);
}
 window.onload = init;
 </script>
 </body>
 </html>
