<?php

require __DIR__ . "/vendor/autoload.php";

//Create a function, average, that takes an array of numbers as an argument. Return the average value of all the numbers.

function average($arr) {
    $total = 0;
    foreach( $arr as $num ) {
        $total += $num;
    }

    return $total / count($arr) ;
}


dump(
    average([2, 3, 4, 5, 6]), // 4
    average([2, 3]), // 2.5
    average([10, 30]), // 20
    average([-4, -8, -9]), // -7
);