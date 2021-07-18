<?php
namespace Codecademy;

function airQuality($color){
  switch ($color){
    case "green":
      echo "good";
      break;
    case "yellow":
      echo "moderate";
      break;
    case "orange":
      echo "unhealthy for sensitive groups";
      break;
    case "red":
      echo "unhealthy";
      break;
    case "purple":
      echo "very unhealthy";
      break;
    case "maroon":
      echo "hazardous";
      break;
    default:
      echo "invalid color"; 
  }
}

print_r(airQuality("red"));
echo "\n";
print_r(airQuality("maroon"));
echo "\n";
print_r(airQuality("green"));
echo "\n";