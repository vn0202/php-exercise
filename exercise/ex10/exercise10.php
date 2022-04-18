<?php 
//compare the different of fgets, fgetss và fgetcsv
/* fgets(resource $stream, ?int length = null) 
get line from file pointer and return string reading . Reading end when the length -1 byte
 have read or a new line or the EOF. If the length is not defined, read until EOF
 */
/* 
fgetcsv(resource $stream, 
         ?int length = null,
         string $separator= ",",
         string $enclosure = "\"",
         string $escape = "\\"
) 
get line from file pointer and parse for the csv field
 return a array indexed containing the file reading on successs or false on fail*/
$fd = fopen("text.txt","r");
if($fd !==false)
{
   $line = fgetcsv($fd,null,",","\"","\\");
   while($line!==false)
   {
var_dump($line);

$line = fgetcsv($fd,null,",","\"","\\");


   }
}
fclose($fd);
$fd = fopen("text.txt","r");
if($fd !==false)
{
   $line = fgets($fd);
   while($line!==false)
   {
var_dump($line);

       $line = fgets($fd);

   }
}
