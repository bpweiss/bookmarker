<?php
include 'config.php';
// Create connection
$con=mysqli_connect($mySqlHost,$mySqlUserName,$mySqlPassword,$mySqlDatabaseName);


// Check connection 
if (mysqli_connect_errno())
    {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
// Create bookmarks table
$createBmTable_SQL = "CREATE TABLE bookmarkItems ( "; 
$createBmTable_SQL .= "ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, ";
$createBmTable_SQL .= "title VARCHAR( 250 ) , ";
$createBmTable_SQL .= "href VARCHAR( 2083 ) NOT NULL, "; 
$createBmTable_SQL .= "notes TEXT NULL ";
$createBmTable_SQL .= ")";


// Execute query
if (mysqli_query($con,$createBmTable_SQL))
	{
	echo "Table bookmarkItems created successfully";
	}
	else
	{
	echo "Error creating table: " . mysqli_error($con);
	}
	
echo "<br /> ";

// Create User table
$createuserTable_SQL = "CREATE TABLE users ( "; 
$createuserTable_SQL .= "ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, ";
$createuserTable_SQL .= "username VARCHAR( 250 ) NOT NULL, ";
$createuserTable_SQL .= "password VARCHAR( 2083 ) NOT NULL, "; 
$createuserTable_SQL .= "firstname VARCHAR( 250 ) , ";
$createuserTable_SQL .= "lastname VARCHAR( 250 ) , ";
$createuserTable_SQL .= "email VARCHAR( 250 ) ";
$createuserTable_SQL .= ")";


// Execute query
if (mysqli_query($con,$createuserTable_SQL))
	{
	echo "Table Users created successfully";
	}
	else
	{
	echo "Error creating table: " . mysqli_error($con);
	}
?>