<?php
//numeric (indexed) arrays

    //  declare array

    $num = array();

    // assign values

    $num[0] = 5;
    $num[1] = 2;
    $num[2] = 8;
    $num[3] = 1;

    // declar and initialize 

    $num2 = array(2,5,8,5);

    //  read the values of array using index

    echo $num2[2] + $num2[3];

    echo "</br>";


// loop through an Indexed Array
    $subjects = array("ITA","DBMS", "ST");
    $arrlength = count($subjects);

    for($x=0; $x <$arrlength; $x++){
        echo $subjects [$x];
        echo "</br>";
    }

// printout the values using foreach
$colors = array("red", "green", "blue","yellow");
foreach ($colors as $value){
    echo "$value <br>";

}

// associative arrays -> 1st way

$marks = array("Maths" => 32, "Web" => 30);
echo $marks["Maths"]; // print array value of first index
echo "<br>";
echo $marks["Web"]; // print array value of secont index 

// Maths and Web are indexes and we can have our own index in Associative Arrays

// associative arrays -> 2nd way
$marks2 = array();
$marks2["Maths"] = 32;
$marks2["Web"] = 23;

echo "<br>";
echo "Maths:".$marks2["Maths"]. "<br/>".
     "Web:".$marks2["Web"]. "<br/>";


// loop through an associative array

$age = array("Indu" => "21" , "Ben" => "37", "Jeo" => "46");
foreach($age as $x =>$x_value)
{
    echo "Key =" . $x . " , Value=" . $x_value . "<br>";
    
}

