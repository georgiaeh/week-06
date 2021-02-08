<?php

require __DIR__ . "/vendor/autoload.php";

//Create a function, wow, that takes a number, n, as an argument. The function should return the word "Wo...ow", where there are n "o"s.

function wow($n) {
    $os = "";
    for($i = 0; $i < $n; $i += 1){
        $os = $os . "o";
    }
    return "w" . $os . "w";
}

dump(wow(12)); // "Woooooooooooow"
dump(wow(4)); // "Woooow"