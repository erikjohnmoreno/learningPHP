<?php

function updateCounter()
{
	static $counter = 0;
	$counter++;
	echo "Static counter is no {$counter}\n";
}

	$counter = 10;
	updateCounter();
	updateCounter();
	echo "Global counter is {$counter}\n";

?>
