 <?php 
 // write a  program to loop over the json data.
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

loopToJsonData($json);
// output

// John Giang is 15.Study at Ahlcon public school
// Vu Nghia is 18.Study at MLA
// Kevil is 20.Study at MTA