<!-- Access modifiers decides where the properties and methods of the class can be called.
Accesszone: inside any class, everywhere,in inherited class.
types: Public(by default),Private,Protected -->
<?php
class Teacher{
  private  function questionPaper(){
        echo"<br>Question Paper for students";
    }
    function exam(){
        if($this->questionPaper() =="important"){
echo "<br>do something";
        }
        else{
            echo "<br>Inside else";
        }
        // $this->questionPaper();
    }

  protected  function studentMarks(){
        echo "<br>All students marks";
    }
}
class Mangement extends Teacher{
   function reviewExams(){
    $this->studentMarks();
   }
}
$t1=new Teacher();
$t1->exam();
$m1=new Mangement();
$m1->reviewExams();
?>