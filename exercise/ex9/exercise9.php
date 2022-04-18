<?php 
// write a program to loop through an associate  array using foreach 
 function loopArray( array $arr)
 {
     foreach ($arr as $key => $val)
     {
         echo $key . " is " .$val ."\n";
     }
 }
$array = ["one"=>"I",
"two"=>"II",
"three"=>"III",
"four"=>"IV"];
loopArray($array);
// output:
// one is I
// two is II
// three is III
// four is IV