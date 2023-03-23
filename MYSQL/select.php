<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h1> How to Select Data in to database</h1>
	<?php
	$conn=new mysqli("localhost","root","","phpcourse");
	if($conn===false){
		die("Error could not connect".$conn->connect_error);
	}
	$select="SELECT id,firstname from human";
	$show=$conn->query($select);
	if($show->num_rows>0){
		while($row=$show->fetch_assoc()){
			echo "id".$row["id"]."Name",$row["firstname"]."<br>";
		}}
		else{
			echo "No record Founded";
		
	}
	
	$conn->close();
	?>
	
	
	
	
</body>
</html>