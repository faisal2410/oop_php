<?php
// In PHP, constants can be defined within a class using the const keyword. These constants can be accessed from within the class using the self keyword, or from outside the class using the class name.

/*


Outside the class, the constant can be accessed using the class name and :: operator. In this case, MyClass::MY_CONST prints "This is a constant value."

Overall, defining constants within a class can be useful when you want to create values that are associated with the class and cannot be changed or overridden by other code. Constants can be accessed both within and outside the class, and can provide a way to define default or fixed values that are used throughout your code.

*/ 


class MyClass {
    const MY_CONST = 'This is a constant value.';

    public function printConstant() {
        echo self::MY_CONST;
    }
}

// Accessing the constant from outside the class
echo MyClass::MY_CONST; // This is a constant value.

$obj = new MyClass();

// Accessing the constant from within the class method
$obj->printConstant(); // This is a constant value.
