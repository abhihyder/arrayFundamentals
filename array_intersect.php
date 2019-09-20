<?php

/* 

array_intersect is reverse of array_diff

The array_intersect() function compares the values of first array ( 1st mantion in the function) with other one (or more) arrays,  and returns the matches.
Syntax:
array_intersect(array1, array2, array3, ...)
*/

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"red","f"=>"pink","g"=>"blue", "h"=>"white");

$result=array_intersect($a1,$a2);
print_r($result);
?>