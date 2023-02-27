<?php

/*
In this example, we create a Car class with three private properties: $make, $model, and $year. We also define a constructor method to set the values of these properties when a new object is created.

We then define six additional methods: get_make(), get_model(), get_year(), set_make(), set_model(), and set_year(). The get_ methods allow us to retrieve the values of the private properties, while the set_ methods allow us to update them.

We also define a display_info() method to echo out the car's make, model, and year.

We then create a Car object with the make, model, and year of a 2015 Toyota Corolla. We call the display_info() method to display the car's information.

We then use the set_make() and set_model() methods to update the car's make and model to a 2015 Honda Civic. We call the display_info() method again to display the updated car information.
*/ 

class Car {
    private $make;
    private $model;
    private $year;

    public function __construct( $make, $model, $year ) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function get_make() {
        return $this->make;
    }

    public function get_model() {
        return $this->model;
    }

    public function get_year() {
        return $this->year;
    }

    public function set_make( $make ) {
        $this->make = $make;
    }

    public function set_model( $model ) {
        $this->model = $model;
    }

    public function set_year( $year ) {
        $this->year = $year;
    }

    public function display_info() {
        echo "Make: " . $this->make . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
    }
}

// Create a car object
$car = new Car( "Toyota", "Corolla", 2015 );

// Display the car information
$car->display_info();

// Change the car make and model
$car->set_make( "Honda" );
$car->set_model( "Civic" );

// Display the updated car information
$car->display_info();


