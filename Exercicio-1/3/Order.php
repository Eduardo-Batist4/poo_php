<?php

require_once "Item.php";

class Order {
    public Item $item;
    public int $quantity;
    public array $items = [];
    public int $total;

    public function addItem (Item $item, int $quantity) {
        $item->product->reduceStock($quantity);
        $this->items[] =  $item;
    }

    public function getAllItems () {
        echo "------------------------\n";
        echo "Pedidos\n";
        echo "------------------------\n";
        foreach ($this->items as $item) {
            echo "Nome: {$item->product->name}   Preço: R$:{$item->product->price}   Category: {$item->category}   Quantity: {$item->quantity}\n";
        };
        echo "------------------------\n";
        echo "Total: R$:{$this->calculateTotal()} \n";
    }

    public function calculateTotal () {
        foreach ($this->items as $item) {
            $total = $item->calculateSubTotal();
        };
        return $total;
    }
}
