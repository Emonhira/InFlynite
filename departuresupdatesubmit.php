<?php 

	include_once("Connection.php");
	
	 
		$Ftime 	= $_POST['fatimes'];
		$Fno 	= $_POST['fano'];
		$Dest = $_POST['fadest'];
        $fGate = $_POST['fagate'];
        $fStatus = $_POST['fastatus'];
		
		$OriginalFlightNo = $_POST['originalFlight'];
		
		
	 	$sql = "Update departures SET Flight_Time = '{$Ftime}', Flight_No = '{$Fno}', Destination = '{$Dest}', Gate = '{$fGate}', Flight_Status = '{$fStatus}' WHERE Flight_No = '{$OriginalFlightNo}'";


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
			<b><a href="departure.php"> Go back to Flight Chart</a></b>
	</body>

</html>