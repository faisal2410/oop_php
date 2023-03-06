<?php

/*
In object-oriented programming (OOP) in PHP, a constructor is a special method that is automatically called when an object of a class is created. The purpose of the constructor is to initialize the object's properties with default values or with values passed in as arguments.

In PHP, the constructor method has the same name as the class and is defined using the __construct() method. Here's an example of how to define a constructor in PHP:

In this example, we define a class called MyClass with a public property called my_property. We also define a constructor method using the __construct() method, which takes in a parameter called $value.

Inside the constructor method, we set the value of the object's my_property property to the value of the $value parameter using the $this keyword. This means that when an object of the MyClass class is created, the my_property property will be initialized with the value passed in as the constructor argument.

In this example, we create a new object of the MyClass class and pass in the string "Hello World!" as the argument for the constructor. The my_property property of the object is then set to "Hello World!". Finally, we output the value of the my_property property using the echo statement.
*/ 

class MyClass {
    public $my_property;
    public $x;    

    public function __construct( $value,$var ) {
        $this->my_property = $value;
        $this->x=$var;
    }
}

$obj = new MyClass("Ostad",2);
echo $obj->my_property; // Outputs "Hello World!"
echo $obj->x;



/*
In this example, we define a Person class with two properties: $name and $age. We also define a constructor method that takes in two parameters ($name and $age) and sets the object's properties to the values of the parameters using the $this keyword.

We then create two Person objects, $person1 and $person2, passing in different values for the $name and $age parameters. We call the introduce() method on each object to output a string introducing the person's name and age.
*/ 


class Person {
    public $name;
    public $age;

    public function __construct( $name, $age ) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}

$person1 = new Person( "John", 25 );
$person1->introduce(); // Outputs "Hello, my name is John and I am 25 years old."

$person2 = new Person( "Sarah", 30 );
$person2->introduce(); // Outputs "Hello, my name is Sarah and I am 30 years old."
// $person3=new Person("Rabbil Hassan",31);


