<?php
//write a program to reverse a string without using predined function
function reverseString (string $string)
{
    $len = strlen($string);
    if( $len ==0)
    {
        echo " The empty string";
        return -1;
    }
while($len >=0)
{
    $array[] = $string[$len-1];
    $len--;
}
$reverseString = implode("",$array);
return $reverseString;
}
echo reverseString("Vu Van Nghia");
// output: "aihgN naV uVa"
?>