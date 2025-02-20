<?php


class CalcInterface {
    private int $num1;   
    private int $num2;   
    private string $operator;   


    public function interface () {
        echo "------------------------------\n";
        echo "Calculadora \n";
        echo "------------------------------\n";

        $num1 = readline("Digite o primeiro numero: \n");
        $num2 = readline("Digite o segundo numero: \n");
        $operator = readline("Digite o operador: \n");

        $this->setNumAndOpe($num1, $num2, $operator);
    }

    public function setNumAndOpe ($number1, $number2, $operator) {
        $this->num1 = $number1;
        $this->num2 = $number2;
        $this->operator = $operator;
    }

    public function getNumAndOpe() {
        echo $this->num1 . "\n";
        echo $this->num2 . "\n";
        echo $this->operator . "\n";
    }

}