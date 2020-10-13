<?php 

	include_once("Connection.php");
	
	 
     
	

	if(isset($_POST['aline']) && isset($_POST['aco']) && isset($_POST['acon']) && isset($_POST['ahub'])){
		$Fno 	= $_POST['aline'];
		$Dest = $_POST['aco'];
        $fGate = $_POST['acon'];
        $fStatus = $_POST['ahub'];
		
		
	 	$sql = "INSERT INTO `airlines` (`Airline_Name`, `Airline_Contact`,`Airline_Country`,`Airline_Hub`) VALUES ('".$Fno."', '".$Dest."','".$fGate."','".$fStatus."')";


		if(mysqli_query($link,$sql)){
	     	echo " Row Insertion Complete";
	 	}else{
         	echo " Row Insertion Failed";
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
			<br/><br/>
			<b><a href="airlines.php"> Go back to Airlines Table</a></b>
	</body>

</html>


