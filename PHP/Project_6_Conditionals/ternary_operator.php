<?php
namespace Codecademy;

function chooseCheckoutLane($customer_item_count){
  if ($customer_item_count < 13){
    return "express lane";
  } else{
    return "regular lane";
  }
}

function ternaryCheckout($customer_item_count){
  return $customer_item_count < 13? "express lane" : "regular lane";
}

print_r(ternaryCheckout(5));
echo "\n";
print_r(ternaryCheckout(55));
echo "\n";

function canIVote($age){
  if ($age > 17){
    return "yes";
  } else {
    return "no";
  }
}

function ternaryVote($age){
  return $age < 18? "no" : "yes";
}

print_r(ternaryVote(16));
echo "\n";
print_r(ternaryVote(18));