<?php
require_once 'Shape.php';

class Circle extends Shape {
    private $radius;

    public function __construct( $name, $radius ) {
        parent::__construct( $name );
        $this->radius = $radius;
    }

    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }
}
?>
