<?php
class Product extends Category
{

    public $name;
    public $category;
    public $price;
    public $quantity;
    public $dimension;
    public $icon;
    public $img_path;

    public function __construct(Category $category, $name, $price, $quantity, $dimension, $icon, $img_path)
    {
        $this->category = $category;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->dimension = $dimension;
        $this->icon = $icon;
        $this->img_path = $img_path;
    }
}
