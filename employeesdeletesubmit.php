<?php 

	include_once("Connection.php");
	
		$pas = $_POST['ename'];
		
		echo $pas;
		
	 	$sql = "delete from employee where employee_name='{$pas}'";


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
			<b><a href="employeestable.php"> Go back to Employees Table</a></b>
	</body>

</html>

