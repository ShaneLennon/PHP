<?php
//declare(strict_types=1);
//Example #1 Use of return
function square($num)
{
    return $num * $num;
}

function cube($num2)
{
    return $num2 * $num2 * $num2;
}

for($x = 1; $x <= 10; $x++)
{
   echo $x .": ".cube($x)."<br>";

}

//Example #2 Returning an array to get multiple values
function small_numbers()
{
    return array (0,1,2);
}

list ($zero, $one, $two) = small_numbers();

echo $zero ."<br>";
echo $one . "<br>";
echo $two . "<br>";

function sum($a,$b): float {
    return $a + $b;
}

var_dump(sum(12,13));
echo "<br>";

function sum2($a, $b): int {
    return $a + $b;
}

var_dump(sum2(1,2));
echo "<br>";
//var_dump(sum2(2.2,3.3));

class C {}

function getC(): C{
    return new C;
}

$obj1 = new C();
$obj2 = new C();

var_dump($obj1);
var_dump($obj2);
echo "<br>";

function fn($a, $b)
{
    return array(
        $a * $b,
        $a + $b,
    );
} 

list($product, $sum) = fn(3,5);
echo $product;
echo "<br>";
echo $sum;
?>