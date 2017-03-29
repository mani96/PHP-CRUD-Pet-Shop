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
}

?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h4>Update Pets:</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <form method="get" action="processUpPet.php">
                    <table>
                        <tr>
                            <td>
                                <h6>Pet details:</h6></td>
                        </tr>
                        <tr>
                            <td>Pet ID:</td>
                            <td><input type="text" name="pet_id" value="<?php echo $petID ?>" readonly/></td>
                        </tr>
                        <tr>
                            <td>Pet Name:</td>
                            <td>
                                <input type="text" name="pet_name" value="<?php echo $pname ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>Category:</td>
                            <td>
                                <input type="text" name="category" value="<?php echo $category ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>Breed:</td>
                            <td>
                                <input type="text" name="breed" value="<?php echo $breed ?>" />
                            </td>
                        </tr>
                        <tr>
						<tr>
                            <td>Age:</td>
                            <td>
                                <input type="text" name="age" value="<?php echo $age ?>" />
                            </td>
                        </tr>
						<tr>
                            <td>Price:</td>
                            <td>
                                <input type="number" name="price" value="<?php echo $price ?>" />
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td>
                                <input type="submit" name="btnInsert" value="Update" class="knap" />
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

    </body>

    </html>