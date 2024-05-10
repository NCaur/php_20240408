<?php
//json: Javascript Object Notation; text based(not support particular datatype;all supported) data exchange format(b/w server,application,language or websites) for structuring data(data use;search;add;update).

$user =["name"=>'Anil', "age"=>30,"email"=>"raj@abc.com"];
print_r($user);

// $userjson =json_encode($user);
// echo $userjson;
//json to array
// $data ='{"name":"Raj","age":30,"email":"raj@abc.com"}';
// //echo $data;
//  //$dataarray = json_decode($data,true);
// // print_r($dataarray);
// //gives you object type
//  $dataarray = json_decode($data);
// print_r($dataarray);
?>