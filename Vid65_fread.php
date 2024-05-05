<?php
// $file = 'test.txt';
// $fileopen=fopen($file,'r') or die("Cannot read file");
// echo fread($fileopen,filesize($file));
// fclose($fileopen);
if(isset($_FILES['filename'])){
   
    //print_r( $_FILES['filename']);
    $file = $_FILES['filename']['tmp_name'];
    $fileopen=fopen($file,'r') or die("Cannot read file");
     echo fread($fileopen,filesize($file));
    fclose($fileopen);
}
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="filename"><br><br>
<button>Read file</button>
</form>