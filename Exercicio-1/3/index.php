<?php

require_once "Product.php";
require_once "Item.php";
require_once "Order.php";


$product1 = new Product("Camiseta", 49.90, 30);
$product2 = new Product("Calça", 84.99, 30);

$item1 = new Item($product1, "Clothes", "White", 14);
$item2 = new Item($product2, "Clothes", "Black", 6);

$order1 = new Order;
$order2 = new Order;

$product1->productInfo();
$product2->productInfo();


$order1->addItem($item1, 14);
$order1->addItem($item2, 6);

$order2->addItem($item1, 10);

$product1->productInfo();
$product2->productInfo();


$order1->getAllItems();
$order2->getAllItems();

//print_r($item1);
