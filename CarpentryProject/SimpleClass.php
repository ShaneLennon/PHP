<?php
class SimpleClass
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar(){
        echo $this->var;
    }
}

$a = new SimpleClass();
$a->displayVar();
echo "<br>";
$instance = new SimpleClass();

// This can also be done with a variable:
//$className = 'SimpleClass';
//$instance = new $className(); // new SimpleClass()

$assigned = $instance;
$reference =& $instance;

$instance->var = 'assigned will have this value';

$instance = null; // $instance and $reference become null

var_dump($instance);
echo "<br>";
var_dump($reference);
echo "<br>";
var_dump($assigned);
echo "<br>";

class Test
{
    static public function getNew()
    {
        return new static;
    }
}

class Child extends Test
{}

$obj1 = new Test();
$obj2 = new Test();

var_dump($obj1 !== $obj2);

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);

echo "<br>";
echo (new DateTime())->format('Y');
echo "<br>";

class Foo{
    public $bar = 'property';

    public function bar(){
        return 'method';
    }
}

$obj = new Foo();
echo $obj->bar , PHP_EOL, $obj->bar(), PHP_EOL;
echo "<br>";

class ExtendClass extends SimpleClass
{
    // Redefine the parent method
    function displayVar()
    {
        echo "Extending class <br>";
        parent::displayVar();
    }
}

$extended = new ExtendClass();
$extended->displayVar();

class BaseClass {
    function __construct(){
        print "In BaseClass constructor\n";
    }
}

$obj = new BaseClass();
?>