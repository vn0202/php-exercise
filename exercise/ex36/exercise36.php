<?php
  $obj = new stdClass();
  $obj->name = "Vu Van Nghia";
  $obj->age = "18";
  $obj->job= "freelanceer";
  function convert_obj_to_array($obj)
  {
      return get_object_vars($obj);
  }
  var_dump(convert_obj_to_array($obj));
  //output: 
// array(3) { ["name"]=> string(12) "Vu Van Nghia" ["age"]=> string(2) "18" ["job"]=> string(11) "freelanceer" }
  ?>