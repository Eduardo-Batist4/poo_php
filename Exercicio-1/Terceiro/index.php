<?php

require_once "Product.php";
require_once "Order.php";

$p1 = new Product("Camiseta", 79.90, 5);
$p2 = new Product("Calça", 49.99, 10);
$p3 = new Product("Tenis", 100.00, 15);


$order = new Order();
$order->addItem($p1, 3);
$order->getOrders();