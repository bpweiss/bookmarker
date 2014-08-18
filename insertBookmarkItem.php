<?php

include('connectdb.php');

// Check connection
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
	}

$sql="INSERT INTO bookmarkItems (title, href, notes) 
VALUES
('$_POST[bmtitle]','$_POST[bmhref]','$_POST[bmnotes]')";

if (!mysqli_query($con, $sql))
	{
	die('Error: ' . mysqli_error($con));
	}
echo "<span class='submit-item-response'>record added</span>";

mysqli_close($con);
?>
