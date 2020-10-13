<?php 

	include_once("Connection.php");
	
	 
		$PName 	= $_POST['fano'];
		$Age	= $_POST['fatimes'];
		$Email = $_POST['fadest'];
        $Date = $_POST['fagate'];
		
		
		$OriginalFlightNo = $_POST['originalFlight'];
		
		
	 	$sql = "Update employee SET employee_name = '{$PName}', employee_contact = '{$Age}', employee_address = '{$Email}', employee_airlines = '{$Date}' WHERE employee_name = '{$OriginalFlightNo}'";


		if(mysqli_query($link,$sql)){
	     	echo "<br/><h1>Update successful</h1>";
	 	}else{
         	echo "<br/><h1>Update failed</h1>";
	 	}
	 



?>

<!doctype html>
<html lang="">
	<head>
	</head>
	
	<body>
			<br/><br/>
			<b><a href="employeestable.php"> Go back to Employees Table</a></b>
	</body>

</html>