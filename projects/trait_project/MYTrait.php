<?php
trait MyTrait {
    public function sayHello() {
        echo 'Hello from MyTrait!';
    }
}

?>

<?php
require_once 'MyTrait.php';

class MyClass {
    use MyTrait;

    public function hello() {
        $this->sayHello();
    }
}
?>


