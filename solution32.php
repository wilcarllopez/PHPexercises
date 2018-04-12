<!DOCTYPE html>
<html>
<head>
	<title>Solution #32</title>
</head>
<body>
	<div class="container">
		<?php
		function armstrong_number($num) {
		  $sl = strlen($num);
		  $sum = 0;
		  $num = (string)$num;
		  for ($i = 0; $i < $sl; $i++) {
		    $sum = $sum + pow((string)$num{$i},$sl);
		  }
		  if ((string)$sum == (string)$num) {
		    return "True";
		  } else {
		    return "False";
		  }
		}
		echo "Is 153 Armstrong number? ".armstrong_number(153);
		echo "\nIs 21 Armstrong number? ".armstrong_number(21);
		echo "\nIs 4587 Armstrong number? ".armstrong_number(4587);"\n";
		?>
	</div>
</body>
</html>