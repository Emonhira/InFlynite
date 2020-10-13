<?php

	$link=mysqli_connect("localhost","root","","flightmanagementsystem");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
		



	

	if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])){
		$Name 	= $_POST['name'];
		$Email 	= $_POST['email'];
		$Message = $_POST['message'];



	 	$sql = "INSERT INTO `contact` (`Name`, `Email`, `Message`) VALUES ('".$Name."', '".$Email."', '".$Message."')";


	 	if(mysqli_query($link,$sql)){
			 echo " Row Insertion Complete";
			 if(!isset($person)){
				$person = new stdClass();
			  }
			
			  $person->name = $Name;
			  $person->email = $Email;
			  $person->message = $Message;
			
			  if(!isset($value)){
				$value = new stdClass();
			  }
			  $value ->persons  = $person;
			
			  $json = json_encode($value);
			  file_put_contents('person.json', $json);

			  $xml = new SimpleXMLElement('<person></person>');
				$user = $xml->addChild('user');
				$user->addChild('name',$Name);
				$user->addChild('email',$Email);
			  	$user->addChild('message',$Message);
				$xml->asXML("person.xml");
			 header("Location: index.php");
	 	}else{
         	echo " Row Insertion Failed";
	 	}
	}else{

		echo "You must fill mandatory fild.";
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
			<b><a href="index.php"> Go back to Home Page</a></b>
	</body>

</html>
