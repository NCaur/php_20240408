<?php
//static: no need to create object to access methods/properties; faster code; to avoid repetition of calling the methods/properties
 class Honda  {
    static public $countryName="Japan";
    
static function cName(){
    echo "Honda";
}
 }
//  $c1= new Honda();
//  $c1->cName();
 Honda::cName();
 echo "<br>";
 echo Honda::$countryName;
?>