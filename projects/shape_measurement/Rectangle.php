<?php
require_once 'Shape.php';

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct( $name, $length, $width ) {
        parent::__construct( $name );
        $this->length = $length;
        $this->width = $width;
    }

    public function getArea() {
        return $this->length * $this->width;
    }
}
?>
