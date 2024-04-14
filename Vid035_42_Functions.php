<?php
// -------------------- Video 35 Functions (Theory)
// -------------------- Video 36 Simple Functions 

function userDetails(){
    dummy();
    echo " User name is ABC<br>";
    echo " User age is 123<br>";
}

//function inside a function

function dummy(){
   echo "<H2>User Details</H2>";
}

userDetails();

// -------------------- Video 37 Parameterized functions
echo "<br> Example <b>Parameterized functions</b>";
function sum($a,$b,$color){
    echo "<h4 style ='color:$color'>Result = ".($a+$b)."</h4>";
   // echo "<br>";
}
sum(10,20,"blue");
sum(5,2,"green");
// -------------------- Video 38 Function with return statement 
echo "<br> Example <b>Function with return statement</b><br>";
function username(){
    return "Raj";
}
echo "Hi " ,username();
// -------------------- Video 39 Function with default parameters
echo "<br> Example <b>Function with default parameters</b><br>";
function fruit($name = "apple", $color= "red"){
    echo " The fruit is $name and it is of $color color<br>";

}
fruit("banana","yellow");
fruit();
fruit("Strawberry");

// -------------------- Video 40 Nested Functions 
echo "<br> Example <b>Nested Functions</b><br>";
function userInfo(){
    echo "My name is ABC.<br>";

    function userData(){
        echo "I am working.";
    }
   
}
userInfo();
    userData();
// -------------------- Video 41 Variable Function
echo "<br> Example <b>Variable Function</b><br>";
function person(){
    echo "My name is ABC.<br>";
   
}
$p1 = "person";
$p1();

// Callback Function:Needed when calls to different functions are to be made; avoid scope issues 
function info(){
    echo "Info Function(Callback) called:",person();
}
info();

function details($a){
echo " Another way of callback function:", $a();
}
details($p1);

// -------------------- Video 42 Basic Function (Refer to the video : https://www.youtube.com/watch?v=U9U6pj24_lI&list=PL8p2I9GklV44cSOlKzB_0TrzxEgwfvicK&index=42)
?>