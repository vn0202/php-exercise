<?php
 // write a program to convert the given string into array 
 function converStringToArray($string)
 {
     $array = explode(",",$string);
     return $array;

    }
    $a = 'Burch Jr, Philip H., The American establishment, Research in political economy 6(1983), 83-156';
    $a = converStringToArray($a);
    print_r($a);
    // output
    // Array
    //  (
    // [0] => Burch Jr
    // [1] =>  Philip H.
    // [2] =>  The American establishment
    // [3] =>  Research in political economy 6(1983)
    // [4] =>  83-156
    //)