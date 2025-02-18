<?php

class Product {
    public float $price;
    public int $quantity;

    public function __construct(float $price, int $quantity)
    {
        $this->price = $price;
        $this->quantity = $quantity;
    }

};

