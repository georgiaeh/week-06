<?php

namespace App\Stuff\Things;

class Potato
{
    private $water = 0;

    public function water()
    {
        $this->water += 1;
        return dump("{$this->water} water");
    }

    public function hasGrown()
    {
        if($this->water >= 5){
            return true;
        } else {
            return false;
        }
    }
}