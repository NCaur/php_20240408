<?php
//Traits: mechanism to reuse code; single inheritance language(php can only use single inheritance); however can be overcome by using traits

trait parentCompany1{
    function getPortalEmployee(){
        echo 500;
    }
    function getTotalProjects(){
        echo 35;
    }
}
trait parentCompany2{
    function getTotalOffice(){
        echo 10;
    }
}
class company {
    use parentCompany1;
    use parentCompany2;

}
$c1= new company();
$c1->getPortalEmployee();
echo "<br>";
$c1->getTotalOffice();
echo "<br>";
$c1->getTotalProjects();
?>