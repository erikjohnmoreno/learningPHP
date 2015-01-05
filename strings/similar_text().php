<?php
$string1 = "Rasmus Lerdorf";
$string2 = "rasmus lehrdorf";
$common = similar_text($string1, $string2, $percent);
printf("They have %d chars in common (%.2f%%).", $common, $percent);

?>