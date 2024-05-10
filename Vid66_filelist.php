<?php
//get list of files using function in array;remove extra elements;loop to list the files; 
$path='uploads';
$items=scandir($path);//scan directory
//print_r($items);
$items=array_diff($items,array('.','..'));//remove elements using array_diff
//print_r($items);
foreach($items as $item){
    echo "<a href = ./uploads/$item>$item</a><br>";
}

?>