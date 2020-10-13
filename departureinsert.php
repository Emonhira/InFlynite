<?php 

	include_once("Connection.php");
	
	 
     
	

	if(isset($_POST['fatimes']) && isset($_POST['fano']) && isset($_POST['fadest']) && isset($_POST['fagate']) && isset($_POST['fastatus'])){
		$Ftime 	= $_POST['fatimes'];
		$Fno 	= $_POST['fano'];
		$Dest = $_POST['fadest'];
        $fGate = $_POST['fagate'];
        $fStatus = $_POST['fastatus'];
		
		
	 	$sql = "INSERT INTO `departures` (`Flight_Time`, `Flight_No`,`Destination`,`Gate`,`Flight_Status`) VALUES ('".$Ftime."', '".$Fno."', '".$Dest."','".$fGate."','".$fStatus."')";


		if(mysqli_query($link,$sql)){
	     	echo " Row Insertion Complete";
	 	}else{
         	echo " Row Insertion Failed";
	 	}
	}else{
		
		$Ftime = $_POST['fatimes'];
		echo $Ftime;
		

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
			<b><a href="departure.php"> Go back to Flight Chart</a></b>
	</body>

</html>
	 
