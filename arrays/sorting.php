<?php
$logins = array(
	'njt' => 415,
	'kt' => 492, 
	'rl' => 652,
	'jht' => 441,
	'jj' => 441,
	'wt' => 402,
	'hut' => 309
	);

	arsort($logins);
	$numPrinted = 0;

	echo "<table>\n";

	foreach ($logins as $user => $time) {
		echo("<tr><td>{$user}</td><td>{$time}</td></tr>\n");
	
		if (++$numPrinted == 3) {
		break;

		}
	}	

	echo "</table>";
?>