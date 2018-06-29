<?php
//Example #1 Variable function example
function foo() {
    echo "In foo()<br />\n";
}

$func = 'foo';
$func();    // This calls foo()

function bar($arg = '')
{
    echo "In bar(); argument was '$arg'.<br />\n";
}

$func = 'bar';
$func('shane');    // This calls bar()

// This is a wrapper function around echo
function echoit($string)
{
    echo $string;
}

$func = 'echoit';
$func('test');  // This calls echoit()

//Example #2 Variable method example

class Foo{
    function Variable()
    {
        $name = 'Bar';
        $this->$name(); // This calls the Bar() method
    }

    function Bar()
    {
        echo "This is Bar";
        echo "<br>";
    }
}

$foo = new Foo();
$funcname = "Variable";
$foo->$funcname(); // This calls $foo->Variable()

// Example #3 Variable method example with static properties

class Foo2
{
    static $variable = 'static property';
    static function Variable()
    {
        echo 'Method Variable called';
    }
}

echo Foo2::$variable; //This prints 'static property'. 
echo "<br>";
$variable = "Variable";
Foo2::$variable(); //This calls $foo->Varaible() reading $variable in this scope.
echo "<br>";
// Example #4 Complex callables

class Foo3
{
    static function bar()
    {
        echo "I am calling a static function\n";
        echo "<br>";
    }
    function baz()
    {
        echo "I am calling a non-static function\n";
        echo "<br>";
    }
}

$func = array("Foo3","bar");
$func();
$func = array(new Foo3, "baz");
$func();
$func = "Foo3::bar";
$func();
?>