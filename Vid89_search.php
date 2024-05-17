<form action="" method="post">
    <input type="text" name = "search" placeholder="Enter to search"><br><br>
    <button>Search</button>
</form>

<?php
include('./Vid83_config.php');
if(isset($_POST['search'])){
$search=$_POST['search'];
// $stu= $conn->prepare("Select * from test where name='$search'");// to search using full name
$stu= $conn->prepare("Select * from test where name like'%$search%'");// to search with single character
$stu->execute();
$result=$stu->fetchAll();
echo "<table border ='1'>";
echo "<tr>";
echo "<th>Id</th><th>Name</th><th>Subject</th>";
echo "</tr>";
foreach($result as $student){
  
    echo "<tr>";
    echo "<td>".$student['id']."</td>";
   
    echo"<td>".$student['Name']. "</td>";
    echo"<td>".$student['Subject']. "</td>";
    echo "</tr>";
}
echo "</table>";
}
?>