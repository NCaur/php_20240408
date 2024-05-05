<?php
if(isset($_REQUEST['filename'])){
    $filename = $_REQUEST['filename'];
    $content=$_REQUEST['content'];
    $file=fopen($filename,'w') or die("unable to create file"); 
    fwrite($file,$content);
 fclose($file);
 echo "file created";

}
// $filename='dummy.txt'; //can be created under any folder;you need to have that folder
// $content="This is my file";
// $file=fopen($filename,'w') or die("unable to create file");
// fwrite($file,$content);
// fclose($file);
// echo "file created";
?>
<!-- -------------------------using HTML form------------------------------ -->
<html>
    <body>
        <form action="" method="post">
            <input type="text" placeholder="Enter file name" name="filename"><br><br>
            <textarea name="content">
</textarea><br><br>
<button>Create File</button>
        </form>
    </body>
</html>