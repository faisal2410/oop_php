<?php
// In PHP, you can convert an object to a string using the __toString() magic method. This method is called when you use the echo or print statement on an object, or when you use the strval() function to convert the object to a string explicitly.

// In this example, we define a Person class with name and age properties. We define a __toString() method that returns a string representation of the object.

// We create a new Person object called $person. We then convert the $person object to a string using the strval() function and store the result in the $str variable.

// Finally, we output the $str variable using the echo statement, which will call the __toString() method on the $person object to convert it to a string.

// Overall, using the __toString() method in PHP can be useful when you need to convert an object to a string for output or manipulation purposes.

class Person {
  public $name;
  public $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function __toString() {
    return "Name: {$this->name}, Age: {$this->age}\n";
  }
}

// Create a new Person object
$person = new Person('John', 30);
// print_r($person);

// Convert the Person object to a string
// $str = strval($person);
echo $person;

// Output the string
// echo $str;  // Output: "Name: John, Age: 30"
