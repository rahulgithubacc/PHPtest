<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Sign up</title>
</head>
<body>
	<div class="div-contains-form">
		<h1>SignUP</h1>
		<form action="" method="post">
			Firstname:<input type="text" name="Firstname" id="fanme"><br>
			Lastname:<input type="text" name="Lastname" id="lanme"><br>
			Phone No:<input type="text" name="Phone" id="phone"><br>
			Username:<input type="text" name="Username" id="user"><br>
			Password:<input type="password" name="Password" id="pass"><br>
			<input type ="submit" id="submit" value="Register me!!!"></button><br>
			Already have an account?<a href="login.php">Login here</a>
		</form>
	</div>	
</body>
</html>
<?php
	include 'connection.php';
	if(isset($_POST['Username']))
	{
		$firstname = $_POST['Firstname'];
		$lastname = $_POST['Lastname'];
		$phone = $_POST['Phone'];
		$username = $_POST['Username'];
		$password = md5($_POST['Password']); 
		$sql = "INSERT INTO users (firstname, lastname, phone, username, password) VALUES ('$firstname', '$lastname', '$phone', '$username', '$password')";
		if (mysqli_query($conn, $sql)) 
	    echo "<p>"."New record created successfully";
		else 
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    } 
    mysqli_close($conn);
?>
