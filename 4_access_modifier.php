<?php 
/*
In object-oriented programming (OOP) in PHP, access modifiers are keywords that define the visibility and accessibility of properties and methods within a class.

There are three types of access modifiers in PHP:

public: Properties and methods declared as public are accessible from anywhere, both within the class and outside of it.

protected: Properties and methods declared as protected are accessible only within the class and its subclasses (i.e., classes that extend the class).

private: Properties and methods declared as private are accessible only within the class itself.

*/ 

class MyClass {
    public $public_property;
    protected $protected_property;
    private $private_property;

    public function public_method() {
        echo "This is a public method.";
    }

    protected function protected_method() {
        echo "This is a protected method.";
    }

    private function private_method() {
        echo "This is a private method.";
    }
}

$obj = new MyClass();
$obj->public_property = "Public Value"; // Accessible
$obj->protected_property = "Protected Value"; // Not accessible outside of class
$obj->private_property = "Private Value"; // Not accessible outside of class
$obj->public_method(); // Accessible
$obj->protected_method(); // Not accessible outside of class
$obj->private_method(); // Not accessible outside of class

