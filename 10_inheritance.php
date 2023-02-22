<?php 
/* 
Inheritance in OOP = When a class derives from another class.

The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.

An inherited class is defined by using the extends keyword.

*/

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

print_r($myCar);
$myCar->set_color('Green');
$myCar->set_name('BMW');
$myCar->get_full_specs($myCar->get_name(), $myCar->get_color());

?>