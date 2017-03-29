<?php
$servername="localhost";
    $username="root";
    $password="";
    $dbName="finalproject";

    
$conn=mysqli_connect($servername,$username,$password,$dbName);

        $pet_id = $_GET["pet_id"];
		$customers = $_GET["customers"];
		
		$sql = "INSERT INTO sold_pets(pet_id, username) VALUES ('$pet_id','$customers')";
      
		
  
  if(mysqli_query($conn,$sql)){
	  
	header("location: all.php");
  }
  else{
	  
	  echo "Error";
  }
  $conn->close();



?>