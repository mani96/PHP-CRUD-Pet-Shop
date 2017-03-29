<?php
 include "petform.php";
    include "header.php";

    $servername="localhost";
    $username="root";
    $password="";
    $dbName="finalproject";
    


    
$conn=mysqli_connect($servername,$username,$password,$dbName);
//searching for specific pet by breed
if(isset($_GET['search'])) {
    $breed = strtoupper($_GET["search"]);
	
    $sql = "SELECT * FROM PETS WHERE BREED='".$breed."' ORDER BY pet_name";
} else {
	//searching all pets
    $sql = "SELECT * FROM PETS ORDER BY pet_name";
}
   

$result = $conn->query($sql);

?>
<!--searching box---->
<div id="search" style="position: absolute; padding-top: 40px; padding-left: 970px;">
			 <form action="all.php" method="get">
                <input type="search" name="search" placeholder="Enter Breed">
                <button type="submit" >Search Pets</button>
            </form>
			</div>
<table class="table" style="width:80%;text-align:center;">
            <tr>
            <th>Id:</th>
            <th>Petname:</th>
            <th>Category:</th>
            <th>Age:</th>
            <th>Breed:</th>
            <th>Price:</th>
            <th>Edit:</th>
            <th>Delete:</th>
            <th>Sell: </th></tr>
            <?php
   
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<form method='get' action=''>";
        $id=$row['pet_id'];
        
        echo "<tr>
            <td>" . $row["pet_id"] . "</td>
            <td>" . $row["pet_name"] . "</td>
            <td>" . $row["category"] . "</td>
            <td>" . $row["age"] . "</td>
            <td>" . $row["breed"] . "</td>
            <td>" . $row["price"] . "</td>
            <td>";?><a href="UpdatePet.php?pet_id=<?php echo $id ?>">Edit</a><?php echo "</td>
            <td>";?><a href="deletePet.php?pet_id=<?php echo $id ?>">Delete</a><?php echo "</td>
            <td>";?><a href="sellPet.php?pet_id=<?php echo $id ?>">Sell</a><?php echo "</td>
            </tr>";
        echo "</form>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>


</body>
</html>
