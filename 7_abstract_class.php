<?php 
/*
Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.

An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
*/

// Parent class
abstract class Car {
    public $name;
    public function __construct($name) {
      $this->name = $name;
    }
    abstract public function intro() : string;
  }


// Child classes
class Audi extends Car {
    public $made_in;

    public function intro() : string {
      return "Choose $this->made_in quality! I'm an $this->name!";
    }

    public function myownMethod()
    {
        return "This is my own method";
    }
  }


// Create objects from the child classes
$audi = new Audi("Audi");
$audi->made_in = "German";
print_r($audi);
echo $audi->intro();
echo "<br>";
echo $audi->myownMethod();
