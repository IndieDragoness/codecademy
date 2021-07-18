<?php
namespace Codecademy;

function agreeOrDisagree($string_1, $string_2){
  if ($string_1 === $string_2){
    return "You agree!";
  }
  return "You disagree!";
}

print_r(agreeOrDisagree("Agree", "Agree"));
echo "\n";
print_r(agreeOrDisagree("Agree", "Disagree"));
echo "\n";

function checkRenewalMonth($renewal_month){
  $current_month = date("F");

  if ($renewal_month !== $current_month){
    return "Welcome!";
  }
  return "Time to renew";
}

print_r(checkRenewalMonth("July"));
echo "\n";
print_r(checkRenewalMonth("December"));