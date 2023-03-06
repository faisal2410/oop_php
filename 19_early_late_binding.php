<?php
// In object-oriented programming (OOP) in PHP, binding refers to the process of linking a method call to a specific method implementation. In PHP, there are two types of binding: early binding and late binding.

// Early Binding:
// Early binding (also known as static binding) refers to the process of linking a method call to a specific method implementation at compile-time. This means that the method call is resolved at the point of compilation, and the specific method implementation is determined based on the type of the variable or expression used to make the call.

// Here's an example of early binding in PHP:


// class ParentClass {
//     public static function sayHello() {
//         echo "Hello from ParentClass!";
//     }
// }

// class ChildClass extends ParentClass {
//     public static function sayHello() {
//         echo "Hello from ChildClass!";
//     }
// }

// // Call to static method on ParentClass - Early binding
// ParentClass::sayHello(); // Output: "Hello from ParentClass!"

// // Call to static method on ChildClass - Early binding
// ChildClass::sayHello(); // Output: "Hello from ChildClass!"

// In this example, we have two classes, ParentClass and ChildClass. Both classes have a static method called sayHello(). When we call ParentClass::sayHello(), the method implementation from ParentClass is used, and when we call ChildClass::sayHello(), the method implementation from ChildClass is used. This is determined at compile-time, based on the type of the variable used to make the call (ParentClass or ChildClass).

// Late Binding:
// Late binding (also known as dynamic binding) refers to the process of linking a method call to a specific method implementation at run-time. This means that the method call is resolved at the point of execution, and the specific method implementation is determined based on the type of the object that the method is called on.

// Here's an example of late binding in PHP:


interface Greeting {
    public function sayHello();
}

class ParentClass implements Greeting {
    public function sayHello() {
        echo "Hello from ParentClass!";
    }
}

class ChildClass implements Greeting {
    public function sayHello() {
        echo "Hello from ChildClass!";
    }
}

// Late binding with ParentClass object
$obj = new ParentClass();
$obj->sayHello(); // Output: "Hello from ParentClass!"

// Late binding with ChildClass object
$obj = new ChildClass();
$obj->sayHello(); // Output: "Hello from ChildClass!"
// In this example, we have two classes, ParentClass and ChildClass, both of which implement the Greeting interface. Each class has its own implementation of the sayHello() method. We create objects of each class, and then call the sayHello() method on each object. This results in late binding, where the specific method implementation is determined based on the type of the object (ParentClass or ChildClass) that the method is called on.

// Overall, early binding and late binding in PHP provide different ways of linking method calls to method implementations. Early binding is determined at compile-time and is based on the type of the variable used to make the call, while late binding is determined at run-time and is based on the type of the object that the method is called on.