<!DOCTYPE html>
<html>
<head>
	<title>Solution #31</title>
</head>
<body>
	<div class="container">
		<?php
			$a = 15;
			$b = 27;
			 
			// Swap Logic

			echo "\nThe number before swapping is:\n";
			echo "Number a =".$a." and b=".$b;

			$temp = $a;
			$a = $b;
			$b = $temp;
			 
			echo "\nThe number after swapping is: \n";
			echo "Number a =".$a." and b=".$b."\n";
		?>
	</div>
</body>
</html>