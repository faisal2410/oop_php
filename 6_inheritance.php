<?php 
/* 
Inheritance in OOP = When a class derives from another class.

The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

An inherited class is defined by using the extends keyword.

*/

// Example 1:
// 👀🏆👀👀🏆

class Cars {

    /*properties */
    public $name;
    public $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
      }

    /*methods -- getter & setter */
    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }
    function set_color($color){
        $this->color = $color;
    }

    function get_color(){
        return $this->color;
    }


}


class Toyota extends Cars{
    public $sceret_engine;

    function set_engine($engine){
        $this->sceret_engine = $engine;
    }

    function get_full_specs($name, $color){
        echo " This is $name car which is $color color and its chessis number# $this->sceret_engine";
    }
}

$myCar = new Toyota('Toyota', 'Blue');
// print_r($myCar);

$myCar->set_engine("TY897fr523t");

// print_r($myCar);
$myCar->set_color('Green');
$myCar->set_name('BMW');
$myCar->get_full_specs($myCar->get_name(), $myCar->get_color());



// Example 2
// 👀👀👀👀🏆

// Base class
class Animal {
    protected $name;
    protected $species;

    public function __construct( $name, $species ) {
        $this->name = $name;
        $this->species = $species;
    }

    public function getName() {
        return $this->name;
    }

    public function getSpecies() {
        return $this->species;
    }
}

// Subclass
class Dog extends Animal {
    protected $breed;

    public function __construct( $name, $breed ) {
        parent::__construct( $name, 'Dog' );
        $this->breed = $breed;
    }

    public function getBreed() {
        return $this->breed;
    }
}

// Instantiate objects
$animal = new Animal( 'Bob', 'Lion' );
$dog = new Dog( 'Rufus', 'Golden Retriever' );

// Call methods
echo $animal->getName(); // Output: Bob
echo PHP_EOL;
echo $dog->getName(); // Output: Rufus
echo PHP_EOL;
echo $dog->getSpecies(); // Output: Dog
echo PHP_EOL;
echo $dog->getBreed(); // Output: Golden Retriever
echo PHP_EOL;

// var_dump($animal);
var_dump($dog);



// // Example 3 :

// Base class
class Employee {
    protected $name;
    protected $salary;

    public function __construct( $name, $salary ) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }
}

// Subclass
class Teacher extends Employee {
    protected $subject;

    public function __construct( $name, $salary, $subject ) {
        parent::__construct( $name, $salary );
        $this->subject = $subject;
    }

    public function getSubject() {
        return $this->subject;
    }
}

// Instantiate objects
$employee = new Employee( 'John Smith', 50000 );
$teacher = new Teacher( 'Jane Doe', 60000, 'Math' );

// Call methods
echo $employee->getName() . ' makes $' . $employee->getSalary() . ' per year.';
// Output: John Smith makes $50000 per year.

echo $teacher->getName() . ' makes $' . $teacher->getSalary() . ' per year and teaches ' . $teacher->getSubject() . '.';
// Output: Jane Doe makes $60000 per year and teaches Math.




