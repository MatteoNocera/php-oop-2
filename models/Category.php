<?php

require_once __DIR__ . '/../Traits/CategoryGetter.php';

class Category
{
    use CategoryGetter;
    protected $category;

    public function __construct($category)
    {
        $this->category = $category;
    }
}
