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

    public function reduceStock ($quantity) {
        if ($this->quantityInStock > $quantity) {
            $this->quantityInStock -= $quantity;
        } else {
            echo "Produto em falta no estoque!\n";
        }
    }

    public function productInfo () {
        echo "------------------------\n";
        echo "Nome: {$this->name} - Preço: R$:{$this->price} - Estoque: {$this->quantityInStock} \n";
        echo "------------------------\n";
    }
};

