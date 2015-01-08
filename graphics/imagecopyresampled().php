<?php
$source = imagecreatefromjpeg("php.jpeg");

$width = imagesx($source);
$height = imagesy($source);
$x = $width/10;
$y = $height/3;

$destination = imagecreatetruecolor($x, $y);
imagecopyresampled($destination, $source, 0, 0, 0, 0, $x, $y, $width, $height);

header("Content-Type: image/png");
imagepng($destination);
?>