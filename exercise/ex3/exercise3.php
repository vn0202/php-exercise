<?php
function isPrime($num)
{
    if($num<2)
    { 
        return -1;

    }
    else if($num ==2)
    {
        return 1;
    }
    for($i = 2; $i <= sqrt($num); $i++)
    {
        if($num % $i==0)
        {
            return -1;
        }
    }
    return 1;
}
function printPrimeRange1_100()
{
    for($i = 1; $i <=100; $i++)
    {
        if(isPrime($i)===1)
        {
            echo $i."\n";
        }
    }
}
printPrimeRange1_100();