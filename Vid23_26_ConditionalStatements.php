<?php
// -------------------- Video 23 - If condition
echo ("<b> If Condition Example </b><br>");
 $name = "Abc";
 if ($name == "Abc"){
    echo " Hello : ".$name;
 }
// -------------------- Video 24 - If- else condition
 echo ("<b><br> If- else Condition Example </b><br>");
$age= 10;
 if ($age >= 30){
    echo "Age is : ".$age;
 }
 else{
    echo "You are underage. ";
 }

 // -------------------- Video 25 else- If condition
 echo ("<b><br>else- if Condition Example </b><br>");
 $age= 30;
  if ($age == 30){
     echo "Age is : ".$age;
  }
  elseif($age>30){
    echo "You are above appropriate age";
  }
else{
     echo "You are underage. ";
  }

  // -------------------- Video 26 Switch condition
 echo ("<b><br> Switch Condition Example </b><br>");
  $age= 10;
   switch($age){
     Case 30: 
     echo "Age = ".$age;
     break;
   Case 40: 
   echo "You are above appropriate age";
   break;
   default:
      echo "You are underage. ";
   }

?>