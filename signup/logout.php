<?php
session_start();
if (isset($_SESSION['firstname']))
{
	echo "Successfully logged out";
	include 'login.php';
	session_destroy();
}
else
{
	echo "You do not have permission to access this page";
}
?>