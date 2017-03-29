<?php

$pet_id=$_GET

echo $pet_id;

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $servername="localhost";
    $username="root";
    $password="";
    $dbName="finalproject";

    
$conn=mysqli_connect($servername,$username,$password,$dbName);



    
    
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
}
?>