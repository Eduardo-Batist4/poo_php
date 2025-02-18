<?php

class Item extends Product {
    public string $name;
    public string $category;
    public string $color;

    public function __construct(string $name, string $category, string $color, $price, $quantity) {
        parent::__construct($price, $quantity);
        $this->name = $name;
        $this->category = $category;
        $this->color = $color;
    }

}

