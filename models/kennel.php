<?php
class Kennel extends Products
{
    public $material;

    public function __construct($material)
    {
        $this->material = $material;
    }
}
