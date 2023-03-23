<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Write overwrite and append</title>
</head>

<body>
	<h1>How to Write overwrite and append File in PHP</h1>
	<?php
	$file=fopen('text.txt','a');
	fwrite($file,'This is append mode');
	fwrite($file,"this is append mode line");
	fclose($file);
	echo "file has been append Successfully";
	
	
	?>
</body>
</html>