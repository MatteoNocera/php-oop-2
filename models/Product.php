<?php

require_once __DIR__ . '/../Traits/IdGetter.php';
require_once __DIR__ . '/../Traits/NameGetter.php';


class Product extends Category
{
    use IdGetter;
    use NameGetter;

    public $category;
    protected $id;
    protected $name;
    public $price;
    public $discount;
    public $stock_quantity;
    public $dimension;
    public $icon;
    public $img_path;

    public function __construct(Category $category, $id, $name, $price, $discount, $stock_quantity, $dimension, $icon, $img_path)
    {
        $this->category = $category;
        $this->id = $id;
        $this->name = $name;
        $this->discount = 0;
        $this->price = $price;
        $this->stock_quantity = $stock_quantity;
        $this->dimension = $dimension;
        $this->icon = $icon;
        $this->img_path = $img_path;
    }

    public function calcDiscount($discount)
    {
        if ($discount > 0) {
            $this->price = $this->price - $this->price * $this->discount;
        }
    }
}
