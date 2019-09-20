<?php

/* 
The array_diff_assoc()  function compares  the keys and values of first array ( 1st mantion in the function) with other one (or more) arrays, and returns the differences.

Syntax
array_diff_assoc(array1,array2,array3...)
*/

$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue", "h"=>"white");

$result=array_diff_assoc($a1,$a2);
print_r($result);
?>