<?php 
	$clean = array();

	$length = mb_strlen($_POST['username']);

	if (ctype_alnum($_POST['username']) && ($length>0) && ($length <= 32)) {
		$clean['pangalan'] = $_POST['username'];
		print_r($clean);
	}
	else {
		echo "ERROR";
	}
 ?>