<?php
namespace Codecademy;

function willWeEat($meal_type, $hungry){
  if($hungry || $meal_type === "dessert"){
    return "Yum. Thanks!\n";
  } else{
    return "No thanks. We're not hungry.\n";
  }
}

print_r(willWeEat("dinner", FALSE));
print_r(willWeEat("dinner", TRUE));
print_r(willWeEat("dessert", FALSE));