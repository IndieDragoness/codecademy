<?php
namespace Codecademy;

function both($param_1, $param_2){
  if ($param_1){
    if($param_2){
      return "both\n";
    } else{
      return "not both\n";
    }
  }
  return "not both\n";
}

print_r(both(TRUE, TRUE));
print_r(both(TRUE, FALSE));