<?php
class Toy extends Product
{

    public $variant;

    public function __construct($variant)
    {
        $this->variant = $variant;
    }
}
