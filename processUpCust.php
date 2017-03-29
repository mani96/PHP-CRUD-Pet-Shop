<?php
$servername="localhost";
    $username="root";
    $password="";
    $dbName="finalproject";

    
$conn=mysqli_connect($servername,$username,$password,$dbName);

        $username = $_GET["username"];
        $firstname = $_GET["firstname"];
        $lastname = $_GET["lastname"];
        $email = $_GET["email"];
		$sql = "UPDATE customers SET firstname = '$firstname' ,lastname = '$lastname', email='$email' where username = '$username';";
      
		
  
  if(mysqli_query($conn,$sql)){
	  
	header("location: customers.php");
  }
  else{
	  
	  echo "Error";
  }
  $conn->close();



?>