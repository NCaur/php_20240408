<?php
//Passing HtML data to PHP is called interaction between both;

/*Web Browser| ---> sends request --->|<--sends response|PHP executable code(web server)
Types of request: GET, POST(Mainly used), DELETE,PUT/PATCH
GET: show content on address bar; less secure; used to get data from server
POST: do not show content on address bar;secure;used for creation and updation on server
*/
if($_POST){
echo "Username is: ".$_POST['user_name']."<br>";
echo "Password is: ".$_POST['user_password']."<br>";
echo "Login Successful";
}
?>