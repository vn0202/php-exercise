<?php 
// write  program to diffentiate between fgets, fgetss and fgetcsv.


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
 return a array indexed containing the field reading on successs or false on fail*/
 // fgetss(): removed as PHP 8.0.0
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
// output : 
// array(3) {
//    [0]=>
//    string(5) "col 1"
//    [1]=>
//    string(4) "col2"
//    [2]=>
//    string(4) "col3"
//  }
//  array(3) {
//    [0]=>
//    string(33) "this
//  is
//  having
//  multiple
//  lines"
//    [1]=>
//    string(8) "this not"
//    [2]=>
//    string(28) "this also not " I love you"."
//  }
//  array(3) {
//    [0]=>
//    string(13) "normal record"
//    [1]=>
//    string(19) "nothing to see here"
//    [2]=>
//    string(7) "no data"
//  }
//  string(23) ""col 1","col2","col3"
//  "
//  string(7) ""this
//  "
//  string(4) "is
//  "
//  string(8) "having
//  "
//  string(10) "multiple
//  "
//  string(50) "lines","this not","this also not" " I love you".
//  "
//  string(47) ""normal record","nothing to see here","no data""