<?php
/*
In object-oriented programming, a class is a blueprint for creating objects that share similar characteristics and behaviors. A class defines the properties and methods that an object can have. You can think of a class as a template or a blueprint that you can use to create multiple objects.

In the code example above, we defined a class called Person that has two properties: name and age, and one method called sayHello().

Object : an object is an instance of a class that represents a specific entity or concept in your application.

To create an object of the Person class, we used the new keyword and assigned it to a variable called $person. We then set the properties of the Person object and called the sayHello() method using the arrow operator ->. The output of the sayHello() method is "Hello, my name is John and I am 30 years old.".

*/ 



// Define a class called Person
class Person {

    // Properties of the Person class
    public $name;
    public $age;

    // Method of the Person class
    public function sayHello() {
        echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
        echo "Salam";
        echo "Adab";
    }
}


// Create an object of the Person class
$person = new Person();

// Set the properties of the Person object
$person->name = "John";
$person->age = 30;

// Call the sayHello() method of the Person object
$person->sayHello();


