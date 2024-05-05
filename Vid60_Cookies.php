<?php
//Cookies; store basic info of the visitor; example name,browser etc
//Syntax: setcookie($name,$value,$path,$domain,$secure,$path,$httponly); all are optional except name
//name: store the name of the cookie
//value: under name what value you store
//expire: numberofdays cookie is store
//path: give path where you want to access
//domain: eg; youtube cookies cannot be accessed on my website; therefore that we specified here
//secure: http protocol(http,https)
//httponly:onnly on http

//$fruit = 'apple';
//accessible all over localhost
setcookie("fruit","apple",time()+(86400));

if(isset($_COOKIE['fruit'])){
    echo $_COOKIE['fruit'];
}
else{
    echo 'Nothing';
}
?>