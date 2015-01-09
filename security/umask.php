<?php 
$old = umask(0);
chmod("encoder.php", 0755);
umask($old);

echo $old;

if($old !=umask()){
	die("an error occurred");

}

 ?>