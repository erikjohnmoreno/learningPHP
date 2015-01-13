<?php 


	$ch = curl_init("http://www.example.com/");
	echo $ch;
	$fp = fopen("/var/www/learningPHP/example_homepage.html", "w");
	echo $fp;
	curl_setopt($ch, CURLOPT_FILE, $fp);
	curl_setopt($ch, CURLOPT_HEADER, 0);

	curl_exec($ch);
	curl_close($ch);
	fclose($fp);



	


 ?>