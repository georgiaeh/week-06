<?php

require __DIR__ . "/vendor/autoload.php";

// Create a function, double, that takes an array of numbers as an argument. Return a new array containing each number doubled.


function double($arr) {
    $doubled = [];
    foreach( $arr as $val){
        $doubled[] = $val * 2;
    }
    return $doubled;
}

dump(
    double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
    double([1, 2, 5]), // [2, 4, 10]
);