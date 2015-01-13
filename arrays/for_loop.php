<?php
$addresses = array("spam@cyberpromo.net", "abuse@example.com");
$numbers = array(1,2,3,4,6,7,5,4,3,5,7,4,3);
$numbersCount = count($numbers);

for($i = 0; $i<$numbersCount; $i++) {
	$value = $numbers[$i];
	echo "$value\n";

}

?>