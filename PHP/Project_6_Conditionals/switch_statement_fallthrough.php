<?php
namespace Codecademy;

function returnSeason($month){
  switch ($month) {
    case "January":
    case "December":
    case "February":
      return "winter";
      break;
    case "March":
    case "April":
    case "May":
      return "spring";
      break;
    case "June":
    case "July":
    case "August":
      return "summer";
      break;
    case "September":
    case "October":
    case "November":
      return "fall";
      break;
  }
}
