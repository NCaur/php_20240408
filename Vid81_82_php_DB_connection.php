<?php
$host='localhost';
$username='root';
$password='interface';
$database='osticket_updated';
// $conn =new mysqli($host,$username,$password,$database);
// if($conn->connect_error){
//     die("Connection failed") ;

// }
// else{
//     echo "Connection successful<br>";
//     $result=$conn->query("show tables")->fetch_all();
//     print_r($result);

// }

// -------------------- Video 82 - using pdo class
try{
    $conn= new PDO("mysql:host=$host;dbname=$database",$username,$password);//php data object
    $conn->setAttribute(PDO::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);
    echo"Connection successful";
}
catch(Exception $e){
    echo "Connection failed: ".$e."<br>";
}
$result=$conn->query("show tables");
while($row=$result->fetch(PDO::FETCH_NUM)){
    print_r($row) ;
}
?>