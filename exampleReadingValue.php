<?php
    if(isset ($_POST['btnSubmit']))
    {
        echo "<h2> Bellow is the form data <h2/>";
        echo "<hr>";
        echo "<br/>Your Name: {$_POST['Fullname']}";
        echo "<br/>Your Address: {$_POST['address']}";
        echo "<hr>";
       
        
    }
?>