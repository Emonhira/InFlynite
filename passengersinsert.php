<?php 

	$link=mysqli_connect("localhost","root","","flightmanagementsystem");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
 
	

	if(isset($_POST['pname']) && isset($_POST['page']) && isset($_POST['pemail']) && isset($_POST['pdate']) && isset($_POST['pticket']) && isset($_POST['pflight']) && isset($_POST['pflighttime']) && isset($_POST['pairlines']) && isset($_POST['pto'])){
		$Fno 	= $_POST['pname'];
		$Dest = $_POST['page'];
        $fGate = $_POST['pemail'];
		$fdt = $_POST['pdate'];
        $fStatus = $_POST['pticket'];
        $fflight = $_POST['pflight'];
        $fflightime = $_POST['pflighttime'];
        $fair = $_POST['pairlines'];
		$fto = $_POST['pto'];
		
		
	 	$sql = "INSERT INTO `passengers` (`PName`, `PAge`,`PEmail`,`FDate`,`PTicketNo`,`PFlightNo`,`PFlightTime`,`PAirlines`,`PDest`) VALUES ('".$Fno."', '".$Dest."','".$fGate."','".$fdt."','".$fStatus."','".$fflight."','".$fflightime."','".$fair."','".$fto."')";


		if(mysqli_query($link,$sql)){
			echo "<div><img src='./images/shot.gif' style='position:relative;border-radius: 10px;left: 400px;' height='600' width='700'></div>";
			echo "<div style=' margin: 10 auto;padding: 10px;font-family: Roboto;font-size: 11px;font-size: 11px;color: white !important;background-color: #00ab66cc;width: 600px;border-radius: 10px;text-align: center;'><h2>Success! New Passenger Has Been Added Successfully</h2></div>";
			echo "</div";
	 	}else{
			echo "<div style=' background-color: red; width: 100px;font-size: 15px; padding:  12px; border-radius: 10px; font-family: Roboto; text-align: center;
			'><h2>Error!Your Information Has Not Been Added Successfully</h2></div>";
	 	}
	}else{
		
	
		

		echo "You must fill mandatory field.";
		/*if(empty($_POST['fname'])){
			echo "You must fill Name fild";
		}else if(empty($_POST['lname'])){
			
		}*/
		
	}
	 



?>


<!doctype html>
<html lang="">
	<head>
	</head>
	
	<body>
	<div style="background-color: #dadada;width: 150px;padding:  15px;border-radius: 10px; margin: 0px auto;font-family: Roboto;text-align: center;"><b><a href="passengerstable.php" style="
    text-decoration: none;color:  black !important; "> Back to Passengers</a></b></div>
	</body>

</html>