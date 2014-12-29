<?php
$bigLongVariableName = "PHP";
$short =& $bigLongVariableName; //alias
$bigLongVariableName .= " rocks!";
print "\$short is $short \n";
print "Long is $bigLongVariableName \n";

$short = "Programming $short";
print "\$short is $short \n";
print "Long is $bigLongVariableName \n";

unset($short);		// unsetting only the variable $short but not the 
print $bigLongVariableName;// bigLongVariableName
print $short;
?>
