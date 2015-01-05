<?php
//foreach construct

$addresses = array("spam@cyberpromo.net", "abuse@example.com");

foreach ($addresses as $value) {
	echo "Processing $value\n";
}

$person = array('name' => "Fred",'age' => 35, 'wife' => "Wilma" );

foreach ($person as $key => $value) {
	echo "Fred's $key is $value \n";
}
?>