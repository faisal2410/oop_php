<?php
/*
Magic methods in PHP are special methods that allow you to define how objects of a class behave in certain circumstances. These methods start with two underscores (__) and are called automatically by PHP when certain actions are performed on the object. 
*/ 

/*
 The __construct() method is called when a new object of the class is created, and it initializes the $data property of the object with the provided data.

The __toString() method is called when the object is used as a string, and it returns a JSON-encoded representation of the $data property.

The __get() method is called when a property is accessed on the object, and it returns the value of the property from the $data array.

The __set() method is called when a property is set on the object, and it sets the value of the property in the $data array.

The __call() method is called when a method is called on the object that doesn't exist, and it prints an error message.

Overall, magic methods in PHP provide a way to customize the behavior of objects in ways that are not possible with regular methods.    
    
 */ 


class MyClass {
    private $data = array();

    // __construct() is called when a new object is created
    public function __construct($data) {
        $this->data = $data;
    }

    // __toString() is called when the object is used as a string
    public function __toString() {
        return json_encode($this->data);
    }

    // __get() is called when a property is accessed
    public function __get($name) {
        return $this->data[$name];
    }

    // __set() is called when a property is set
    public function __set($name, $value) {
        $this->data[$name] = $value;
    }

    // __call() is called when a method is called that doesn't exist
    public function __call($name, $arguments) {
        echo "Method $name not found";
    }
}

$data = array('foo' => 'bar', 'baz' => 'qux');
$obj = new MyClass($data);

// Using the object as a string
echo $obj; // {"foo":"bar","baz":"qux"}

// Accessing a property
echo $obj->foo; // bar

// Setting a property
$obj->baz = 'quux';
echo $obj->baz; // quux

// Calling a method that doesn't exist
$obj->missingMethod(); // Method missingMethod not found
