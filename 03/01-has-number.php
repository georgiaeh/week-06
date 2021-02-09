<?php

require __DIR__ . "/vendor/autoload.php";
//Create a function hasNumber, that returns true if the given string contains a digit.


function hasNumber($str) {
    return preg_match("/\d/", $str) === 1;
}

dump(hasNumber("blah")); // false
dump(hasNumber("bl3h")); // true
dump(hasNumber("bl3h5")); // true