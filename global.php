<?php

$x = 5;
$y = 10;

function myTest() {
  global $x, $y;
  $y = $x + $y;
  echo $y."<br>";
}

myTest();
echo $y; // outputs 15
// print \n"$x"."$y";
// echo global;

?>