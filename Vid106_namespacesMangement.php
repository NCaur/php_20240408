<?php
include("Vid106_namespacesTeacher.php");
include("Vid106_namespacesStudent.php");
$t1= new teacher\joiningDetails();
$t1->joiningDate();
echo"<br>";
$s1= new student\joiningDetails();
$s1->admissionDate();
?>