<?php
class Animal
{
    public $species;
    public $breed;
    public $age;

    public function __construct($species, $breed, $age)
    {
        $this->species = $species;
        $this->breed = $breed;
        $this->age = $age;
    }
}
