<?php
// -------------------- Video 11 - HTML inside PHP & vice versa
$name = "Abc";
$font = "red";
echo "<h2 style='color:$font'>Hello $name</h2>";
?>
<!-- PHP inside HTML -->
<h1><?php echo "Hello" ?></h1>
<?php
// -------------------- Video 12 - Display Errors - theory
// -------------------- Video 13 - Constants
const DATA1 = "HELLO"; // Constant-1
DEFINE('DATA2', 'Welcome'); // Constant-2
echo "const1 = " . DATA1 . "<br />";
echo "const2 = " . DATA2 . "<br />";
// -------------------- Video 14 - Data Types
$val = 50; // "Hello"
echo "Type of num1: ";
echo var_dump($val);
$arr = ['abc', 25, 2.5, NUll];
echo "<br> Type of arr: ";
echo var_dump($arr);
echo "<br>";
// $connection = ftp_connect("127.0.0.1") or die("Localhost not found");
// echo var_dump($connection);

// -------------------- Video 18 - Arithmetic Opertors
$a = 5; $b= 10;
echo " Sum = ",$a+$b;
echo "<br>";
echo " Difference = ",$a-$b;
echo "<br>";
echo " Product = ",$a*$b;
echo "<br>";
echo " Division = ",$a/$b;
echo "<br>";
echo " Mod = ",$a%$b;
echo "<br>";
echo " Exp = ",2**3;
echo "<br>";
// -------------------- Video 19 - Assignment Opertors

$a = 5; $b= 10;
echo " Result of <b>(+=)</b> : ",$a+=$a;
echo "<br>";
echo " Result of <b>(-=)</b> : ",$a-=$a;
echo "<br>";
echo " Result of <b>(*=)</b> : ",$b*=$b;
echo "<br>";
echo " Result of <b>(/=)</b> : ",$b/=$b;
echo "<br>";
echo " Result of <b>(%=)</b> : ",$b%=$b;
echo "<br>";
//echo " Exp = ",2**3;

// -------------------- Video 20 - Comparison Opertors
echo "<b> Comparison Operators</b><br>";

$a = 5; $b= 10; $x="10";
echo " Result of <b>(==)</b> : ",$a==$a;
echo "<br>";
echo " Result of String and Integer<b>(==)</b> : ",$x==$b;
echo "<br>";
echo " Result of <b>(===)</b> : ",$a===$a;
echo "<br>";
echo " Result of <b>(!=)</b> : ",$b!=$a;
echo "<br>";
echo " Result of <b>(<>)</b> : ",$b<>$a;
echo "<br>";
echo " Result of <b>(!==)</b> : ",$b!==$b;
echo "<br>";
echo " Result of String and Integer<b>(!==)</b> : ",$x!==$b;
echo "<br>";
echo " Result of <b>(>)</b> : ",$a>$b;
echo "<br>";
echo " Result of <b>(<)</b> : ",$a<$b;
echo "<br>";
echo " Result of <b>(>=)</b> : ",$b>=$a;
echo "<br>";
echo " Result of <b>(<=)</b> : ",$b<=$a;
echo "<br>";
echo " Result of <b>(<=>)</b> : ",$b<=>$b;
echo "<br>";
echo " Result of <b>(<=>)</b> : ",$b<=>$a;
echo "<br>";
echo " Result of <b>(<=>)</b> : ",$a<=>$b;
echo "<br>";
echo " Result of <b>(<=>)</b> : ",$b<=>$x;
echo "<br>";

// -------------------- Video 21 - Increment(++)/Decrement(--) Opertors
echo "<b> Increment/Decrement Opertors</b><br>";

$a = 5; $b=10;
echo "Value of a : ", $a;
$a++; 
echo "<br>";
echo " Result of <b>(Post Increment)</b> : ", $a;
echo "<br>";
echo " Result of  <b>(Pre Increment)</b> : ",++$a;
echo "<br>";
echo "Value of b : ", $b;
$b--;
echo "<br>";
echo " Result of  <b>(Post Decrement)</b> : ",$b;
echo "<br>";
echo " Result of  <b>(Pre Decrement)</b> : ",--$b;
echo "<br>";
echo "<br>";

// -------------------- Video 22 - String and String Opertors
echo "<b> String and String Opertors</b><br>";

$name = 'Nav'; $age=31;
echo "My name is : ", $name; 
echo "<br>";
echo "<b> Example of String operators <br></b> ";
echo "<b>1. Dot Operator <br></b>";
echo " My name is : " .$name." and age is : " .$age;
echo " <br><b> 2. Dot assignment operator </b><br>";
$name .= $age;
echo " About me:  ",$name;
echo "<br>";


?>