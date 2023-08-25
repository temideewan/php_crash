<?php

echo "Welcome to array functions";

$fruits = ["apple", "orange", "pear"];

// get the length of the array

echo count($fruits);

// search array
var_dump(in_array("apples", $fruits));

// add to the array
$fruits[] = 'grape';
array_push($fruits, "Mango", "Strawberry");
array_unshift($fruits, "Guava");

// remove from array
array_pop($fruits);
array_shift($fruits);
// unset($fruits[2]);

// split into chunk
$chunked_array = array_chunk($fruits, 3);
// print_r($chunked_array);
// print_r($fruits);

// concatenating arrays
$arr1 = [1,2,3];
$arr2 = [4,5,6];
// merge
$arr3 = array_merge($arr1, $arr2);
// spread
$arr4 = [...$arr1, ...$arr2];
// print_r($arr4);

$a = ["red", "green", "blue",];
$b = ["avocado", "apple", "banana",];

// values of first array become keys of new array, values of second array become values of new array.
$c = array_combine($a, $b);
// print_r($c);

$keys = array_keys($c);
// print_r($keys);

// keys become values, values become keys
$flipped = array_flip($c);
// print_r($flipped);

$numbers = range(1, 30);
$newNumbers = array_map(function($number) {
  return "Number $number";
}, $numbers);
// print_r($newNumbers);
$lessThan10 = array_filter($numbers, fn($number) => $number <= 10, ARRAY_FILTER_USE_KEY);
// print_r($lessThan10);

$sum = array_reduce($numbers, fn($totalSoFar, $currentNumber) => [$currentNumber, ...$totalSoFar], []);
print_r($sum);
