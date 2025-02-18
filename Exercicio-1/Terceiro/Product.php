<?php

class Product {
    public string $name;
    public float $price;
    public int $quantity;

    public function __construct(string $name, float $price, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function reduceStock (int $quantity): bool {
        if ($this->quantity >= $quantity) {
            $this->quantity -= $quantity;
            return true;
        }
        return false;
    }
};

