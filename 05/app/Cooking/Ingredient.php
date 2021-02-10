<?php

namespace App\Cooking;

class Ingredient
{
    private $name;
    private $contains;

    public function __construct($name, $contains){
        $this->name = $name;
        $this->contains = $contains;
    }

    public function name()
    {
        return $this->name;
    }

    public function vegan()
    {
        //filter array for "animal produce"
        return in_array( "animal produce", $this->contains);

    }
}