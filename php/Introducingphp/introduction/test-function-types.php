<?php


$number = 2;

/*function doubleIt($number) {

// pass by value
  return $number *= 2;
}*/


// by reference
function doubleIt(&$num) { // &$num is a reference to the variable in the function scope and only & use here
  $num *=2;
}
$double = doubleIt($number);

echo '$double is' . $double . '<br>';
echo '$number is' . $number . '<br>';
