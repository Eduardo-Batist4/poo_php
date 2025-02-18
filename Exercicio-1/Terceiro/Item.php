<?php

require_once "Product.php";

class Item extends Product {
    public Product $product;
    public int $quantity;

    public function __construct(Product $product, int $quantity) {
        $this->product = $product;
        $this->quantity = $quantity;
    }

}

