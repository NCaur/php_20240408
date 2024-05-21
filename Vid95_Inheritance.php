<?php
class UserAuth{
    function login($userType){
        echo $userType." logged in";
    }
}
class Student extends UserAuth{
 function getName(){
    echo "<br> Student Name = ABC";
 }
}
$s1= new Student();
$s1->login("Student");
$s1->getName();

class Teacher extends UserAuth{
    function getSkills(){
        echo "<br>Teacher Skills: Computer";
     }
}
$t1= new Teacher();
$t1->login("<br>Teacher");
$t1->getSkills();
?>