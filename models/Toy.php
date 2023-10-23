<?php
class Toy extends Product
{

    public $variant;

    public function __construct($category, $id, $name, $price, $stock_quantity, $dimension, $icon, $img_path, $variant)
    {
        parent::__construct($category, $id, $name, $price, $stock_quantity, $dimension, $icon, $img_path);
        $this->variant = $variant;
    }
}
