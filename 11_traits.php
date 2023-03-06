<?php

/*
PHP only supports single inheritance: a child class can inherit only from one single parent.

So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

trait TraitName {
  // some code...
}
*/


trait madeInChina{
    public function showMessage()
    {
        echo "This car comes from china factory";
    }
}

trait madeInUSA{
    public function showInfo()
    {
        echo "This car comes from usa factory";
    }
}

trait madeInUAE{
    public function declearInfo()
    {
        echo "This car comes from uae factory";
    }
}




class Car{
    use madeInChina, madeInUSA, madeInUAE;
    public $name;

    public function __construct($brand)
    {
        $this->name = $brand;
    }
}




$myCar = new Car("Toyota");
print_r($myCar);
echo PHP_EOL;

$myCar->showMessage();
echo PHP_EOL;
$myCar->showInfo();
echo PHP_EOL;
$myCar->declearInfo();


// Example 2

// Traits can be useful for adding functionality to a class without having to inherit from another class. For example, you might use a trait to add logging functionality to multiple classes:

trait LogsActivity {
    public function logActivity( $message ) {
        // Code to log activity here
    }
}

class User {
    use LogsActivity;

    public function save() {
        // Code to save user here
        $this->logActivity( 'User saved' );
    }
}

class Post {
    use LogsActivity;

    public function save() {
        // Code to save post here
        $this->logActivity( 'Post saved' );
    }
}


// Example 3

// Traits can also be used to override methods in a class. For example, you might use a trait to add caching functionality to a class:

trait CachesData {
    public function getData() {
        // Code to get data from cache
    }
}

class MyClass {
    use CachesData;

    public function getData() {
        // Code to get data from database
    }
}



