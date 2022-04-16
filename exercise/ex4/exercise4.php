<?php
function recursion($n)
{
    if($n==0)
    {
        return;
    }
    else{
        echo  $n."\n";
    return recursion($n-1);

    }
    
}
recursion(10);