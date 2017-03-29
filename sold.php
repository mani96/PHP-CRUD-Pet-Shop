
          <body>
		  <div id ="cleardata" style="position: absolute; padding-top: 105px; padding-left: 140px;">
		  <a href="cleardata.php">Clear</a>
		  </div>
           <table class="table" style="width:80%;text-align:center;">
            <tr>
            <th>Pet id:</th>
            <th>Owner:</th>
			
            </tr>
            <?php
    include "header.php";

    $servername="localhost";
    $username="root";
    $password="";
    $dbName="finalproject";

    
$conn=mysqli_connect($servername,$username,$password,$dbName);

$sql = "SELECT * FROM sold_pets";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . $row["pet_id"] . "</td>
            <td>" . $row["username"] . "</td>
            </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>


</body>
</html>
