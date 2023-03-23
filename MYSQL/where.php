<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Where Clause in PHP</title>
</head>

<body>
	<h1>Where Clause in PHP</h1>
	<?php
	$conn=new mysqli("localhost","root","","phpcourse");
	if($conn===false){
		die("Error could not connect".$conn->connect_error);
	}
	$select="SELECT id ,firstname,lastname FROM human WHERE lastname='david'";
	$show=$conn->query($select);
	if($show->num_rows>0){
		while($row=$show->fetch_assoc()){
			echo "id".$row["id"]."Name",$row["firstname"].$row['lastname']."<br>";
		}}
		else{
			echo "No record Founded";
		
	}
	
	$conn->close();
	?>
	
	
	
	
	
	
</body>
	
</html>