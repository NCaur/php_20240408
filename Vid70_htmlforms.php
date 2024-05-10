<?php
//print_r($_REQUEST);
if(isset($_REQUEST['name']))
{
    echo "User name: ".$_REQUEST['name']."<br>";
    echo "User email: ".$_REQUEST['email']."<br>";
    echo "User skills: ".implode(',',$_REQUEST['skills'])."<br>";


}
?>