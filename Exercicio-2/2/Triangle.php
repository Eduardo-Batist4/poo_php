<?php

class Triangle extends Obj {
    public string $type;

    public function __construct(int $width, int $height, string $type) {
        parent::__construct($width, $height);
        $this->type = $type;
    }

    public function calculateArea () {
        $triangle = $this->getWidth() * $this->getHeight() / 2;
        echo "A area do triangulo é: {$triangle} \n";
    }
}
