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
echo "<br>";

$myCar->showMessage();
echo "<br>";
$myCar->showInfo();
echo "<br>";
$myCar->declearInfo();

?>