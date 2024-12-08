<html>
    <head>
        <Title> User Registration</Title>
    </head>
    <body>
        <form action="" method="post">
            <input type= "text" name= "username" placeholder="Enter username"><br><br>
            <input type = "password" name= "password" placeholder="Enter password"><br><br>
            <button name="login" value="loginbtn" >Login</button>
            <button name ="signup" value ="signupbtn">Sign up</button>
        </form>
    </body>
</html>

<?php
if(isset($_REQUEST['username']) &&($_REQUEST['password'])){
    echo "Login Successful";
    }

    if(isset($_REQUEST['signup'])){
        echo "Register.html";
    }
   
?>