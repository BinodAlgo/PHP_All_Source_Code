<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create Table in PHP and MYSQL</title>
</head>

<body>
	<h1>How to Create Table in PHP and MYSQL</h1>
	<?php
	$conn=new mysqli("localhost","root","","phpcourse");
	if($conn===false){
		die("Error could not connect".$conn->connect_error);
	}
	$sql="CREATE TABLE human (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	firstname VARCHAR(30)NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	address Varchar(255) NOT NULL,
	email VARCHAR(60) NOT NULL UNIQUE)";
	if($conn->query($sql)===true){
		echo "TABLES ARE Successfully Created";
	}else{
		
	echo "ERROR you could not created tables $sql".$conn->error;
		
	}
	
	
	?>
</body>
</html>