<?php
    class Email extends System {
        private $allegato;
        private $notifica;
        private $inoltro;
        private $stampa;
        static public $colore = 'green';

        public function __construct($_mittente, $_destinatario, $_oggetto, $_contenuto, $_suono, $notifica, $allegato, $inoltro, $stampa){

            parent::__construct($_mittente, $_destinatario, $_oggetto, $_contenuto, $_suono);
            $this->allegato = $allegato;
            $this->notifica = $notifica;
            $this->inoltro = $inoltro;
            $this->stampa = $stampa;

        }       
        
        public function getAllegato(){
            return $this->allegato;
        }

        public function getNotifica(){
            return $this->notifica;
        }

        public function getInoltro(){
            return $this->inoltro;
        }

        public function getStampa(){
            return $this->stampa;
        }
    }
?>