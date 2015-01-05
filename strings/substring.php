<?php
$name = "Fred Flintstone";
$fluff = substr($name, 6,4);
$sound = substr($name, 11);
echo $fluff;
echo "\n";
echo $sound;
echo "\n";

$count = substr_count($name, "Fred");
print("The word Fred occurs {$count} times\n");

$greeting = "good morning citizen";
$farewell = substr_replace($greeting, "bye", 5, 3);
echo "$farewell\n";
$farewell = substr_replace($farewell, "now it's time to say ", 0, 0);
echo "$farewell\n";
?>