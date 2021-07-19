<?php

for($i = 10; $i >= 0; $i--){
  if($i >= 3){
    echo "${i}\n";
  } elseif($i === 2){
    echo "Ready!\n";
  } elseif($i === 1){
    echo "Set!\n";
  } elseif($i === 0){
    echo "Go!\n";
  }
}