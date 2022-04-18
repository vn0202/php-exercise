<?php
// write a program in php to print prime numbers between 1 and 100.
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
            echo $i." ";
        }
    }
}
printPrimeRange1_100();
// output: 2 3 5 7 11 13 17 19 23 29 31 37 41 43 47 53 59 61 67 71 73 79 83 89 97