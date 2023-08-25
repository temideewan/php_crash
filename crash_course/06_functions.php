<?php

function registerUser($email){
  echo "$email registered";
}

// registerUser("Brad");

// default arguments / parameters
// function sum($n1 = 4, $n2 = 5){
//   return $n1 + $n2;
// }

// $number =  sum();

// echo $number;

$subtract = function($num1, $num2) {
  return $num1 - $num2;
};
$multiply = fn($n1, $n2) => $n1 * $n2;

// echo $subtract(10,5);
echo $multiply(9,18);


