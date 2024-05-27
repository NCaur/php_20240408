<?php
if(isset($_POST['user'])){


class user{
    function getName($name){
        echo "User name is: ".$name;
    }
}
$u1= new user();
$u1->getName($_POST['user']);
}
else{
?>


<form action="" method="post">
    <input type ="text" name='user' placeholder="Enter name"><br><br>
   <button>Click me</button>
</form>
<?php
}?>