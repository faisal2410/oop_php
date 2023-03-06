<?php
// Scope Resolution Operator ::
// In object-oriented programming in PHP, the double colon :: symbol is used to access static methods, properties, and constants of a class. It's also used to call a parent class's constructor method from within a subclass.

// Here are some examples of using :: in PHP:

// 1. Accessing a static property:

// class MyClass {
//   public static $my_property = "Hello World!";
// }

// echo MyClass::$my_property; // Outputs "Hello World!"

//2. Calling a static method:


// class MyClass {
//   public static function my_method() {
//     echo "Hello World!";
//   }
// }


// MyClass::my_method(); // Outputs "Hello World!"


//3. Accessing a constant:

class MyClass {
  const MY_CONSTANT = "Hello World!";
}

echo MyClass::MY_CONSTANT; // Outputs "Hello World!"


//4. Calling a parent class's constructor method from within a subclass:

class ParentClass {
  public function __construct() {
    echo "Parent constructor called.";
  }
}

class ChildClass extends ParentClass {
  public function __construct() {
    parent::__construct(); // Calls parent class's constructor
    echo "Child constructor called.";
  }
}

$child = new ChildClass(); // Outputs "Parent constructor called. Child constructor called."
// Note that the double colon :: symbol can only be used with static methods, properties, and constants. To access non-static methods and properties of an object, the arrow -> symbol is used instead.



