<?php
//Final keyword: a class prohibit anybody from its access.Nobody can inherit or use that class. Similarly final methods cannot be recreated.method/propeety not allowed if final keyword is there
class finalDemo{
final function cName(){
    echo "Honda";
}
}
class childDemo extends finalDemo{
    // function cName(){// cannot overide if parent class have it with final
    //     echo "Honda";
    // }
}
$car= new finalDemo();
$car->cName()
?>