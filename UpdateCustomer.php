<?php
    include "header.php";
    include "customerform.php";
	$servername="localhost";
    $username="root";
    $password="";
    $dbName="finalproject";
  
$conn=mysqli_connect($servername,$username,$password,$dbName);
$userID =$_GET["userid"];
$sql = sprintf("SELECT * FROM customers where username='%s'",$userID);
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	
	while($row = $result->fetch_assoc()){
		
		$name = $row['username'];
		$fname = $row['firstname'];
		$lname = $row['lastname'];
		$email = $row['email'];
	}
}

?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h4>Update Customer:</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <form method="get" action="processUpCust.php">
                    <table>
                        <tr>
                            <td>
                                <h6>Customer details:</h6></td>
                        </tr>
                        <tr>
                            <td>Username:</td>
                            <td><input type="text" name="username" value="<?php echo $name ?>" readonly/></td>
                        </tr>
                        <tr>
                            <td>First name:</td>
                            <td>
                                <input type="text" name="firstname" value="<?php echo $fname ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>Last name:</td>
                            <td>
                                <input type="text" name="lastname" value="<?php echo $lname ?>" />
                            </td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>
                                <input type="email" name="email" value="<?php echo $email ?>" />
                            </td>
                        </tr>
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