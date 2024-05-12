<?php
$host='localhost';
$username='root';
$password='interface';
$database='osticket_updated';

    $conn= new PDO("mysql:host=$host;dbname=$database",$username,$password);//php data object
    $conn->setAttribute(PDO::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);//to throw exception
   // echo"Connection successful";
// catch(Exception $e){
//     echo "Connection failed: ".$e."<br>";
// }
// $result=$conn->query("show tables");
// while($row=$result->fetch(PDO::FETCH_NUM)){
//     print_r($row) ;
//}
?>