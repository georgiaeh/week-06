<?php

namespace App\Stuff\Things;

class Potato
{
    private $water = 0;

    public function water() : string
    {
        $this->water += 1;
        return dump("{$this->water} water");
    }

    public function hasGrown() : bool
    {
        return $this->water >= 5;
    }
}