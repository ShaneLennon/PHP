<?php

class MyClass
{
    private $foo = 'Shane';

    function __construct()
    {
        $this->foo = 'Shaneo';
        echo($this->foo);
    }
}

$bar = new MyClass();

?>