<?php
include('./Vid110_config.php');
class student{
    public $dbconn;
    function __construct($conn)
    {
        $this->dbconn = $conn;
    }

    function getData(){
        $getstu= $this->dbconn->prepare('Select * from test');
        $getstu->execute();
        $result= $getstu->fetchAll();
        print_r($result);
    }

 //   ____________________________Video 111:insert,update and delete________________________________________


 function insertData(){
    $sqlQuery= "insert into test (`id`,`name`,`subject`) values (null,'Sam','Maths')" ;
    $getstu= $this->dbconn->prepare($sqlQuery);
    $result=$getstu->execute();
    if($result){
        echo "Data inserted";
    }
    else{
        echo "Data not inserted";
    }

 }

 function updateData(){
    $sqlQuery= "update test set name = 'Siya' where id = 10;" ;
    $getstu= $this->dbconn->prepare($sqlQuery);
    $result=$getstu->execute();
    if($result){
        echo "Data updated";
    }
    else{
        echo "Data not updated";
    }
 }

 function deleteData(){
    $sqlQuery= "delete from test where id = 10;" ;
    $getstu= $this->dbconn->prepare($sqlQuery);
    $result=$getstu->execute();
    if($result){
        echo "Data deleted";
    }
    else{
        echo "Data not deleted";
    }
 }

 function insertDatawithrequest($request){
   // print_r($request);
   $Stuname=$request['name'];
   $course=$request['subject'];
   //echo $name;
   //echo $subject;
    $sqlQuery= "insert into test (`id`,`name`,`subject`) values (null,'$Stuname','$course')" ;
    $getstu= $this->dbconn->prepare($sqlQuery);
    $result=$getstu->execute();
    if($result){
        echo "Data inserted";
    }
    else{
        echo "Data not inserted";
    }

  }
}
$s1= new student($conn);
//$s1->getData();
//$s1->insertData();
//$s1->updateData();
//$s1->deleteData();
$s1->insertDatawithrequest($_POST);
 //   ____________________________Video 112:insert using form________________________________________

 if(isset($_POST['name']))
?>