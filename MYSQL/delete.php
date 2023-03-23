<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete Record</title>
</head>

<body>
	<h1> How To Delete a record from Database</h1>
		<?php
	$conn=new mysqli("localhost","root","","phpcourse");
	if($conn===false){
		die("Error could not connect".$conn->connect_error);
	}
	
	$delete="DELETE FROM human WHERE lastname='david'";
	
	
		if($conn->query($delete)===true){
		echo "record ARE Successfully deleted";
	}else{
		
	echo "ERROR you could not created tables $delete".$conn->error;
		
	}
	$conn->close();
	?>
</body>
</html>