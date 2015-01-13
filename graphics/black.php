<?php
$image = imagecreate(500, 500);

$white = imagecolorallocate($image, 0xAA, 0xBA, 0xAA);
$black = imagecolorallocate($image, 0xAA, 0xAA, 0xAA);
imagefilledrectangle($image, 100, 100, 100, 100, $white);

header("Content-Type: image/png");
imagepng($image);


?>

