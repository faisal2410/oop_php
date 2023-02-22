<?php
/*
In PHP, a class is a template for creating objects. A class defines properties and methods that can be used to create objects with similar characteristics and behaviors. 

In the above example, we have defined a class named "Car" with properties like "make", "model", "year" and methods like "start" and "stop". We have then created an instance of the Car class using the new keyword and assigned it to the $myCar variable.

After creating the instance, we have set the properties of the Car object using the -> operator. Finally, we have called the start and stop methods of the Car object using the -> operator.

A class in PHP is a blueprint for creating objects. It defines the properties and methods that an object of that class will have. The properties of a class are the characteristics or attributes of an object, while the methods are the behaviors or actions that an object can perform.

*/ 

// Define a class named "Car"
class Car {
    // Define properties
    public $make;
    public $model;
    public $year;

    // Define methods
    public function start() {
        echo "The car is starting.";
    }

    public function stop() {
        echo "The car is stopping.";
    }
}

// Create an instance of the Car class
$myCar = new Car();

// Set the properties of the Car object
$myCar->make = "Honda";
$myCar->model = "Civic";
$myCar->year = 2019;

// Call the start method of the Car object
$myCar->start();
echo PHP_EOL;

// Call the stop method of the Car object
$myCar->stop();


// Example 2

/*
In this example, we have defined a class called "Book" with private properties like "title", "author" and "price". We have also defined a constructor method that takes in parameters and initializes the properties of the Book object.

We have also defined several public methods like "getTitle", "getAuthor", "getPrice", "setPrice" and "displayInfo". These methods allow us to get and set the values of the Book object's properties and also display the information about the Book object.

In this example, we have created a new Book object with the title "The Alchemist", author "Paulo Coelho" and price 12.99. We have then called the displayInfo method to display the information about the Book object.

We have then changed the price of the Book object using the setPrice method and called the displayInfo method again to display the updated information about the Book object.

This is just a simple example of how classes work in PHP. With classes, you can create complex objects that can have a wide range of properties and methods, making your code more organized, maintainable and reusable.
*/ 
class Book {
    private $title;
    private $author;
    private $price;

    public function __construct( $title, $author, $price ) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice( $price ) {
        $this->price = $price;
    }

    public function displayInfo() {
        echo "Title: " . $this->title . "<br>";
        echo "Author: " . $this->author . "<br>";
        echo "Price: $" . $this->price . "<br>";
    }
}


// Create a new Book object
$book = new Book( "The Alchemist", "Paulo Coelho", 12.99 );

// Call the displayInfo method to display the Book object's information
$book->displayInfo();

// Change the price of the Book object using the setPrice method
$book->setPrice( 9.99 );

// Call the displayInfo method again to display the updated information about the Book object
$book->displayInfo();


// Example 3

/*
In this example, we have defined a class called "Circle" with a private property called "radius". We have also defined a constructor method that takes in a parameter and initializes the "radius" property of the Circle object.

We have also defined several public methods like "getRadius", "setRadius", "getArea" and "getCircumference". These methods allow us to get and set the value of the "radius" property of the Circle object and also calculate the area and circumference of the Circle object.

In this example, we have created a new Circle object with a radius of 5. We have then used the getRadius, getArea and getCircumference methods to get the radius, area and circumference of the Circle object.

We have then used the setRadius method to set the radius of the Circle object to 7. We have then used the getRadius, getArea and getCircumference methods again to get the new radius, area and circumference of the Circle object.
*/ 


class Circle {
    private $radius;

    public function __construct( $radius ) {
        $this->radius = $radius;
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius( $radius ) {
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * pow( $this->radius, 2 );
    }

    public function getCircumference() {
        return 2 * pi() * $this->radius;
    }
}


// Create a new Circle object with a radius of 5
$circle = new Circle( 5 );

// Get the radius of the Circle object
$radius = $circle->getRadius();
echo "Radius: " . $radius . "<br>";

// Get the area of the Circle object
$area = $circle->getArea();
echo "Area: " . $area . "<br>";

// Get the circumference of the Circle object
$circumference = $circle->getCircumference();
echo "Circumference: " . $circumference . "<br>";

// Set the radius of the Circle object to 7
$circle->setRadius( 7 );

// Get the new radius of the Circle object
$radius = $circle->getRadius();
echo "New radius: " . $radius . "<br>";

// Get the new area of the Circle object
$area = $circle->getArea();
echo "New area: " . $area . "<br>";

// Get the new circumference of the Circle object
$circumference = $circle->getCircumference();
echo "New circumference: " . $circumference . "<br>";



// Example 4

/*
In this example, we have defined a class called "Person" with three private properties called "name", "age" and "gender". We have also defined a constructor method that takes in three parameters and initializes the "name", "age" and "gender" properties of the Person object.

We have also defined several public methods like "getName", "getAge", "getGender", "setName", "setAge", "setGender" and "sayHello". These methods allow us to get and set the value of the "name", "age" and "gender" properties of the Person object and also to have the person say hello.

In this example, we have created a new Person object with a name of John, age of 25 and male gender. We have then used the getName, getAge and getGender methods to get the name, age and gender of the Person object.

We have then used the setName, setAge and setGender methods to set the name, age and gender of the Person object to Jane, 30 and female respectively. We have then used the getName, getAge and getGender methods again to get the new name, age and gender of the Person object.

Finally, we have used the sayHello method to have the person say hello.


*/ 



class Person {
    private $name;
    private $age;
    private $gender;

    public function __construct( $name, $age, $gender ) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function getName() {
        return $this->name;
    }

    public function getAge() {
        return $this->age;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setName( $name ) {
        $this->name = $name;
    }

    public function setAge( $age ) {
        $this->age = $age;
    }

    public function setGender( $gender ) {
        $this->gender = $gender;
    }

    public function sayHello() {
        echo "Hello, my name is " . $this->name . " and I am " . $this->age . " years old. Nice to meet you!<br>";
    }
}


// Create a new Person object with a name of John, age of 25 and male gender
$person = new Person( "John", 25, "male" );

// Get the name, age and gender of the Person object
$name = $person->getName();
$age = $person->getAge();
$gender = $person->getGender();
echo "Name: " . $name . "<br>";
echo "Age: " . $age . "<br>";
echo "Gender: " . $gender . "<br>";

// Set the name, age and gender of the Person object
$person->setName( "Jane" );
$person->setAge( 30 );
$person->setGender( "female" );

// Get the new name, age and gender of the Person object
$name = $person->getName();
$age = $person->getAge();
$gender = $person->getGender();
echo "New name: " . $name . "<br>";
echo "New age: " . $age . "<br>";
echo "New gender: " . $gender . "<br>";

// Have the person say hello
$person->sayHello();



// Example 5

/*
In this example, we have defined a class called "Car" with five private properties called "make", "model", "year", "color" and "price". We have also defined a constructor method that takes in five parameters and initializes the "make", "model", "year", "color" and "price" properties of the Car object.

We have also defined several public methods like "getMake", "getModel", "getYear", "getColor", "getPrice", "setMake", "setModel", "setYear", "setColor", "setPrice" and "getDescription". These methods allow us to get and set the value of the "make", "model", "year", "color" and "price" properties of the Car object and also to get a description of the Car object.

*/ 



// class Car {
//     private $make;
//     private $model;
//     private $year;
//     private $color;
//     private $price;

//     public function __construct( $make, $model, $year, $color, $price ) {
//         $this->make = $make;
//         $this->model = $model;
//         $this->year = $year;
//         $this->color = $color;
//         $this->price = $price;
//     }

//     public function getMake() {
//         return $this->make;
//     }

//     public function getModel() {
//         return $this->model;
//     }

//     public function getYear() {
//         return $this->year;
//     }

//     public function getColor() {
//         return $this->color;
//     }

//     public function getPrice() {
//         return $this->price;
//     }

//     public function setMake( $make ) {
//         $this->make = $make;
//     }

//     public function setModel( $model ) {
//         $this->model = $model;
//     }

//     public function setYear( $year ) {
//         $this->year = $year;
//     }

//     public function setColor( $color ) {
//         $this->color = $color;
//     }

//     public function setPrice( $price ) {
//         $this->price = $price;
//     }

//     public function getDescription() {
//         return $this->make . " " . $this->model . " " . $this->year . " " . $this->color . " " . $this->price . "<br>";
//     }
// }


// // Create a new Car object with a make of Toyota, model of Camry, year of 2021, color of blue and price of $20,000
// $car = new Car( "Toyota", "Camry", 2021, "blue", "$20,000" );

// // Get the make, model, year, color and price of the Car object
// $make = $car->getMake();
// $model = $car->getModel();
// $year = $car->getYear();
// $color = $car->getColor();
// $price = $car->getPrice();
// echo "Make: " . $make . "<br>";
// echo "Model: " . $model . "<br>";
// echo "Year: " . $year . "<br>";
// echo "Color: " . $color . "<br>";
// echo "Price: " . $price . "<br>";

// // Set the make, model, year, color and price of the Car object
// $car->setMake( "Honda" );
// $car->setModel( "Accord" );
// $car->setYear( 2022 );
// $car->setColor( "red" );
// $car->setPrice( "$25,000" );

// // Get the description of the Car object
// $description = $car->getDescription();
// echo "Description: " . $description;


/*

Output :
Make: Toyota
Model: Camry
Year: 2021
Color: blue
Price: $20,000
Description: Toyota Camry 2021 blue $20,000<br>


*/ 