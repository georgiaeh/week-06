<?php

require __DIR__ . "/vendor/autoload.php";

//Create a function, squares, that takes an array of numbers as an argument. Return a new array containing the square of each number.

function squares($arr) {
    $numbers = collect($arr);
    return $numbers->map(fn($n) => $n * $n)->all();

}


dump(
    squares([2, 3, 4]), // [4, 9, 16]
    squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
);