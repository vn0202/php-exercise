<?php
// write a program from 10 to 1 using recusion function 
function recursion($n)
{
    if($n==0)
    {
        return;
    }
    else{
        echo  $n." ";
    return recursion($n-1);

    }
    
}
recursion(10);
// output: 10 9 8 7 6 5 4 3 2 1