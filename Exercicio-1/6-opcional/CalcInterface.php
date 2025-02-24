<?php 

    require_once "CalcMemory.php";
    require_once "CalcController.php";

    class CalcInterface{
        public $controle;

        public function __construct () {
            $this->controle = new CalcController();
        }

        public function coletarNumero () {
            $numero = readline("Digite um número: ");
            return $numero;
        }

        public function coletarOperador () {
            echo "Selecione o operador: \n[1]+\n[2]-\n[3]*\n[4]/\n";
            $operador = readline("Selecione: ");
            while(true){
                if($operador > 4 || $operador < 1){
                    $operador = readline("Valor inválido. Selecione: ");
                } else{
                    break;
                };
            };

            switch($operador):
                case 1:
                    return "+";
                case 2:
                    return "-";
                case 3:
                    return "*";
                case 4:
                    return "/";
                endswitch;
        }

        public function imprimirResultado($a, $b, $operador){
            echo "O resultado de $a $operador $b = ". $this->controle->opera($a, $b, $operador). "\n";
        }
    };