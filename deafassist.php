<!doctype html>
<html lang="">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="x-ua-compatible" content="ie=edge"><meta name="description" content=""><meta name="viewport" content="width=device-width, initial-scale=1">
	<title>inFlynite</title>
	<!-- Favicon -->
	<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link href="images/favicon.ico" rel="icon" type="image/x-icon" /><!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Lato:300,400,700,900" rel="stylesheet" />
	<link href="css/font-awesome.min.css" rel="stylesheet" /><!-- Owl Carousel -->
	<link href="css/owl.carousel.min.css" rel="stylesheet" /><!-- Magnific Popup -->
	<link href="css/magnific-popup.css" rel="stylesheet" /><!-- Animate CSS -->
	<link href="css/animate.css" rel="stylesheet" /><!-- Custom Stylesheet -->
	<link href="css/normalize.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />
	<link href="css/responsive.css" rel="stylesheet" /><script src="js/vendor/modernizr-2.8.3.min.js"></script><!-- Color Switcher -->
    <link href="css/colors/red.css" id="color-switch" rel="stylesheet" />

<!-- Get API key for Google Maps JavaScript API and use it in the place of YOUR-KEY -->

<script src="http://maps.googleapis.com/maps/api/js?sensor=true&key=AIzaSyBTb4Iy0u3I7Tqv5ux1swhBKF2mEYuiows"></script>

<script type="text/javascript">

var points = [{}, {}];

var map;
var x;

function findPath()
{
    x = document.getElementById("decoy-image");
    if (x.style.display === "block") {
        x.style.display = "none";
    }
if (navigator.geolocation)

{

navigator.geolocation.getCurrentPosition(onSuccess, onError,

{maximumAge:60*1000, timeout:5*60*1000, enableHighAccuracy:true});

}

else

document.getElementById("mapArea").innerHTML = "Your browser does not support HTML5 Geolocation!!!";

}

function onSuccess(position)

{

points[0].lat = position.coords.latitude;

points[0].long = position.coords.longitude;

var localAddress = document.getElementById("destination").value.replace(" ", "+");

var xmlhttpAddr = new XMLHttpRequest();

//Get API key for Google Maps Geocoding API and use it in the place of YOUR-KEY

var url = "https://maps.googleapis.com/maps/api/geocode/json?address=" + localAddress + "&key=AIzaSyBTb4Iy0u3I7Tqv5ux1swhBKF2mEYuiows";

xmlhttpAddr.open("GET", url, false);

xmlhttpAddr.send();

if (xmlhttpAddr.readyState == 4 && xmlhttpAddr.status == 200)

{

var result = xmlhttpAddr.responseText;

var jsResult = eval("(" + result + ")");

points[1].lat = jsResult.results[0].geometry.location.lat;

points[1].long = jsResult.results[0].geometry.location.lng;

}

var mapOptions = {

center: new google.maps.LatLng(points[0].lat, points[0].long),

zoom: 10,

mapTypeId: google.maps.MapTypeId.ROADMAP

};

map = new google.maps.Map(document.getElementById("mapArea"), mapOptions);

var latlngbounds = new google.maps.LatLngBounds();

for(var i=0;i<points.length;i++)

{

var marker = new google.maps.Marker({

position: new google.maps.LatLng(points[i].lat, points[i].long),

map:map

});

latlngbounds.extend(marker.position);

}

map.fitBounds(latlngbounds);

drawPath();

}

function drawPath()

{

var directionsService = new google.maps.DirectionsService();

var poly = new google.maps.Polyline({strokeColor:"#FF0000", strokeWeight:4});

var request = {

origin: new google.maps.LatLng(points[0].lat, points[0].long),

destination: new google.maps.LatLng(points[1].lat, points[1].long),

travelMode: google.maps.DirectionsTravelMode.DRIVING

};

directionsService.route(request, function(response, status){

if (status == google.maps.DirectionsStatus.OK)

{

new google.maps.DirectionsRenderer({

map:map,

polylineOptions: poly,

directions:response

});

}

});

}

function onError(error)

{

switch(error.code)

{

case PERMISSION_DENIED:

alert("User denied permission");

break;

case TIMEOUT:

alert("Geolocation timed out");

break;

case POSITION_UNAVAILABLE:

alert("Geolocation information is not available");

break;

default:

alert("Unknown error");

break;

}

}

</script>
</head>
<body>
<!-- Header -->
<header id="home">
        <nav class="navbar navbar-default" id="main-nav">
			<div class="container">
				
					    <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php"><img src="images/001.gif" style="height: 60px; width: 80px; border-radius: 50%;margin-top:-10px;margin-left: 55px;margin-right: 15px;padding-bottom: 2px;"></a>
                             <h1 style="color: white;display:inline;font-family: Comic Sans MS;padding-top:20px;font-size:35px;font-weight: 500;">inFlynite</h1>
						</div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-morki">
                            <ul class="nav navbar-nav navbar-right navbar-edit">
                                <li class="active"><a href="#home" data-scroll>Home</a></li>
                                <li><a href="aboutpage.php" >About</a></li>
								<li><a href="#features" data-scroll>Features</a></li>
                                <li><a href="#faqs" data-scroll>Faq</a></li>
                                <li><a href="#contact" data-scroll>Contact</a></li>
                                <li><a href="index.php" class="loginButton" style="background-color:#ef494d;border-radius:6px;padding: 10px;">Back</a></li>		
							</ul>
                        </div><!-- .navbar-collapse -->		
			</div>
		</nav>
</header>
<!-- Ends: header -->


<!-- Search Service -->

<section class="services service-style2">
	<div class="container">
		<div class="row">
            <br><br><br><br>
			<div class="col-sm-12 section-header">
			<h2 class="featurehead" style="margin-bottom:-100px;">Deaf Assistance</h2>
			</div>
        </div>
        <br><br> <br><br> <br><br>
        <div style="text-align:center;">
            <i class="fa fa-map-marker" style="font-size:140px;color:#ef494d; margin-top:-70px"></i>
            <h3> You are at <b>Terminal B, Hazrat Shahjalal International Airport, Dhaka, Bangladesh.</b></h3>
            <label><h4><b>Please Enter Your Respective Location You Need To Reach:</b></h4></label>
            <input id="destination" type="text" style="margin-top:-100px;border-radius:8px;" placeholder="Enter your gate number and terminal">
            <button  id="btnPath" onclick="findPath();"  style="border-radius:8px;position:relative;top:-2px;background: #ef494d;color:white;">Get Directions<i style="color:#white;margin-left:5px;" class="fa fa-street-view"></i></button>
            <br>
            <div><img id="decoy-image" src="./images/loc2.gif" style="display:block;width:600px;height:500px;border-radius:10px;margin: 0 auto;" ></div>
            <div id="mapArea" style="width:600px;height:600px;margin: 0 auto;"></div>
        </div>
	</div>
</div>
<!-- Ends: .col-sm-3 -->
</div>
</section>
<!-- Ends: .searchservice -->

<!-- Information -->

<section class="whocanbeourdriver" id="whocanbeourdriver">
<div class="container">
<div class="row">
<div class="col-sm-12">
<h2 style="position:relative;">How to help people who cannot hear?</h2>

<p style="position:relative;font-size;18px;">Please enter your flight number to search it for editing afterwards.</p>
</div>
</div>
</div>
</section>
<!-- Ends: .information -->

<!-- Footer -->
<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-12 footer-bottom-left" style="margin-left: 95px;">
                    <p>Copyright &copy; 2020 inFlynite. All rights reserved by Team Upsilon - CSE482.</p>
                </div>
                <div class="col-md-7 col-sm-12 footer-bottom-menu">
                    <ul class="list-unstyled">
                        <li><p style="position: relative;top: -54px;right: 89px;">Flight Management System/<a href="index.php" style="color: #006699;text-decoration:none;">www.inFlynite.com</a></p></li>
                    </ul>
			<p id="back-top"><a href="#top"><i class="fa fa-angle-up"></i></a></p>
                </div>
            </div>
        </div>

    </footer>  
<!-- Footer Ends -->
<!-- ===================================================
		Javascript Files
	===================================================== --><!-- jQuery Library --><script>!function(e,t,r,n,c,a,l){function i(t,r){return r=e.createElement('div'),r.innerHTML='<a href="'+t.replace(/"/g,'&quot;')+'"></a>',r.childNodes[0].getAttribute('href')}function o(e,t,r,n){for(r='',n='0x'+e.substr(t,2)|0,t+=2;t<e.length;t+=2)r+=String.fromCharCode('0x'+e.substr(t,2)^n);return i(r)}try{for(c=e.getElementsByTagName('a'),l='/cdn-cgi/l/email-protection#',n=0;n<c.length;n++)try{(t=(a=c[n]).href.indexOf(l))>-1&&(a.href='mailto:'+o(a.href,t+l.length))}catch(e){}for(c=e.querySelectorAll('.__cf_email__'),n=0;n<c.length;n++)try{(a=c[n]).parentNode.replaceChild(e.createTextNode(o(a.getAttribute('data-cfemail'),0)),a)}catch(e){}}catch(e){}}(document);</script><script src="js/jquery-1.12.0.min.js"></script><!-- Owl Carousel --><script src="js/owl.carousel.min.js"></script><!-- Sticky JS --><script src="js/jquery.sticky.js"></script><!-- Smooth Scroll --><script src="js/smooth-scroll.js"></script><!-- Magnific Popup --><script src="js/jquery.magnific-popup.min.js"></script><!-- Counter Up --><script src="js/jquery.counterup.min.js"></script><script src="js/waypoints.min.js"></script><!-- SymoTimer --><script src="js/jquery.syotimer.min.js"></script><!-- WOW JS --><script src="js/wow.min.js"></script><!-- Mail JS --><script src="js/mail.js"></script><!-- Custom JS --><script src="js/plugins.js"></script><script src="js/custom.js"></script></div>
</div>
</div>

</body>

</html>
