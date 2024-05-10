<?php
$users=['Raj','Ram','Sam','Ram','Sam'];
//check if variable is array or not
//echo is_array($users);

//check no. of elements in array
//echo count($users);
//extract element from array
// unset($users[1]);
// print_r($users);
//add elememt at end
// array_push($users,'Sita');
// print_r($users);
//delete element from end
// array_pop($users);
// print_r($users);
$userkey =["name"=>"Raj","age"=>30];
//to extract keys
//print_r(array_keys($userkey));
//convert array to string
//echo implode($users);

//convert string to array
// $str="Hello! Welcome to PHP learning";
// print_r(explode(" ",$str)); //you can also put some character if you want to split from specific character
//Merge array
//print_r(array_merge($users,$userkey));
//remove duplicate elements
print_r(array_unique($users));
?>