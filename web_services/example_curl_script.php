<?php 
	$curl = curl_init();
	//$fp = fopen("/var/www/learningPHP/web_services/somefile.txt", "w");
	curl_setopt($curl, CURLOPT_URL, "http://localhost/learningPHP/web_services/posttest.php");
	curl_setopt($curl, CURLOPT_POST, 1);
	curl_setopt($curl, CURLOPT_POSTFIELDS, "Hello=World&Foo=Bar&Baz=Wombat");


	curl_exec($curl);
	curl_close($curl);

 ?>