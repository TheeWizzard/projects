<?php

$version = phpversion(); // aassigning the function to a variable lets you pass the return value to the varialbe of a function
$name = 'ROBERT';
//echo strtolower($name);
//echo $name;

$name = ucfirst(strtolower($name));
echo $name;
