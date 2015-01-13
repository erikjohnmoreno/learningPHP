
<?php 

	//$dtz = new DateTimeZone('America/Halifax');
	//$dt = new DateTime("2012-06-16 16:42:33", $dtz);

	//echo "date: " . $dt->format("Y-m-d h:i:s");
	


	$dtz = new DateTimeZone('Asia/Manila');
	$past = new DateTime("2015-01-11 16:42:33", $dtz);


	$current = new DateTime("now", $dtz);

	$diff = $past->diff($current);

	$pastString = $past->format("Y-m-d");
	$currentString = $current->format("Y-m-d");
	$diffString = $diff->format("%yy %mm, %dd");

	echo "Difference between {$pastString} and {$currentString} is {$diffString}";
	
 ?>
