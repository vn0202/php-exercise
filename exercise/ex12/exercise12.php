<?php 
// There are two deal to buy item . The quanities and prices are given below. Write a program to 
//choose th better deal.
 $quanities1 = 70;
 $quanities2= 100;
 $price1 = 35;
 $price2 = 30;
 function findBestDeal($quan1, $quan2,$price1, $price2)
 {
     $flag = ($quan1 * $price1) <=> ($quan2 * $price2);
     if($flag===1)
     {
         echo "Deal 1 is better";
     }
     elseif($flag ==0)
     {
         echo " Two deals is same other";
     }
     else{
         echo " Deal 2 is better";
     }
 }
findBestDeal($quanities1, $quanities2, $price1, $price2);
//output:
//Deal 2 is better