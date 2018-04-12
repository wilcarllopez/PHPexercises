<!DOCTYPE html>
<html>
<head>
	<title>Solution #39</title>
</head>
<body>
	<div class="container">
		<?php
		$myfile = fopen("/home/students/ppp.txt", "w") or die("Unable to open file!");
		$txt = "PHP Exercises\n";
		fwrite($myfile, $txt);
		$txt = "from\n";
		fwrite($myfile, $txt);
		$txt = "w3resource\n";
		fwrite($myfile, $txt);
		fclose($myfile);
		echo "Size of the file: ".filesize("/home/students/ppp.txt")."\n";
		?>
	</div>
</body>
</html>