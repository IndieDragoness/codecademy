<?php

// Defining the class
class Beverage {
  public $temperature, $color, $opacity;
  private $this_is_private;

  // Define a constructor, similar to __init__() in python; lets you set params on instantiation
  function __construct($temperature, $color) {
    $this->temperature = $temperature;
    $this->color = $color;
  }

  // Define a method within the class
  function getInfo() {
    return "This beverage is $this->temperature and $this->color."; // $this is a self-reference to the object
  }
}

// Extending the class (inheritance, Milk is a child of Beverage)
class Milk extends Beverage {
  function __construct() {
    $this->temperature = "cold";
  }
}

// Instantiating the class
$tea = new Beverage();

// Assigning a value to a class variable
$tea->temperature = "hot";

echo $tea->temperature;

$soda = new Beverage();
$soda->color = "black";
$soda->temperature = "cold";

// Call $soda's method getInfo()
echo $soda->getInfo();

// Instantiate using constructor to set class variables
$black_tea = new Beverage("cold", "black");

echo $black_tea->getInfo();