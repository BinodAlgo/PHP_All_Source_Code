<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>PHP MY SQL CONNECTION</title>
</head>

<body>
	<h1> How To Create SQL Connections</h1>
	<?php
	$dbhost = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$conn = mysqli_connect($dbhost, $dbusername, $dbpassword);

	if (!$conn) {
		die("connection is failed" . mysqli_connect_error());
	}
	echo "Connection for the database is created";



	?>
	<?php

	$dbhost = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$conn = new mysqli($dbhost, $dbusername, $dbpassword);


	if ($conn->connect_error) {
		die("connection is failed" . $conn->connect_error);
	}
	echo "Connection for the database is created";
	?>


	<?php
	/* $dbhost="localhost";
	$dbusername="root";
	$dbpassword="";
try{
	$conn=new PDO("mysql:host=$dbhost;",$dbusername,$dbpassword);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo "database connection Created";
}	
	catch (PDOException $e){
		echo "conenction is failed".$e->getMessage();
	} */
	?>


</body>

</html>