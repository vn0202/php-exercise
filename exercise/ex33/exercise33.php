<?php
// write a program to  caculate the bill electric
// Let's  assume we use three level of comsuming is : less than 30, greater than 30 and greater than 100. 
function caculateBill($number_comsumed,$pricelv1,$pricelv2,$pricelv3)
{

    if($number_comsumed < 30)
    {
        $cost = $number_comsumed * $pricelv1;
    }
    else if($number_comsumed >= 30 && $number_comsumed <100)
    {
             $cost = 30 *$pricelv1 + ($number_comsumed -30)*$pricelv2;
    }
    else{
        $cost = 30 * $pricelv1 + 69 *$pricelv2 + ($number_comsumed-100)* $pricelv3;
    }
    return $cost;
}
 $number_comsumed = 150;
  $pricelv1 =1500;
  $pricelv2 = 2000;
   $pricelv3 = 3000;
   echo " The cost of the number comsuming $number_comsumed is ". caculateBill($number_comsumed,$pricelv1,$pricelv2,$pricelv3)." vnd";
// output: The cost of the number comsuming 150 is 333000 vnd
?>