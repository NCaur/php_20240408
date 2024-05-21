<?php
//constructor is  Special function and can be created automatically
class ConstructClass{
    public $name;
    function setName(){
        echo "Hello";
    }

    function __construct($name)//called automatically

    //uses: database connection,basically where we know we neeed it for sure
    {
        echo $this->name = $name;
       echo "<br>Constructor called<br>"; 
    }
}
$cd=new ConstructClass("ABC");
$cd->setName();
//Note: in PHP , only 1 constructor can be created at a time of a class.
?>