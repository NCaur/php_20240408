<?php
//Session: to store information(user,browser) on server side;more secure; store sensitive info(like login credentials)
//Cookies: store inside browser;less secure;more info;faster as data is stored on browser

session_start();
// $_SESSION ['color']='red';
// $_SESSION ['animal']='cat';
print_r($_SESSION);
session_destroy();
session_start();
$_SESSION ['color']='red';
$_SESSION ['animal']='cat';
?>