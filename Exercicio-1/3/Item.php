<?php

require_once "Product.php";

class Item extends Product {
    public Product $product;
    public string $category;
    public string $color;
    public int $quantity;

    public function __construct(Product $product, string $category, string $color, int $quantity) {
        $this->product = $product;
        $this->category = $category;
        $this->color = $color;
        $this->quantity = $quantity;
    }

    public function calculateSubTotal () {
        return $this->quantity * $this->product->price;
    }

}

