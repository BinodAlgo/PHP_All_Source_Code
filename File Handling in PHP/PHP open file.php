
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP OPEN FILE</title>
</head>

<body>
	<h1> How To Open File in PHP</h1>
	<?php
	$file=fopen("text.txt","r") or die("ERROR : File can not open");
	if($file){
		echo "File open Successfully";
		fclose($file);
	}
	else{
		echo "ERROR : File does not exist";
	}
	
	
	
	
	
	?>
</body>
</html>