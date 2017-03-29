<?php
$servername="localhost";
    $username="root";
    $password="";
    $dbName="finalproject";

    
$conn=mysqli_connect($servername,$username,$password,$dbName);

 $userID =$_GET["userid"];
 
  $sql=sprintf("DELETE FROM customers where username='%s'",$userID);
  
  if(mysqli_query($conn,$sql)){
	  
	header("location: customers.php");
  }
  else{
	  echo "Error";
  }
  $conn->close();



?>