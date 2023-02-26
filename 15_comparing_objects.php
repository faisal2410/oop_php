<?php
// In PHP, you can compare objects using the == and === operators. When using the == operator, PHP will compare the values of the properties of the objects, while the === operator will compare if the objects are identical instances.


class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

// Create two Person objects with the same name and age
$person1 = new Person('John', 30);
$person2 = new Person('John', 30);

// Compare the two objects using the == operator
if ($person1 == $person2) {
    echo "The two objects are equal using the == operator.\n";
} else {
    echo "The two objects are not equal using the == operator.\n";
}

// Compare the two objects using the === operator
if ($person1 === $person2) {
    echo "The two objects are identical using the === operator.\n";
} else {
    echo "The two objects are not identical using the === operator.\n";
}
