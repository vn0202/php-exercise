<?php 
// write a program to caculate the precentage of total
 function format_number_string($number, $number_char=2)//  set the number digits after point floating
 {
     if($number_char==0)
     {
         return round($number);
     }
           $string = (string)($number);
           $flag = strpos($string,".");
           if($flag ===false)
           {
              $j= $number_char;
              $string.=".";
              while($j >0)
              {
                   $string.="0";
                   $j--;
              }
              return $string;
           }
            else{
                $substr= substr($string,$flag+1);
                if(strlen($substr)< $number_char)
                { 
                    $j = $number_char-strlen($substr);

                    while($j>0)
                    {
                        $string.="0";
                        $j--;
                    }
                    return $string;
                    
                }
                else
                {
                     if($substr[$number_char-1]==9)
                     {
                        return substr($string,0,$flag+$number_char+1);
                         
                     }
                     else{
                         $j = strlen($substr)-1;
                        while($j > ($number_char-1))
                        {
                            if($substr[$j]>=5)
                            {
                                $substr[$j-1]= (int)($substr[$j-1])+1;
                            }
                            $j--;
                        }
                        $subinteger = substr($string,0,$flag+1);
                        $subafter= substr($substr,0,$number_char);
                        return $subinteger.$subafter;
                     }
                }
                
            }
           
           

 }
 function caculatePrecent (...$iterators)
 {
     $total = array_sum($iterators);
     foreach( $iterators as $iterator )
     {
         $result = ($iterator/$total)*100;
         echo " The percentage of $iterator is : ". format_number_string($result,4)."%" ."<br>";

     }
 }
 caculatePrecent(12,21,23,21);
// output: The percentage of 12 is : 15.584%
// The percentage of 21 is : 27.273%

// Warning: Only the first byte will be assigned to the string offset in D:\XAMPP\htdocs\ex1\exercise\ex31\exercise31.php on line 49
// The percentage of 23 is : 29.870%
// The percentage of 21 is : 27.273%

?>
