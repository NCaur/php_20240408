<?php
$host='localhost';
$username='root';
$password='interface';
$database='osticket_updated';

    $conn= new PDO("mysql:host=$host;dbname=$database",$username,$password);//php data object
    $conn->setAttribute(PDO::ATTR_ERRMODE,pdo::ERRMODE_EXCEPTION);//to throw exception

?>