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
        $this->discount = $discount;
        $this->price = $price;
        $this->stock_quantity = $stock_quantity;
        $this->dimension = $dimension;
        $this->icon = $icon;
        $this->img_path = $img_path;
    }

    public function calcDiscount($discount)
    {



        try {
            if ($discount || $this->discount >= 0) {

                if (!is_numeric($discount)) {
                    // exception if discount is not a number
                    throw new Exception('Discount insert is not a nuber');
                } elseif ($discount < 0 || $discount > 60) {
                    // exception if range is't accepted
                    throw new RangeException('Discount must be on right range');
                }


                return number_format($this->price - $this->price * ($discount / 100), 2, ',', '.');
            } else {
                return '';
            }
        } catch (Exception $error) {
            echo $error->getMessage();
        }
    }
}
