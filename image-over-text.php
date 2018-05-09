<?php
    header("Content-type: image/jpeg");
    $filename = $_GET['filename'];
    $text = $_GET['text'];
    $imgPath = 'C:\xampp\htdocs\ram\upload\upload' . '\\'. $filename;
    $image = imagecreatefromjpeg($imgPath);
    $color = imagecolorallocate($image, 255, 0, 0);
    $string = $text;
    $fontSize = 20;
    $a = getimagesize($imgPath);
    $x = $a[0]/2;
    $y = $a[1]/2;
    imagestring($image, $fontSize, $x, $y, $string, $color);
    imagejpeg($image);
?>
