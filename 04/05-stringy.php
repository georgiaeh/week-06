<?php

require __DIR__ . "/vendor/autoload.php";

//Create a class that lets you do things with a string.

class Stringy
{
    private $str;

    public function __construct($str)
    {
        $this->str = $str;
    }

    public function lower()
    {
        return strtolower($this->str);
    }

    public function upper()
    {
        return strtoupper($this->str);
    }

    public function append($append)
    {
        return $this->str . $append;
    }

    public function repeat($num)
    {
        return str_repeat($this->str, $num);
    }
}

$string = new Stringy("Na");

// it can lowercase a string
dump($string->lower()); // "na"

// it can uppercase a string
dump($string->upper()); // "NA"

// it can concatenate
dump($string->append("blah")); // "Nablah"

// it can repeat a string
dump($string->repeat(5)); // "NaNaNaNaNa"