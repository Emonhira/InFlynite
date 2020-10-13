<?php

//The log in function being applied to the log in button


$link=mysqli_connect("localhost","root","","flightmanagementsystem");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$error="";

    if(isset($_POST['username']) && isset($_POST['password'])){
      $uname 	= $_POST['username'];
      $psw 	= $_POST['password'];
      
      
      $sql = "SELECT Username,Pass FROM users WHERE Username='".$uname."' AND Pass='".$psw."'";
      echo $sql;


      if(mysqli_query($link,$sql)){
          header("Location:start.php");
      }else{
      echo "<div style=' background-color: red; width: 100px;font-size: 15px; padding:  12px; border-radius: 10px; font-family: Roboto; text-align: center;
    '><h2>Error!Your Information Has Not Been Inserted Successfully</h2></div>";
      }
    }else{
      
      echo "You must fill mandatory field.";
      /*if(empty($_POST['fname'])){
        echo "You must fill Name fild";
      }else if(empty($_POST['lname'])){
        
      }*/
      
}

?>
