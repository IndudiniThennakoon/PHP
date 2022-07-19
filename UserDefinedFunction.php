<?php

/*function testFunc()
{
    echo "function works well";
}

testFunc(); */

//global variable--> It belongs to a paticular page content

/*
$name = "Indu";
$age = "21";

function testGlobal()
{
    global $name, $age;

    $greet = " Hello! to";

    echo $greet . $name . "<br> Age plz!!! <br> " . $age . "<br>";
}

testGlobal(); 
*/

// example for function

function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}

echo "5+10 =" . sum(5, 10);


