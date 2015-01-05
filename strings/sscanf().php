<?php
$string = "Fred\tFlintstone (35)";
$a = sscanf($string, "%s\t%s (%d)");
print_r($a);

$n = sscanf($string, "%s\t%s (%d)", $first, $last, $age);
echo "Matched {$n} fields {$first} {$last} is {$age} years old";

?>