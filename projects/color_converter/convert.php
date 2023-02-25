<?php
class RGB {
    private $red;
    private $green;
    private $blue;

    public function __construct( $red, $green, $blue ) {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    public function toHex() {
        return "#" . str_pad( dechex( $this->red ), 2, "0", STR_PAD_LEFT ) . str_pad( dechex( $this->green ), 2, "0", STR_PAD_LEFT ) . str_pad( dechex( $this->blue ), 2, "0", STR_PAD_LEFT );
    }
}

if ( isset( $_POST['red'] ) && isset( $_POST['green'] ) && isset( $_POST['blue'] ) ) {
    $red = (int) $_POST['red'];
    $green = (int) $_POST['green'];
    $blue = (int) $_POST['blue'];

    $color = new RGB( $red, $green, $blue );
    $hex = $color->toHex();

    echo "<p>The RGB color ({$red}, {$green}, {$blue}) is converted to the hexadecimal color {$hex}.</p>";
}
?>

