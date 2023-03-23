<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>File Size</title>
</head>

<body>
	<h1>File Size PHP</h1>
	<?php
	$file='file.txt';
	$filesize=filesize($file);
	echo "the size of file is  $filesize bytes";
	
	
?>
</body>
</html>