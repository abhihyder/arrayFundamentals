<?php
/*  array change key case function

Syntex:
array_change_key_case(array, CASE_LOWER/UPPER);

*/
$y=array("ahmed"=>20, "badhon"=>22, "choton"=>24, "dhrubo"=>21); 

$x=array_change_key_case($y, CASE_UPPER);

foreach($x as $name=>$age){
    echo $name." age ".$age."<br>";
}

$y1=array("Ahmed"=>20, "Badhon"=>22, "Choton"=>24, "Dhrubo"=>21); 

$x1=array_change_key_case($y1, CASE_LOWER);

foreach($x1 as $name1=>$age1){
    echo $name1." age ".$age1."<br>";
}

?>