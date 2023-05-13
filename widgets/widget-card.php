<?php
    header("Content-Type: image/png");

    $im = imagecreate(256, 128) or die("Cannot Initialize new GD image stream");

    $background_color = imagecolorallocate($im, 0, 0, 0);
    $text_color = imagecolorallocate($im, 0, 0, 255);

    imagestring($im, 1, 5, 5,  "A Simple Text String", $text_color);
    imagepng($im);
    imagedestroy($im);
?>