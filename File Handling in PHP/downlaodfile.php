<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Download File</title>
</head>

<body>
	<h1> How To Download File In PHP</h1>
	<p><a href="#"> XYZ</a></p>
	<?php
	$file="file.txt";
	$files=("Working With PHP File/$file");
	$filet=filetype($file);
	$filename=basename($files);
	#$fileurl="#";
	header("Content-Type".$filet);
	header("cotent-dis:attachment; filename=".$filename);
		readfile($files);
	
	
	?>
</body>
</html>