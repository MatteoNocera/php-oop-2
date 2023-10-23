<?php
class Kennel extends Product
{
    public $material;

    public function __construct($category, $id, $name, $price, $discount, $stock_quantity, $dimension, $icon, $img_path, $material)
    {
        parent::__construct($category, $id, $name, $price, $discount, $stock_quantity, $dimension, $icon, $img_path);
        $this->material = $material;
    }
}
