<?php
$servername="localhost";
    $username="root";
    $password="";
    $dbName="finalproject";

    
$conn=mysqli_connect($servername,$username,$password,$dbName);

 $id=$_GET["pet_id"];
 
  $sql="DELETE FROM Pets where pet_id='$id'";
  
  if(mysqli_query($conn,$sql)){
	  
	  header("location: all.php");
  }
  else{
	  echo "Error";
  }
  $conn->close();



?>