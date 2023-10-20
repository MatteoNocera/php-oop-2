<?php
class Kennel extends Product
{
    public $material;

    public function __construct($material)
    {
        $this->material = $material;
    }
}
