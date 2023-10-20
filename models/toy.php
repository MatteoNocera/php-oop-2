<?php
class Toy extends Products
{

    public $use;

    public function __construct($use)
    {
        $this->use = $use;
    }
}
