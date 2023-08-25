<?php

$file = 'extras/users.txt';
$names = ["Brad", "John", "Sarah", "Jules", "Jack"];
if(file_exists($file)){
  // echo readfile($file);
  $handle = fopen($file, 'r');
  $contents = fread($handle, filesize($file));
  fclose($handle);
  echo $contents;
} else {
  $handle = fopen($file, 'w');
  $contents = array_reduce($names, function($total, $current) {
    return $total . PHP_EOL . $current;
  }, '');
  fwrite($handle, $contents);
  fclose($handle);
}
