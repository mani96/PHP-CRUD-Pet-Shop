<?php
    include "header.php";
    include "customerform.php";
	$servername="localhost";
    $username="root";
    $password="";
    $dbName="finalproject";
  
$conn=mysqli_connect($servername,$username,$password,$dbName);
$petID =$_GET["pet_id"];
$sql = sprintf("SELECT * FROM pets where pet_id='%s'",$petID);
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	
	while($row = $result->fetch_assoc()){
		
		$pname = $row['pet_name'];
		$category = $row['category'];
		$breed = $row['breed'];
		$age = $row['age'];
		$price = $row['price'];
	}
	
	$sql2 = "select * from customers";
	$result2 = $conn->query($sql2);
}

?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h4>Selling Pets:</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <form method="get" action="processSell.php">
                    <table>
                        <tr>
                            <td>
                                <h6>Pet details:</h6></td>
                        </tr>
                        <tr>
                            <td>Pet ID:</td>
                            <td><input type="text" name="pet_id" value="<?php echo $petID ?>" readonly /></td>
                        </tr>
                        <tr>
                            <td>Pet Name:</td>
                            <td>
                                <input type="text" name="pet_name" value="<?php echo $pname ?>" readonly />
                            </td>
                        </tr>
                        <tr>
                            <td>Category:</td>
                            <td>
                                <input type="text" name="category" value="<?php echo $category ?>" readonly />
                            </td>
                        </tr>
                        <tr>
                            <td>Breed:</td>
                            <td>
                                <input type="text" name="breed" value="<?php echo $breed ?>" readonly />
                            </td>
                        </tr>
                        <tr>
						<tr>
                            <td>Age:</td>
                            <td>
                                <input type="text" name="age" value="<?php echo $age ?>" readonly />
                            </td>
                        </tr>
						<tr>
                            <td>Price:</td>
                            <td>
                                <input type="number" name="price" value="<?php echo $price ?>" readonly />
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            
                        </tr><br><br>
						<tr>
                            <td>Customers in List:</td>
                            <td>
                               <select name="customers">
      <?php 
	     if ($result2->num_rows > 0) {
	
	while($row = $result2->fetch_assoc()){
		
		$username = $row['username'];
		echo '<option value="'.$username.'">'.$username.'</option>';
	}
		 }
	  ?>
</select>
                            </td>
                        </tr>
						<td>
                                <input type="submit" name="btnInsert" value="Sell" class="knap" readonly />
                            </td>
                    </table>
                </form>
            </div>
        </div>
    </div>

    </body>

    </html>