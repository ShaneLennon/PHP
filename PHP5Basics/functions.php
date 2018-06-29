<?php

//Example #1 Pseudo code to demonstrate function uses
function foo($arg_1, $arg_2)
{
    echo $arg_1 ." ".$arg_2."<br>";
    return $retval;
}

foo('Shane','Lennon');

//Example #2 Conditional functions
$makefoo = true;

/* We can't call foo() from here
since it doesn't exist yet,
but we can call bar */

bar();

if($makefoo){
    function foo2()
    {
        echo "I don't exist until program execution reaches me.\n";
    }
}

/*Now we can safely call foo() since $makefoo evaluated to true*/

foo2();

function bar()
{
    echo "I exist immediately upon program start.\n";
}

//Example #3 Functions within functions
function foo3()
{
    function bar2()
    {
        echo "I don't exist until foo3() is called.\n";
    }
}

/* We can't call bar2() yet since it doesn't exist. */

foo3();

/* Now we can call bar2(),
foo3()'s processing has made it accessible */

bar2();

//Example #4 Recursive functions
function recursion($a)
{
    if ($a < 100000){
        echo "$a\n";
        recursion($a*3 );
    }
}

recursion(3);

function foo4() {

    function baz(){
        echo 'baz foo';
    }

    echo 'foo4 ' . PHP_EOL;
}

function bar3(){

    function baz(){
        echo 'baz bar' .PHP_EOL;
    }

    echo 'bar3' . PHP_EOL;
}

foo4();
//bar3();
baz();
echo "<br>";

function add($a,$b){
    return $a+$b;
}

function sub($a,$b){
    return $a-$b;
}

function math($first, $second){
    $res = add($first, $second)/sub($first, $second);
    return $res;
}

echo add(100,200);
echo "<br>";
echo sub(100,200);
echo "<br>";
echo math(10,17);
echo "<br>";

function abc($var) :string {
    return $var;
}

echo abc(true);
echo "<br>";
echo abc(88.99);
echo "<br>"


?>