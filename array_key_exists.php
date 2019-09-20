<?php
/*
The array_key_exists() function checks an array for a specified key, and returns true if the key exists and false if the key does not exist.

Syntax
array_key_exists(key, array)
*/

$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
?>