<?php 
	$bookId = 'ProgrammingPHP';
	$url = "http://www.example.com";

	$data = json_encode(array('edition' => 3));

	$requestData = http_build_query($data, '','&');

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);

	$fh = fopen("php://memory", 'rw');

	fwrite($fh, $requestData);
	rewind($fh);
	var_dump(stream_get_contents($fh));

	curl_setopt($ch, CURLOPT_INFILE, $fh);
	curl_setopt($ch, CURLOPT_INFILESIZE, mb_strlen($requestData));
	curl_setopt($ch, CURLOPT_PUT, true);

	$response = curl_exec($ch);
	$resultInfo = curl_getinfo($ch);

	curl_close($ch);
	fclose($fh);
 ?>