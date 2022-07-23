<?php

require_once ("config.php");

$sql = "INSERT INTO student(id,name,year,semester) VALUES (1,'indu',)";

if($con ->query($sql))
{
    echo "Insert successdully";
}else {
    echo "Eror: " .$con ->error;
}

$con-> close();
?>