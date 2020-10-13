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
			<h2 class="featurehead" style="margin-bottom:-100px;">Handicapped Services</h2>
			</div>
			<section class="services service-style2" id="features">
        <div class="container" >
         <div class= "container">
            <div class= "grid-row" style="margin-left: 460px;" > 
                <div class= "grid">  
                    <div class="service-box">
                        <div class="icon"><i class="fa fa-exclamation-circle"></i></div>
                        <h3 class="serviceboxhead" style="font-size: 18px !important;">Meet & Assist</h3>
                        <p class="serviceboxtext">With <b>inFlynite</b> you can also book flights for passengers alongside managing flights,passengers,employees and so on!</p>
                        <button onclick="document.getElementById('id01').style.display='block'" style="background-color:white;color:#ef494d">Request Assistance</button>
                    </div>
              </div><!-- Ends: .col-sm-3 -->   
	        	<div class= "grid">
                    <div class="service-box">
                        <div class="icon"><i style="font-weight:800px;" class="fa fa-wheelchair"></i></div>
                        <h3 class="serviceboxhead" style="font-size: 18px !important;">Wheelchair</h3>
                        <p class="serviceboxtext">More to be excited about, with <b>inFlynite</b> you can search a passengers flight when in need amongst on-time schedules with the boarding pass as well!<br></p>
                        <button onclick="document.getElementById('id02').style.display='block'" style="background-color:white;color:#ef494d">Request Assistance</button>
                    </div>
                </div><!-- Ends: .col-sm-3 -->
            </div>
          </div>
        </div>
    </section><!-- Ends: .services i.e. next header-->   
		</div>
	</div>
</div>
<!-- Ends: .col-sm-3 -->
</div>
</section>
<!-- Ends: .searchservice -->
<div id="id01" class="modal">
					<form class="modal-content3 animate" action="/action_page.php">
						<div class="imgcontainer">
								  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
						</div>
						<div class="container">
                                    <h1 style="text-decoration:none;"><i style="font-size:60px;margin-left:117px;" class="fa fa-info-circle"></i></h1>
								  <h1 style="text-decoration:none;margin-left:187px;">Request Sent</h1>
								  <p style="font-size:25px;color:#f4f4f4;margin-left: 20px !important;"><b>Meet & Assist requested! The staff members are on their way for the passenger's assistance!</b></p>
								</div>
								<br>
									<div class="containerTemp" style="background-color:#f1f1f1">
									  <button  style="border-radius: 4px;margin-left:500px;" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">OK</button>
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
<div id="id02" class="modal">
					<form class="modal-content3 animate" style="width:40%;" action="/action_page.php">
						<div class="imgcontainer">
								  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
						</div>
						<div class="container">
                        <h1 style="text-decoration:none;"><i style="font-size:60px;margin-left:117px;" class="fa fa-info-circle"></i></h1>
								  <h1 style="text-decoration:none;margin-left:187px;">Request Sent</h1>
								  <p style="font-size:25px;color:#f4f4f4;margin-left: 20px !important;"><b>Request Sent! A staff member is on the way with a wheelchair for the passenger's assistance!</b></p>
								</div>
								<br>
									<div class="containerTemp" style="background-color:#f1f1f1">
									  <button  style="border-radius: 4px;margin-left:500px;" type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">OK</button>
									</div>
								  </form>
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
			
<!-- Ends: .col-sm-3 -->
<!-- Information -->

<section class="whocanbeourdriver" id="whocanbeourdriver">
<div class="container">
<div class="row">
<div class="col-sm-12">
<h2 style="position:relative;">How to help people who are handicappd?</h2>

<p style="position:relative;font-size:18px;">You can provide wheelchair and meet & assist services for passengers who are handicapped. Send in a request to inform the staff members about it. They will be on their way for providing assist.</p>
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
