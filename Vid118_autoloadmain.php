<?php
// Autoload: to load multiple classes or files
//include('./Vid118_autoloadteacher.php');
function autoLoader($class){
include($class.'.php');
}
    spl_autoload_register('autoLoader');
    $t1= new Vid118_autoloadteacher();
    echo "<br>";
    $s1= new Vid118_autoloadstudent();
    echo "<br>";
    $m1= new Vid118_autoloadmanagement();

?>