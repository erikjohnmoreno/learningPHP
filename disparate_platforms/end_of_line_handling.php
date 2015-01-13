<?php 
	if (PHP_OS == "Linux") {
		define('EOL', "<br />");
	}

	function ln($out)
	{
		echo $out . EOL;
	}

	ln("this line will have the server platform's EOL character");
	echo "yeahyeah";
 ?>