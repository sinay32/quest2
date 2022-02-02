<?php
// файл
$filename = 'image.png';

// задание максимальной ширины и высоты
$width = 100;
$height = 200;

// тип содержимого
header('Content-Type: image/png');

// получение размеров
list($width_orig, $height_orig) = getimagesize($filename);

// ресэмплирование
$image_p = imagecreatetruecolor($width, $height);
$image = imagecreatefrompng($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);

// вывод
imagepng($image_p, null);

?>