<?php

class Product {
    public string $name;
    public float $price;
    public int $quantityInStock;

    public function __construct(string $name, float $price, int $quantityInStock)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantityInStock = $quantityInStock;
    }
};

