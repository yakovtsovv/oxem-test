<?php

require 'inc/Farm.php';
require 'inc/Cow.php';
require 'inc/Chicken.php';

$farm = new Farm();

$farm->addAnimal(['Cow' => 10, 'Chicken' => 20]);
$farm->collectProducts(7);
$farm->getCountAnimal();

echo 'Собрано продукции за 7 дней:' . '<br>';
echo 'Молока: '  . $farm->productStorage['cow'] . '<br>' . 'Яиц: ' . $farm->productStorage['chicken'] . ' шт' . '<br><br>';

$farm->addAnimal(['Cow' => 1, 'Chicken' => 5]);
$farm->collectProducts(7);
$farm->getCountAnimal();

echo 'Собрано продукции за 7 дней:' . '<br>';
echo 'Молока: '  . $farm->productStorage['cow'] . '<br>' . 'Яиц: ' . $farm->productStorage['chicken'] . ' шт' . '<br><br>';