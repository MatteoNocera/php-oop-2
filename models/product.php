<?php
class Products
{

    public $name;
    public $price;
    public $quantity;
    public $dimension;
    public $icon;
    public $img_path;

    public function __construct($name, $price, $quantity, $dimension, $icon, $img_path)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->dimension = $dimension;
        $this->icon = $icon;
        $this->img_path->$img_path = $img_path;
    }
}
