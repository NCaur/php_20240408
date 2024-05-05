<html>
  <body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter Username"><br><br>
        <button name="btn" value="set">Set Session</button><br><br>
        <button name="btn" value="display">Get Session</button><br><br>
        <button name="btn" value="del">Delete Session</button><br><br>
    </form>
  </body>
</html>

<?php

session_start();
if(isset($_REQUEST["btn"])){
    if($_REQUEST["btn"]=="set"){
        $val = $_REQUEST["user"];
    $_SESSION["user"] =$val;
        // echo "Cookie set";
    
    }
    
      if($_REQUEST["btn"]=="display"){
       
          echo $_SESSION['user'];
    
        
      }
     
        if($_REQUEST["btn"]=="del"){
session_destroy();
       
      
      }
      
    }
?>