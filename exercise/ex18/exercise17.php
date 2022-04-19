<?php 
  // write a program to check if a leap year or not?
  function isLeapYear(int $year)
  {
      if($year % 4 == 0 && $year % 100 !=0 || $year % 400 ==0)
      {
          echo " $year is a leap year";
      } 
      else
      {
          echo "$year is not leap year";
      }
  }
  isLeapYear(2000);
  //output:  2000 is a leap year.