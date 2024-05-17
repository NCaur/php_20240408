<?php
include('./Vid83_config.php');
// $students= $conn->prepare("delete from test where id = '2'");
// echo $students->execute();

// ---------------------Delete using button-------------------
if(isset($_REQUEST['delete'])){
    $id=$_REQUEST['delete'];
    $students= $conn->prepare("delete from test where id = '$id'");
 if( $students->execute()){
    echo "Record deleted";
   
    }
 else{
    echo "Record not deleted";
 }
}
$students= $conn->prepare("select * from test");
$students->execute();
$result= $students->fetchAll();
//print_r($result);
echo "<form method='post'>";
echo "<table border='1'>";
echo "<tr>";
echo "<th>Id</th><th>Name</th><th>Subject</th><th>Action</th>";
echo "</tr>";
foreach($result as $student){
    echo "<tr>";
    echo "<td>".$student['id']."</td>";
    echo"<td>".$student['Name']. "</td>";
    echo"<td>".$student['Subject']. "</td>";
    echo"<td><button name='delete' value=".$student['id'].">Delete </button></form>";
    //----------------------- For next part;creating another button---------------------------
    echo "<a href='./Vid087_populating_using_sql_db.php?id=".$student['id']."'> Update</a></td>";
    echo "</tr>";
}

echo "</table>";

?>
