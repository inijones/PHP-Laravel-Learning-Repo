<?php
class Beverage {
  public $temperature;
  
  function getInfo() {
    return "This beverage is $this->temperature.";
  }
}

class Milk extends Beverage {
  function __construct() {
    $this->temperature = "cold";
  }

  function getInfo() {
    return parent::getInfo() . " I like my milk this way.";
  }
  
}

$milk = new Milk();
echo $milk->getInfo();

/*
Now you have the knowledge to create your own 
Preview: Docs A class is a definition of the properties and methods of a 
particular type of object. When a class is used to define a new object, 
the resultant object is referred to as an instance of that class. 
In a PHP class definition, properties are variables, methods are 
functions. php <?php class Car { // Properties

Classes
 and objects in PHP using OOP! Take some time to review 
 the concepts before moving on:

Classes are defined using the class keyword.
Preview: Docs Functions are blocks of code that can be repeatedly called by other code when it executes. A function is not called when it is defined, but only when another part of the code executes the function. The syntax for a user defined function in PHP is similar to other languages: php function functionName(parameters) { code to execute; }
Functions
 defined within a class become methods and 
Preview: Docs Loading link description
variables
 within the class are considered properties.
There are three levels of visibility for class members:
public (default) - accessible from outside of the class
protected - only accessible within the class or its descendants
private - only accessible within the defining class
Members can be defined to be static.
Static members are accessed using the Scope Resolution Operator (::).
Classes are instantiated into objects using the new keyword.
Members of an object are accessed using the Object Operator (->).
*/