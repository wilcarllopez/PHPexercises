<!DOCTYPE html>
<html>
<head>
	<title>Solution #41</title>
</head>
<body>
	<div class="container">
		<?php
		for ($i = 1; $i < 7; $i++) {
		  for ($j = 1; $j < 7; $j++) {
		     if ($j == 1) {
		       echo str_pad($i*$j, 2, " ", STR_PAD_LEFT);
		     } else {
		       echo str_pad($i*$j, 4, " ", STR_PAD_LEFT);
		     }
		  }
		  echo "\n";
		}
		?>
	</div>
</body>
</html>