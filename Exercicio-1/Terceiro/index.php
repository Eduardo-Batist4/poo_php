<?php

require_once "Product.php";
require_once "Item.php";
require_once "Order.php";


$p1 = new Product("Camiseta", 49.90, 30);
$p2 = new Product("Calça", 84.99, 30);

$item1 = new Item($p1, "Clothes", "White", 14);
$item2 = new Item($p2, "Clothes", "Black", 6);

$order1 = new Order($item1, 14);
$order1 = new Order($item1, 6);
$order1->addItem($item1, 14);
$order1->addItem($item2, 6);
$order1->getAllItems();

//print_r($item1);
