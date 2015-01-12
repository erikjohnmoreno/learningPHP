<?php 
	require'error_display.php';
	function log_roller($error, $errorString)
	{
		$file = '/var/log/php_errors.log';

		if (filesize($file) > 1024) {
			rename($file, $file . (string) time());
			clearstatcache();
		}

		error_log($errorString, 3, $file);
	}


	set_error_handler('log_roller');

	$value = 4/0;
	$value = 5/0;
	$value = 6/0;
	$value = 4/0;
	$value = 4/0;
	$value = 4/0;
	$value = 4/0;
	$value = 4/0;
	$value = 4/0;
	$value = 4/0;
	$value = 4/0;
	$value = 4/0;
	$value = 4/0;
	$value = 4/0;
	for ($i=0; $i < 5000; $i++) {

		trigger_error(time() . ": Just an error, ma'am. \n");
	}

	restore_error_handler();

	
 ?>