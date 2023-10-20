<?php

require __DIR__ . '/../models/Category.php';
require __DIR__ . '/../models/Product.php';
require __DIR__ . '/../models/Kennel.php';
require __DIR__ . '/../models/Toy.php';
require __DIR__ . '/../models/Food.php';



$pallaMSize = new Toy('m');
$pallaMaterial = new Kennel('plastic');

$palla = new Product('gatto', 'palla da tennis', 3.99, 150, '10cm', '🐶', 'https://picsum.photos/200/300', $pallaMaterial, $pallaMSize);

var_dump($palla);
