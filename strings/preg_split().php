<?php
$ops = preg_split('{[+*/-]}', '3+5*9/2', -1, PREG_SPLIT_DELIM_CAPTURE);
print_r($ops);



?>