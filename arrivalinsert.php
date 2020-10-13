<?php 

	$link=mysqli_connect("localhost","root","","flightmanagementsystem");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
     
	

	if(isset($_POST['fatimes']) && isset($_POST['fano']) && isset($_POST['fadest']) && isset($_POST['fagate']) && isset($_POST['fastatus'])){
		$Ftime 	= $_POST['fatimes'];
		$Fno 	= $_POST['fano'];
		$Dest = $_POST['fadest'];
        $fGate = $_POST['fagate'];
        $fStatus = $_POST['fastatus'];
		
		
	 	$sql = "INSERT INTO `flights` (`Flight_Time`, `Flight_No`,`Destination`,`Gate`,`Flight_Status`) VALUES ('".$Ftime."', '".$Fno."', '".$Dest."','".$fGate."','".$fStatus."')";


		if(mysqli_query($link,$sql)){
			 echo "<div><img src='./images/shot_1.gif' style='position:relative;border-radius: 10px;left: 400px;' height='600' width='700'></div>";
			 echo "<div style=' margin: 10 auto;padding: 10px;font-family: Roboto;font-size: 11px;font-size: 11px;color: white !important;background-color: #00ab66cc;width: 600px;border-radius: 10px;text-align: center;'><h2>Success! Your Information Has Been Inserted Successfully</h2></div>";
			 echo "</div";
	 	}else{
         	echo "<div style=' background-color: red; width: 100px;font-size: 15px; padding:  12px; border-radius: 10px; font-family: Roboto; text-align: center;
'><h2>Error!Your Information Has Not Been Inserted Successfully</h2></div>";
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
	
	<body >
	<div style="background-color: #dadada;width: 150px;padding:  15px;border-radius: 10px; margin: 0px auto;font-family: Roboto;text-align: center;"><b><a href="showtable.php" style="
    text-decoration: none;color:  black !important; "> Back to Arrivals </a></b></div>
	</body>

</html>
	 
