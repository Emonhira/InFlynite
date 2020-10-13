a<?php

  session_start();

  $name = $username = $password = $email = $retypepassword= "";
  $skills;

  $nameErr = $usernameErr = $passwordErr = $emailErr = "";
  $flag = 0;

  if (empty($_POST['name'])) {
    $nameErr = "Name is required";
    $flag = 1;
  } else {
    $name = test_input($_POST['name']);
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed";
       $flag = 1;
    }
  }

  if (empty($_POST['username'])) {
    $usernameErr = "Username is required";
    $flag = 1;
  } else {
    $username = test_input($_POST['username']);
    if (!preg_match("/^[a-z0-9][a-z0-9_]*[a-z0-9]$/",$username)){
    //if (!ctype_alnum($username)) {
       $usernameErr = "Only letters and numbers allowed";
       $flag = 1;
    }
  }

  if (empty($_POST['password']) || empty($_POST['retypepassword'])) {
    $passwordErr = "Password is required";
    $flag = 1;
  } else {
    $password = test_input($_POST['password']);
    $retypepassword = test_input($_POST['retypepassword']);
    if (strcmp($password,$retypepassword)){
       $passwordErr = "Password did not match";
       $flag = 1;
    }
  }
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $flag = 1;
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $flag = 1;
    }
  }
  
/*  echo $_GET['name']."<br/>";
  echo $_GET['username']."<br/>";
  echo $_GET['gender']."<br/>";
  foreach($_GET['skills'] as $skill) {
        echo $skill." ";
    }
  echo "<br/>";
  echo $_GET['contact']."<br/>";
  echo $_GET['email']."<br/>";
  echo $_GET['university']."<br/>";*/

  if (empty($nameErr)) {
    //echo $name."<br/>";
  } else {
    echo $nameErr."<br/>";
  }

  if (empty($usernameErr)) {
    //echo $username."<br/>";
  } else {
    echo $usernameErr."<br/>";
  }

  if (empty($passwordErr)) {
    //echo $password."<br/>";
  } else {
    echo $passwordErr."<br/>";
  }


  // if (empty($skillErr)) {
  //   foreach ($item as $skill) {
  //     echo $item." ";
  //   }
  // } else {
  //   echo $skillErr."<br/>";
  // }


  if (empty($emailErr)) {
    //echo $email."<br/>";
  } else {
    echo $emailErr."<br/>";
  }

  $link=mysqli_connect("localhost","root","","flightmanagementsystem");
	// Check connection
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
 
  $sql = "INSERT INTO `users` (`Name`, `Username`,`Email`,`Pass`) VALUES ('".$name."', '".$username."','".$email."','".$password."')";
  if(mysqli_query($link,$sql)){
    echo "<div style=' margin: 10 auto;padding: 10px;font-family: Roboto;font-size: 11px;font-size: 11px;color: white !important;background-color: #00ab66cc;width: 600px;border-radius: 10px;text-align: center;'><h2>Success! New User Has Been Added Successfully</h2></div>";
    header("Location:signuppage.php");
    echo "</div";
   }else{
    echo "<div style=' background-color: red; width: 100px;font-size: 15px; padding:  12px; border-radius: 10px; font-family: Roboto; text-align: center;
    '><h2>Error!Your Information Has Not Been Added Successfully</h2></div>";
   }

   if($flag == 1) {
     $_SESSION['nameErr'] = $nameErr;
     $_SESSION['usernameErr'] = $usernameErr;
     $_SESSION['passwordErr'] = $passwordErr;
     $_SESSION['emailErr'] = $emailErr;
     $_SESSION['name'] = $name;
     $_SESSION['username'] = $username;
     $_SESSION['password'] = $password;
     $_SESSION['email'] = $email;


   } else{
     setcookie('nameCo',$name, time() + (86400 * 30),"/");
     setcookie('usernameCo',$username, time() + (86400 * 30),"/");
     setcookie('passwordCo',$password, time() + (86400 * 30),"/");
     setcookie('emailCo',$email, time() + (86400 * 30),"/");
     header("Location:loginpage.php");
   }


  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
