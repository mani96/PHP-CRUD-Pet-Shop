<table class="table">
            <tr>
            <th>Id:</th>
            <th>Firstname:</th>
            <th>Last name:</th>
            <th>Contact:</th>
            <th>Petname:</th>
            <th>Category:</th>
            <th>Birth:</th>
            <th>Breed:</th>
            <th>Address:</th>
            <th>Email:</th>
            <th>Price:</th>
            <th>Status:</th>
            <th>Note:</th></tr>
            <?php
    include "header.php";

$servername="localhost";
    $username="root";
    $password="";
    $dbName="finalPetdb";

    
$conn=mysqli_connect($servername,$username,$password,$dbName);

$sql = "SELECT * FROM CarePetsData where status='A'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["firstname"] . "</td>
            <td>" . $row["lastname"] . "</td>
            <td>" . $row["contact"] . "</td>
            <td>" . $row["petname"] . "</td>
            <td>" . $row["category"] . "</td>
            <td>" . $row["birth"] . "</td>
            <td>" . $row["breed"] . "</td>
            <td>" . $row["address"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>" . $row["price"] . "</td>
            <td>" . $row["status"] . "</td>
            <td>" . $row["note"] . "</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>


</body>
</html>
