<?php

require __DIR__ . "/vendor/autoload.php";

//Create a function, average5, that takes five numbers as arguments. The function should return the average of the numbers.

function average5($num1, $num2, $num3, $num4, $num5){
    return ($num1 + $num2 + $num3 + $num4 + $num5) / 5;
}

dump(average5(1, 2, 3, 4, 5)); // 3