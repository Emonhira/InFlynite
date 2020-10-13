<?php 

	$link=mysqli_connect("localhost","root","","flightmanagementsystem");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	 
	if(isset($_POST['ename']) && isset($_POST['econt']) && isset($_POST['eaddress']) && isset($_POST['eairlines'])){
		$Fno 	= $_POST['ename'];
		$Dest = $_POST['econt'];
        $fGate = $_POST['eaddress'];
        $fStatus = $_POST['eairlines'];
		
		
	 	$sql = "INSERT INTO `employee` (`employee_name`, `employee_contact`,`employee_address`,`employee_airlines`) VALUES ('".$Fno."', '".$Dest."','".$fGate."','".$fStatus."')";


		if(mysqli_query($link,$sql)){
			echo "<div><img src='./images/shot_1.gif' style='position:relative;border-radius: 10px;left: 400px;' height='600' width='700'></div>";
			echo "<div style=' margin: 10 auto;padding: 10px;font-family: Roboto;font-size: 11px;font-size: 11px;color: white !important;background-color: #00ab66cc;width: 600px;border-radius: 10px;text-align: center;'><h2>Success! Your Information Has Been Inserted Successfully</h2></div>";
			echo "</div";
	 	}else{
			echo "<div><img src='./images/delay.gif' style='position:relative;border-radius: 10px;left: 400px;' height='600' width='700'></div>";
			echo "<div style='background-color: red;width: 600px;font-size: 11px;padding:12px;border-radius: 10px;font-family: Roboto;text-align: center;margin: 5px auto;color:white;'><h2>Error 400! New Employee Has Not Been Added Successfully</h2></div><br>";
			echo "</div";
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
	<div style="background-color: #dadada;width: 150px;padding:  15px;border-radius: 10px; margin: -15px auto;font-family: Roboto;text-align: center;"><b><a href="employeestable.php" style="
    text-decoration: none;color:  black !important; "> Back to Employees</a></b></div>
	</body>

</html>