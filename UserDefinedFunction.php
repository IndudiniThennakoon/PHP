<?php

/*function testFunc()
{
    echo "function works well";
}

testFunc(); */

//global variable--> It belongs to a paticular page content

$name = "Indu";
$age = "21";

function testGlobal()
{
    global $name, $age;

    $greet = " Hello! to";

    echo $greet . $name . "<br> Age plz!!! <br> " . $age . "<br>";
}

testGlobal();

