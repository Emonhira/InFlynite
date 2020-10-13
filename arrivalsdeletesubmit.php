<?php 

	
		$link=mysqli_connect("localhost","root","","flightmanagementsystem");
		// Check connection
		if (mysqli_connect_errno())
		{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	
	 
		//For grabbing the exact flight to delete
		
		$OriginalFlightNo = $_POST['originalFlight'];
		
		
	 	$sql = "Delete FROM flights WHERE Flight_No = '{$OriginalFlightNo}'";


		if(mysqli_query($link,$sql)){
			echo "<div><img src='./images/scrum.gif' style='position:relative;border-radius: 10px;left: 400px;' height='600' width='700'></div>";
			echo "<div style=' margin: 10 auto;padding: 10px;font-family: Roboto;font-size: 11px;font-size: 11px;color: white !important;background-color: #00ab66cc;width: 600px;border-radius: 10px;text-align: center;'><h2>Success! Your Information Has Been Deleted Successfully</h2></div>";
			echo "</div";
	 	}else{
			echo "<div style='background-color: red; width: 100px;font-size: 15px; padding:  12px; border-radius: 10px; font-family: Roboto; text-align: center;
			'><h2>Error!Your Information Has Not Been Deleted Successfully</h2></div>";
	 	}
	 



?>

<!doctype html>
<html lang="">
	<head>
	</head>
	
	<body>
	<div style="background-color: #dadada;width: 150px;padding:  15px;border-radius: 10px; margin: 0px auto;font-family: Roboto;text-align: center;"><b><a href="showtable.php" style="
    text-decoration: none;color:  black !important; "> Back to Arrivals </a></b></div>
	</body>

</html>
