<?php
  include "header.php";
$servername="localhost";
    $username="root";
    $password="";
    $dbName="finalproject";

    
$conn=mysqli_connect($servername,$username,$password,$dbName);
if (isset($_GET['search'])) {
        $name = strtoupper($_GET["search"]);
        $sql = "SELECT * FROM CUSTOMERS WHERE USERNAME='$name'";
		  
	
    } else {
        $sql = "SELECT * FROM CUSTOMERS ORDER BY USERNAME";
    }
    $result = mysqli_query($conn, $sql);

$result = $conn->query($sql);
?>
<div id="search" style="position: absolute; padding-top: 40px; padding-left: 950px;">
			 <form action="customers.php" method="get">
                <input type="search" name="search" placeholder="Enter Username">
                <button type="submit" >Search Customer</button>
            </form>
			</div>
<table class="table" style="width:80%;text-align:center;">
            <tr>
            <th>Username:</th>
            <th>Firstname:</th>
            <th>Last name:</th>
            <th>Email:</th>
            <th>Edit:</th>
            <th>Delete:</th>
            </tr>
			
            <?php
  



if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<form method='post' action=''>";
		$userID = $row["username"];
        echo "<tr>
            <td>" . $row["username"] . "</td>
            <td>" . $row["firstname"] . "</td>
            <td>" . $row["lastname"] . "</td>
            <td>" . $row["email"] . "</td>
            <td>";?><a href='UpdateCustomer.php?userid=<?php echo $userID ?>'>Edit</a><?php echo"</td>
            <td>";?><a href="deleteCustomer.php?userid=<?php echo $userID ?>">Delete</a><?php echo "</td>
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
