<html>
  <body>
    <form action="">
        <input type="text" name="user" placeholder="Enter Username"><br><br>
        <button name="btn" value="set">Set Cookies</button><br><br>
        <button name="btn" value="display">Display Cookies</button><br><br>
        <button name="btn" value="del">Delete Cookies</button><br><br>
    </form>
  </body>
</html>
<?php
if(isset($_REQUEST["btn"])){
if($_REQUEST["btn"]=="set"){
    $val = $_REQUEST["user"];
    //echo $val;
    setcookie('user',$val);
    echo "Cookie set";

}

  if($_REQUEST["btn"]=="display"){
    if(isset ($_COOKIE['user'])){
      echo $_COOKIE['user'];

    }
  }
 
    if($_REQUEST["btn"]=="del"){
      if(isset ($_COOKIE['user'])){
        setcookie('user',null,-1);
  
      }
   
  
  }
  
}

?>