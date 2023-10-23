<?php

require_once __DIR__ . '/../Traits/IdGetter.php';

class Toy extends Product
{
    use IdGetter;

    public $variant;

    public function __construct($category, $id, $name, $price, $discount, $stock_quantity, $dimension, $icon, $img_path, $variant)
    {
        parent::__construct($category, $id, $name, $price, $discount, $stock_quantity, $dimension, $icon, $img_path);
        $this->variant = $variant;
    }
}
