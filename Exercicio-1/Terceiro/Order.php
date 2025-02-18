<?php

require_once "Item.php";

class Order {
    public array $itens = [];

    public function addItem (Product $product, int $quantity) {
        if($product->reduceStock($quantity)) {
            $this->itens[] = new Item($product, $quantity);
        } else {
            echo "Estoque insuficiente para o produto {$product->name} \n";
        }
    }

    public function getOrders () {
        print_r($this->itens);
    }
}
