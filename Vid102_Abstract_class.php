<?php
//Abstract class: Templates that defines methods for child class
abstract class productFeatures{
abstract function productDetails();
abstract function productImages();
abstract function ownerDetails();
function commonDetails(){
    echo " Common details added";
}
}
class uploadProduct extends productFeatures{
    function productDetails()
    {
      echo "Product details added";  
    }
  function productImages(){
    echo "Product Images added"; 

    }
 function ownerDetails(){
    echo "Product owner details added"; 

 }
 function others(){
    echo "details added"; 

 }
}

$p1 = new uploadProduct();
$p1->productDetails();
echo "<br>";
$p1->productImages();
echo "<br>";
$p1->ownerDetails();
echo "<br>";
$p1->commonDetails();
echo "<br>";
$p1->others();
?>