<?php
 // -------------------- Video 27 Logical Operators
 echo "<b> and/&& operator </b><br>";
 $a = 10; $b = 20; $c= 30;
 if($a==10 and $b==20 && $c==30){
    echo "and/&& working fine<br>";
 }

 echo "<b> or/|| operator </b><br>";
 $a = 10; $b = 20; $c= 30;
 if($a==10 or $b==20 || $c==40){
    echo "or/|| working fine<br>";
 }

 echo "<b> xor operator </b><br>"; // all conditions cannot be true or false
 $a = 10; $b = 20;
 if($a==10 xor $b==50){
    echo "xor working fine<br>";
 }

 echo "<b> not operator </b><br>"; 
 $a = 10;
 if($a!==11){
    echo "not working fine";
 }


?>