<?php

//$unit_cost = 0;


if(isset($unit_cost)) $unit_cost { // the second $nit_cost is implecilatly FALSE
    $wholesale_price = $unit_cost;
} else {
    $wholesale_price = 25;
};

echo $wholesale_price;
