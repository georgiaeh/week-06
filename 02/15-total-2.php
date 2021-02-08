<?php

require __DIR__ . "/vendor/autoload.php";
//Create a function, total, that takes an array of shopping item associative arrays and adds their price together.

function total($items) {
    $arr = collect($items);
    return $arr->reduce(fn($acc, $item) => $acc + $item["price"], 0);  
};

$shoppingList = [[
    "name" => "coffee",
    "price" => 3.50,
], [
    "name" => "tea",
    "price" => 2.50,
], [
    "name" => "toblerone",
    "price" => 3.20,
], [
    "name" => "newspaper",
    "price" => 0.10,
]];

dump(
    total($shoppingList), // 9.3
);