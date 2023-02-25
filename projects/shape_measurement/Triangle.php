<?php
require_once 'Shape.php';

class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct( $name, $base, $height ) {
        parent::__construct( $name );
        $this->base = $base;
        $this->height = $height;
    }

    public function getArea() {
        return 0.5 * $this->base * $this->height;
    }
}
?>
