<?php

    class Contador{
        private int $contagem;

        public function __construct () {
            $this->contagem = 0;
        }

        public function zerar () {
            $this->contagem = 0;
        }

        public function incrementar () {
            $this->contagem += 1;
        }

        public function getContagem () {
            return $this->contagem;
        }

    }