<!DOCTYPE html>
<html>
<head>
	<title>Solution #43</title>
</head>
<body>
	<div class="container">
		<?php
		function multiply_two_lists($x, $y)
		  {
		    $a = explode(' ',trim($x));
		    $b = explode(' ',trim($y));
		    foreach($a as $key=>$value){
		        $output[$key] = $a[$key]*$b[$key];
		    }
		    return implode(' ',$output);
		}
		echo multiply_two_lists(("10 12 3"), ("1 3 3"))."\n";
		?>
	</div>
</body>
</html>