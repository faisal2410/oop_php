<?php 

/*
Interfaces allow you to specify what methods a class should implement.

Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".


interface InterfaceName {
  public function someMethod1();
  public function someMethod2($name, $color);
  public function someMethod3() : string;
}

Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

Interfaces cannot have properties, while abstract classes can
All interface methods must be public, while abstract class methods is public or protected
All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
Classes can implement an interface while inheriting from another class at the same time

*/

// Interface defination


// Example 1

// interface Cars {
//     public function intro();
// }


// // Class definations
// class BMW implements Cars{
//     public $secret_engine;

//     public function __construct($engine)
//     {
//         $this->secret_engine = $engine;
//     }

//     public function intro()
//     {
//         echo "This is BMW car with engine: $this->secret_engine";   
//     }
// }

// class Toyota implements Cars{
//     public $secret_engine;

//     public function __construct($engine)
//     {
//         $this->secret_engine = $engine;
//     }

//     public function intro()
//     {
//         echo "This is Toyota car with engine: $this->secret_engine";   
//     }
// }


// //Create Objects
// $bmw = new BMW("BM7345iu&6");
// $toyota = new Toyota("TY89345au&6");

// print_r($bmw);
// echo PHP_EOL;
// print_r($toyota);
// echo PHP_EOL;


// $bmw->intro();
// echo PHP_EOL;
// $toyota->intro();



// Example 2

// interface Animal {
//     public function makeSound();
// }

// class Dog implements Animal {
//     public function makeSound() {
//         echo "Woof!\n";
//     }
// }

// class Cat implements Animal {
//     public function makeSound() {
//         echo "Meow!\n";
//     }
// }

// // Create an array of animals
// $animals = [
//     new Dog(),
//     new Cat(),
// ];

// // Loop through the animals and make them all make a sound
// foreach ( $animals as $animal ) {
//     $animal->makeSound();
// }
