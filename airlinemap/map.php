<style>
.map-marker-label{ position: absolute; color: blue; font-size: 16px; font-weight: bold; }
 .labels {
     color: #FFFFFF;
     font-family: "Lucida Grande", "Arial", sans-serif;
     font-size: 10px;
     font-weight: bold;
     text-align: left;
	 white-space: nowrap;
   }
   .hublabels {
     color: #FFFFFF;
     font-family: "Lucida Grande", "Arial", sans-serif;
     font-size: 12px;
     font-weight: normal;
     text-align: left;
	 white-space: nowrap;
   }
   .menuoptionbox {
	  background:#012c63;
	  padding:10px;
	  color:#FFF;
	   }
    .mapserachsel { 
	margin:5px;
	width:170px;
	height:5px;
	line-height:5px;
    overflow:hidden;
	background:#0e3f84;
	padding:10px;
	padding-top:30px;
padding-left:5px;
	color:#ffffff;
	white-space: nowrap;
	border: 5px solid #0e3f84;
	border-right:10px solid #0e3f84;
	}
	.mapseartitle { 
	margin-left:15px;
	margin-top:10px;
	position:absolute;
	color:#7899c7;
	font-weight:normal;
	font-size:18px;
	z-index:200;
	}
	#map-container { position: relative; }
	
	#scheddiv
	{
	color:#FFF;
	position: absolute;
    top: 0px; left: 0px;
    width: 100%; 
    z-index:250;	
	background:#012c63;
	-moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
	padding:15px;
	display: none;
	max-height:300px;
	overflow-y:scroll;
	padding-bottom:0px;
	border-bottom:15px solid #012c63;
	}

	#fltinfodiv
	{
	color:#FFF;
	position: absolute;
    bottom: 0px; left: 0px;
    width: 240px; 
    z-index:230;	
	background:#012c63;
	-moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
	padding:15px;
	display: none;
	height:330px;
	overflow-y:scroll;
	padding-bottom:0px;
	border-bottom:15px solid #012c63;
	}
	
	#legenddiv
	{
	color:#FFF;
	position: absolute;
    bottom: 15px; right: 0px;
    width: 180px; 
    z-index:230;	
	background:#012c63;
	-moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
	padding:15px;
	height:70px;
	overflow:hidden;
	}

#loadingacars
	{
	color:#FFF;
	position: absolute;
    top: 0px; right: 0px;
    width: 180px; 
    z-index:230;	
	background:#012c63;
	-moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
	display:none;
	padding:15px;
	height:40px;
	overflow:hidden;
	}


.fltinfotitle{
background: #23609D;
font-weight: bold;
margin-top:5px;
margin-bottom:5px;
padding:5px;
}


#flightcountdiv{
	margin-bottom:10px;
background:#0e3f84;
color:#FFFFFF;
padding:5px 10px;
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
display:inline-block;
}

	#scheddiv::-webkit-scrollbar, #fltinfodiv::-webkit-scrollbar {
    width: 10px;
}

#scheddiv::-webkit-scrollbar-track, #fltinfodiv::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(174,192,217,0.3); 
    
}

#scheddiv::-webkit-scrollbar-thumb, #fltinfodiv::-webkit-scrollbar-thumb {

    -webkit-box-shadow: inset 0 0 6px rgba(174,192,217,0.5); 
}

.mapsearchtable {
	margin:0px;padding:0px;
	width:100%;
	border:1px solid #183859;
	
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
	
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
	
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
	
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}.mapsearchtable table{
    border-collapse: collapse;
        border-spacing: 0;
	width:100%;
	height:100%;
	margin:0px;padding:0px;
}
.mapsearchtable tr:last-child td:last-child {
	-moz-border-radius-bottomright:0px;
	-webkit-border-bottom-right-radius:0px;
	border-bottom-right-radius:0px;
}
.mapsearchtable table tr:first-child td:first-child {
	-moz-border-radius-topleft:0px;
	-webkit-border-top-left-radius:0px;
	border-top-left-radius:0px;
}
.mapsearchtable table tr:first-child td:last-child {
	-moz-border-radius-topright:0px;
	-webkit-border-top-right-radius:0px;
	border-top-right-radius:0px;
}.mapsearchtable tr:last-child td:first-child{
	-moz-border-radius-bottomleft:0px;
	-webkit-border-bottom-left-radius:0px;
	border-bottom-left-radius:0px;
}.mapsearchtable tr:hover td{
	
}
.mapsearchtable tr:nth-child(odd){ background-color:#264e85; }
.mapsearchtable tr:nth-child(even)    { background-color:#33598e; }.mapsearchtable td{
	vertical-align:middle;
	
	
	border:1px solid #183859;
	border-width:0px 1px 1px 0px;
	text-align:left;
	padding:7px;
	font-size:10px;
	font-family:Arial;
	font-weight:normal;
	color:#ffffff;
}.mapsearchtable tr:last-child td{
	border-width:0px 1px 0px 0px;
}.mapsearchtable tr td:last-child{
	border-width:0px 0px 1px 0px;
}.mapsearchtable tr:last-child td:last-child{
	border-width:0px 0px 0px 0px;
}
.mapsearchtable tr:first-child td{
	background:#23609D;
	border:0px solid #183859;
	text-align:center;
	border-width:0px 0px 1px 1px;
	font-size:12px;
	font-family:Arial;
	font-weight:bold;
	color:#ffffff;
}
.mapsearchtable tr:first-child:hover td{
	background:#23609D;
}
.mapsearchtable tr:first-child td:first-child{
	border-width:0px 0px 1px 0px;
}
.mapsearchtable tr:first-child td:last-child{
	border-width:0px 0px 1px 1px;
}
.mapsearchtable td a { color:#afcef9 !important; }
.mapstylebutton {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
	background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
	background-color:#ededed;
	-webkit-border-top-left-radius:0px;
	-moz-border-radius-topleft:0px;
	border-top-left-radius:0px;
	-webkit-border-top-right-radius:0px;
	-moz-border-radius-topright:0px;
	border-top-right-radius:0px;
	-webkit-border-bottom-right-radius:0px;
	-moz-border-radius-bottomright:0px;
	border-bottom-right-radius:0px;
	-webkit-border-bottom-left-radius:0px;
	-moz-border-radius-bottomleft:0px;
	border-bottom-left-radius:0px;
	text-indent:0;
	border:1px solid #dcdcdc;
	display:inline-block;
	color:#616061;
	font-family:Arial;
	font-size:9px;
	font-weight:bold;
	font-style:normal;
	height:20px;
	line-height:18px;
	width:80px;
	text-decoration:none;
	text-align:center;
	cursor:pointer;
 outline:none;
}
.mapstylebutton:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
	background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
	background-color:#dfdfdf;
}.mapstylebutton:active {
	position:relative;
	top:1px;
}
</style>
<script src="<?php echo SITE_URL ?>/core/modules/AirlineMap/js/markerwithlabel.js" type="text/javascript"></script>
<h3>Airline Map</h3>
<div class="menuoptionbox">
<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td>
<div class="mapseartitle">Origin</div>
<div class="mapserachsel" id="origdiv"></div>
</td><td>
<div class="mapseartitle">Destination</div>
<div class="mapserachsel" id="arridiv"></div>
</td>
<td valign="top" align="center" style="padding-top:5px; padding-left:10px;">
Connecting Flights:<br />
<input type='checkbox' id='viaflights' name='viaflights' value='1'>
</td>
<td valign="top" align="right" width="50%" style="padding-top:5px;">
<div id="flightcountdiv"></div>
<br />
<input class="mapstylebutton" onclick="clearMarkers();" type=button value="Reset Map">
<input class="mapstylebutton" onclick="hideFlights();" type=button value="Toggle ACARS">


</td>
</tr>
</table>
</div>

<div id="map-container">
<div id="scheddiv">
</div>
<div id="loadingacars">
Loading ACARS Flights...
</div>
<div id="fltinfodiv">
</div>
<div id="legenddiv">
<table width="100%" cellpadding="0" cellspacing="5px" border="0">
<tr><td><img src="<?php echo SITE_URL ?>/core/modules/AirlineMap/images/nonstop.png" alt="Green Dot" /></td><td>Direct Routes</td></tr>
<tr><td><img src="<?php echo SITE_URL ?>/core/modules/AirlineMap/images/connecting.png" alt="Yellow Dot" /></td><td>Connecting Routes</td></tr>
</table>

</div>
<div id="map" style="width:<?php echo  Config::Get('MAP_WIDTH');?>; height: <?php echo Config::Get('MAP_HEIGHT')?>"></div>
</div>

<?php $hubs = json_encode($hubs); ?>
<script>
var directpts = [];
var greendots =[];
var tmarkers =[];
var hmarkers =[];
var actmarkers =[];
var acarsflights =[];
var acarslabel =[];
var locmarkers =[];
var arrlocmarkers =[];
var yellowdots =[];
var selectroutes =[];
var acarsdeppaths =[];
var acarsarrpaths =[];
var arrmarkers =[];
var viaroutes =[];
var trackflightroutes = [];
oridiv = document.getElementById('origdiv');
arrdiv = document.getElementById('arridiv');
scheddiv = document.getElementById('scheddiv');
fltinfodiv = document.getElementById('fltinfodiv');
acarshidden = 0;
displayvia = 0;

$("#viaflights").click(function() {
        if($('#viaflights').is(':checked'))
            displayvia=1;
        else           
		  displayvia=0;
    });

displayvia = $("input[name='viaflights']:checked").length ? "1" : "0";

function hideFlights() {

if(acarshidden == 1)
{
acarshidden = 0;
showloadingacarswindow();
}
else
{
hideloadingacarswindow();
for (i=0; i<trackflightroutes.length; i++) { trackflightroutes[i].setMap(null); }
for (i=0; i<acarslabel.length; i++) { acarslabel[i].setMap(null); }
for (i=0; i<acarsflights.length; i++) { acarsflights[i].setMap(null); }
for (i=0; i<acarsarrpaths.length; i++) { acarsarrpaths[i].setMap(null); }
for (i=0; i<acarsdeppaths.length; i++) { acarsdeppaths[i].setMap(null); }
document.getElementById('fltinfodiv').style.display= 'none';
fltinfodiv.innerHTML = '';
acarshidden = 1;

}
}

$(document).ready(function() {


var latlng = new google.maps.LatLng("<?php echo Config::Get('MAP_CENTER_LAT'); ?>", "<?php echo Config::Get('MAP_CENTER_LNG'); ?>");
var styles = [
	{
		"featureType": "landscape",
		"stylers": [
			{
				"color": "#01356a"
			}
		]
	}, {
		"featureType": "administrative",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	} , {
		"featureType": "transit",
		"stylers": [
			{
				"visibility": "off"
			}
		]
	},
	{
		"featureType": "road",
		"stylers": [
{
"visibility": "off"
}
		]
	},
	{
		"featureType": "water",
		"stylers": [
			{
				"color": "#0b508e"
			}
		]
	},
	{
		"featureType": "poi",
		"stylers": [
		{
				"visibility": "off"
			}
		]
	},{ featureType: "all", elementType: "labels", stylers: [ { visibility: "off" } ] }
];


var myOptions = {
zoom: 4,
center: latlng,
mapTypeId: google.maps.MapTypeId.ROADMAP,
disableDefaultUI: true,
zoomControl: true,
styles: styles
};
map = new google.maps.Map(document.getElementById('map'), myOptions);



// NOW THE ACARS STUFF
if(acarshidden != 1)
{
{
    setInterval(function () { acarsFlightoption(); }, 60000);
}


function acarsFlightoption()
{
hideloadingacarswindow();
$.ajax({ type: "GET", url: '<?php echo SITE_URL ?>/action.php/AirlineMap/getflightcount/', data: "flights=all",
 success: function(data) { $('#flightcountdiv').html(data); } });

for (i=0; i<acarslabel.length; i++) { acarslabel[i].setMap(null); }
for (i=0; i<acarsflights.length; i++) { acarsflights[i].setMap(null); }
for (i=0; i<acarsarrpaths.length; i++) { acarsarrpaths[i].setMap(null); }
for (i=0; i<acarsdeppaths.length; i++) { acarsdeppaths[i].setMap(null); }
for (i=0; i<trackflightroutes.length; i++) { trackflightroutes[i].setMap(null); }
document.getElementById('fltinfodiv').style.display= 'none';
fltinfodiv.innerHTML = '';

$.ajax({
url: '<?php echo SITE_URL ?>/action.php/AirlineMap/getacarsdata',
success: function(acarsdata)
{
if ( acarsdata != undefined ) {
$.each(acarsdata, function() {
var pos = new google.maps.LatLng(this.lat, this.lng);

var flighticon  = new google.maps.MarkerImage('<?php echo SITE_URL ?>/lib/images/inair/'+this.heading+'.png',
                new google.maps.Size(30, 30),
                new google.maps.Point(0, 0),
                new google.maps.Point(15, 15));

liveflightmarker = new google.maps.Marker({
position: pos,
icon: flighticon,
title: this.flightnum,
zIndex: 9998,
optimized: false,
map: map
});
acarsflights.push(liveflightmarker);


liveflightlabel = new google.maps.Marker({
position: pos,
icon: flighticon,
icon : new google.maps.MarkerImage("http://chart.googleapis.com/chart?chst=d_text_outline&chld=FFFFFF|9|l|000000|b|" + this.flightnum + " - " + this.aircraftname+"|"+this.depicao + " - " + this.arricao, null, null, new google.maps.Point(-15, 25)),
zIndex: 9999,
optimized: false,
map: map
});
acarslabel.push(liveflightlabel);
var flightdeplat = this.deplat;
var flightarrlat = this.arrlat;
var flightdeplng = this.deplng;
var flightarrlng = this.arrlng;
var theflightnum = this.flightnum;
var thepilotid = this.pilotid;
var poslat = this.lat;
var poslng = this.lng;
var fltacid = this.id;

google.maps.event.addListener(liveflightmarker, "click", function (event) {

//TrackFlightPath
//Uncomment the part below if you own CrazyCreatives Flight Position Tracker Module
/*
for (i=0; i<trackflightroutes.length; i++) { trackflightroutes[i].setMap(null); }
 var polyOptions = {
geodesic: true,
strokeColor: '#ff00fc',
strokeOpacity: 0.8,
strokeWeight: 2
}
trackflightpath = new google.maps.Polyline(polyOptions);
trackflightpath.setMap(map);
trackflightroutes.push(trackflightpath);

var TrackFlightCoordinates = [];

	$.ajax({
url: '<?php echo SITE_URL ?>/action.php/AirlineMap/getposreportsnew',  data: "pilotid=" + thepilotid + "&flightnum=" + theflightnum,
success: function(posreps)
{
	
    $.each(posreps, function(key, val) {
            TrackFlightCoordinates.push(new google.maps.LatLng(val.latitude, val.longitude));
    });

    trackflightpath.setPath(TrackFlightCoordinates);
}
});

*/
//trackflightroutes end
 
	


document.getElementById('fltinfodiv').style.display= 'none';
fltinfodiv.innerHTML = '';
for (i=0; i<acarsarrpaths.length; i++) { acarsarrpaths[i].setMap(null); }
for (i=0; i<acarsdeppaths.length; i++) { acarsdeppaths[i].setMap(null); }
fltinfodiv.innerHTML = 'Looking for Info...';
document.getElementById('fltinfodiv').style.display= 'block';

var ACADepFlightCoordinates = [
new google.maps.LatLng(flightdeplat, flightdeplng),
new google.maps.LatLng(poslat, poslng),
];

var acadeppaths = new google.maps.Polyline({
path: ACADepFlightCoordinates,
geodesic: true,
strokeColor: '#F781F3',
strokeOpacity: 0.8,
strokeWeight: 2
});
acadeppaths.setMap(map);
acarsdeppaths.push(acadeppaths);

var ACAarrFlightCoordinates = [
new google.maps.LatLng(flightarrlat, flightarrlng),
new google.maps.LatLng(poslat, poslng),
];

var acaarrpaths = new google.maps.Polyline({
path: ACAarrFlightCoordinates,
geodesic: true,
strokeColor: '#E92A2A',
strokeOpacity: 0.8,
strokeWeight: 1
});
acaarrpaths.setMap(map);
acarsarrpaths.push(acaarrpaths);

$.ajax({ type: "GET", url: '<?php echo SITE_URL ?>/action.php/AirlineMap/getfltinfo/', data: "acarsid=" + fltacid,
 success: function(data) { $('#fltinfodiv').html(data); } });



});
});
}
}
});
};

google.maps.event.addListener(map, 'click', function()
{
	hidefltwindow();
});
}
acarsFlightoption();
// ACARS END

//Routemap Start

$.ajax({
url: '<?php echo SITE_URL ?>/action.php/AirlineMap/getourhubs',
success: function(hubs)
{
$.each(hubs, function() {
var pos = new google.maps.LatLng(this.lat, this.lng);
var curhub = this.hub;

if(curhub == '1')
{
marker = new google.maps.Marker({
position: pos,
icon: { path: google.maps.SymbolPath.CIRCLE,
'scale': "5",
'fillColor':"#FFFFFF",
'fillOpacity':"1",
'strokeColor':"#FFFFFF",
'strokeOpacity':"0",
'strokeWeight':"0"
},
optimized: false,
zIndex: 5000,
title: this.name+" "+this.icao,
map: map
});
var curricao = this.icao;
var curname = this.name;
var dep_lat = this.lat;
var dep_lng = this.lng;
var icon = "<?php echo SITE_URL ?>/core/modules/AirlineMap/images/transparent.png";

google.maps.event.addListener(map, 'zoom_changed', function() { var zoom = map.getZoom();
if (zoom<5) {
for (i=0; i<hmarkers.length; i++) { hmarkers[i].setMap(null); }
}
 if (zoom==5) { 

hmarker = new MarkerWithLabel({
position: pos,
icon: icon,
title: curname+" "+curricao,
map: map,
optimized: false,
zIndex: 5000,
labelContent: curname,
labelAnchor: new google.maps.Point(-10,8),
labelClass: "hublabels", // the CSS class for the label
labelStyle: {opacity: 0.75}
});
hmarkers.push(hmarker);
 } });
}
else
{
marker = new google.maps.Marker({
position: pos,
icon: { path: google.maps.SymbolPath.CIRCLE,
'scale': "3",
'fillColor':"#FFFFFF",
'fillOpacity':"1",
'strokeColor':"#FFFFFF",
'strokeOpacity':"0",
'strokeWeight':"0"
},
title: this.name+" "+this.icao,
optimized: false,
zIndex: 5000,
map: map
});
var curricao = this.icao;
var nowhub = this.hub;
var curname = this.name;
var dep_lat = this.lat;
var dep_lng = this.lng;
var icon = "<?php echo SITE_URL ?>/core/modules/AirlineMap/images/transparent.png";


 } 




google.maps.event.addListener(marker, "click", function (event) { 

oridiv.innerHTML = '';
arrdiv.innerHTML = '';
scheddiv.innerHTML = '';
document.getElementById('scheddiv').style.display= 'none';
for (i=0; i<directpts.length; i++) { directpts[i].setMap(null); }
for (i=0; i<greendots.length; i++) { greendots[i].setMap(null); }
for (i=0; i<locmarkers.length; i++) { locmarkers[i].setMap(null); }
for (i=0; i<viaroutes.length; i++) { viaroutes[i].setMap(null); }
for (i=0; i<yellowdots.length; i++) { yellowdots[i].setMap(null); }
for (i=0; i<actmarkers.length; i++) { actmarkers[i].setMap(null); }
for (i=0; i<arrmarkers.length; i++) { arrmarkers[i].setMap(null); }
for (i=0; i<selectroutes.length; i++) { selectroutes[i].setMap(null); }
for (i=0; i<arrlocmarkers.length; i++) { arrlocmarkers[i].setMap(null); }

//Schedule Hub Marker Action
var selectedimg  = new google.maps.MarkerImage('<?php echo SITE_URL ?>/core/modules/AirlineMap/images/selected.png',
                new google.maps.Size(30, 30),
                new google.maps.Point(0, 0),
                new google.maps.Point(15, 15));
				
				
oridiv.innerHTML = curname+' '+curricao;

map.setCenter(this.getPosition()); 
// map.setZoom(4);


locmarker = new google.maps.Marker({
position: this.getPosition(),
icon: selectedimg,
optimized: false,
map: map
});
locmarkers.push(locmarker);

if(nowhub == '0') {
var icon = "<?php echo SITE_URL ?>/core/modules/AirlineMap/images/transparent.png";
actmarker = new MarkerWithLabel({
position: this.getPosition(),
icon: icon,
title: curname+" "+curricao,
visible: true,
flat: true,
optimized: false,
map: map,
labelContent: this.title,
labelAnchor: new google.maps.Point(-10,8),
labelClass: "labels", // the CSS class for the label
labelStyle: {opacity: 0.75}

});
actmarkers.push(actmarker);
}

$.ajax({
url: '<?php echo SITE_URL ?>/action.php/AirlineMap/getdirflights/'+curricao,
success: function(dirflts)
{
$.each(dirflts, function() {
var DctFlightCoordinates = [
new google.maps.LatLng(dep_lat, dep_lng),
new google.maps.LatLng(this.lat, this.lng),
];

var directpaths = new google.maps.Polyline({
path: DctFlightCoordinates,
geodesic: true,
strokeColor: '#7CFC00',
strokeOpacity: 0.6,
strokeWeight: 1
});
directpaths.setMap(map);
directpts.push(directpaths);
var nexthub = this.hub;

var pos = new google.maps.LatLng(this.lat, this.lng);
greenapts = new google.maps.Marker({
position: pos,
icon: { path: google.maps.SymbolPath.CIRCLE,
'scale': "3",
'fillColor':"#7CFC00",
'fillOpacity':"0.8",
'strokeColor':"#FFFFFF",
'strokeOpacity':"0",
'strokeWeight':"0"
},
zIndex: 8000,
optimized: false,
title: this.name+" "+this.icao,
map: map
});
greendots.push(greenapts);

var nicao = this.icao;
var nname = this.name;
var ndep_lat = this.lat;
var ndep_lng = this.lng;

google.maps.event.addListener(greenapts, "click", function (event) { 

for (i=0; i<arrmarkers.length; i++) { arrmarkers[i].setMap(null); }
for (i=0; i<selectroutes.length; i++) { selectroutes[i].setMap(null); }

var SelectFlightCoordinates = [
new google.maps.LatLng(dep_lat, dep_lng),
new google.maps.LatLng(ndep_lat, ndep_lng),
];

var selectpath = new google.maps.Polyline({
path: SelectFlightCoordinates,
geodesic: true,
strokeColor: '#7CFC00',
strokeOpacity: 0.6,
strokeWeight: 2
});
selectpath.setMap(map);
selectroutes.push(selectpath);

for (i=0; i<viaroutes.length; i++) { viaroutes[i].setMap(null); }
for (i=0; i<directpts.length; i++) { directpts[i].setMap(null); }
for (i=0; i<arrlocmarkers.length; i++) { arrlocmarkers[i].setMap(null); }

arrdiv.innerHTML = '';
arrdiv.innerHTML = nname+' '+nicao;

scheddiv.innerHTML = 'Searching Flights...';

var icon = "<?php echo SITE_URL ?>/core/modules/AirlineMap/images/transparent.png";
if(nexthub == '0') {
arrmarker = new MarkerWithLabel({
position: this.getPosition(),
icon: icon,
title: nname+" "+nicao,
visible: true,
optimized: false,
flat: true,
map: map,
labelContent: nname,
labelAnchor: new google.maps.Point(-10,8),
labelClass: "labels", // the CSS class for the label
labelStyle: {opacity: 0.75}

});
arrmarkers.push(arrmarker);
}
var arrselectedimg  = new google.maps.MarkerImage('<?php echo SITE_URL ?>/core/modules/AirlineMap/images/selected.png',
                new google.maps.Size(30, 30),
                new google.maps.Point(0, 0),
                new google.maps.Point(15, 15));

arrlocmarker = new google.maps.Marker({
position: this.getPosition(),
icon: arrselectedimg,
optimized: false,
map: map
});
arrlocmarkers.push(arrlocmarker);

document.getElementById('scheddiv').style.display= 'block';


$.ajax({ type: "GET", url: '<?php echo SITE_URL ?>/action.php/AirlineMap/getschedules/', data: "depicao=" + curricao + "&arricao=" + nicao,
 success: function(data) { $('#scheddiv').html(data); } });
});

if(displayvia == 1)
{
$.ajax({
url: '<?php echo SITE_URL ?>/action.php/AirlineMap/getviaflights/'+curricao+'-'+this.icao,
success: function(viaflts)
{
if ( viaflts != undefined ) {
$.each(viaflts, function() {
var ViaFlightCoordinates = [
new google.maps.LatLng(ndep_lat, ndep_lng),
new google.maps.LatLng(this.lat, this.lng),
];

var viapaths = new google.maps.Polyline({
path: ViaFlightCoordinates,
geodesic: true,
strokeColor: '#FFD700',
strokeOpacity: 0.6,
zIndex: 7000,
strokeWeight: 1
});
viapaths.setMap(map);
viaroutes.push(viapaths);

var pos = new google.maps.LatLng(this.lat, this.lng);
yellowapts = new google.maps.Marker({
position: pos,
icon: { path: google.maps.SymbolPath.CIRCLE,
'scale': "3",
'fillColor':"#FFD700",
'fillOpacity':"0.8",
'strokeColor':"#FFD700",
'strokeOpacity':"0",
'strokeWeight':"0"
},
title: this.name+" "+this.icao,
optimized: false,
zIndex: 7000,
map: map
});
yellowdots.push(yellowapts);
});
}
}
});
}
});
}
});
// Schedule Hub Action End

}); 
});
}
});

// Schedule Hub Marker End

google.maps.event.addListener(map, 'zoom_changed', function() {
     if (map.getZoom() < 2) map.setZoom(2);
     if (map.getZoom() > 11) map.setZoom(11);
   });


// RouteMap End



});




function hidefltwindow() {
document.getElementById('fltinfodiv').style.display= 'none';
fltinfodiv.innerHTML = '';
}

function hideloadingacarswindow() {
document.getElementById('loadingacars').style.display= 'none';
fltinfodiv.innerHTML = '';
}

function showloadingacarswindow() {
document.getElementById('loadingacars').style.display= 'block';
fltinfodiv.innerHTML = '';
}



function clearMarkers() {
for (i=0; i<acarsarrpaths.length; i++) { acarsarrpaths[i].setMap(null); }
for (i=0; i<acarsdeppaths.length; i++) { acarsdeppaths[i].setMap(null); }
for (i=0; i<directpts.length; i++) { directpts[i].setMap(null); }
for (i=0; i<greendots.length; i++) { greendots[i].setMap(null); }
for (i=0; i<viaroutes.length; i++) { viaroutes[i].setMap(null); }
for (i=0; i<yellowdots.length; i++) { yellowdots[i].setMap(null); }
for (i=0; i<locmarkers.length; i++) { locmarkers[i].setMap(null); }
for (i=0; i<actmarkers.length; i++) { actmarkers[i].setMap(null); }
for (i=0; i<arrmarkers.length; i++) { arrmarkers[i].setMap(null); }
for (i=0; i<arrlocmarkers.length; i++) { arrlocmarkers[i].setMap(null); }
for (i=0; i<selectroutes.length; i++) { selectroutes[i].setMap(null); }
for (i=0; i<trackflightroutes.length; i++) { trackflightroutes[i].setMap(null); }
document.getElementById('scheddiv').style.display= 'none';
document.getElementById('fltinfodiv').style.display= 'none';
oridiv.innerHTML = '';
arrdiv.innerHTML = '';
scheddiv.innerHTML = '';
fltinfodiv.innerHTML = '';
var acarshidden = 0;
}
</script>