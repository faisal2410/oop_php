<?php
/*
In object-oriented programming (OOP) in PHP, static is a keyword that is used to define a class-level property or method that is shared by all instances of that class.

When a property or method is declared as static, it can be accessed directly from the class itself, rather than from an instance of the class. This means that you do not need to create an object of the class in order to access its static properties or methods.

In this example, we define a class called MyClass with a static property called $my_static_property and a static method called my_static_method().

We can access the static property and call the static method directly from the class using the double colon :: operator, without needing to create an object of the class.

Static properties and methods are useful when you need to share data or functionality across all instances of a class. They can be used to implement singleton patterns, to create utility classes with only static methods, or to define constants that are shared across all instances of a class.

It's important to note that because static properties and methods are shared across all instances of a class, they can be modified by any instance of the class. This means that if you change a static property or method from one instance of the class, the change will be reflected in all other instances of the class as well.
*/ 

class MyClass {
    public static $my_static_property = "Static Property Value";

    public static function my_static_method() {
        echo "Static Method Called";
    }
}

echo MyClass::$my_static_property; // Outputs "Static Property Value"
MyClass::my_static_method(); // Outputs "Static Method Called"
