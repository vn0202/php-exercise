<?php 
 // write a program to find fibonacci series
  function fibo($n)
  {
     $f= array();
     $f[0]=0;
     $f[1]=1;
     for($i = 2; $i <= $n ; $i++)
     {
         $f[$i] = $f[$i-1] + $f[$i-2];
     }
    foreach ($f as $val )
    {
        echo $val ." ";
    }
  }
  fibo(8);
?>