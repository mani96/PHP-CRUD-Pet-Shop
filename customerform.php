<?php

        $customerusername="";
		$firstname="";
		$lastname="" ;
		$email="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $servername="localhost";
    $username="root";
    $password="";
    $dbName="finalproject";

    
$conn=mysqli_connect($servername,$username,$password,$dbName);



    
    ####Inserting pet Record 
    if(isset($_POST["btnInsert"]))
    {
        //insert code
        $customerusername=$_POST["username"];
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        $email=$_POST["email"];
        
		$sql="INSERT INTO Customers (username, firstname,lastname,email) VALUES('$customerusername','$firstname','$lastname','$email')";
		
		if(mysqli_query($conn,$sql))
		{
		echo "Customer Added";
		}
		else
		{
			echo "Error adding customer"; 
		}
    }
    else if(isset($_POST["btnUpdate"]))
    {
        $username=$_POST["username"];
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        $email=$_POST["email"];
        
        $sql="UPDATE Customers SET 
        firstname='$firstname',
        lastname='$lastname',
        email='$email' 
        where username='$username'";
        
        if(mysqli_query($conn,$sql))
        {
            echo "Customer updated successfully";
        }
        else
        {
            echo "Error inserted successfully";
        }
    }
    else if(isset($_POST["btnDelete"]))
    {
        $username=$_POST["username"];
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        $email=$_POST["email"];
        
        $sql="DELETE FROM Customers where username='$username'";
        
        if(mysqli_query($conn,$sql))
        {
            echo "Customer succesfully deleted";
        }
        else
        {
            echo "Error deleting customer";
        }
    }
    else if(isset($_POST["btnSearch"]))
    {
        $searchid=$_POST["searchid"];
        
        $sql="SELECT * FROM Customers where username='$searchid'";
        
        $result=mysqli_query($conn,$sql);
        
        $row=mysqli_fetch_assoc($result);
        
        $id=$row["id"];
        $firstname=$row["firstname"];
        $lastname=$row["lastname"];
        $contact=$row["contact"];
        $petname=$row["petname"];
        $category=$row["category"];
        $birth=$row["birth"];
        $breed=$row["breed"];
        $address=$row["address"];
        $email=$row["email"];
        $status=$row["status"];
        $note=$row["note"];
    }
}
?>