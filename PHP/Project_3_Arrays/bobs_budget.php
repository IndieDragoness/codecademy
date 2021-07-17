<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:
$netIncome = 0;
$netIncome += $incomeSegments[0][0] * $incomeSegments[0][1];

$netIncome += $incomeSegments[1][0] * $incomeSegments[1][1];

$netIncome += $incomeSegments[2][0] * $incomeSegments[2][1];

print_r($netIncome);
echo "\n";

$annualIncome = $netIncome - $socialSecurity;
print_r($annualIncome);
echo "\n";

$annualIncome -= $annualExpenses["vacations"] + $annualExpenses["carRepairs"];
print_r($annualIncome);
echo "\n";

$monthlyIncome = $annualIncome / 12;
print_r($monthlyIncome);
echo "\n";

$monthlyIncome -= $monthlyExpenses["rent"] + $monthlyExpenses["utilities"] + $monthlyExpenses["healthInsurance"];
print_r($monthlyIncome);
echo "\n";

$weeklyIncome = $monthlyIncome / 4.33;
print_r($weeklyIncome);
echo "\n";

$weeklyExpenses = ["gas" => 25, "food" => 90, "entertainment" => 47];
$weeklyIncome -= $weeklyExpenses["gas"] + $weeklyExpenses["food"] + $weeklyExpenses["entertainment"];
print_r($weeklyIncome);
echo "\n";

$yearlySavings = $weeklyIncome * 52;
print_r($yearlySavings);