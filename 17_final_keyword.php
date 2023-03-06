<?php
// In PHP, the final keyword can be used to prevent a class, method from being extended or overridden by other classes. 

/*
Overall, the final keyword in PHP can be used to prevent certain elements of a class from being extended or overridden, which can be useful in situations where you want to ensure that certain parts of your code remain fixed and unchangeable.
*/ 


class ParentClass {
    public $finalProperty="bangladesh";
    // Final method that cannot be overridden by child classes
      public function finalMethod() {
        echo 'This method cannot be overridden.';
    }

    // Final property that cannot be overridden by child classes
    // final public $finalProperty = 'This property cannot be overridden.';
}

class ChildClass extends ParentClass {
    // This will result in a fatal error because the finalMethod cannot be overridden
    public function finalMethod() {
        echo 'This method is attempting to override a final method.';
    }

    // This will result in a fatal error because the finalProperty cannot be overridden
    // public $finalProperty = 'This is attempting to override a final property.';
}

$obj = new ChildClass();

// This will call the finalMethod of the ParentClass and print "This method cannot be overridden."
$obj->finalMethod();

// This will print "This property cannot be overridden."
echo $obj->finalProperty;
