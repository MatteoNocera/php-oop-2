<?php

require __DIR__ . '/../models/Category.php';
require __DIR__ . '/../models/Product.php';
require __DIR__ . '/../models/Kennel.php';
require __DIR__ . '/../models/Toy.php';
require __DIR__ . '/../models/Food.php';

$ecommerce = [];
$dogCategory = new Category('dog');
$catCategory = new Category('cat');
$discount = 0;

// Palla Cane
$palla = new Toy($dogCategory, 1, 'Palla da tennis', 3.99, $discount, 150, '10cm', './assets/img/dog.png', 'https://picsum.photos/200/200?', 'm');


// Biscotti Gatto
$biscuitsOne = new Food($catCategory, 2, 'BiscuitsOne', 15.49, $discount, 20, '25x25', './assets/img/cat.png', 'https://picsum.photos/200/200', '1kg', 'Medium', 'Puppy');



// Umido Cane
$umidoPlus = new Food($dogCategory, 3, 'Umido Plus', 3.45, $discount, 58, '20x30', './assets/img/dog.png', 'https://picsum.photos/200/200', '400gr', 'Hight Quality', 'Sterilized');

// Casetta Gatto
$catBox = new Kennel($catCategory, 4, 'CatBox', 53.99, $discount, 15, '100x70', './assets/img/cat.png', 'https://picsum.photos/200/200', 'wood');

// Umido Gatto
$umidoPlus = new Food($catCategory, 5, 'PappaPiù', 12.35, $discount, 33, '10x8', './assets/img/cat.png', 'https://picsum.photos/200/200', '50gr', 'Normal Quality', 'Adult');



array_push($ecommerce, $palla, $biscuitsOne, $umidoPlus, $catBox, $umidoPlus);
