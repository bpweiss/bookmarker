<?php

include('connectdb.php');

// Check connection
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
	}


$username =$_POST["username"];
$password =$_POST["password"];
$firstname =$_POST["firstname"];
$lastname =$_POST["lastname"];
$email = $_POST["email"];
	
	//encrypt the password
	$passw = sha1($passw);
	$salt = md5($pw_salt);
	$pepper = $pw_pepper;
	
	$passencrypt = $salt . $passw . $pepper;
	



$sql="INSERT INTO users (username, password, firstname, lastname, email) 
VALUES
($username, $passencrypt, $firstname, $lastname, $email)";

if (!mysqli_query($con, $sql))
	{
	die('Error: ' . mysqli_error($con));
	}
echo "<span class='submit-user-response'>record added</span>";

mysqli_close($con);
?>
