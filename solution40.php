<!DOCTYPE html>
<html>
<head>
	<title>Solution #40</title>
</head>
<body>
	<div class="container">
		<?php
		function without_mod($m, $n)
		{
		   $divides=(int)($m/$n);
		   return $m-$n*$divides;
		}
		echo without_mod(13, 2)."\n";
		echo without_mod(81, 3)."\n";
		?>
	</div>
</body>
</html>