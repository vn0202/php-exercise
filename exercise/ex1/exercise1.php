<?php
// 1. Write a program to compare between things that are not integers. 

 function compareAnother(...$rest)
 {
     $size = count($rest);
     rsort($rest);
     for($i = 0 ; $i < $size-1; $i++)
     {
          $j = $i +1;
           echo $rest[$i]." greater than ";
           while($j < $size-1)
           {
               echo $rest[$j] .",";
               $j++;
           }
           echo $rest[$size-1];
           
           echo "\n";
     }
 }
 $str1 = "00004";
$str2 = "008";
$str3 = "00007-STR";
 
 compareAnother($str1, $str2,$str3);
 // input: $str1= "000004", $str2= "008", $str3= "00007-STR"
 // output:008 greater than 00007-STR,00004
  //        00007-STR greater than 00004

