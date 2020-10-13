<?php
error_reporting(0);
if(isset($_POST['name']) && isset($_POST['fnum']) && isset($_POST['from']) && isset($_POST['gate']) && isset($_POST['to']) && isset($_POST['airlines']) && isset($_POST['dep']) && isset($_POST['return']) && isset($_POST['seat']) && isset($_POST['class'])){
    $name = $_POST['name'];
    $from = $_POST['from'];
    $fnum = $_POST['fnum'];
    $to = $_POST['to'];
    $airlines = $_POST['airlines'];
    $dep = $_POST['dep'];
	$return = $_POST['return'];
	$gate = $_POST['gate'];
    $seat = $_POST['seat'];
    $class = $_POST['class'];
}


session_start();
$_SESSION["name"] = $name;
$_SESSION["fnum"] = $fnum;
$_SESSION["from"] = $from;
$_SESSION["to"] = $to;
$_SESSION["airlines"] = $airlines;
$_SESSION["dep"] = $dep;
$_SESSION["return"] = $return;
$_SESSION["seat"] = $seat;
$_SESSION["gate"] = $gate;
$_SESSION["class"] = $class;

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
                            <a class="navbar-brand" href="index-2.html"><img src="images/001.gif" style="height: 60px; width: 80px; border-radius: 50%;margin-top:-10px;margin-left: 55px;margin-right: 15px;padding-bottom: 2px;"></a>
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
                                <li><a href="loginpage.php" class="loginButton" style="background-color:#ef494d;border-radius:6px;padding: 10px;">Back</a></li>		
							</ul>
                        </div><!-- .navbar-collapse -->		
			</div>
		</nav>
</header>
</header>
<!-- Ends: header -->


<!-- Services -->

<section class="services service-style2" id="features">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header">
			<h2 class="featurehead">E-Ticket</h2>
			</div>

			<div style="width:1100px;height:750px;background-color:white;margin: 0 auto;">
                <div class="col-sm-12">
                    <h2 style="font-size: 23px;text-align: left;padding-top:20px;padding-left: 15px;">inFlynite Electronic Ticket Travel Itinerary</h2>
                    <hr style="width:1000px;margin-left: 15px;border-width: 2px;border-color:#ef494d;margin-top: -5px;">
                </div>
				<div>
                    <h4 style="margin-left:  15px;font-weight: 500;">PASSENGER NAME: <?php echo $name; ?></h4>
                    <h4 style="margin-top: -22px;margin-left: 15px;font-weight: 500;">TICKET NUMBER:  12FF24DCV31</h4>
                    <p style="font-size: small;margin-left: 15px;margin-top: -24px;">Reservation No: JFQAG4</p>
                    <p style="margin-left:  15px;font-size:  small;margin-top: -22px;">Issued On: <?php echo $dep; ?>/ INFLYNITE INTERNET TICKET / WWW</p>
                </div>	
                <div style="float: right;position: relative;top: -95px;right: 85px;">
                    <h5>inFlynite Service Center</h5>
                    <h5 style="margin-top: -22px;">+49 180 30 00 337</h5>
                </div>		 
                <div style="margin-left: 15px;">
                    <p style="line-height: 1.2;font-size: small;"><b>All times are noted local times. Please keep this receipt with you throughout your journey</b><br>
                                    Your electronic INFLYNITE ticket is stored in our reservation system. As with all airline tickets your e-ticket is not transferable to others.<br></p>
                </div>
                <div style="margin-left: 15px;">
                        <h4><b>1) </b> FROM <b><?php echo $from; ?></b> TO <b><?php echo $to; ?></b></h4>
                        <table style="border: 1.5px solid black;margin-left: 10px;margin-bottom: -25px;">
                            <tbody >
                                <tr style=>
                                    <td style="padding-left: 3px;color:  black;padding-right: 5px;">Departure date</td>
                                    <td style="border-right: 1px solid black;color: black;padding-right: 5px;">Seat</td>
                                    <td style="padding-left: 7px;border-right: 1px solid black;color: black;padding-right: 5px;">Departure</td>
                                    <td style="padding-left: 5px;color: black;border-right: 1px solid black;padding-right: 5px;">Arrival</td>
                                    <td style="padding-left: 5px;color: black;border-right: 1px solid black;padding-right: 5px;">Class of Travel</td>
                                    <td style="padding-left: 5px;color: black;padding-right: 5px;border-right: 1px solid black;">Status</td>
                                    <td style="padding-left: 5px;color: black;padding-right: 5px;border-right: 1px solid black;">Baggage Allowance</td>
                                </tr>
                                <tr style="font-size: small;border: 1px solid black;">
                                    <td style="padding-left: 3px;color: black;font-weight: 400;">04 July</td>
                                    <td style="border-right: 1px solid black;padding-left: 3px;font-weight: 400;color: black;"><?php echo $seat; ?></td>
                                    <td style="padding-left: 5px;border-right: 1px solid black;color: black;font-weight: 400;padding-right: 5px;">14:10 TERMINAL A</td>
                                    <td style="padding-left: 5px;border-right: 1px solid black;color: black;font-weight: 400;padding-right: 5px;">16:20 TERMINAL A</td>
                                    <td style="padding-left: 5px;border-right: 1px solid black;color: black;padding-right: 5px;font-weight: 400;"><?php echo $class; ?></td>
                                    <td style="padding-left: 5px;border-right: 1px solid black;color: black;font-weight: 400;">OK</td>
                                    <td style="padding-left: 5px;color: black;font-weight: 400;">23KG</td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 3px;padding-top: -5px;color: black;border-right: 1px solid black;border-bottom: 1px solid black;">Operated by</td>
                                    <td style="border-right: 1px solid black;padding-left: 3px;border-bottom: 1px solid black;color: black;">On Behalf Of</td>
                                    <td></td><td></td>
                                    <td></td><td></td><td></td>
                                </tr>
                                <tr style="font-size: small;">
                                    <td style="padding-left: 3px;border-right: 1px solid black;color: black;font-weight: 400;border-bottom: 1px solid black;">Inflynite</td>
                                    <td style="border-right: 1px solid black;border-bottom: 1px solid black;color: black;padding-left: 3px;font-weight: 400;"><?php echo $airlines; ?></td>
                                    <td></td><td></td><td></td><td></td><td></td>
                                </tr>
                                <tr>
                                    <td style="color: black;padding-left: 3px;border-right: 1px solid black;border-bottom: 1px solid black;">Not Valid Before</td>
                                    <td style="color: black;border-right: 1px solid black;padding-left: 3px;border-bottom: 1px solid black;">Not Valid After</td>
                                    <td></td><td></td><td></td><td></td><td></td>
                                </tr>
                                <tr style="font-size: small;">
                                    <td style="padding-left: 3px;color: black;font-weight: 400;border-right: 1px solid black;"><?php echo $dep; ?></td>
                                    <td style="color: black;border-right: 1px solid black;padding-left: 3px;font-weight: 400;"><?php echo $dep; ?></td>
                                    <td></td><td></td><td></td><td></td><td></td></tr>
                            </tbody>
                        </table>
                        <img src="./images/barcode.png" style="position: relative;margin-left: 620px;margin-top: -40px;height: 40px;">
                    <p style="font-size: x-small;margin-left: 15px;"><b>Fare Basis: VSWEBDE/OPF</b><span style="margin-left: 200px;">*information cannot be obtained locally</span><span style="margin-left: 210px;">Barcode For Check-In</span></p> 
                    <hr style="margin-top: -15px;width: 990px;margin-left: 15px;border-width: 2px;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <p style="margin-bottom: -42px;margin-left: 15px;">Thank you for choosing inFlynite.</p><br>
                    <p style="margin-bottom: -42px;margin-left: 15px;">Easy check-in not available yet.</p><br>
                    <p style="margin-bottom: -42px;margin-left: 15px;">For further inquiries contact: inFlynite.com/Contacts</p><br>
                    <p style="margin-bottom: -42px;margin-left: 15px;"><b>inFlynite</b>.com</p>
                    <div style="margin-top:30px;">
                        <h4 style="float: right;margin-right: 200px;margin-top: -50px;color: lightslategrey;">A NSU Star Alliance Member</h4><img style="float:right;margin-top: -70px;margin-right: 130px;" src="./images/001.gif" height="60" width="60">
                        <img style="float:right;margin-top: -73px;margin-right: 70px;" src="./images/north-south-university-logo-0CA3A4611D-seeklogo.com.png" height="60" width="55">
                    </div>
                </div>
                </div>
                <div style="text-align: center;margin: 20px 0;">
                        <form> 
                            <button onclick="window.print();" style="border-radius:  5px;background-color: white;color: #ef494d;">Export PDF</button>
                        </form><br>
                        <form action="boarding.php" method="POST"> 
                            <button type="submit" style="border-radius:5px;background-color: #ef494d;color: white;margin-top:-15px">Get Boarding Pass</button>
                        </form>
                    </div>
		</div>
	</div>
</div>

<!-- Ends: .col-sm-3 -->
<div class="container">
<br>
<br>

</div>
</section>
<!-- Ends: .services -->
  <!-- Download App -->

<section class="whocanbeourdriver" id="whocanbeourdriver">
<div class="container">
<div class="row">
<div class="col-sm-12">
<h2 style="position:relative;">How to download the E-Ticket?</h2>

<p style="position:relative;font-size: 20px;">Click on export pdf button to get a pdf file of the e-ticket for passengers if they need it. You can also get the boarding pass for passengers.</p>
</div>
</div>
</div>
</section>
<!-- Ends: .download-app --><!-- Footer -->

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
