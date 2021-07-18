<?php
namespace Codecademy;

function whatRelation($percent_dna){
  if ($percent_dna === 100){
    echo "identical twins";
  } elseif($percent_dna > 34){
    echo "parent and child or full siblings";
  } elseif($percent_dna > 13){
    echo "grandparent and grandchild, aunt/uncle and niece/nephew, or half siblings";
  } elseif($percent_dna > 5){
    echo "first cousins";
  } elseif($percent_dna > 2){
    echo "second cousins";
  } elseif($percent_dna > 0){
    echo "third cousins";
  } elseif($percent_dna === 0){
    echo "not genetically related";
  }
}

print_r(whatRelation(100));
echo "\n";
print_r(whatRelation(55));
echo "\n";
print_r(whatRelation(20));
echo "\n";
print_r(whatRelation(1));