<?php

require __DIR__ . "/vendor/autoload.php";

// Create a function, double, that takes an array of numbers as an argument. Return a new array containing each number doubled.


function double($arr) {
    $newarr = collect($arr);
    return $newarr->map(fn($n) => $n * 2)->all();
}

dump(
    double([2, 3, 4, 5, 6]), // [4, 6, 8, 10, 12]
    double([1, 2, 5]), // [2, 4, 10]
);