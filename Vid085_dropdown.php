<?php
include("./Vid083_config.php");
$getStudent = $conn->prepare("Select id,name from test");
$getStudent->execute();
$studata= $getStudent->fetchAll();
//print_r($studata);
echo "<select>";
echo "<option>Select name</option>";
foreach($studata as $data){
    echo "<option value = ".$data['id'].">".$data['name']."</option>";
}
echo"</select>";
?>