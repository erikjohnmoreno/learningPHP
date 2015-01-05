<?php
//echo preg_quote('$5.00 (five bucks)');

$toFind = '/usr/local/etc/rsync.conf';
$re = preg_quote($toFind, '/');
			
echo "$re\n";

?>