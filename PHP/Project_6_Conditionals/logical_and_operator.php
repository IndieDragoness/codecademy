<?php
namespace Codecademy;

function clapYourHands($happy, $knowit){
  if($happy && $knowit){
    return "CLAP!\n";
  } else{
    return ":(\n";
  }
}

print_r(clapYourHands(TRUE, TRUE));
print_r(clapYourHands(FALSE, TRUE));