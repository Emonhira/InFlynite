<!DOCTYPE html>
<html lang="en">
<head>
  <title>About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      background-image: url('../CSE327ClassProject/images/free-kids-stuff-doodle-vector.jpg');
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
      background-color:  #ef494d; /* green */
      color: #ffffff;
  }
  .bg-2 { 
      background-color: #474e5d; /* Dark Blue */
      color: #ffffff;
  }
  .bg-3 { 
      background-color: white; /* White */
      color: #555555;
  }
  .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 70px;
      padding-bottom: 70px;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #ef494d !important;
  }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">We</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php" data-scroll>HOME</a></li>
        <li><a href="#who" data-scroll>WHO</a></li>
        <li><a href="#what" data-scroll>WHAT</a></li>
        <li><a href="#where">WHERE</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div id="who" class="container-fluid bg-1 text-center">
  <h3  class="margin">Who Are We?</h3>
  <img src="../CSE327-inFlynite-Master-Copy/images/birds.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
  <h3>We Are Explorers!</h3>
</div>

<!-- Second Container -->
<div id="what"  class="container-fluid bg-2 text-center">
  <h3 class="margin">What Do We Do?</h3>
  <p>We try to conquer knowledge in it's different forms everywhere possible!We look for it's various forms where it plays between the high mist of studies to the low falls of extra-curricular activities such as drafting, para-gliding, bungee jumping, sky-diving, even our term projects like this one!</p>
  <span class="glyphicon glyphicon-headphones"></span>
  <span class="glyphicon glyphicon-plane"></span>
  <span class="glyphicons glyphicons-camera"></span>
  
</div>

<!-- Third Container (Grid) -->
<div id="where" class="container-fluid bg-3 text-center">    
  <h3  class="margin">Where To Find Us?</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p><b>Facebook</b><br>Swing by our facebook page "inFlynite"! Follow us for more interesting stuffs! We would be more than happy to welcome you!</p>
      <img src="../CSE327-inFlynite-Master-Copy/images/Facebook_logo_(square).png" class="img-responsive img-circle margin" style="width: 200px;height: 200px;margin-left: 130px;margin-top: 75px;" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p><b>Linked In</b><br>You can also find us at Linked In! We maintain all our professional errands there!<br> Yameen Irteza | Nashid Jamal Chowdhury | Adullah Mehedi Hira</p>
      <img src="../CSE327-inFlynite-Master-Copy/images/linkedin-logo-icon-786.png" class="img-responsive img-circle margin" style="width: 200px;height: 200px;margin-left: 150px;margin-top: 50px;" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <p><b>Instagram</b><br>You can follow us on our Instagram page "inFlyni8e" for more exciting updates on this system!</p>
      <img src="http://pluspng.com/img-png/instagram-png-instagram-png-logo-1455.png" class="img-responsive img-circle margin" style="width: 200px;height: 200px;margin-left: 160px;margin-top: 107px;" alt="Image">
    </div>
  </div>
</div>

  <!-- Footer -->
<footer class="container-fluid bg-4 text-center">
  <p>&copy;Flight Management System/<a class="footer-about" href="index.php">www.inFlynite.com</a></p> 
</footer>
  
</body>
</html>
