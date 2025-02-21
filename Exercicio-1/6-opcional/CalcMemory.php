<?php

require_once "CalcInterface.php";

class CalcMemory {
    public CalcInterface  $interface;
    private int $number1;
    private int $number2;
    private string $operator;

    public function saveInfo ($num1, $num2, $ope) {
        $this->number1 = $num1;
        $this->number2 = $num2;
        $this->operator = $ope;
    }
    
    public function getNumAndOpe () {
        echo $this->number1 . "\n";
        echo $this->number2 . "\n";
        echo $this->operator . "\n";
    }

}