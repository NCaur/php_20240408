<?php

// -------------------- Video 51 Variables 
//global variable
$name ="Anil";
 
function getName(){
    //local variable
    $name ="Peter";
    echo $name;
    // Accessing global variable
    global $name;
    echo "<br>";
    echo $name;
    function innerName(){
        global $name;
        echo $name;
    }
}

getName();
echo "<br>";
innerName();
echo "<br>";
echo $name;

?>