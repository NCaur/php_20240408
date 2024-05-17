<?php
include('./Vid83_config.php');
// echo "Update File";
// echo "<br>".$_GET['id'];
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $getStu=$conn->prepare("select * from test where id = '$id'");
    $getStu->execute();
   $stu= $getStu->fetchAll();
   // print_r($stu);
    $name =$stu[0]['Name'];
   "<br>" .$subject=$stu[0]['Subject'];
}
?>
<form actiion ='' method='post'>
<input type ='text' value ="<?php echo $name?>"name ="name"><br><br>
<input type ='text' value ="<?php echo $subject?>"name ="subject"><br><br>
<button value='<?php echo $id;?>' name='update'>Update</button>
</form>

<!-- ____________________________Video 88: Update using static data________________________ -->
<?php
// $updateStu=$conn->prepare("update test set subject='History' where id='3' ");
// echo $updateStu->execute();
//  ____________________________Video 88: Update using static data________________________ 

if(isset($_POST['update'])){
    $id= $_POST['update'];
    $name= $_POST['name'];
    $subject= $_POST['subject'];
    $updateStu=$conn->prepare("update test set name='$name', subject='$subject' where id='$id' ");

    if($updateStu->execute()){
        //to redirect header() is used
        header('location:Vid86_delete.php');
    }
    else{
        echo "Update failed";
    }
}
?>
