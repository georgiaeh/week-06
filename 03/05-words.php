<?php

require __DIR__ . "/vendor/autoload.php";

//Create a function, words, that splits a sentence into just words

function words($str) {
    return preg_split("/[^\w]+/", $str);
}

dump(words("This is a sentence")); // ["This", "is", "a", "sentence"]
dump(words("Hello, my name is Dolemite")); // ["Hello", "my", "name", "is", "Dolemite"]