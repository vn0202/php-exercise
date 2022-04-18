<?php
// write a program to remove the HTML tags except paragraph and italic
 function stripTagHtmlexceptP($string)
 {
     $result = strip_tags($string);
     //$result = strip_tags($string, ['p','a']);
     return $result;
 }
 $string = '<p style ="color:red"> Nothing is impossible. <i>You</i> are what you think.<br/>
  No matter old you are,<div> it is </div> never too late.</p>
 <p> when you want to people who can help you change,look at the mirror.</p>';
 echo stripTagHtmlexceptP($string);
 // output: 
//  Nothing is impossible. You are what you think.
//  No matter how old you are, it is  never too late.
//  when you want to people who can help you change,look at the mirror.