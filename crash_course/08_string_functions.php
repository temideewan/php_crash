<?php

$string = "Hello World";

// length of the string
// echo strlen($string);

// position of first occurrence of a substring
echo strpos($string, 'o');

// position of last occurrence of a substring
echo strrpos($string, 'o');

// reverse a string
echo strrev($string);

// convert to lower case
echo strtolower($string);

// convert to upper case
echo strtoupper($string);

// convert each word to capitalized version
echo ucwords($string);

// portion of string with an offset specified and length
echo substr($string, 0, 5);
echo substr($string, 5);

// if(str_starts_with($string, 'Hello')){
//   echo 'String starts with Hello';
// }

// if(str_ends_with($string, 'World')){
//   echo 'String ends with World';
// }

$string2 = "<script> alert(1); </script>";

echo htmlspecialchars($string2);

printf("%s likes to %s", "temidayo", "drum");
printf('1+1 = %d', 1+1);
