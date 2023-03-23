<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$path="E:/";
	$path=$path.basename($_FILES['Fileupload']['name']);
	if(move_uploaded_file($_FILES['Fileupload']['tmp_name'],$path)){
		echo "successfully file uploaded";
	}else{
		echo "Sorry file is not uploaded please try again";
	}
	
	
	
	?>
</body>
</html>