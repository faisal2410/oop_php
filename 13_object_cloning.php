<?php
// In PHP, you can clone an object using the clone keyword. This creates a new object that is a copy of the original object.

// Here is an example of how to clone an object in PHP:

/*
In this example, we first define a Person class with a name and age property. We then create a new Person object called $person1. We then clone the $person1 object using the clone keyword, creating a new object called $person2.

We then update the name property of $person2 to 'Jane'. Note that this does not affect the name property of $person1.

Finally, we print the name property of both objects using the echo statement. The output shows that the name property of $person1 is still 'John', while the name property of $person2 is 'Jane'.

*/ 

/*
key features of object cloning in PHP, summarized in numbers:

The clone keyword creates a new object that is a copy of the original object.
Cloning an object in PHP creates a shallow copy, meaning that any properties that are objects themselves will still be references to the same objects in memory.
Cloning an object in PHP is a "magic method" operation, which means that the __clone() method can be defined in the object's class to customize the cloning behavior.
Cloning an object in PHP can be useful for creating a copy of an object that you can modify independently of the original object.
In PHP 5, cloning an object was a pass-by-reference operation, but this was changed in PHP 7 to be a pass-by-value operation for consistency with other languages.
Overall, object cloning in PHP is a powerful feature that can help simplify your code and make it easier to work with objects. By creating a copy of an existing object, you can modify its properties without affecting the original object, which can be useful in many different scenarios.

*/ 

// Example 1

// class Person {
//   public $name;
//   public $age;

//   public function __construct($name, $age) {
//     $this->name = $name;
//     $this->age = $age;
//   }
// }

// // Create a new Person object
// $person1 = new Person('John', 30);

// // Clone the Person object
// $person2 = clone $person1;

// // Update the name of the cloned object
// $person2->name = 'Jane';

// // Print the names of both objects
// echo $person1->name . "\n";  // Output: John
// echo $person2->name . "\n";  // Output: Jane




// Example 2
// 👀👀👀👀👀

// Define a class
// class Person {
//     public $name;
//     public $age;

//     public function __construct( $name, $age ) {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     public function sayHello() {
//         echo "Hello, my name is {$this->name} and I am {$this->age} years old.\n";
//     }
// }

// // Create a new Person object
// $person1 = new Person( 'John', 30 );

// // Clone the Person object
// $person2 = clone $person1;

// // Update the age of the cloned object
// $person2->age = 35;

// // Call the sayHello method on both objects
// echo "Person 1: ";
// $person1->sayHello(); // Output: "Hello, my name is John and I am 30 years old."
// echo "Person 2: ";
// $person2->sayHello(); // Output: "Hello, my name is John and I am 35 years old."






// __clone() Magic Method

// In PHP, the __clone() method is a magic method that is called when an object is cloned using the clone keyword. This method allows you to customize the cloning behavior of your objects.

// Here is an example of how to use the __clone() method in PHP:


class Person {
  public $name;
  public $age;
  public $address;

  public function __construct($name, $age, $address) {
    $this->name = $name;
    $this->age = $age;
    $this->address = $address;
  }

  public function __clone() {
    // Create a new Address object with the same values as the original
    $this->address = clone $this->address;
  }

  public function sayHello() {
    echo "Hello, my name is {$this->name} and I am {$this->age} years old. My address is {$this->address->street}, {$this->address->city}.\n";
  }
}

class Address {
  public $street;
  public $city;

  public function __construct($street, $city) {
    $this->street = $street;
    $this->city = $city;
  }
}

// Create a new Person object
$address = new Address('123 Main St', 'Anytown');
$person1 = new Person('John', 30, $address);

// Clone the Person object
$person2 = clone $person1;

// Update the address of the cloned object
$person2->address->street = '456 Elm St';

// Call the sayHello method on both objects
echo "Person 1: ";
$person1->sayHello();  // Output: "Hello, my name is John and I am 30 years old. My address is 123 Main St, Anytown."
echo "Person 2: ";
$person2->sayHello();  // Output: "Hello, my name is John and I am 30 years old. My address is 456 Elm St, Anytown."


// In this example, we define a Person class with name, age, and address properties. We also define an Address class with street and city properties.

// We create a new Person object called $person1, with an Address object as its address property. We then clone the $person1 object using the clone keyword, creating a new object called $person2.

// We define a __clone() method in the Person class that creates a new Address object with the same values as the original object's address property. This ensures that when the $person1 object is cloned, its address property is not just a reference to the original Address object, but is actually a new object with the same values.

// We update the street property of $person2's address property to "456 Elm St" using the -> operator.

// Finally, we call the sayHello() method on both objects to output their greetings. Note that while the name and age properties are the same for both objects, the address property is different due to the clone operation and the customization we made in the __clone() method.

// Overall, using the __clone() method in PHP can be useful when you need to customize the cloning behavior of your objects.