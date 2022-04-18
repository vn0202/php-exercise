<?php

// write a program to read from  directory.
 function readDirectory($directory)
 {
     if(is_dir($directory))
     {
         $d = opendir($directory);
         while(($entry= readdir($d))!==false)
         {
             echo "file name : ". $entry ."<br/>";
         }
         closedir();
     }
     return -1;
 }
 $dir= getcwd();
 echo $dir ."<br>";
 readDirectory($dir);
 echo "<br> <br>";
//output: 
// file name : .
// file name : ..
// file name : exercise14.php
 ?>
