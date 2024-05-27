<?php
//type declaration
//type hinting; passing arguments to function; we can tell the datatype; saves time as handled using type hinting

// function fruit(string $name){
//     echo $name;
// }

// fruit(["apple", "banana"]);//will give error array to string//give clear explanation of type of error
// fruit("apple");

//array to string
// function fruit(array $name){
//     echo count($name);
// }

// //fruit("apple");// will give error if type hinting
// fruit(["apple", "banana"]);

//can be 2 types

// function fruit(array|string $name): void {
//     if (is_array($name)) {
//         echo count($name);
//     } elseif (is_string($name)) {
//         echo strlen($name);
//     }
// }

// fruit("apple"); // Output: 5
// fruit(["apple", "banana"]); // Output: 2

// function fruit($name) {
//     if (is_array($name)) {
//         echo count($name);
//     } elseif (is_string($name)) {
//         echo strlen($name);
//     } else {
//         echo "Invalid input";
//     }
// }

// fruit("apple"); // Output: 5
// echo "<br>";
// fruit(["apple", "banana"]); // Output: 2

//using classes

class fruits{
    function getName(string $name){
        echo $name;
    }

}

$f1= new fruits();
//$f1->getName(["apple,banana"]);// will showw you error here
$f1->getName("apple");

?>