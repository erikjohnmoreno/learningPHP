<?php 
	ob_start();
		require 'testing';
		$testing = ob_get_contents();
	ob_end_clean();

	if (strrpos($testing, "Erik")===false) {
		echo "You do not have Erik string, sorry.";	
	}
	else {
		echo "Congratulations, you have Erik string";
	}

 ?>