<?php
// write a program to create a image from text and save it.
function createImageFromText( $string,int $width, int $height)
{
    $img = imagecreate($width, $height);
    //create background:
     $bg_color= imagecolorallocate($img,255,255,255);
     // create color text:
     $text_color= imagecolorallocate($img,123,2,21);
     // create image
     imagestring($img,2,0,0,$string,$text_color);
     //save image to image.png.
header("Content-Type: image/png");

     imagepng($img,"image.png");
     //destroy image
    //  imagedestroy($img);
}
createImageFromText("Vu Van Nghia", 200,20);
?>