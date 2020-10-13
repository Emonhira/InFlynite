<?php
error_reporting(0);
session_start();
$name = $_SESSION["name"];
$from =  $_SESSION["from"];
$to =  $_SESSION["to"];
$airlines =  $_SESSION["airlines"];
$dep =  $_SESSION["dep"];
$return =  $_SESSION["return"];
$seat = $_SESSION["seat"];
$gate = $_SESSION["gate"];
$class = $_SESSION["class"];
$fnum = $_SESSION["fnum"];


?>
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
</head>
<body>
<!-- Services -->
<section style="margin-top: -112px;">
<div><img src='./images/5eeab435aefc2f7eabeb39f2_preview-1.gif' style='position:relative;border-radius: 10px;left: 545px;top: 148px;' height='310' width='410'></div>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
			<div>
					<div class="container-fluid" style="border: 8px solid white;background-color: #ebebeb47;border-radius: 15px;margin: 150px auto;width: 990px;height: 294px;">
						<div>
							<div>
								<div>
									<h3 style="letter-spacing: 5px;margin-left: 25px;color: lightgrey;font-weight: 600;">PASSENGER</h3><br>
									<h1 style="font-weight: 400;color: dodgerblue;margin-left: 25px;margin-top: -49px;font-size: 33px;font-family: roboto;text-transform: uppercase;"><?php echo $name; ?></h1>
									<h2 style="margin-left: 27px;font-weight: 360;margin-top: -35px;letter-spacing: -1px;font-family: Roboto;font-size: 31px;">2:39PM <?php echo $dep; ?></h2>
								</div>
							</div>
							<div>
								<div>
									<h3 style="letter-spacing: 5px;margin-left: 25px;color: lightgrey;margin-top: -20px;font-weight: 600;">AIRLINE</h3>
									<h2 style="margin-left: 27px;font-weight: 360;margin-top: -28px;letter-spacing: -1px;font-family: Roboto;font-size: 35px;text-transform: uppercase;"><span style="color:dodgerblue;"><?php echo $airlines; ?></span></h2>
								</div>
							</div>
							<div style="margin-left: 26px;display: inline-flex;position: relative;top: -40px;">
								<h4 style="margin-right: 5px;color: lightgrey;letter-spacing: 3px;margin-left: 6px;">GATE</h4>
								<h4 style="margin-right: 117px;color: lightgrey;/* font-size: small; */letter-spacing: 3px;margin-left: 12px;">SEAT</h4>
								<h4 style="margin-left: -102px;/* font-size: small; */color: lightgrey;letter-spacing: 3px;">CLASS</h4>
							</div><br>
							<div style="margin-left: 26px;display: inline-flex;position: relative;top: -92px;">
								<h2 style="margin-left: 5px;color: dodgerblue;font-size: 31px;font-weight: 400;margin-top: 23px;text-transform: uppercase;margin-right: 31px;"><?php echo $gate; ?></h2>
								
								<h2 style="color: dodgerblue;font-size: 31px;font-weight: 400;margin-top: 23px;margin-right: 39px;text-transform: uppercase;"><?php echo $seat; ?></h2><h2 style="color: dodgerblue;font-size: 31px;font-weight: 400;margin-top: 23px;margin-right: 15px;text-transform: uppercase;margin-left: -14px;"><?php echo $class; ?></h2>
							</div>
						</div>
						<div style="float:right;margin-top: -388px;margin-right: 290px;text-align: right;">
							<div>
								<h3 style="letter-spacing: 5px;color: lightgrey;font-weight: 600;margin-top: 29px;">FLIGHT</h3>
								<h2 style="font-weight: 360;margin-top: -18px;letter-spacing: -1px;font-family: Roboto;font-size: 25px;text-transform: uppercase;"><?php echo $fnum; ?></h2>
								<h2 style="font-weight: 360;margin-top: -27px;letter-spacing: -1px;font-family: Roboto;font-size: 25px;text-transform: uppercase;"><?php echo $from; ?> <span style="color:dodgerblue;">TO </span> <?php echo $to; ?></h2>
							</div>
							<div style="margin-top: -7px;">
								<img src="./images/001.gif" height="40" width="50" style="margin-right:5px;border-radius: 50%;">
								<img src="./images/dea.gif" height="40" width="40"><p style="color: lightgrey;margin: 2px 0;font-weight: 700;text-transform: uppercase;">Boarding Pass</p>
							</div>
							<div style="margin-top: 21px;">
								<img src="./images/barcode.png" height="40" width="190">
							</div>
						</div>
						<div style="float:right;margin-top: -365px;background-color: dodgerblue;max-height: 268px;width: 294px;position: relative;left: 10px;border-bottom-right-radius: 8px;border-bottom-left-radius: 8px;transform: rotate(270deg);">
								<div>
									<h3 style="letter-spacing: 5px;margin-left: 25px;color: lightgrey;font-weight: 600;font-size: 14px;margin-top: 37px;">PASSENGER</h3>
									<br>
									<h1 style="font-weight: 400;color: white;margin-left: 25px;margin-top: -34px;font-size: 21px;font-family: roboto;text-transform: uppercase;"><?php echo $name; ?></h1>
									<h2 style="margin-left: 27px;font-weight: 360;margin-top: -17px;letter-spacing: -1px;font-family: Roboto;font-size: 24px;color: black;">2:39PM <?php echo $dep; ?></h2>
								</div>
								<div style="margin-left: 26px;display: inline-flex;position: relative;top: -26px;font-size: 14px;">
									<h4 style="margin-right: 8px;color: lightgrey;letter-spacing: 3px;">GATE</h4>
									
									<h4 style="margin-right: 6px;/* font-size: small; */color: lightgrey;letter-spacing: 3px;text-transform: uppercase;">SEAT</h4><h4 style="margin-right: 15px;color: lightgrey;/* font-size: small; */letter-spacing: 3px;">CLASS</h4>
								</div><br>
								<div style="margin-left: 26px;display: inline-flex;position: relative;top: -73px;/* font-size: 10px; */">
									<h2 style="color: white;font-size: 26px;font-weight: 400;margin-top: 29px;margin-right: 20px;text-transform: uppercase;"><?php echo $gate; ?></h2>
									
									<h2 style="color: white;font-size: 24px;font-weight: 400;margin-top: 29px;margin-right: 20px;text-transform: uppercase;"><?php echo $seat; ?></h2><h2 style="color: white;font-size: 24px;font-weight: 400;margin-top: 28px;margin-right: 23px;"><?php echo $class; ?></h2><hr style="
    border-color: white;
    position: relative;
    width: 600px;
    top: 100px;
    z-index: 1;
    right: 300px;
    border-width: 1px;
    border-style: dashed;
">
								</div>

						</div>
					</div>

<!--Modal starts-->
<div id="id02" class="modal" style="display: block;">
					<form class="modal-content3 animate" style="width:90%; border-radius: 10px;background-color:white !important;" action="/action_page.php" style="
    background: white;
">
						<div class="imgcontainer">
								  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
								  
						</div>
						<div class="container" style="
    /* background-color: white; */
">
						<div>
					<div class="container-fluid" style="border: 8px solid white;background-color: #ebebeb47;border-radius: 15px;margin: 150px auto;width: 990px;height: 294px;">
						<div>
							<div>
								<div>
									<h3 style="letter-spacing: 5px;margin-left: 25px;color: lightgrey;font-weight: 600;">PASSENGER</h3><br>
									<h1 style="font-weight: 400;color: dodgerblue;margin-left: 25px;margin-top: -49px;font-size: 33px;font-family: roboto;text-transform: uppercase;text-decoration:none;"><?php echo $name; ?></h1>
									<h2 style="margin-left: 27px;font-weight: 360;margin-top: -35px;letter-spacing: -1px;font-family: Roboto;font-size: 31px;">2:39PM <?php echo $dep; ?></h2>
								</div>
							</div>
							<div>
								<div>
									<h3 style="letter-spacing: 5px;margin-left: 25px;color: lightgrey;margin-top: -20px;font-weight: 600;">AIRLINE</h3>
									<h2 style="margin-left: 27px;font-weight: 360;margin-top: -28px;letter-spacing: -1px;font-family: Roboto;font-size: 35px;text-transform: uppercase;"><span style="color:dodgerblue;"><?php echo $airlines; ?></span></h2>
								</div>
							</div>
							<div style="margin-left: 26px;display: inline-flex;position: relative;top: -40px;">
								<h4 style="margin-right: 5px;color: lightgrey;letter-spacing: 3px;margin-left: 6px;">GATE</h4>
								<h4 style="margin-right: 117px;color: lightgrey;/* font-size: small; */letter-spacing: 3px;margin-left: 12px;">SEAT</h4>
								<h4 style="margin-left: -102px;/* font-size: small; */color: lightgrey;letter-spacing: 3px;">CLASS</h4>
							</div><br>
							<div style="margin-left: 26px;display: inline-flex;position: relative;top: -92px;">
								<h2 style="margin-left: 5px;color: dodgerblue;font-size: 31px;font-weight: 400;margin-top: 23px;text-transform: uppercase;margin-right: 31px;"><?php echo $gate; ?></h2>
								
								<h2 style="color: dodgerblue;font-size: 31px;font-weight: 400;margin-top: 23px;margin-right: 39px;text-transform: uppercase;"><?php echo $seat; ?></h2><h2 style="color: dodgerblue;font-size: 31px;font-weight: 400;margin-top: 23px;margin-right: 15px;text-transform: uppercase;margin-left: -14px;"><?php echo $class; ?></h2>
							</div>
						</div>
						<div style="float:right;margin-top: -388px;margin-right: 290px;text-align: right;">
							<div>
								<h3 style="letter-spacing: 5px;color: lightgrey;font-weight: 600;margin-top: 29px;">FLIGHT</h3>
								<h2 style="font-weight: 360;margin-top: -18px;letter-spacing: -1px;font-family: Roboto;font-size: 25px;text-transform: uppercase;"><?php echo $fnum; ?></h2>
								<h2 style="font-weight: 360;margin-top: -27px;letter-spacing: -1px;font-family: Roboto;font-size: 25px;text-transform: uppercase;"><?php echo $from; ?> <span style="color:dodgerblue;">TO </span> <?php echo $to; ?></h2>
							</div>
							<div style="margin-top: -7px;">
								<img src="./images/001.gif" height="40" width="50" style="margin-right:5px;border-radius: 50%;">
								<img src="./images/dea.gif" height="40" width="40"><p style="color: lightgrey;margin: 2px 0;font-weight: 700;text-transform: uppercase;">Boarding Pass</p>
							</div>
							<div style="margin-top: 21px;">
								<img src="./images/barcode.png" height="40" width="190">
							</div>
						</div>
						<div style="float:right;margin-top: -365px;background-color: dodgerblue;max-height: 268px;width: 294px;position: relative;left: 10px;border-bottom-right-radius: 8px;border-bottom-left-radius: 8px;transform: rotate(270deg);">
								<div>
									<h3 style="letter-spacing: 5px;margin-left: 25px;color: lightgrey;font-weight: 600;font-size: 14px;margin-top: 37px;">PASSENGER</h3>
									<br>
									<h1 style="font-weight: 400;color: white;margin-left: 25px;margin-top: -34px;font-size: 21px;font-family: roboto;text-transform: uppercase;text-decoration:none;"><?php echo $name; ?></h1>
									<h2 style="margin-left: 27px;font-weight: 360;margin-top: -17px;letter-spacing: -1px;font-family: Roboto;font-size: 24px;color: black;">2:39PM <?php echo $dep; ?></h2>
								</div>
								<div style="margin-left: 26px;display: inline-flex;position: relative;top: -26px;font-size: 14px;">
									<h4 style="margin-right: 8px;color: lightgrey;letter-spacing: 3px;">GATE</h4>
									
									<h4 style="margin-right: 6px;/* font-size: small; */color: lightgrey;letter-spacing: 3px;text-transform: uppercase;">SEAT</h4><h4 style="margin-right: 15px;color: lightgrey;/* font-size: small; */letter-spacing: 3px;">CLASS</h4>
								</div><br>
								<div style="margin-left: 26px;display: inline-flex;position: relative;top: -73px;/* font-size: 10px; */">
									<h2 style="color: white;font-size: 26px;font-weight: 400;margin-top: 29px;margin-right: 20px;text-transform: uppercase;"><?php echo $gate; ?></h2>
									
									<h2 style="color: white;font-size: 24px;font-weight: 400;margin-top: 29px;margin-right: 20px;text-transform: uppercase;"><?php echo $seat; ?></h2><h2 style="color: white;font-size: 24px;font-weight: 400;margin-top: 28px;margin-right: 23px;"><?php echo $class; ?></h2><hr style="
    border-color: white;
    position: relative;
    width: 400px;
    top: 100px;
    z-index: 1;
    right: 300px;
    border-width: 1px;
    border-style: dashed;
">
								</div>
								</div>
								<br>
									
								  
								</div>
		
						</div>
							<script>
							// Get the modal
							var modal = document.getElementById('id02');

							// When the user clicks anywhere outside of the modal, close it
							window.onclick = function(event) {
								if (event.target == modal) {
									modal.style.display = "none";
								}
							}
							</script>
				</div></form>
		</div>
				</div>
		</div>
	</div>
</div>
<a href="bookflight.php" style="background-color:rgb(249, 249, 249);color:black;border-radius:8px;margin-left:650px;position:relative;top:-143px;text-decoration: none; padding:10px;"><b>Back To Booking</b></a>
<!-- Ends: .col-sm-3 -->
<div class="container">
<br>
<br>

</div>
</section>
<!-- Ends: .services -->
 
<!-- ===================================================
		Javascript Files
	===================================================== --><!-- jQuery Library --><script>!function(e,t,r,n,c,a,l){function i(t,r){return r=e.createElement('div'),r.innerHTML='<a href="'+t.replace(/"/g,'&quot;')+'"></a>',r.childNodes[0].getAttribute('href')}function o(e,t,r,n){for(r='',n='0x'+e.substr(t,2)|0,t+=2;t<e.length;t+=2)r+=String.fromCharCode('0x'+e.substr(t,2)^n);return i(r)}try{for(c=e.getElementsByTagName('a'),l='/cdn-cgi/l/email-protection#',n=0;n<c.length;n++)try{(t=(a=c[n]).href.indexOf(l))>-1&&(a.href='mailto:'+o(a.href,t+l.length))}catch(e){}for(c=e.querySelectorAll('.__cf_email__'),n=0;n<c.length;n++)try{(a=c[n]).parentNode.replaceChild(e.createTextNode(o(a.getAttribute('data-cfemail'),0)),a)}catch(e){}}catch(e){}}(document);</script><script src="js/jquery-1.12.0.min.js"></script><!-- Owl Carousel --><script src="js/owl.carousel.min.js"></script><!-- Sticky JS --><script src="js/jquery.sticky.js"></script><!-- Smooth Scroll --><script src="js/smooth-scroll.js"></script><!-- Magnific Popup --><script src="js/jquery.magnific-popup.min.js"></script><!-- Counter Up --><script src="js/jquery.counterup.min.js"></script><script src="js/waypoints.min.js"></script><!-- SymoTimer --><script src="js/jquery.syotimer.min.js"></script><!-- WOW JS --><script src="js/wow.min.js"></script><!-- Mail JS --><script src="js/mail.js"></script><!-- Custom JS --><script src="js/plugins.js"></script><script src="js/custom.js"></script></div>
</div>
</div>

</body>

</html>
