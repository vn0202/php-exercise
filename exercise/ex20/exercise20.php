<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//gitInclude the library in your project
require('../../vendor/autoload.php');

// Instantiate the library class
$barcode = new \Com\Tecnick\Barcode\Barcode();
$dir = "qr_code/";

// Directory to store barcode
if (! is_dir($dir)) {
    mkdir($dir, 0777, true);
}
// data string to encode
$source = " Vũ Văn Nghĩa ";

// ser properties

$qrcodeObj = $barcode->getBarcodeObj('QRCODE,H', $source, -40, -40, 'black', array(
    -2,
    -2,
    -2,
    -2
))->setBackgroundColor('#f5f5f5');

// generate qrcode
$imageData = $qrcodeObj->getPngData();
$timestamp = time();

//store in the directory
file_put_contents($dir . $timestamp . '.png', $imageData);
 //Output image to the browser
  $imgsrc= $dir.$timestamp.".png";
  echo "<img src= $imgsrc width ='200px' height = '200px'";

  
?>
</body>
</html>
