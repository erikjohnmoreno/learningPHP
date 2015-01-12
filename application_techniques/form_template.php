<?php 
	require("form_function.php");

	$bindings['DESTINATION'] = $_SERVER['PHP_SELF'];

	$name = $_GET['name'];

	
	if (!empty($name)) {
		$template = "thankyou.template";
		$bindings['NAME'] = $name;
	
		
	}
	else {
		$template = "user.template";
		
	}

	echo fillTemplate($template, $bindings);

 ?>