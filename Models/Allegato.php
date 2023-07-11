<?php
    class Allegato {
        private $nome;
        private $dimensione;

        public function __construct($nome, $dimensione){
            $this->nome = $nome;
            $this->dimensione = $dimensione;
        }


        public function getNome(){
            return $this->nome;
        }

        public function getDimensione(){
            return $this->dimensione;
        }
    }
?>