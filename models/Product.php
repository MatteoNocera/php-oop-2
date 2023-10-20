<?php
class Product extends Category
{

    public $category;
    public $name;
    public $price;
    public $stock_quantity;
    public $dimension;
    public $icon;
    public $img_path;

    public function __construct(Category $category, $name, $price, $stock_quantity, $dimension, $icon, $img_path)
    {
        $this->category = $category;
        $this->name = $name;
        $this->price = $price;
        $this->stock_quantity = $stock_quantity;
        $this->dimension = $dimension;
        $this->icon = $icon;
        $this->img_path = $img_path;
    }
}
