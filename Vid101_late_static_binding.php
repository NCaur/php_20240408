<?php
//Late Static Binding: current class static property/methods can be called using inheritance. when same method in both parent and child; parent method will be called; to make sure child method should also be called; late static binding id used 

class countrySale{
    static public $total_sale=1000;
    function getTotalSale(){
        echo static:: $total_sale;
    
        }
        function getAreaName(){
            echo static:: areaName();
        }
        static function areaName(){
            echo "India";
        }
}

class citySale extends countrySale{
    static public $total_sale=500;
//    function getTotalSale(){
//     echo self:: $total_sale;

//     }

static function areaName(){
    echo "Noida";
}
}

$city= new citySale();
$city->getTotalSale(); 
echo "<br>";
$city->areaName();
echo "<br>";
$country= new countrySale();
$country->getTotalSale(); 
echo "<br>";
$country->areaName();
?>