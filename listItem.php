<?php
include('connectdb.php');
// Check connection
if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

$result = mysqli_query($con, "SELECT * FROM bookmarkItems  ORDER BY id DESC");


echo '<ul class="row item-list">';
while ($row = mysqli_fetch_array($result))
{
echo "
<li class='item-title'>

<a target='	_blank' href='" .$row['href'] . "'>". $row['title'] ."</a>

 <div class='item-body'>". $row['notes'] 
 
 . "</div> </li>";
 
}
echo '</ul> ';

echo ' ';
mysqli_close($con);
?>

