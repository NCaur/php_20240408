<form action="" method="post">
    <input type="text" placeholder="Enter Name" name='name'><br><br>
    <input type="text" placeholder="Enter Subject" name='subject'><br><br>
    <button>Insert</button>
</form>
<?php
if(isset($_POST['name'])){
    $name = $_POST['name'];
    $subject =$_POST['subject'];

    include('./Vid83_config.php');
$query=$conn->prepare("Insert into `test` (`id`,`name`,`subject`) values(NULL, '$name', '$subject')");
$result=$query->execute();
if($result){
    echo "<br> Data Inserted";
}
else{
    echo "Data Not inserted";
}
}

?>