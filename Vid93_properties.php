<?php
class Properties{
    public $name="ABC";
    function getName(){
echo $this->name;
    }
    
function updateName($name){
  echo  $this->name=$name;
}
}
$p1= new Properties();

return $p1->updateName("PQR");
return $p1->getName();
?>