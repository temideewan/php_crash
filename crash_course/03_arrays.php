<?php

// Simple array

$numbers = [1,2,3,4,5];
$fruits = array('apple', 'orange','pear', 'orange');

// print_r($numbers);

// echo $fruits[1];

// associative array
// $colors = [
//   1 => 'red',
//   4 => 'blue',
//   6 => 'green',
//   7 => 'white',
// ];

// $hex = [
//   'red' => '#f00',
//   'green' => '#0f0',
//   'blue' => '#00f',
// ];
$person = [
  'first_name' => 'John',
  'last_name' => 'Rever',
  'age' => 10,
];

$people = [
  [
    'first_name' => 'John',
    'last_name' => 'Rever',
    'age' => 5,
  ],
  [
    'first_name' => 'James',
    'last_name' => 'Rever',
    'age' => 10,
  ],
  [
    'first_name' => 'Garner',
    'last_name' => 'Davis',
    'age' => 15,
  ],
];
// print_r($people[1]['first_name']);
var_dump(json_encode($people));
$encoded = json_encode($people);

var_dump(json_decode($encoded)); 
