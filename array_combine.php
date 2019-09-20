<?php
/*
The array_combine() function creates an array by using the elements from one "keys" array and one "values" array.

Note: Both arrays must have equal number of elements!

Syntax:
array_combine(keys, values)
*/

$fname=array("Ranar","Zaher","Rony");
$age=array("35","37","43");

$c=array_combine($fname,$age);

print_r($c);

?>