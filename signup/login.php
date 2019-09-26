<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<title>Login</title>
	</head>
	<body>
		<div class="div-contains-form">
			<h1>Login here</h1>
			<form action="" method="post">
				Username:<input type="text" name="Username" id="user" placeholder="username"><br>
				Passsword:<input type="password" name="Passsword" id="pass" placeholder="password"><br>
				<input type ="submit" id="submit" value="Login"></button>
			</form>
		</div>	
	</body>
</html>
<?php
	include 'connection.php';
	if(isset($_POST['Username']))
	{
		$username = $_POST['Username'];
		$password = md5($_POST['Passsword']); //Encrypt the password
		$sql = "SELECT *FROM  users where username ='$username' AND password ='$password'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);
		$row= mysqli_fetch_assoc($result);
		if($count==1)
		{
	    session_start(); 
	    $_SESSION['firstname']= $row['firstname'];
		}
		if($count==0)
			echo "Invalid username or password,please try again";
		else
			header("location:welcome.php");
	}	
    mysqli_close($conn);
?>
