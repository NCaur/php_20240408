<?php
class constantdemo{
  private const collegename="IBT college";//read access modifiers 

    function getCollegeName(){
      echo  self::collegename;
    }

}
// echo constantdemo::collegename;
//constantdemo::collegename;
$c1= new constantdemo();
$c1->getCollegeName();
?>