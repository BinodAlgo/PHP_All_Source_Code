<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Insert Datas</title>
</head>

<body>
	<h1> How to Insert Data Into Table</h1>
	<?php
	$conn=new mysqli("localhost","root","","phpcourse");
	if($conn===false){
		die("Error could not connect".$conn->connect_error);
	}
	$insert="INSERT INTO human (firstname,lastname,address,email) VALUES ('bob4','david4','london UK','xyz4@email.com'),
	('bob2','david2','london UK','xyz2@email.com'),
	('bob3','david13','london UK','xyz3@email.com')";
	
	
	
	
	
	if($conn->query($insert)===true){
		echo "record ARE Successfully inserted";
	}else{
		
	echo "ERROR you could not created tables $insert".$conn->error;
		
	}
	$conn->close();
	?>
</body>
</html>