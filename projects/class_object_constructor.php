<?php

/*
In this example, we create a Dog class with three properties: $name, $breed, and $age. We also define a constructor method to set the values of these properties when a new object is created.

We also define two additional methods: bark() and get_info(). The bark() method simply echoes out "Woof woof!", while the get_info() method echoes out the dog's name, breed, and age.

We then create two Dog objects, $dog1 and $dog2, with different values for the properties. We call the bark() and get_info() methods on each object to see the output.
*/ 

class Dog {
    public $name;
    public $breed;
    public $age;

    function __construct( $name, $breed, $age ) {
        $this->name = $name;
        $this->breed = $breed;
        $this->age = $age;
    }

    function bark() {
        echo "Woof woof!";
    }

    function get_info() {
        echo "Name: " . $this->name . "<br>";
        echo "Breed: " . $this->breed . "<br>";
        echo "Age: " . $this->age . "<br>";
    }
}

// Create dog objects
$dog1 = new Dog( "Fido", "Golden Retriever", 3 );
$dog2 = new Dog( "Spot", "Dalmatian", 2 );

// Call methods on dog objects
$dog1->bark();
echo "<br>";
$dog1->get_info();
echo "<br>";
$dog2->bark();
echo "<br>";
$dog2->get_info();

?>
