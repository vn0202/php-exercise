<?php

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
 
 compareAnother(32,4,34,2,12,13);
