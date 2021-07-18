<?php
namespace Codecademy;

$learner_one = ["is_correct"=>FALSE, "box"=>["shape"=>"none", "color"=>"none"]];
   
$learner_two = ["is_correct"=>TRUE, "box"=>["shape"=>"none", "color"=>"none"]];
  
  
function markAnswer($bool_val, &$assoc_array){
  if($bool_val){
    $assoc_array["shape"] = "checkmark";
    $assoc_array["color"] = "green";
  };
  if(!$bool_val){
    $assoc_array["shape"] = "x";
    $assoc_array["color"] = "red";
  };
};

markAnswer($learner_one["is_correct"], $learner_one["box"]);
markAnswer($learner_two["is_correct"], $learner_two["box"]);
print_r($learner_one["box"]);
echo "\n";
print_r($learner_two["box"]);
