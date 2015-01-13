<?php 
		
		$operatingSystem = php_uname();
	if ($operatingSystem == "WIN32") {
		echo "You are on a Windows System";
	}
	else {
		echo "You are NOT on a Windows System\n";
		echo "You are in $operatingSystem Platform ";
		
	}
 ?>