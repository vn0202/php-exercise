<?php
 function converStringToArray($string)
 {
     $array = explode(",",$string);
     return $array;

    }
    $a = 'Burch Jr, Philip H., The American establishment, Research in political economy 6(1983), 83-156';
    $a = converStringToArray($a);
    print_r($a);