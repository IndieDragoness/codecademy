<?php
namespace Codecademy;

if ("") {
  echo "this will not print";
} elseif (null) {
  echo "this will not print";
} elseif ([]) {
  echo "this will not print";
} elseif (0) {
  echo "this will not print";
} elseif ("0") {
  echo "this will not print";
} else {
  echo "Finally!";
  echo "\n";
}

function truthyOrFalsy($value){
  if ($value === "") {
    return "False";
  } elseif ($value === null) {
    return "False";
  } elseif ($value === []) {
    return "False";
  } elseif ($value === 0) {
    return "False";
  } elseif ($value === FALSE) {
    return "False";
  } elseif ($value === "0") {
    return "False";
  } else {
    return "True";
  }
}

print_r(truthyOrFalsy(FALSE));
echo "\n";
print_r(truthyOrFalsy(TRUE));