<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>How to create Database</title>
</head>

<body>
	<h1>How to create database in php</h1>
	<?php
	$dbhost="localhost";
	$dbusername="root";
	$dbpassword="";
	$conn=new mysqli($dbhost,$dbusername,$dbpassword);
	if($conn->connect_error){
		die("conenction is failed".$conn->connect_error);
	}
	$database="CREATE DATABASE phpcourse";
	if($conn->query($database)===TRUE){
		echo "databse is created successfully";
	}
	else
	{
		echo "error in creating database connection".$conn->error;
	}
	$conn->close();
	
	
	
	?>
</body>
</html>