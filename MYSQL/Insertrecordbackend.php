<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BackEnd</title>
</head>

<body>
	<?php
	$conn=new mysqli("localhost","root","","phpcourse");
	if($conn===false){
		die("Error could not connect".$conn->connect_error);
	}
	
	$first_name=$conn->real_escape_string($_REQUEST['first_name']);
	$last_name=$conn->real_escape_string($_REQUEST['last_name']);
	$Address=$conn->real_escape_string($_REQUEST['Address']);
	$email=$conn->real_escape_string($_REQUEST['email']);
	
	
	
	$insert="INSERT INTO human (firstname,lastname,address,email) VALUES 
	('$first_name','$last_name','$Address','$email')";
	
	if($conn->query($insert)===true){
		echo "record ARE Successfully inserted";
	}else{
		
	echo "ERROR you could not created tables $insert".$conn->error;
		
	}
	$conn->close();
	?>
</body>
</html>