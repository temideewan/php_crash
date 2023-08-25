<?php

// loops
// - for loops

// for($x = 0; $x <= 10; $x++){
//   echo "number $x <br />";
// }


// while loops
$x = 11;
// while ($x <= 15) {
//   echo "number $x <br />";
//   $x++;
// }

// do while loops

// do {
//  echo "number $x <br />";
//  $x++;
// } while ($x <= 10);


// foreach loop

$posts = ["First Post", "Second Post", "Third Post", "Fourth Post",];

for ($x = 0; $x < count($posts); $x++) {
  echo "$posts[$x] <br />";
}

echo "<br />";

foreach ($posts as $post) {
  echo "$post <br />";
}

echo "<br />";

foreach ($posts as $index => $post) {
  $indexCount = $index + 1;
  echo "$post - $indexCount <br />";
}
echo "<br />";

$person = [
  'first_name' => 'John',
  'last_name' => 'Rever',
  'age' => 10,
];

foreach ($person as $key => $value) {
  echo "$key => $value <br />";
}
