<?php

/* The array_column() function returns the values from a single column in the input array.

Syntex:
array_column(array, column_key, index_key)

*/
$a = array(
  array(
    'id' => 5698,
    'first_name' => 'Peter',
    'last_name' => 'Griffin'
  ),
  array(
    'id' => 4767,
    'first_name' => 'Ben',
    'last_name' => 'Smith'
  ),
  array(
    'id' => 3809,
    'first_name' => 'Joe',
    'last_name' => 'Doe'
  )
);

$last_name = array_column($a, 'last_name', 'id');
// or  $last_name = array_column($a, 'last_name');

print_r($last_name)."<br>";


?>