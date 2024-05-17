<?php
//Passing HtML data to PHP is called interaction between both;

/*Web Browser| ---> sends request --->|<--sends response|PHP executable code(web server)
Types of request: GET, POST(Mainly used), DELETE,PUT/PATCH
GET: show content on address bar; less secure; used to get data from server
POST: do not show content on address bar;secure;used for creation and updation on server
*/
if($_GET){
echo "Username is: ".$_GET['user_name']."<br>";
echo "Password is: ".$_GET['user_password']."<br>";
echo "Login Successful";
}
?>