<?php
// -------------------- Video 50 Type Casting
$a = 30;
var_dump($a) ;

$b= (string)$a;
echo"<br>";
var_dump($b) ;

$c= (float)$a;
echo"<br>";
var_dump($c) ;

$d= (bool)$a;
echo"<br>";
var_dump($d) ;

$e= (array)$a;
echo"<br>";
var_dump($e) ;

$f= (object)$a;
echo"<br>";
var_dump($f) ;
//deprecated
// $g= (unset)$a;
// echo"<br>";
// var_dump($g) ;

// NOTE: string -> array conversion or vice-versa is not possible.

?>