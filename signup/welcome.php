<?php
session_start();
if (isset($_SESSION['firstname']))
  echo "<h1>"."Welcome"." ".$_SESSION['firstname'];
else
	echo "sorry you are not authorized to access this page!!You need to login";
	if((isset($_SESSION['firstname'])))
	{
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<title>Login</title>
	</head>
	<body>
		<form action="logout.php">
			<input type ="submit" id="submit" value="Logout"></button><br>
		</form>
	</body>
</html>	
<?php
	}
?>
