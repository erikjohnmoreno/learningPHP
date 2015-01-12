<?php
	include_once 'error_display.php'; 
	function divider($a, $b) {
		if ($b == 0) {
			trigger_error('$b cannot b 0', E_USER_ERROR);
		}

		return($a / $b);
	}

	echo divider(200,3);
	echo divider(10, 0);

 ?>