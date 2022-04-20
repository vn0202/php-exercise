<?php
// how to remove the last character in the string by php 
// 
function deleteLastCharacter(string $string)
{
	$len = strlen($string);
	if($len ==0)
	{
		echo " The string is empty!";
		return -1;
	}
	for($i =0; $i < $len-1; $i++)
	{
		$arr[]=$string[$i];
	}
	$new = join("",$arr);
	return $new;
}
echo deleteLastCharacter("vu van nghia");
//output: Vu van nghi
?>