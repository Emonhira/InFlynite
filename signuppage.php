<?php 
error_reporting(0);
	  session_start();
	  $nameErr = $_SESSION['nameErr'];
	  $usernameErr =$_SESSION['usernameErr'];
	  $passwordErr =$_SESSION['passwordErr'];
	  $emailErr = $_SESSION['emailErr'];
?>
<!doctype html>
<html>
<head>
    
</head>
<body style="background-color: #f4f4f4;background-image:url(../CSE482-inFlynite/images/bg1.png); background-size: cover;">
    
            <div class="container" style="box-shadow: 0 12px 16px 0 rgba(0.20,0.20,0.25,0.24);background-color:#ef494d;border: 5px solid #ef494d;border-radius: 10px;/* margin-left:650px; */margin: -10px auto;/* margin-right:1100px; */width: 600px;height: 650px;margin-top: 50px;">
                <div class="imgcontainer" style="background-color:white;position: relative;border-radius: 10px;right: 15p;margin-right: : 55px !important;margin-right: 15pxx;">
							  <img src="images/img_avatar3.png" alt="Avatar" class="avatar" height="150" width="150" style="/* margin-left: 50px; *//* margin: 0 auto; */margin-left: 220px;margin-top:30px;padding-bottom:50px;">
		</div>
		 <form action="FormHandling.php" method="POST" style="margin-top: -65px;">
			<div class="container" style="margin-top: 100px;margin-left:50px;">
				<label for="uname" style="font-size:16px;font-family: Verdana;color: white;">Name: &nbsp;</label>
				<input type="text" name="name" placeholder="Enter name" style="width:50%;padding:10px;border:2px solid #ef494d;border-radius: 5px;margin-left: 79px;" required="true"><?php if($nameErr){ echo "<i class='fa fa-warning'></i>".$nameErr;}?>
				<br>
				<label for="uname" style="font-size:16px;font-family: Verdana;color: white;">Username: &nbsp;</label><?php if($usernameErr){ echo "<i class='fa fa-warning'></i>".$usernameErr;}?>
				<input type="text" name="username" placeholder="Enter Username" style="width:50%;padding:10px;border:2px solid #ef494d;border-radius: 5px;margin-left: 49px;"" required="true">
				<br>
				<label for="email" style="font-size:16px;font-family: Verdana;color: white;">Email: &nbsp;&nbsp;</label>
				<input type="email" name="email" placeholder="Enter Email" style="width:50%;margin-left: 79px;padding:10px;border:2px solid #ef494d;border-radius: 5px;box-shadow: 0 0 black;" required="true"><?php if($emailErr){ echo "<i class='fa fa-warning'></i>".$emailErr;}?>
				<br>
				<label for="psw" style="font-size:16px;font-family: Verdana;color: white;">Password: &nbsp;&nbsp;</label>
				<input type="password" name="password" placeholder="Enter Password" style="width:50%;padding:10px;position:relative;right: -20px;margin-left: 28px;border:2px solid #ef494d;border-radius: 5px;box-shadow: 0 0 black;" required="true"><?php if($passwordErr){ echo "<i class='fa fa-warning'></i>".$passwordErr;}?>
				<br>
				<label for="psw" style="font-size:16px;font-family: Verdana;color: white;">Retype Password: &nbsp;&nbsp;</label>
				<input type="password" name="retypepassword" placeholder="Confirm Password" style="width:50%;padding:10px;position:relative;right: 2px;border:2px solid #ef494d;border-radius: 5px;box-shadow: 0 0 black;" required="true">
				<br><br>
				
			</div>
			<div><p class="register-link" style="color:white;font-family: Verdana;margin-left: 160px;margin-top: 11px;margin-bottom: 33px;">Already have an account? <b><a href="loginpage.php" style="color:white;text-decoration:none;">Log In Here</a></b></p></div>
			<button type="submit" class="submitbtn" style="cursor: pointer;font-family: Verdana;box-shadow: 0 12px 16px 0 rgba(0.20,0.20,0.25,0.24), 0 17px 50px 0 rgba(0,0.20,0,0.19);padding: 10px;margin-left: 145px;background-color:white;border: 2px solid white;color:#ef494d;margin-top: -15px;border-radius:5px;">Sign Up</button>		
			<a href="index.php" style="font-family: Verdana;box-shadow: 0 12px 16px 0 rgba(0.20,0.20,0.25,0.24), 0 17px 50px 0 rgba(0,0.20,0,0.19);padding: 10px;margin-left: 167px;background-color:white;border: 2px solid white;color:#ef494d;border-radius:5px;/* font-weight: 400; */position: relative;top: top: -0.5px;/* margin-top: -18px; */text-decoration:none;">Back</a>		
		</form>
             </div>


<div id="shadowMeasureIt"></div><div id="divCoordMeasureIt"></div><div id="divRectangleMeasureIt"><div id="divRectangleBGMeasureIt"></div></div></body>
</html>
