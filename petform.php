<?php

        $searchid="";
        $id="";
        $petname="";
        $category="";
        $age="";
        $breed="";
        $price="";

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
        $petname=$_POST["petname"];
        $category=$_POST["category"];
        $age=$_POST["age"];
        $breed=$_POST["breed"];
        $price=$_POST["price"];
        
		$sql="INSERT INTO Pets (pet_name,category,age,breed,price) VALUES('$petname','$category','$age','$breed','$price')";
		
		if(mysqli_query($conn,$sql))
		{
		echo "Pet Added";
		}
		else
		{
			echo "Error adding pet"; 
		}
    }
    else if(isset($_POST["btnUpdate"]))
    {
        $searchid=$_POST["searchid"];
        $id=$_POST["id"];
        $petname=$_POST["petname"];
        $category=$_POST["category"];
        $age=$_POST["age"];
        $breed=$_POST["breed"];
        $price=$_POST["price"];
        
        $sql="UPDATE Pets SET  
        pet_name='$petname',
        category='$category',
        age='$age',
        breed='$breed',
        price='$price' 
        where id='$id'";
        
        if(mysqli_query($conn,$sql))
        {
            echo "Pet updated successfully";
        }
        else
        {
            echo "Error inserted successfully";
        }
    }
    else if(isset($_POST["btnDelete"]))
    {
        $searchid=$_POST["searchid"];
        $id=$_POST["id"];
        $petname=$_POST["petname"];
        $category=$_POST["category"];
        $birth=$_POST["birth"];
        $breed=$_POST["breed"];
        $price=$_POST["price"];
        
        $sql="DELETE FROM Pets where id='$id'";
        
        if(mysqli_query($conn,$sql))
        {
            echo "Pet succesfully deleted";
        }
        else
        {
            echo "Error deleting Student Record";
        }
    }
    else if(isset($_POST["btnSearch"]))
    {
        $searchid=$_POST["searchid"];
        
       
        
        $sql="SELECT * FROM Pets where id='$searchid'";
        
        $result=mysqli_query($conn,$sql);
        
        $row=mysqli_fetch_assoc($result);
        
         $id=$row["id"];
        $petname=$row["pet_name"];
        $category=$row["category"];
        $birth=$row["birth"];
        $breed=$row["breed"];
        $price=$row["price"];
    }
}
?>