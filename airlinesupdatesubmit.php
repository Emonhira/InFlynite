<?php 

	include_once("Connection.php");
	
	 
		$Ftime 	= $_POST['fano'];
		$Fno 	= $_POST['fatimes'];
		$Dest = $_POST['fadest'];
        $fGate = $_POST['fagate'];
       
		
		$OriginalFlightNo = $_POST['originalFlight'];
		
		
	 	$sql = "Update airlines SET Airline_Name = '{$Ftime}', Airline_Contact = '{$Fno}', Airline_Country = '{$Dest}', Airline_Hub = '{$fGate}' WHERE Airline_Name = '{$OriginalFlightNo}'";


		if(mysqli_query($link,$sql)){
	     	echo "<br/><h1>Update successful</h1>";
	 	}else{
         	echo "<br/><h1>Udpate failed</h1>";
	 	}
	 



?>

<!doctype html>
<html lang="">
	<head>
	</head>
	
	<body>
			<br/><br/>
			<b><a href="airlines.php"> Go back to Airlines Table</a></b>
	</body>

</html>
