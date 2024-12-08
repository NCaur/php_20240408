<?php
// //Magic Methods: no need to call functions manually ; called automatically; upon certain action;deprecated

// // __construct: when object is created
// //__destruct: when class is destroyed
// //For more: https://www.youtube.com/watch?v=kTdpKIR5Y4A&list=PL8p2I9GklV44cSOlKzB_0TrzxEgwfvicK&index=113

// //______________________Vide:114: __invoke()_______________________________________
// //invoke(): to call an object as a function
// class user
// {
//     // function getMe(){
//     //     echo "My name is ABC";

//     // }
//     function __invoke()
//     {
//         echo "My name is ABC";
//     }
// }

// $u1 = new user();
// //$u1->getMe();// need to call repeatedly
// $u1();

// //______________________Vide:115: __get()_______________________________________

// //__get(): to show the proper error message instead vague exception;when property does not exist or private

// class users
// {

//     public $name = "ABC";
//     private $age = 30;

//     function __get($property)
//     {
//         echo "$property does not exist";
//     }
// }
// $u1 = new users();
// echo "<br>";
// echo " Video- 115";
// echo "<br>";
// echo $u1->name;
// echo "<br>";
// echo $u1->age; // because it is private

//______________________Vide:116: __set()_______________________________________
//__set(): to show the proper error message instead vague exception;when property does not exist or private; for setting property
class magicset
{
private $name="ABC";
    function __set($property, $value)

    {
       // echo "$property does not exist with $value";
       //to check the property of the class
        if(property_exists($this,$property)){
            $this->$property = $value;
            //echo "yes";
        }
        else{
            echo "no";
        }
        // //
    }

    function getName(){
        echo $this->name;
    }
}
$c1 = new magicset();
echo "<br>";
echo " Video - 116";
echo "<br>";
//$c1->name = "ABC";
$c1->getName();
echo "<br>";
$c1->name = "XYZ";
$c1->getName();

// //______________________Vide:117: __call()_______________________________________
// //__call(): to call unknown or private method
// //https://www.youtube.com/watch?v=Cm30yVBY8Sw&list=PL8p2I9GklV44cSOlKzB_0TrzxEgwfvicK&index=117
// class callmagicmethod{
// function __call($method, $args)
// {
// //   echo "$method not found";
// //   echo"<br>"; 
//  // print_r($args); 
// // to check with method exists or not
//  if(method_exists($this,$method)){
//     echo "This is private method";
//     // to call private method forcefully
//     call_user_func_array([$this,$method],$args);
//  }
//  else{
//     echo "$method not found";
//  }
// }

// private function getName($name){
//     echo $name;
// }
// }


// $m1= new callmagicmethod(); 
// //$m1->getName(["ABC","XYZ"]);
// echo "<br> Video 117<br>";
// $m1->getName("ABC");
// 
?>