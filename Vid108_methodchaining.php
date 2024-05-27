<?php
//method: with just 1 object; all methods are chained together
class company{
    function getName(){
        echo "This is Honda motors.";
        return $this;
    }
    function getEmp(){
        echo " It has 300 employees.";
        return $this;
    }
    function getOffice(){
        echo " It has 300 offices";
    }
}
$c1=new company();
$c1->getName()->getEmp()->getOffice();
?>