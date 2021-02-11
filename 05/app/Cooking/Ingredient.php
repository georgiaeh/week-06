<?php

namespace App\Cooking;

class Ingredient
{
    private $name;
    private $contains;

    public function __construct(string $name, array $contains){
        $this->name = $name;
        $this->contains = $contains;
    }

    public function name() : string
    {
        return $this->name;
    }

    public function vegan() : bool
    {
        //search array for "animal produce"
        return !in_array( "animal produce", $this->contains);

    }
}