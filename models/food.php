<?php
class Food extends Products
{

    public $kg;
    public $quality;
    public $age;

    public function __construct($kg, $quality, $age)
    {
        $this->kg = $kg;
        $this->quality = $quality;
        $this->age = $age;
    }
}
