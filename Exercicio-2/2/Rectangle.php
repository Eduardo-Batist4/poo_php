<?php

class Rectangle extends Obj {
    public string $type;

    public function __construct(int $width, int $height, string $type) {
        parent::__construct($width, $height);
        $this->type = $type;
    }

    public function isSquare () {
        if ($this->getWidth() == $this->getHeight()) {
            echo "É um quadrado! \n";
        } else {
            echo "Não é um quadrado! \n";
        }
    }

    public function calculateArea () {
        $rectangle = $this->getWidth() * $this->getHeight();
        echo "A area do Retangulo é: {$rectangle} \n";
    }
}
