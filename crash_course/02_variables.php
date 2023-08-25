<?php
// normal rules still apply

// - Strings
$name = "Temidayo";

// - Integers
$age = 27;

// - Float
$cash_on_hand = 0.75;
// - Boolean
$has_kids = false;

// - Array

// - Object

// - Null

//  - Resource

// echo $name . ' is '. $age. ' years old';
// echo "${name} is ${age} years old";

$x = '5' + '5';
var_dump($x);
/*
operators remain the same'
* - multiply
+ - add
/ - divide
- - subtract
*/
// var_dump($has_kids);

// constants
define("HOST", 'localhost');
define("DB_NAME", 'dev_db');
echo HOST;
