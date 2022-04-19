<?php 
//write a program to get data from XML file in php
libxml_use_internal_errors(true);

   function getDataFromXMLFile( $file)
   {
       $xml = simplexml_load_file($file) or die ("Error: can open this file");

foreach( $xml->children() as $key)
{
    echo $key->title .", ";
    echo $key->author .", ";
    echo $key->year.", ";
}       

   }
   getDataFromXMLFile("test.xml");
   // output: 
   /**Everyday Italian, Giada De Laurentiis, 2005, Harry Potter, J K. Rowling, 2005
    * , XQuery Kick Start, James McGovern, 2003, Learning XML, Erik T. Ray, 2003, */