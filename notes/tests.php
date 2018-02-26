<?php

function crop($path, $width, $height)
{
    $dimensions = getimagesize($path);
    if ($dimensions[0] < $width) {
        $x = 0;
        $width = $dimensions[0];
    } else {
        $x = ($dimensions[0] - $width) / 2;
    }
    if ($dimensions[1] < $height) {
        $y = 0;
        $height = $dimensions[1];
    } else {
        $y = ($dimensions[1] - $height) / 2;
    }

    $resource = imagecrop(imagecreatefromjpeg($path), array(
        'x' => $x,
        'y' => $y,
        'width' => $width,
        'height' => $height
    ));
    imagejpeg($resource, $path);
}

crop('C:/Users/nabil/OpenClassrooms/notes/10.jpg', 640, 360);
