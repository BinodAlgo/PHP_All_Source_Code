<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record in PHP</title>
</head>

<body>
	<h1>Update Record in PHP</h1>
	<?php
	$conn=new mysqli("localhost","root","","phpcourse");
	if($conn===false){
		die("Error could not connect".$conn->connect_error);
	}
	
	$update="UPDATE human SET lastname='hi hello' WHERE id=4";
	
	
		if($conn->query($update)===true){
		echo "record ARE Successfully udpate";
	}else{
		
	echo "ERROR you could not created tables $update".$conn->error;
		
	}
	$conn->close();
	?>
</body>
</html>