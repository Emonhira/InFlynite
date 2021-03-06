<!doctype html>
<html lang="">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta http-equiv="x-ua-compatible" content="ie=edge"><meta name="description" content=""><meta name="viewport" content="width=device-width, initial-scale=1">
	<title>inFlynite -Flight</title>
	<!-- Favicon -->
	<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link href="images/favicon.ico" rel="icon" type="image/x-icon" /><!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700|Lato:300,400,700,900" rel="stylesheet" />
	<link href="css/bootstrap.min.css" rel="stylesheet" /><!-- Font Aweosme -->
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
                                <li><a href="passengerstable.php" class="loginButton" style="background-color:#ef494d;border-radius:6px;padding: 10px;">Back</a></li>		
							</ul>
                        </div><!-- .navbar-collapse -->		
			</div>
		</nav>
</header>
<!-- Ends: header -->


<!-- Delete Service -->

<?php
	              
					$con=mysqli_connect("localhost","root","","flightmanagementsystem");
					// Check connection
					if (mysqli_connect_errno())
					{
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
					}
					
					$originalFlightNo = $_POST['pname'];
					$sql="SELECT * FROM passengers WHERE PName='{$originalFlightNo}'";

					$result = mysqli_query($con,$sql);
					$row=mysqli_fetch_array($result);
					
					
					$time = $row['PAge'];
					$destination = $row['PEmail'];
					$gate = $row['FDate'];
					$flightStatus = $row['PTicketNo'];
					$ticket = $row['PTicketNo'];
					$flightnum = $row['PFlightNo'];
					$flighttime = $row['PFlightTime'];
					$flightair = $row['PAirlines'];
					$flightdest = $row['PDest'];

					mysqli_close($con);
?>

<section class="services service-style2" id="features">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 section-header">
			<h2 class="featurehead">Delete Passengers Info</h2>
			</div>

			<div class="col-md-12 col-sm-12">
				<div class="service-box3">
					 <div class="container-fluid" >
				     		<div class="imgcontainer">
							  <img src="images/002.png" alt="Avatar" class="avatar"  style="width: 10%;" >
							</div>
							<br><br>
							<div class="container" style="border: 8px solid #ef494d;background-color: #ef494d;border-radius: 25px;width: 1200px;margin: 0 auto;">
							<form action="passengersdeletesubmit.php" method="POST">
							<label>Passenger Name: </label>
							<input type="text" placeholder="Enter flight number.." name="fano" value="<?php echo $originalFlightNo ?>"  style="margin-left: 72px;border-radius: 5px;" required>
							  <br>
							  <label>Age: </label>
							 <input type="text" placeholder="Enter flight time.." name="fatimes" value="<?php echo $time ?>" style="margin-left: 185px;border-radius: 5px;" required>
							  <br>
							<label>Email: </label>
							<input type="text" placeholder="Enter flight arriving from.." value="<?php echo $destination ?>" style="margin-left: 170px;border-radius: 5px;" name="fadest" required>
							  <br>
							<label>Date: </label>
							<input type="Date" placeholder="Enter gate number" value="<?php echo $gate ?>" style="margin-left: 174px;border-radius: 5px;" name="fagate" required>
								<br>							  
							<label>Ticket No.: </label>
							<input type="text" placeholder="Enter flight status" value="<?php echo $flightStatus ?>" style="margin-left: 128px;border-radius: 5px;" name="fastatus" required>
							  <br><br>
							  <label>Flight No: </label>
							<input type="text" placeholder="Enter flight status" value="<?php echo $flightnum  ?>" style="margin-left: 136px;border-radius: 5px;" name="fafno" required>
							  <br><br>
							  <label>Flight Time: </label>
							<input type="text" placeholder="Enter flight status" value="<?php echo $flighttime ?>" style="margin-left: 116px;border-radius: 5px;" name="fatime" required>
							  <br><br>
							   <label>Airlines: </label>
							<input type="text" placeholder="Enter flight status" value="<?php echo $flightair ?>" style="margin-left: 145px;border-radius: 5px;" name="fair" required>
							  <br><br>
							   <label>Destination: </label>
							<input type="text" placeholder="Enter flight status" value="<?php echo $flightdest ?>" style="margin-left: 110px;border-radius: 5px;" name="fadestin" required>
							  <br><br>
							 <input type="hidden" placeholder="Original Flight No." value="<?php echo $originalFlightNo ?>" name="originalFlight" >

							  <button type="submit" name="arrivalsend" class="savebtn">Delete</button>
							</div>								
								</form>
							</div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Ends: .col-sm-3 -->
</div>
</section>
<!-- Ends: .deleteservice -->

<!-- Information -->

<section class="whocanbeourdriver" id="whocanbeourdriver">
<div class="container">
<div class="row">
<div class="col-sm-12">
<h2 style="position:relative;">How to delete Passenger Details?</h2>

<p style="position:relative;font-size:18px;">Please look if you want to delete the passenger name consisting the following personal information.</p>
</div>
</div>
</div>
</section>
<!-- Ends: .information-->

<!--Footer -->
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
	===================================================== --><!-- jQuery Library --><script>!function(e,t,r,n,c,a,l){function i(t,r){return r=e.createElement('div'),r.innerHTML='<a href="'+t.replace(/"/g,'&quot;')+'"></a>',r.childNodes[0].getAttribute('href')}function o(e,t,r,n){for(r='',n='0x'+e.substr(t,2)|0,t+=2;t<e.length;t+=2)r+=String.fromCharCode('0x'+e.substr(t,2)^n);return i(r)}try{for(c=e.getElementsByTagName('a'),l='/cdn-cgi/l/email-protection#',n=0;n<c.length;n++)try{(t=(a=c[n]).href.indexOf(l))>-1&&(a.href='mailto:'+o(a.href,t+l.length))}catch(e){}for(c=e.querySelectorAll('.__cf_email__'),n=0;n<c.length;n++)try{(a=c[n]).parentNode.replaceChild(e.createTextNode(o(a.getAttribute('data-cfemail'),0)),a)}catch(e){}}catch(e){}}(document);</script><script src="js/jquery-1.12.0.min.js"></script><!-- Boostrap JS --><script src="js/bootstrap.min.js"></script><!-- Owl Carousel --><script src="js/owl.carousel.min.js"></script><!-- Sticky JS --><script src="js/jquery.sticky.js"></script><!-- Smooth Scroll --><script src="js/smooth-scroll.js"></script><!-- Magnific Popup --><script src="js/jquery.magnific-popup.min.js"></script><!-- Counter Up --><script src="js/jquery.counterup.min.js"></script><script src="js/waypoints.min.js"></script><!-- SymoTimer --><script src="js/jquery.syotimer.min.js"></script><!-- WOW JS --><script src="js/wow.min.js"></script><!-- Mail JS --><script src="js/mail.js"></script><!-- Custom JS --><script src="js/plugins.js"></script><script src="js/custom.js"></script></div>
</div>
</div>
</footer>

</body>

</html>
