<?php 
/*
Static methods can be called directly - without creating an instance of the class first.

Static methods are declared with the static keyword: 

*/

// static methods
class veiacle{
    protected static function getVeiacleType(){
        return "Car";
    }
}


class Cars extends veiacle{
    public $veiacle_type;

    public function __construct()
    {
        $this->veiacle_type = parent::getVeiacleType();
    }
}

$myCar = new Cars;
print_r($myCar);

echo PHP_EOL;

echo $myCar->veiacle_type;



// static properties
class pi {
    public static $value=3.14159;
    public function staticValue() {
      return self::$value;
    }
  }
  
  $pi = new pi();
  echo $pi->staticValue();




//   In PHP, the self keyword refers to the current class. It is used to access static properties and methods, as well as to refer to the current class in a static method.


class MyClass {
    public static $myStaticProperty = "default value";
    
    public function myInstanceMethod() {
        echo self::$myStaticProperty;
    }
}
// In the example above, $myStaticProperty is a static property of the MyClass class. The myInstanceMethod() method uses the self keyword to refer to the current class, and then accesses the static property using the double colon operator.

// You can also use the self keyword to refer to a static method within a class:


// class MyClass {
//     public static function myStaticMethod() {
//         echo "Hello, world!";
//     }
    
//     public function myInstanceMethod() {
//         self::myStaticMethod();
//     }
// }


// In this example, myStaticMethod() is a static method of the MyClass class. The myInstanceMethod() method uses the self keyword to refer to the current class, and then calls the static method using the double colon operator.

// Using the self keyword can be especially useful in cases where you need to reference the current class name in a static method, since it allows you to avoid hardcoding the class name. 


// class MyClass {
//     public static function getClassName() {
//         return self::class;
//     }
// }


// In this example, the getClassName() method uses the self keyword to refer to the current class, and then returns the class name using the class magic constant. This allows you to get the class name dynamically, without hardcoding it in the method.