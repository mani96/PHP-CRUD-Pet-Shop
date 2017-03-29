<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $servername="localhost";
    $username="root";
    $password="";
    $dbName="finalPetdb";
    
$conn=mysqli_connect($servername,$username,$password,$dbName);
    
$username=$_POST["user"];
$password=$_POST["password"];
        
        
        if($username=="admin" && $password=="adminpassword")
        {
				
				//Relocating to getStudentDetails.php
				header("Location: first.php");  //php function
			}
		else
			{
				echo "Username/password not correct!";
			}
    }
?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>

<body>
  <div class="cover"><img src="img/cover.png"></div>
   <form name="loginform" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onSubmit="return validateForm();" method="post">
<table align="center">
<tr><td>
<input type="text" name="user" placeholder="User Name">
</td></tr>


<tr><td>
<input type="password" name="password" placeholder="Password">
</td></tr>

<tr><td>
<input type="submit" name="btnlogin" value="Login">
</td></tr>
</table>
</form>

    
</body>
</html>