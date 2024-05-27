<?php
//Interface: what methods a class should implement.
//difference b/w interface and abstract: interface class only have methods(only public) whereas abstract class can have both properties and methods(public or protected), abstract keyword is mandatory to create abstract property or method

interface productFeaturess {
    function productImages();
    function ownerDetails();
}
class products implements productFeaturess{
    function productImages(){
echo "Product Images";
    }
    function ownerDetails(){
        echo "Product Owner Details";

    }
}
$p1= new products();
$p1->productImages();
?>