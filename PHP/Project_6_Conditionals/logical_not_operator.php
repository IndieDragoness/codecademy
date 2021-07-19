<?php
namespace Codecademy;

function duckDuckGoose($is_goose){
  if(!$is_goose){
    return "duck\n";
  } else{
    return "goose!\n";
  }
}

print_r(duckDuckGoose(FALSE));
print_r(duckDuckGoose(FALSE));
print_r(duckDuckGoose(TRUE));
