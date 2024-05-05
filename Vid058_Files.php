<?php
//_Files: to gather information related to files; to upload a file ; to do operations on file

//print_r($_FILES);
if($_FILES['UploadFile']){
$path = $_FILES['UploadFile']['name'];
$upload_path= './uploads/'.$path;
if(move_uploaded_file($_FILES['UploadFile']['tmp_name'],$upload_path)){
echo "File Uploaded";
}
else{
     die("No file(s) uploaded");
}

//echo $upload_path;
}
?>