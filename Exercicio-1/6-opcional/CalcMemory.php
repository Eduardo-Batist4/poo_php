<?php 

    class CalcMemoria{
        private $numeroUm;
        private $numeroDois;
        private $operador;

        public function __construct($numeroUm, $numeroDois, $operador)
        {
            $this->numeroUm = $numeroUm;
            $this->numeroDois = $numeroDois;
            $this->operador = $operador;
        }

        public function setNumeroUm($numeroUm){
            $this->numeroUm = $numeroUm;
        }

        public function getNumeroUm(){
            return $this->numeroUm;
        }

        public function setNumeroDois($numeroDois){
            $this->numeroDois = $numeroDois;
        }

        public function getNumeroDois(){
            return $this->numeroDois;
        }

        public function setOperador($operador){
            $this->operador = $operador;
        }

        public function getOperador(){
            return $this->operador;
        }




    }