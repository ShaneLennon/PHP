<?php
declare(strict_types=1);
//phpinfo();
// Example #1 Passing arrays to functions
$numbers = array();
$y = 2;
for($x = 0; $x < 20; $x++)
{
    $numbers[$x] = $y*3;
    $y = $numbers[$x];
}

print_r($numbers);

function takes_array($numbers)
{
    $arrlength = count($numbers);
    $total = 0;
    for($x = 0; $x < $arrlength; $x++)
    {
        $total = $total + $numbers[$x];
        echo $total;
        echo "<br>";
    }
    return $total;
}

echo takes_array($numbers);
echo "<br>";

//Example #2 Passing function parameters by reference
//To allow a function to modify its arguments, they must be passed by reference

//To have an argument to a function always passed by reference, prepend
// an ampersand (&) to the argument name in the function definition

function add_some_extra(&$string)
{
    $string .= 'and something extra.';
}

$str = 'This is a string, ';
add_some_extra($str);

echo $str;
echo "<br>";

//Example #3 Use of default parameters in functions
function makecoffee($type = "cappucino")
{
    return "Making a cup of $type.\n";
    
}

echo makecoffee();
echo makecoffee(null);
echo makecoffee("espresso");

//The default value must be a constant expression, not (for example)
//a variable, a class member or a function call

//Any defaults should be on the right side of any non-defualt arguments

//Example #5 Incorrect usage of default function arguments

// function makeyogurt($type = "acidophilus",$flavour)
// {
//     return "Making a bowl of $type $flavour.\n";
// }

// echo makeyogurt("raspberry");

//Example #6 Correct usage of default function arguments

function yogurt($flavour, $type = "acidophilus")
{
    return "Making a bowl of $type $flavour.\n";
}
 
echo yogurt("raspberry","strawberry");   // works as expected

//Example #10 Strict typing

function sum(int $a, int $b){
    return $a + $b;
}

echo sum(1,2);
echo sum(1.5,2.5);
?>