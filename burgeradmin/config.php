<?php



$con = mysqli_connect("localhost", "root", "", "feedback_page"); //Connection variable

if(mysqli_connect_errno()) 
{
	echo "Failed to connect: " . mysqli_connect_errno();
}

?>