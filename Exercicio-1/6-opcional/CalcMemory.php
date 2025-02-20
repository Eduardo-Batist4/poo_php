<?php

require_once "CalcInterface.php";

class CalcMemory {
    public CalcInterface  $interface;
    private int $number1;
    private int $number2;
    private string $operator;

    public function __construct(CalcInterface $interface) {
        $this->interface = $interface;
    }

    public function 

    public function getNumAndOpe () {
        echo $this->number1 . "\n";
        echo $this->number2 . "\n";
        echo $this->operator . "\n";
    }

}