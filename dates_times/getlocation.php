<?php 
	$dtzString = "Europe/Rome";
	$dtz = new DateTimeZone($dtzString);
	
	echo "Server's Time Zone: $dtzString<br/>";

	foreach ($dtz->getLocation() as $key => $value) {
		echo "{$key} {$value}<br/>";
	}

 ?>