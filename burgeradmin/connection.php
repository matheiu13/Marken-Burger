<?php
/*	$link=mysqli_connect("localhost", "root", "") or die (mysqli_error($link));
	if(!$link){
		echo 'connection error' . mysqli_connect_error();
	}
	mysqli_select_db($link, "test") or die (mysqli_error($link));*/
	
	 $host = "localhost";
$username = "id17003852_theburgerbuilders";
$password = "CwV>/f8sxb<zuQ^k";
$dbname = "id17003852_test";

$conn = mysqli_connect($host, $username, $password, $dbname);


	$link=mysqli_connect($host, $username, $password, $dbname) or die (mysqli_error($link));
	
	$connect = new PDO("mysql:host=$host;dbname=$dbname", "$username", "$password");
?>