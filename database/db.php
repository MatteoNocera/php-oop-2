<?php

require __DIR__ . '/../models/Category.php';
require __DIR__ . '/../models/Product.php';
require __DIR__ . '/../models/Kennel.php';
require __DIR__ . '/../models/Toy.php';
require __DIR__ . '/../models/Food.php';

$ecommerce = [];

// Palla Cane
$pallaCategory = new Category('dog');
$pallaMSize = new Toy('m');
$pallaMaterial = new Kennel('plastic');

$palla = new Product($pallaCategory, 'palla da tennis', 3.99, 150, '10cm', '🐶', 'https://picsum.photos/200/300', $pallaMaterial, $pallaMSize);

// Biscotti Gatto
$biscuitsCategory = new Category('cat');
$biscuitsOne = new Food('1kg', 'Medium', 'Puppy');

$biscuits = new Product($biscuitsCategory, 'BiscuitsOne', 15.49, 20, '25x25', '🐱', 'https://picsum.photos/200/300', $biscuitsOne);


/* array_push($ecommerce, $palla); */



var_dump($palla);
