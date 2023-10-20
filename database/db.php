<?php

require __DIR__ . '/../models/Category.php';
require __DIR__ . '/../models/Product.php';
require __DIR__ . '/../models/Kennel.php';
require __DIR__ . '/../models/Toy.php';
require __DIR__ . '/../models/Food.php';

$ecommerce = [];
$dogCategory = new Category('dog');
$catCategory = new Category('cat');


// Palla Cane
$palla = new Toy($dogCategory, 'palla da tennis', 3.99, 150, '10cm', '🐶', 'https://picsum.photos/200/300', 'm');


// Biscotti Gatto
$biscuitsOne = new Food($catCategory, 'BiscuitsOne', 15.49, 20, '25x25', '🐱', 'https://picsum.photos/200/300', '1kg', 'Medium', 'Puppy');


// Umido Cane
$umidoPlus = new Food($dogCategory, 'Umido Plus', 3.45, 58, '20x30', '🐶', 'https://picsum.photos/200/300', '400gr', 'Hight Quality', 'Sterilized');

// Casetta Gatto
$catBox = new Kennel($catCategory, 'CatBox', 53.99, 15, '100x70', '🐱', 'https://picsum.photos/200/300', 'wood');



var_dump($catBox);
