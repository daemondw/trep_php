<?php

class City
{
    public $name;
    public $population;
    public $foundation;

    public function __construct($name, $population, $foundation)
    {
        $this->name = $name;
        $this->population = $population;
        $this->foundation = $foundation;
    }
}

