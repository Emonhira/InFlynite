<?php 

	$link=mysqli_connect("localhost","root","","flightmanagementsystem");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	 
		$PName 	= $_POST['fano'];
		$Age	= $_POST['fatimes'];
		$Email = $_POST['fadest'];
        $Date = $_POST['fagate'];
        $Ticket = $_POST['fastatus'];
        $FlightNo = $_POST['fafno'];
        $FlightTime = $_POST['fatime'];
        $Airlines = $_POST['fair'];
        $To = $_POST['fadestin'];
		
		
		$OriginalFlightNo = $_POST['originalFlight'];
		
		
	 	$sql = "Update passengers SET PName = '{$PName}', PAge = '{$Age}', PEmail = '{$Email}', FDate = '{$Date}', PTicketNo = '{$Ticket}', PFlightNo = '{$FlightNo}',PFlightTime = '{$FlightTime}',PAirlines = '{$Airlines}',PDest = '{$To}' WHERE PName = '{$OriginalFlightNo}'";


		if(mysqli_query($link,$sql)){
			echo "<div><img src='./images/shot_1.gif' style='position:relative;border-radius: 10px;left: 400px;' height='600' width='700'></div>";
			echo "<div style=' margin: 10 auto;padding: 10px;font-family: Roboto;font-size: 11px;font-size: 11px;color: white !important;background-color: #00ab66cc;width: 600px;border-radius: 10px;text-align: center;'><h2>Success! Passenger Details Has Been Updated Successfully</h2></div>";
			echo "</div";
	 	}else{
			echo "<div style=' background-color: red; width: 100px;font-size: 15px; padding:  12px; border-radius: 10px; font-family: Roboto; text-align: center;
			'><h2>Error!Your Information Has Not Been Added Successfully</h2></div>";
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