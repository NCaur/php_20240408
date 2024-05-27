<?php
trait parentCompany1{
    function getEmp(){
        echo "200";
    }
}

trait parentCompany2{
    function getEmp(){
        echo "300";
    }
}
class company{
    use parentCompany1;
    use parentCompany2{
        parentCompany1::getEmp insteadOf parentCompany2;
        parentCompany2::getEmp as getCompany2;
    }
    // function getEmp(){ // in this is commented; error ; not able to decide which getEmp() to use
    //     echo "100";
    // }
}

$c1= new company();
$c1->getEmp();
echo "<br>";
$c1->getCompany2();
?>