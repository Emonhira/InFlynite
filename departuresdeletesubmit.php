<?php 

	include_once("Connection.php");
	
	 
		$Ftime 	= $_POST['fatimes'];
		$Fno 	= $_POST['fano'];
		$Dest = $_POST['fadest'];
        $fGate = $_POST['fagate'];
        $fStatus = $_POST['fastatus'];
		
		$OriginalFlightNo = $_POST['originalFlight'];
		
		
	 	$sql = "Delete FROM departures WHERE Flight_No = '{$OriginalFlightNo}'";


		if(mysqli_query($link,$sql)){
	     	echo "<br/><h1>Delete successful</h1>";
	 	}else{
         	echo "<br/><h1>Delete failed</h1>";
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
