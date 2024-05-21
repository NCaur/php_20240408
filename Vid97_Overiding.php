<!-- Method Overiding:  -->
<?php
class Teacher{
    public $city = "Delhi";
    function nextExam(){
echo "Next Exam is Maths.<br>";
    }
    function age(){
        echo "My age is 40<br>";
    }
}
class Student extends Teacher{
    public $city= "Mumbai";
    function age(){
        echo "My age is 20";
    }

}
//$t1= new Teacher();
//$t1->nextExam();
//$t1->age();
//echo $t1->city;
$s1= new Student();
$s1->nextExam();
$s1->age();
echo"<br>";
echo $s1->city;
// $t1.$city;
?>