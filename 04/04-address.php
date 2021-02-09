<?php

require __DIR__ . "/vendor/autoload.php";

//Create a class that represents an address - use different properties for each part of the address. It should have a fullAddress method, which will return the full address as a nicely formatted string.

class Address
{
    private $street;
    private $town;
    private $postcode;

    public function __construct($street, $postcode, $town)
    {
        $this->street = $street;
        $this->town = $town;
        $this->postcode = $postcode;
    }

    public function fullAddress()
    {
        return "{$this->street}, {$this->town}, {$this->postcode}";
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;
    }

    public function setTown($town)
    {
        $this->town = $town;
    }

}

$address = new Address("1 Made Up Street", "BS4 8TR", "Bristol");

// logs the full address neatly
dump($address->fullAddress()); // "1 Made Up Street, Bristol, BS4 8TR"

// can update the street, postcode, and town
$address->setStreet("12 Cantelope Way");
$address->setPostcode("SW5 8RQ");
$address->setTown("Swansea");

// logs the new full address neatly
dump($address->fullAddress()); // "12 Cantelope Way, Swansea, SW5 8RQ"