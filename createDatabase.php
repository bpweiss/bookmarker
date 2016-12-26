<?php
include 'config.php';
// Create connection
$con=mysqli_connect($mySqlHost,$mySqlUserName,$mySqlPassword);



// Check connection 
if (mysqli_connect_errno())
    {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
// close connection mysqli_close($con);

// Create database
$sql="CREATE DATABASE bkmkmgrone";
if (mysqli_query($con,$sql))
	{
	echo "Database bkmkmgr created successfully";
	}
   else
	{
	echo "Error creating database: " . mysqli_error($con);
	}
	
?>