<!-- OOP-model of programming.
whole class can be reused.
PHP uses 2 models of coding: OOPs, Procedural

 __________________Vid 091: Classes and Objects(Theory)_______________________ -->

<!-- Classes: Blueprint to create an object.
Objects: instance of a class.  -->
<!-- __________________Vid 092: Classes and Objects(Practical)_______________________ -->
<?php
class ArithmeticOperations{
    public $val=30;// creating variable
    function sum($a,$b){
        // echo 10 + 20;
        return $a+$b+$this->val;
    }
    function product($a,$b){
        return $a*$b;
    }

}
$op=new ArithmeticOperations();//multiple instances can be made;even in different classes
echo $op->sum(20,30); //return or echo can be used interchangeably here.
//Can be used multiple times
echo "<br>";
echo $op->sum(200,30);
echo "<br>";
echo $op->sum(20,300);
//2nd method of using sum()
// return $op->sum();//must match with signature
echo "<br>";
echo $op->product(20,300);
?>