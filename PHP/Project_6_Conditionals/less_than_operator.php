<?php
namespace Codecademy;

function chooseCheckoutLane($customer_item_count){
  if ($customer_item_count < 13){
    return "express lane";
  } else {
    return "regular lane";
  }
}

function canIVote($age){
  if ($age > 17){
    return "yes";
  } else {
    return "no";
  }
}

print_r(chooseCheckoutLane(5));
echo "\n";
print_r(chooseCheckoutLane(50));
echo "\n";
print_r(canIVote(18));
echo "\n";
print_r(canIVote(5));