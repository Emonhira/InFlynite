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
                                <li><a href="flightables.php" class="loginButton" style="background-color:#ef494d;border-radius:6px;padding: 10px;">Back</a></li>		
							</ul>
                        </div><!-- .navbar-collapse -->		
			</div>
		</nav>
</header>
<!-- Ends: header -->


<!-- Departure Table -->

<section class="services service-style2" id="features">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header">
			<h2 class="featurehead">Departures</h2>
			</div>

			<div class="col-md-12 col-sm-12">
				<div class="service-box2" style="width: 1300px;margin: 0 auto;border-radius: 10px;">
	 
	 <!--table-->
				<div class="container-fluid" >
					 <table style="margin: 0 auto;">
								<tr style="border-bottom: 2px solid white;">
									<th style="padding-right:180px;padding-bottom: 5px;">TIME</th>
									<th style="padding-right:190px;">FLIGHT NO</th>
									<th style="padding-right:200px;">DESTINATION</th>
									<th style="padding-right:200px;">GATE</th>
									<th style="padding-right:200px;">STATUS</th>
							 	</tr>
						  <?php include('departuretable.php');?>			 
                        </table>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--Modal starts-->
<div id="id01" class="modal">
					<form class="modal-content3 animate" action="/action_page.php">
						<div class="imgcontainer">
								  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
								  <img src="images/Aviation.png" alt="Avatar" class="avatar" style="background-color: white;">
						</div>
						<div class="container">
								  <h1 style="text-decoration:none;">Manage your flights</h1>
								  <p style="font-size:25px;margin-left: 20px !important;"><b>Add a flight info to the table!</b></p>
								  <a href="departures2.php" class="insertbtn" style="text-decoration:none;background-color:white;color:#ef494d;margin-left: 20px !important;border:1px solid white;padding:10px;"><b>Insert</b></a>
								  <div><p style="font-size:25px;margin-left: 20px !important;"><b>Or you could search your flight to edit or delete!</b></p></div>
								  <a href="searchpagedepartures.php" style="text-decoration:none;background-color:white;margin-left: 20px !important;color:#ef494d;border:1px solid white;padding:10px;" class="insertbtn"><b>Edit</b></a>&nbsp;
								  <a href="searchdeletedepartures.php" style="text-decoration:none;background-color:white;color:#ef494d;border:1px solid white;padding:10px;" class="insertbtn"><b>Delete</b></a><br>
								</div>
								<br>
									<div class="containerTemp" style="background-color:#f1f1f1">
									  <button  style="border-radius: 4px;" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
									</div>
								  </form>
								</div>
		
					</div>

							<script>
							// Get the modal
							var modal = document.getElementById('id01');

							// When the user clicks anywhere outside of the modal, close it
							window.onclick = function(event) {
								if (event.target == modal) {
									modal.style.display = "none";
								}
							}
							</script>
			
<!-- Ends: .col-sm-3 -->
<div class="container">
<br>
<br>
<div class="row">
    <div class="col-lg-12" align="center">
		<button class="btn btn-lg btn-success center text-center" style="border-radius: 8px;margin-bottom: 24px;" id="btnContactUs" onclick="document.getElementById('id01').style.display='block'">Manage</button>
	</div>
</div>
</div>
</section>
<!-- Ends: .departurestable -->
 
 <!-- Information -->

<section class="whocanbeourdriver" id="whocanbeourdriver">
<div class="container">
<div class="row">
<div class="col-sm-12">
<h2 style="position:relative;">How to manage departures?</h2>

<p style="position:relative;font-size: 20px;"> Please make sure when you enter the flight numbers and destinations, they must be in capital letters according to International Aviation Rules and please do keep in mind there are twelve gates here in Hazrat Shahjalal International Airport with six blocks attached to it starting from A to F.</p>
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
</footer>

</body>

</html>
