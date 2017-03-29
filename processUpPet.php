<?php
$servername="localhost";
    $username="root";
    $password="";
    $dbName="finalproject";

    
$conn=mysqli_connect($servername,$username,$password,$dbName);

        $pet_id = $_GET["pet_id"];
		$pet_name = $_GET["pet_name"];
		$category = $_GET["category"];
		$breed = $_GET["breed"];
		$age = $_GET["age"];
		$price = $_GET["price"];
		
		$sql = "UPDATE pets SET pet_name = '$pet_name' , category = '$category', breed ='$breed', age = '$age', price = '$price' where pet_id = '$pet_id';";
      
		
  
  if(mysqli_query($conn,$sql)){
	  
	header("location: all.php");
  }
  else{
	  
	  echo "Error";
  }
  $conn->close();



?>