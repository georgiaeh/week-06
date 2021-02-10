<?php

require __DIR__ . "/vendor/autoload.php";

//Create a function, both, that takes two arrays. Return a new array containing any value that is in both arrays.

function both($arr1, $arr2){
    $newarr1 = collect($arr1);
    $newarr2 = collect($arr2);

    
}

dump(
    both([2, 3, 4, 5, 6], [1, 2, 5, 6]), // [2, 5, 6]
);