<?php 
function loopToJsonData($jsonData)
{
   $json= json_decode($jsonData);
    for($i = 0 ;$i < count($json); $i++)
    {
        echo $json[$i]->name." is ".$json[$i]->age.".Study at ".$json[$i]->school."\n";
    }
}
$json ='[
    {"name": "John Giang",
      "age":15,
      "school": "Ahlcon public school"
      },
      {
          "name": "Vu Nghia",
          "age":18,
          "school": "MLA"
          
      },
      {
          "name": "Kevil",
          "age":20,
          "school": "MTA"
      }

]';
// $json= '{"foo":123}';
loopToJsonData($json);
// var_dump(json_decode($json));