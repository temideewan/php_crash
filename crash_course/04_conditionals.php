<?php
// -------------------- Operators available --------------------------------------------

// -  < less than
// -  > greater than
// -  <= less than or equal to
// -  >= greater than or equal to
// -   == equal to
// -  === identical to
// -  != Not equal to
// -  !== Not identical to
// $age = 10;
// if($age >= 18){
//   echo "You are old enough to vote";
// } else {

//   echo "Sorry too young";
// }

// $time = date("H");

// if ($time < 12) {
//   echo "Good morning";
// } elseif ($time < 17) {
//   echo  "Good afternoon";
// } else {
//   echo "Good evening";
// }


// if(true){
//   echo 123;
// }

$posts = [];
// if(empty($posts)){
//   echo "No posts";
// } else {
//   print_r($posts[0]);
// }

// $firstPost =  $posts[0]?? "No Posts";

// echo $firstPost;


$favColor = 'brown';

switch ($favColor) {
  case 'red':
    echo "Your favorite color is red";
    break;
  case 'green':
    echo "Your favorite color is green";
    break;
  case 'yellow':
   echo "Your favorite color is yellow";
  default:
    echo "Your favorite color is not red, green or yellow";
}
