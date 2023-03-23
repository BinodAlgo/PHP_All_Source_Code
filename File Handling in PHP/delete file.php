<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Delete File </title>
</head>

<body>
	<h1> How to delete file in php</h1>
	<?php
	$file=unlink('text.txt');
	if($file){
		echo "file is deleted";
	}
	else{
		echo "your file not deleted";
	}
	
	
	?>
</body>
</html>