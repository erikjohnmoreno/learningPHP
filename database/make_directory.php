<?php

	
	$question1 = "unang tanong";
	//$folder = "/home/erik/cool/" . strtolower($_POST['email']). "/";
	$folder = "/home/erik/cool/";

	$result = mkdir($folder, 0777,true);

	if ($result == 1) {
	echo "$folder created";
		
	}

	$filename = $folder . "question1.txt";

	$file_handle = fopen($filename, "a+");
	$comments = fread($file_handle, filesize($filename));
	fclose($file_handle);

	fopen($filename, "w+");
	fwrite($file_handle, $question1);
	fclose($file_handle);
	//$result = mkdir("/home/erik/yahay/isapa",0777);
	

	//if (!file_exists($folder)) {
	//	$result = mkdir($folder, 0777);
	//	echo "$folder created";
//	}

?>


