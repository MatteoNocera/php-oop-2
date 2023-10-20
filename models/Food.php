<?php
class Food extends Product
{

    public $kg;
    public $quality;
    public $age;

    public function __construct($category, $name, $price, $stock_quantity, $dimension, $icon, $img_path, $kg, $quality, $age)
    {
        parent::__construct($category, $name, $price, $stock_quantity, $dimension, $icon, $img_path);
        $this->kg = $kg;
        $this->quality = $quality;
        $this->age = $age;
    }
}
