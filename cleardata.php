<?php
$servername="localhost";
    $username="root";
    $password="";
    $dbName="finalproject";

    
$conn=mysqli_connect($servername,$username,$password,$dbName);

   
		
		$sql = "delete from sold_pets";
      
		
  
  if(mysqli_query($conn,$sql)){
	  
	header("location: sold.php");
  }
  else{
	  
	  echo "Error";
  }
  $conn->close();



?>