<?php
// -------------------- Video 52 Include file
include('./Vid011_22_PhpAndHtml.php');

for($i=0; $i<10;$i++){
    //file will be included only once not again and again
    include_once('./Vid011_22_PhpAndHtml.php');
}

// Note: gives warning if file name is wrong
// require & require_once are same but instead of giving warning; gives error if file name is wrong

?>