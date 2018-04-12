<!DOCTYPE html>
<html>
<head>
	<title>Solution #38</title>
</head>
<body>
	<div class="container">
		<?php
		function valid_email($email)
		{
		  $result = trim($email);
		  if (filter_var($result, FILTER_VALIDATE_EMAIL)) 
		  {
		    return "true";
		  } 
		  else 
		  {
		    echo "false";
		  }
		}
		echo valid_email("abc@example.com")."\n";
		echo valid_email("abc#example.com")."\n";
		?>
	</div>
</body>
</html>