<?php

$subjects = array("physics", "chem", "math", "bio","cs", "drama", "classics");
$removed = array_spliCE($subjects, 2, 3);
print_r($subjects);
//to insert

$new = array("law", "business", "IS");
array_splice($subjects, 2, 0, $new);
print_r($subjects);
?>