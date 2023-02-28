<?php
namespace MyNamespace;

class MyClass {
    const TITLE = "Welcome to my website!";
    private $content = "This is some content.";

    public function getTitle() {
        return self::TITLE;
    }

    final public function getContent() {
        return $this->content;
    }

    public function __get( $name ) {
        if ( $name == 'content' ) {
            return $this->getContent();
        }
        return null;
    }

    public function __set( $name, $value ) {
        if ( $name == 'content' ) {
            $this->content = $value;
        }
    }
}

